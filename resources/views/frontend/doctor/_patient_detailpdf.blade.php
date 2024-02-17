<body class="">
    <section class="user-dashboard py-5 ">
        <div class="container">
            <div class="row">
                <div class="abort-sec mt-5 mb-5">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                        bgcolor="#ffffff">
                        <tbody>
                            <tr>
                                <td>
                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                                        class="fullTable" bgcolor="#ffffff">
                                        <tbody>
                                            <tr>
                                            <tr class="hiddenMobile">
                                                <td height="60"></td>
                                            </tr>
                                            <tr class="visibleMobile">
                                                <td height="40"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table width="500" border="0" cellpadding="0" cellspacing="0"
                                                        align="center" class="fullPadding">
                                                        <tbody>
                                                            <tr>
                                                                <td height="1" style="background: #bebebe;" colspan="4">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th style="font-size: 15px; font-weight:500; font-family: 'Open Sans', sans-serif; background: #4a4a4a; color: #fff; font-weight: normal; line-height: 1; vertical-align: top; padding: 7px 5px;"
                                                                    width="30%" align="left">
                                                                    Name
                                                                </th>
                                                                <th style="font-size: 15px; font-weight:500; font-family: 'Open Sans', sans-serif; background: #4a4a4a; color: #fff; font-weight: normal; line-height: 1; vertical-align: top; padding: 7px 5px;"
                                                                    width="30%" align="left">
                                                                    Email
                                                                </th>
                                                                <th style="font-size: 15px; font-weight:500; font-family: 'Open Sans', sans-serif; background: #4a4a4a; color: #fff; font-weight: normal; line-height: 1; vertical-align: top; padding: 7px 5px;"
                                                                    align="left">
                                                                    Phone
                                                                </th>
                                                                <th style="font-size: 15px; font-weight:500; font-family: 'Open Sans', sans-serif; background: #4a4a4a; color: #fff; font-weight: normal; line-height: 1; vertical-align: top; padding: 7px 5px;"
                                                                    align="left">
                                                                    Category
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td height="1" style="background: #bebebe;" colspan="4">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="10" colspan="4"></td>
                                                            </tr>
                                                            @forelse($data['user_data'] as $userdatas)
                                                            <tr>
                                                                <td style="font-size: 13px; font-weight:400; font-family: 'Open Sans', sans-serif; color: #313131;  line-height: 18px; vertical-align: middle; padding: 7px 5px;"
                                                                    width="30%" class="article">
                                                                    {{ $userdatas->users->username }}
                                                                </td>
                                                                <td style="font-size: 13px; font-weight:400; font-family: 'Open Sans', sans-serif; color: #313131;  line-height: 18px; vertical-align: middle; padding: 7px 5px;"
                                                                    width="30%">
                                                                    {{ $userdatas->users->email }}
                                                                </td>
                                                                <td style="font-size: 13px; font-weight:400; font-family: 'Open Sans', sans-serif; color: #313131;  line-height: 18px; vertical-align: middle; padding: 7px 5px;"
                                                                    align="left">{{ $userdatas->users->phone }}</td>
                                                                <td style="font-size: 13px; font-weight:400; font-family: 'Open Sans', sans-serif; color: #313131;  line-height: 18px; vertical-align: middle; padding: 7px 5px;"
                                                                    align="left">{{ $userdatas->categories->name}}</td>
                                                            </tr>
                                                            @empty
                                                            @endforelse
                                                            <tr>
                                                                <td height="1" colspan="4"
                                                                    style="border-bottom:1px solid #e4e4e4"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="50"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                        bgcolor="#ffffff">
                        <tbody>
                            <tr>
                                <td>

                                    <table width="500" border="0" cellpadding="0" cellspacing="0" align="center"
                                        class="fullPadding">
                                        <tbody>
                                            <tr>
                                                <td height="1" style="background: #bebebe;" colspan="3"></td>
                                            </tr>
                                            <tr>
                                                <th style="font-size: 15px; font-weight:500; font-family: 'Open Sans', sans-serif; background: #4a4a4a; color: #fff; font-weight: normal; line-height: 1; vertical-align: top; padding: 7px 5px;"
                                                    width="35%" align="left">
                                                    Question
                                                </th>
                                                <th style="font-size: 15px; font-weight:500; font-family: 'Open Sans', sans-serif; background: #4a4a4a; color: #fff; font-weight: normal; line-height: 1; vertical-align: top; padding: 7px 5px;"
                                                    width="35%" align="left">
                                                    Answer
                                                </th>
                                                <th style="font-size: 15px; font-weight:500; font-family: 'Open Sans', sans-serif; background: #4a4a4a; color: #fff; font-weight: normal; line-height: 1; vertical-align: top; padding: 7px 5px;"
                                                    align="left">
                                                    Details
                                                </th>
                                            </tr>
                                            <tr>
                                                <td height="1" style="background: #bebebe;" colspan="3"></td>
                                            </tr>
                                            <tr>
                                                <td height="10" colspan="3"></td>
                                            </tr>
                                            @forelse($data['quesAns'] as $ques)
                                            <tr>
                                                <td style="font-size: 13px; font-weight:400; font-family: 'Open Sans', sans-serif; color: #313131;  line-height: 18px; vertical-align: middle; padding: 7px 5px;"
                                                    width="35%" class="article">
                                                    {{ $ques->question }}
                                                </td>
                                                <td style="font-size: 13px; font-weight:400; font-family: 'Open Sans', sans-serif; color: #313131;  line-height: 18px; vertical-align: middle; padding: 7px 5px;"
                                                    width="35%">
                                                    {{ $ques->answer }}
                                                </td>
                                                <td style="font-size: 13px; font-weight:400; font-family: 'Open Sans', sans-serif; color: #313131;  line-height: 18px; vertical-align: middle; padding: 7px 5px;"
                                                    align="left">
                                                    @if($ques->details != '')
                                                    <span>{{ $ques->details }}</span>
                                                    @else
                                                    <span>NA</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            @empty
                                            @endforelse
                                            <tr>
                                                <td height="1" colspan="3" style="border-bottom:1px solid #e4e4e4"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- product section -->
                    @php
                    
                        $order_id = DB::table('orders')->where('session_id',$data['quesAns'][0]->session_id)->get();
                        $product_id = DB::table('order_product')->where('order_id',$order_id[0]->id)->get();
                        $product = DB::table('products')->where('id',$product_id[0]->product_id)->get();
                        $p_image = DB::table('media')->where('mediable_id',$product_id[0]->product_id)->get();
                    @endphp

                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr>
                                    <th class="border-0" scope="col"><strong
                                            class="text-small text-uppercase">Image</strong></th>
                                    <th class="border-0" scope="col"><strong class="text-small text-uppercase">Product
                                            Name</strong></th>
                                    <th class="border-0" scope="col"><strong
                                            class="text-small text-uppercase">Price</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="{{ asset('storage/images/products') }}{{ '/'.$p_image[0]->file_name}}"
                                            width="100px"></td>
                                    <td>{{ $product[0]->name }}</td>
                                    <td>{{ $product[0]->price }}</td>
                                </tr>
                        </table>
                    </div>
                    <!-- product section end -->
                    <!-- <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Name </strong></th>
                                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Email</strong></th>
                                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Phone</strong></th>
                                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Category</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($data['user_data'] as $userdatas)
                                        <tr>
                                            <td>{{ $userdatas->users->username }}</td>
                                            <td>{{ $userdatas->users->email }}</td>
                                            <td>{{ $userdatas->users->phone }}</td>
                                            <td>{{ $userdatas->categories->name}}</td>
                                        </tr>
                                    @empty
                                    @endforelse
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Question </strong>
                                        </th>
                                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Answer</strong></th>
                                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Details</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($data['quesAns'] as $ques)
                                        <tr>
                                            <td>{{ $ques->question }}</td>
                                            <td>{{ $ques->answer }}</td>
                                            <td>{{ $ques->details }}</td>
                                        </tr>
                                    @empty
                                    @endforelse
                            </table>
                        </div> -->
                </div>
            </div>
        </div>
        <div align="right">
            <img src="{{ asset('upload/') }}{{ '/'. $data['quesAns'][0]->signature}}" width="200px">
        </div>
    </section>
</body>