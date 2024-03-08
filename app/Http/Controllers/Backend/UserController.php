<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UserRequest;
use App\Models\Delivery_address;
use App\Models\User;
use App\Services\ImageService;
use App\Traits\ImageUploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;


class UserController extends Controller
{
    use ImageUploadTrait;

    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index(): View
    {
        $this->authorize('access_user');

        $users = User::role(['user'])
            ->when(\request()->keyword != null, function ($query) {
                $query->search(\request()->keyword);
            })
            ->when(\request()->status != null, function ($query) {
                $query->whereStatus(\request()->status);
            })
            ->orderBy(\request()->sortBy ?? 'id', \request()->orderBy ?? 'desc')
            ->paginate(\request()->limitBy ?? 20);

        return view('backend.users.index', compact('users'));
    }

    public function create(): View
    {
        $this->authorize('create_user');

        return view('backend.users.create');
    }

    public function store(UserRequest $request): RedirectResponse
    {
        $this->authorize('create_user');
        $doc_id = bin2hex(random_bytes(4));
        if ($request->hasFile('user_image')) {
            $userImage = $this->imageService->storeUserImages($request->username, $request->user_image);
        }

        $user_data = [
            'full_name' => $request->full_name,
            'username' => $request->username,
            'email' => $request->email,
            'email_verified_at' => now(),
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'status' => $request->status,
            'dob' => $request->dob,
            'receive_email' => true,
            'user_image' => $userImage ?? NULL,
            'role' =>$request->userRole??NULL,
            'doc_id' => $doc_id,
        ];
        if(isset($request->userRole) && $request->userRole == 2){
            $user_data['doc_pin'] =  $request->doc_pin;
        }
        $user = User::create($user_data);

        $user->markEmailAsVerified();
        $user->assignRole('user');

        $userAddress = new Delivery_address();
        $userAddress->user_id = $user->id;
        $userAddress->address = $request->address;
        $userAddress->save();
        

        return redirect()->route('admin.users.index')->with([
            'message' => 'Created successfully',
            'alert-type' => 'success'
        ]);
    }

    public function show(User $user): View
    {
        $this->authorize('user_show');

        return view('backend.users.show', compact('user'));
    }

    public function edit(User $user): View
    {
        $this->authorize('edit_user');
   
        return view('backend.users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $this->authorize('edit_user');
        
        if ($request->hasFile('user_image')) {
            if ($user->user_image) {
                $this->imageService->unlinkImage($user->user_image, 'users');
            }
            $userImage = $this->imageService->storeUserImages($request->username, $request->user_image);
        }

        if ($request->password){
            $password = bcrypt($request->password);
        }
        $user_data = [
            'full_name' => $request->full_name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
            'receive_email' => $request->receive_email,
            'user_image' => $userImage ?? $user->user_image,
            'password' => $password ?? $user->password
        ];


        if(isset($user->role) && $user->role == 2){
            $user_data['doc_pin'] =  $request->doc_pin;
        }
        $user->update($user_data);
        if($user->deliveryAddress){
        Delivery_address::where('user_id',$user->id)->update([
            'user_id'=>$user->id,
            'address'=>$request->address??'', 
        ]);
    }else{
    
        $userAddress = new Delivery_address();
        $userAddress->user_id = $user->id;
        $userAddress->address = $request->address;
        $userAddress->save();
        

    }
        return redirect()->route('admin.users.index')->with([
            'message' => 'Updated successfully',
            'alert-type' => 'success'
        ]);
    }

    public function destroy(User $user): RedirectResponse
    {
        $this->authorize('delete_user');

        if ($user->user_image) {
            $this->imageService->unlinkImage($user->user_image, 'users');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with([
            'message' => 'Deleted successfully',
            'alert-type' => 'success'
        ]);
    }

    public function get_users(): JsonResponse
    {
        $users = User::role(['user'])
            ->when(\request()->input('query') != '', function ($query) {
                $query->search(\request()->input('query'));
            })
            ->get(['id', 'full_name', 'email'])->toArray();

        return response()->json($users);
    }
}