@extends('layouts.app')
@section('title', 'Hair Loss Treatment - Regain & Restore Hair')
@section('meta-desc', 'We provide clinically proven hair regrowth treatments that deliver real results. Clinically proven treatment options with door step delivery. ')
@section('content')
    <div class="main-div Save-hair-banner" style="background-image: url({{ asset('frontend_new/images/hair.jpg') }}); background-position: right center;">
        <div class="container-xxl container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="top-div text-white">
                                <h1 class="heading54">Regain <span class="sans-heading">and</span><br> Restore <span class="sans-heading">Hair</span></h1>
                                <p class="text54 pro_desc poppins">Halt hair loss and reclaim your youthful appearance With Clinically Proven Hair Regrowth Treatments From Agent.</p>

                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-sm-12">
                            <div class="hair-banner-inr text-color margin-hair">
                               <div class="svg-round">
                                   <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                       <rect x="0.0751953" y="0.325684" width="14.4514" height="14.4514" rx="5.34504" fill="url(#pattern0)"/>
                                       <defs>
                                           <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                               <use xlink:href="#image0_319_3373" transform="scale(0.00277778)"/>
                                           </pattern>
                                           <image id="image0_319_3373" width="360" height="360" xlink:href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEBLAEsAAD/4QBWRXhpZgAATU0AKgAAAAgABAEaAAUAAAABAAAAPgEbAAUAAAABAAAARgEoAAMAAAABAAIAAAITAAMAAAABAAEAAAAAAAAAAAEsAAAAAQAAASwAAAAB/+0ALFBob3Rvc2hvcCAzLjAAOEJJTQQEAAAAAAAPHAFaAAMbJUccAQAAAgAEAP/hDIFodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvADw/eHBhY2tldCBiZWdpbj0n77u/JyBpZD0nVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkJz8+Cjx4OnhtcG1ldGEgeG1sbnM6eD0nYWRvYmU6bnM6bWV0YS8nIHg6eG1wdGs9J0ltYWdlOjpFeGlmVG9vbCAxMC4xMCc+CjxyZGY6UkRGIHhtbG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyc+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczp0aWZmPSdodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyc+CiAgPHRpZmY6UmVzb2x1dGlvblVuaXQ+MjwvdGlmZjpSZXNvbHV0aW9uVW5pdD4KICA8dGlmZjpYUmVzb2x1dGlvbj4zMDAvMTwvdGlmZjpYUmVzb2x1dGlvbj4KICA8dGlmZjpZUmVzb2x1dGlvbj4zMDAvMTwvdGlmZjpZUmVzb2x1dGlvbj4KIDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PScnCiAgeG1sbnM6eG1wTU09J2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8nPgogIDx4bXBNTTpEb2N1bWVudElEPmFkb2JlOmRvY2lkOnN0b2NrOjNjNWUzZWZhLWZmZGMtNDRmMi04MmRlLWJhY2I0NGEwODk3MTwveG1wTU06RG9jdW1lbnRJRD4KICA8eG1wTU06SW5zdGFuY2VJRD54bXAuaWlkOmY4N2QxNjg4LWU0YWQtNDkyMi04ZmI0LTZlZDE0MzY4MjliZTwveG1wTU06SW5zdGFuY2VJRD4KIDwvcmRmOkRlc2NyaXB0aW9uPgo8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hwYWNrZXQgZW5kPSd3Jz8+/9sAQwAFAwQEBAMFBAQEBQUFBgcMCAcHBwcPCwsJDBEPEhIRDxERExYcFxMUGhURERghGBodHR8fHxMXIiQiHiQcHh8e/8AACwgBaAFoAQERAP/EAB0AAQACAgMBAQAAAAAAAAAAAAAICQYHAQQFAgP/xABNEAABAwIDBAMKCgYKAQUAAAAAAQIDBAUGBxEIITFBEjdRExQiUlNhdZGSsgkVFhgyQnGUs9MjM1aBldIXJCVVV2KCobHBojRyhNHh/9oACAEBAAA/AJlgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/N1RA1ytdNGipxRXIcd80/l4vbQd80/l4vbQd80/l4vbQd80/l4vbQd80/l4vbQd80/l4vbQd80/l4vbQd80/l4vbQd80/l4vbQd80/l4vbQd80/l4vbQ5SogVdEmjX7HIfaORU1TenmOdUAAAAAAAAAAAAAAAXgVVbR73tz5xwiOcn9t1PP/Opr/usnju9ajusnju9ajusnju9ajusnju9ajusnju9ajusnju9ajusnju9ajusnju9ajusnju9ajusnju9ajusnju9anKTSouqSPRfM5TvUN+vlC9H0V4uFM5OCw1T2KnqUzHD2d+bVhVvxfj+/K1vBlTUrUM9mXpIbbwVtm4/tj2R4ms9pv8AAip0nsatLOv+purP/AkRlltSZW4yfFSVdxkw3cJNESC6IjI3L/lmRVZ7StXzG8IpI5Y2yRPa9j0RzXNXVFReCovND6AAAAAAAAAAAAAXgVUbSPX1jj03U++pr4AAAAAAAG0cms9ce5YVEUVquTq6zo79JaqxyvgVOfQ5xr526edFJ85GZ24PzYtmtpnWhvELOlVWqpendo+1zV4SM1+snDdqiamzgAAAAAAAAAAAAvAqo2kevrHHpup99TXwAAAAAAAB37BeLnYLxS3izV1RQV9JIkkFRA9WvjcnNF/64Km5SxLZWz8oc07T8S3tYaPFtHFrNE3wWVjE4yxpyXxmcuKbuG9wAAAAAAAAAAAF4FVG0j19Y49N1Pvqa+AAAAAAAAB6OGr3dMOX6ivllrJaO4UUzZqeaNdFY5P+U5Ki7lRVReJaHs+5nW/NXLulxBTpHBXx/oLlStd+onRE1059FyeE1exdOKKbEAAAAAAAAAAAC8CqjaR6+scem6n31NfAHKE88C7JeVl6wTYrxWT4iSprrbT1MyR1zEb03xNc7RO57k1VT2vmcZSeXxL9/Z+WPmcZSeXxL9/Z+WPmcZSeXxL9/Z+WPmcZSeXxL9/Z+WPmcZSeXxL9/Z+WPmcZSeXxL9/Z+Wedddi3LWdi94X3E9HJyV08MrfUsaL/ALmsscbFWKKGKSfCOKbfeEbvSnrIlpZF8yORXNVft6JHDHOCcV4HuvxZiuxVtqqd/QSdngyInNj01a9PO1VMeAAN07HmZb8vM2qSKsqFZY725tDXtVfBYqr+ilX/ANrl3r4rnFl6AAAAAAAAAAABeBVRtI9fWOPTdT76mvgDlOJbjlN1WYT9CUX4DDJgAAAeNjHC2H8YWKax4ltNLc7fMnhQzs10Xxmrxa5OTkVFTtK99qTZ+uOVdd8d2V09wwnUydGOZyayUb14Ry6cUX6r+fBdF46IAByi6KWmbMWNHY7yUw/eqiXuldHB3nWqq71mi8BXL53IjXf6jZYAAAAAAAAAAC8CqjaR6+scem6n31NfAHKcS3HKbqswn6EovwGGTAAAAHnYmslsxHYK6xXmkjq7fXQugqIXpuc1U/2Xmi8UVEUqrzpwJWZb5k3bCdW50rKWXpU07k/XQO8KN/2q1dF7FRUMMABNT4NnETn2/FmFJXr0YpYbhA3XxkWOT3YyYgAAAAAAAAAAC8CqjaR6+scem6n31NfAHKcS3HKbqswn6EovwGGTAAAAAhr8JJheJI8LYyijRJVdJbKh+n0k07pF6v0vrIYgAkX8Hxcn0We8lGjtGV9oqIVTtVrmSJ7ilhoAAAAAAAAAAC8CqjaR6+scem6n31NfAHKcS3HKbqswn6EovwGGTAAAAAjv8INAyXIRsj0RXQ3ime1fOrZG/wDCqV3gA3bsOyrHtKYcanB8VW1fu0i/9FlYAAAAAAAAAAC8CqjaR6+scem6n31NfAHKcS3HKbqswn6EovwGGTAAAAAjJ8ItdY6XJ+02rX9LXXljkTXiyOKRVX1ub6yAQAN6bClOs20dZZUTVKelq5F8ydwc3/lyFkgAAAAAAAAAAC8CqjaR6+scem6n31NfAHKcS3HKbqswn6EovwGGTAAAAAr5+EAxxFiLNamwxRTd0pcOU6xSqi6p3zLo6RP3NSNv2o4jaACUXwctnWqzUvl6c1VjoLQsSL2Pllbp/wCLHk9gAAAAAAAAAAF4FVG0j19Y49N1Pvqa+AOU4luOU3VZhP0JRfgMMmAAAANS7TWcdtyowXJJFNDNiSujcy10i716XBZnp4jeP+ZdETmqVkXCsqbhX1FfWzvqKqpldLNK9dXSPcqq5yr2qqqp+AAJ/wDweOFX2nKe4Ylnj6Mt8r17kqpxhhRWNX21lJMgAAAAAAAAAALwKqNpHr6xx6bqffU18AcpxLccpuqzCfoSi/AYZMAABqnade419FbaOStuNZT0dLEmsk08iRsYnarnKiIRtzs2t8JYbp57ZgPueJLvorUqd6UUC9qu3LKvmbuXxiDeNMU37GWIqrEGJLlNcLjUu1klkXgnJrUTc1qcEamiIeKAD1MKWO4YmxLbsP2qFZa64VLKeBqeM5dEVexE4qvYiltWBMOUOEcG2jDNuTSltlJHTMXTe/oporl87l1VfOp7QAAAAAAAAAAC8CqjaR6+scem6n31NfAA3RZ9p7OK02ijtVDiGkjpKKnjp4GLbYHK1jGo1qaq3VdyJvO1867Oz9paP+F0/wDIPnXZ2ftLR/wun/kHzrs7P2lo/wCF0/8AIPnXZ2ftLR/wun/kHzrs7P2lo/4XT/yD512dn7S0f8Lp/wCQ866bTOdlwYrH42mgavHvajgiX1tZqhrnE+LcT4oqO74jxBdLvIi6otZVPl6P2I5dE/ceIAACZ/wf+UskayZp3ylVvSa6nsrJG71RfBknT/djf9a9hMkAAAAAAAAAAALwKqNpHr6xx6bqffU18AAAAAAAADd2yxkXcM1MRNuN0impcJ0Mqd+VCeCtS5N/cI17V+sqfRRe1ULIrbRUltt9Pb6GnjpqWmibFDDG3osjY1NGtROSIiaHYAAAAAAAAAAAC8CqjaR6+scem6n31NfAAAAAAAA5RFUkls57Ll/xpNTYgxvFU2TDmqSMgcnQqq1vLoou+Ni+Mu9U+im/pJPbD1mteH7LS2ay0EFBb6SNI4KeFvRYxqdn/KrxVd67zvgAAAAAAAAAAALwKqNpHr6xx6bqffU18AAAAAAD0LJZLzfKpKSy2muuVQq6JFSU75XepqKbty72T808Tvjmu9HT4YoXb1kuD9ZtPNCzV2vmd0SWWTmzXl5l3JDcXUrr/e49HJXXBiOSN3bFF9FnmVek5O03SgAAAAAAAAAAAAC8CqjaR6+scem6n31NfAAkZh7ZAzGvdgt15pb1hhlPX0sVVE2SomRyNkYjkRdItNdF3ne+ZZmd/fuFPvM/5Q+ZZmd/fuFPvM/5Q+ZZmd/fuFPvM/5Q+ZZmd/fuFE/+TP8AlEf8b4YvODcVV+Gr/SrTXGglWOVnFF5o5q82uTRUXmioeKACfGw3nJSYnw8zL+9dwp77bIdaSRrUZ39TtTTlxkYm5eat0Xfo4lAAAAa4xtnllZgzEM2H8R4sgo7nA1rpoG080qx9JNURVYxURdNF0113p2nifOcyP/biP7hU/lj5zmR/7cR/cKn8sfOcyP8A24j+4VP5Y+c5kf8AtxH9wqfyz2MHZ7ZW4wxDS4fw1iV1yudUqpFBHQVCKqIiqqqqxojUREVVVVRDZQAAAAAAAXgVUbSPX1jj03U++pr4A5TiW45TdVmE/QlF+AwyYAEfNsnJNuYuFflLh+kR2KbTEqsaxPCrYE1VYfO5N6s8+rfrbq7Htcx6scitci6KipvQ+QD0MOXm5YevtFe7PWSUdwopmzU80a6Kx7V3L505KnBU1RSz7Z2zWtmbGA4rvAkdPdaXow3SjRf1Mun0k59B2iq1ftTiimygADU205m9Q5T4FfVQvimxDXo6K1Urt+r9N8rk8RmqKvauic91ZV2uNddrnU3O5VUtVW1Urpp55Hauke5dXOVe1VU62q9o1XtGq9p9RMklkbHG1z3uVGta1NVVV4IidpY5sfZLsy0wh8dXumRMVXeJq1KO3rSQ8WwJ5+Cv8+ifVQ3yAAAAAAAF4FVG0j19Y49N1Pvqa+AOU4luOU3VZhP0JRfgMMmAAIM7c+SXxJcZczML0elsrJP7Ygjbup53LumROTHrx7HLr9bdE0AGd5G5l3jK3HlLiO2K+WnX9FX0fS0bVQKvhMXsVOLV5KictULRcFYls+MML0GJLBVtqrdXxJLDIm5fO1ycnIuqKnJUVD2ADwcwMW2XA+Ebhie/1SU9BRRK96/We7g1jU5ucuiInapVvnHmFeszcdVuKL0/orKvQpadrtWU0CKvQjb9muqrzVVXmYaACXOwpkn8Z1sWZ+J6Ne8qV6/EsEjd00rV0WoVObWrqje1yKv1U1m+AAAAAAAAvAqo2kevrHHpup99TXwBynEtxym6rMJ+hKL8BhkwAB1bvbqG72uqtdypYquiqonQzwyt1bIxyaOaqdioVkbTWUVdlPjt9HEyWawV6umtVU7fqzXfE5fHZqiL2oqLzNUAAkHscZ2uy5xQmG8Q1bkwrdZU6bnruop13JMnY1dyP82juW+xON7ZGNexyOa5NUVF1RUPo+JpY4YnzTSMjjY1XOe5dEaib1VV5IVxbX2dUmZuLviay1C/JW0yuSl6O5KuXg6dU7OKM14JqvFymhwAba2YcoazNjHbKadksWHrerZrrUt3eDr4MTV8d+ip5kRV5b7NbXQUdrttNbrfTRUtJSxNhghjbo2NjU0a1E5IiIdkAAAAAAABeBVRtI9fWOPTdT76mvgDlOJbjlN1WYT9CUX4DDJgAAYXnRl3ZszsB1mGLu1GOendKSpRur6WdEXoSN9eipzRVQq3x3hW84KxZcMM3+lWmuFDKscjeLXJxa9q82uTRUXminhgAm/sMZ4fGlHDlhiqsTv2mZpZaiV2+aJqb6dVX6zU3t7Wpp9VNZckPtuvO7vSCfK3C9Wnd5mol8qYnfq2LvSmRU5qmiv82jea6QoAB7mBMK3nGuLLfhmwUq1NwrpUjjb9VqcXPcvJrU1VV5IhaTkzl5ZsssB0WGLO1H9zTulXUq3R1TOqJ05HfbpoickRE5GZgAAAAAAABeBVRtI9fWOPTdT76mvgDlOJbjlN1WYT9CUX4DDJgAADQG2Nko3MjCfygsNKi4qtMSrCjU31sCaq6Fe1yb1Z59U+turokY6N7mParXNXRUVNFRew+QDsW6sqrfX09fQ1ElPVU8jZYZo3dF8b2rq1yKnBUVNSaEm13AuQXfjUjTMFV7xWDofo0f0f/WacOjpv6Pj7tOjvIW11VUV1ZNWVc8k9RPI6SWWRyuc97l1VyqvFVVVXU/EA+mNc96MY1XOVdERE1VVLFdjfJVuXOE/lFf6RG4qu0SLK16eFRQLvbCnY5dyv8+ifV3yBAAAAAAAAAXgVUbSPX1jj03U++pr4A5TiW45TdVmE/QlF+AwyYAAAEHdunJL4orpszsL0elvqpE+OYI27oJnLok6Jya9dzuxyov1t0SQAAACWOwvkn8eXKLMzE9GjrXRS/wBkQSN3VE7V3zKi8WMXh2uT/LvnOgAAAAAAAAAXgVUbSPX1jj03U++pr4A5TiW45TdVmE/QlF+AwyYAAAHWutBR3S21NtuNNFVUdVE6GeGVvSZIxyaOaqc0VFKytp7KCsynx0+mgZLLh64K6W1VLt/g6+FE5fHZqiedFRea6alAAANqbNOUldmxj2O3ubJDY6JWzXWqbu6Eeu6Nq+O/RUTsTVeRZzZrbQ2e1UtqtlLFSUVJE2GngiTRsbGpojUTsRDtgAAAAAAAABeBVRtI9fWOPTdT76mvgDlOJbjlN1WYT9CUX4DDJgAAADDs48vbLmZgStwveWdFJU7pS1DW6vpp0RehI37NdFTmiqnMq2x/hO9YIxdcMMX+lWnr6GVWPT6r04te1ebXJoqL2KeCAAezgrDV4xhim34bsNKtVca+ZIoWcE87nLyaiaqq8kRS0fJHLiz5X4Co8NWtrZJkTutdVdHR1VOqeE9fNyROTURO0zgAAAAAAAAABeBVRtI9fWOPTdT76mvgDlOJbjlN1WYT9CUX4DDJgAAAAQ9+EbjwSlusMkyqmMlcqQJDpq6j39Luv+XpfQ8/S03akKQACZXwckWCFkv0rndLGaIiNbMieDRbtVi7dX/T/wBHImcAAAAAAAAAAF4FVO0h19Y49N1Pvqa+0Gg0CIW45TdVmE/QlF+AwyYAAAAxDN/MCyZaYFrcUXt+rIU6FPTtXR9TMqL0Im+ddN68kRV5FW2YeL71jrGFwxRf6lZ62tk6Son0Y2pubGxOTWpoiJ/2Y+AAe3gbFF5wZiqgxLYKtaW4UMqSRP4ovJWuTm1yaoqc0VS0XJLMizZoYDpMSWlzY5V/RVtJ0tXUs6InSYvanNF5oqL2mcAAAAAAAAAAGM3DL3AVwrp66vwThurq6h6yTTzWuF8kjl4uc5W6qq9qn4f0Y5b/AOH+FP4PB/KP6Mct/wDD/Cn8Hg/lH9GOW/8Ah/hT+DwfyhcsMtlTRcv8KfweD+UymlggpaaKlpoY4IIWJHHHG1GtY1E0RqIm5ERE00P0AAAB1rpX0drttTcrhUxUtHSxOmnmld0WRsamrnKvJERCszafzgrM2McvnpnzRYdt6uitdM7dq3XwpnJ479E+xEROS66jAAANn7OGbNyymx3Hc2d0ns1Z0YbrSNX9bFrue1OHTZqqp+9OClndgu9uv1lo7zaKuKsoKyFs1PPGurXscmqL/wDnLgd4AAAAAAAAAAAAAAAAEHNufO/44r5sssLVutupJNLzURu3TzNXdAipxaxd7u1yafV3xKAAAAJP7Eed/wAkb1Hl/iarRtguM39Rnldo2iqHL9FVXhG9ePJHb+CuUnyAAAAAAAAAAAAAAAAR82yM7G5dYXXDWHqtqYqusSoxzF8KigXcsy9jl3ozz6u5b67Huc96ve5XOVdVVV1VVPkA5RNVJS2PZOu9dkFLiKXu8eNJtK6kty7k73Rv6hyLwlei9LzL0WrpvIuTRyQyvilY6ORjla5rk0VqpuVFTkp8AAn7sS53/LGyMwFiaq6WIbbD/U55HeFXU7U4Kq8ZGJx5q3ReTiTYAAAAAAAAAAAAAABg2d+ZNnyuwHV4kujmyTJ+ioaTpaOqp1TwWJ5ubl5Ii+Yq5xtia8YxxTX4kv8AVrVXGvlWWZ/BE7GtTk1E0RE5IiHjAAlBsP5J/Ky+MzBxJSo6xWyb+owSt8GsqWr9JU5xsX9yu0Tk5CfBCbbryS7xqZs0cL0i97TvT48p427o5FXRKhE7HLojuxdHc10iAADv4evFyw/fKO9Weslo6+imbNTzxro5j2rqi+f7OCpqilnuzpmxbc2cBxXaLudPd6Xow3SjRf1Uun0mpx6D9FVq/anFFNmAAAAAAAAAAAAAAHSv12t1is1XeLtVxUdBRwumqJ5F0bGxqaqqlYe0hmzcc2ceS3N6yQWajV0NqpHL+qi13vcnjv0RV/cnBDWAANj7PWVlyzXx/BZKdZKe2waT3OsRN0EOvBOXTd9Fqduq8EUtCw5Zrbh6xUVks9JHR2+ihbBTwxpojGNTRE869q8VXVTvn4XCkpbhQz0NbBHUUtRG6KaKRvSbIxyaOaqLxRUVUKz9qbJ2qyoxy5tFHLLhu5OdLbJ3b+gnF0Dl8Zmv726L26aeABnWR+ZN4ytx5SYjtbnSQfqq6k6WjaqBV8Ji9i82ryVE5aoWi4JxPZsY4WoMSWCrSqt1fEksL+Cp2tcnJyLqipyVFPZAAAAAAAAAAAAABAvbgzu+VN5ky7wzVo6x2+b+0Z4nbqyoav0EXnGxf3K7fwaikWwAelhex3TEuIaGw2WkfV3CumbDTwsTe5y/8InFVXciIqqWiZA5X2vKrAFNYKNY56+TSa5ViN0WonVN6pz6DfotTkidqqbCAMTzawFZcyMDV2Fb2zSGob0oZ2pq+mmT6ErfOi+tFVOClWuY2D71gPGNwwvf6dYa2ik6KqieBKxd7ZGLza5NFT/7RTHQASB2Os7X5cYp+TuIKtyYUusqd1c5dUop13JMnY1dyP8ANov1d9isb2SRtkjc1zHIitc1dUVO1D6AAAAAAAAAAAABG3bUzrdgjDzsFYZqF+Ud0h/rE0S+FQ07tU6WqcJH70bzRNXeKV+LHIq/Qd6lHcpPEd6lHcpPEd6lHcpPEd6lHcpPEd6lJ+bEeSnyMw+3HeJKXo4gukP9Vhkb4VFTO38F4SPTRV5o3RN2riTIABoza7yXizPwd8aWiBqYptMbnUaomi1UfF1O5fPxbrwdu3I5St+amqIZnwywSxyMcrXscxUVrkXRUVOSop89yk8R3qUdyk8R3qUdyk8R3qUdzk8R3sqTc2Gc7X3CkgywxXVKlXTs0slTKu+aNE1WnVV+s1EVW9rUVPqprLkAAAAAAAAAAAAH5ughc5XOijcq8VVqKpx3tT+Qi9hB3tT+Qi9hB3tT+Qi9hB3tT+Qi9hB3tT+Qi9hD9QAAD8lp4FVVWGNVXmrEHe1P5CL2EHe1P5CL2EHe1P5CL2EHe1P5CL2ECU8CKipDGiouqKjEP1AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k="/>
                                       </defs>
                                   </svg>
                               </div>

                                <p class="pro_desc">UK-registered pharmacy</p>
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <div class="hair-banner-inr text-color">
                                <div class="svg-round">

                                    <img src="{{asset('frontend_new/images/b2.jpeg')}}" alt=""/>

                                </div>
                                <p class="pro_desc">Possible results in 3 to 6 months</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="hair-banner-inr text-color">
                                <div class="svg-round">

                                   <img src="{{asset('frontend_new/images/b3.png')}}" alt=""/>

                                </div>

                                <p class="pro_desc">Clinically proven treatment options</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="hair-banner-inr text-color">
                                <div class="svg-round">

                                    <img src="{{asset('frontend_new/images/b4.jpeg')}}" alt=""/>

                                </div>
                                <p class="pro_desc">Support from uk clinicians </p>
                            </div>
                        </div>
                    </div>

                    <div class="align-self-sm-center text-center text-md-start" style="margin: 50px 0;">
                        <a class="pure-white-btn" href="{{ route('questionnaire.index', $products[0]->category_id) }}">Begin your regrowth journey
                        </a>
                    </div>

                    <img src="{{asset('frontend_new/images/hair-mob-3.jpg')}}" class="head-img img-fluid d-block d-sm-none" alt=""/>
                </div>

            </div>

        <div class="arrow">
            <a class="arrow-down scrollDown" href="#Hair-Treatment"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
        </div>
    </div>
    </div>


<!-- Save-hair html Start -->
{{--<section class="Save-hair-banner hair-banner-before" style="background-image: url({{ asset('frontend_new/images/hair.jpg')}} )">--}}
{{--    <div class="container-xxl container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-6 col-md-7">--}}
{{--                <div class="save-hair-content">--}}
{{--                    <div class="top-div pro_heading_desc text-color">--}}
{{--                        <h1 class="heading54">Regain <span class="sans-heading">and</span><br> Restore <span class="sans-heading">Hair</span></h1>--}}
{{--                        <p class="text54 pro_desc poppins">Halt hair loss and reclaim your youthful appearance With Clinically Proven Hair Regrowth Treatments From Agent.</p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="hair-banner-inr text-color margin-hair">--}}
{{--                            <?xml version="1.0" standalone="no"?>--}}
{{--                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"--}}
{{--                            "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">--}}
{{--                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"--}}
{{--                            width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"--}}
{{--                            preserveAspectRatio="xMidYMid meet">--}}

{{--                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"--}}
{{--                            fill="#fff" stroke="none">--}}
{{--                            <path d="M1686 5104 c-172 -42 -333 -194 -382 -361 l-15 -53 -182 0 c-153 0--}}
{{--                            -186 -3 -206 -16 -32 -23 -51 -74 -51 -139 l0 -55 -187 0 c-213 0 -280 -11--}}
{{--                            -377 -62 -78 -41 -183 -146 -224 -224 -65 -124 -62 -42 -62 -1634 0 -1592 -3--}}
{{--                            -1510 62 -1634 41 -78 146 -183 224 -224 120 -62 109 -62 977 -62 718 0 791 1--}}
{{--                            817 17 55 32 67 112 26 160 l-24 28 -809 5 -808 5 -67 33 c-76 37 -120 82--}}
{{--                            -157 162 l-26 55 0 1455 0 1455 33 67 c37 76 82 120 162 157 52 25 65 26 248--}}
{{--                            29 l192 4 0 -61 c0 -129 34 -215 112 -288 89 -82 51 -78 858 -78 l715 0 57 28--}}
{{--                            c62 31 116 84 149 149 17 33 24 67 28 143 l6 100 195 0 c190 0 196 -1 251 -26--}}
{{--                            69 -33 127 -89 160 -155 l24 -49 5 -700 c4 -543 8 -705 18 -722 15 -26 61 -53--}}
{{--                            92 -53 37 0 81 30 96 65 12 29 14 145 14 682 0 375 -5 677 -10 718 -13 86 -71--}}
{{--                            211 -128 276 -55 61 -134 115 -218 147 -65 24 -82 26 -286 30 l-218 4 0 73 c0--}}
{{--                            64 -3 78 -24 102 l-24 28 -193 5 -192 5 -12 41 c-79 269 -366 434 -639 368z--}}
{{--                            m260 -228 c102 -47 169 -142 184 -260 16 -128 31 -136 260 -136 l170 0 0 -170--}}
{{--                            c0 -193 -8 -222 -65 -246 -50 -21 -1309 -21 -1359 0 -62 26 -66 40 -66 238 l0--}}
{{--                            178 171 0 c223 0 238 8 254 135 13 102 72 195 153 242 98 58 199 64 298 19z"/>--}}
{{--                            <path d="M693 3398 c-57 -28 -67 -122 -17 -169 l26 -24 1099 -3 c1223 -3 1145--}}
{{--                            -7 1175 65 19 43 5 93 -33 123 -25 20 -37 20 -1127 19 -741 0 -1108 -4 -1123--}}
{{--                            -11z"/>--}}
{{--                            <path d="M693 2758 c-57 -28 -67 -122 -17 -169 l26 -24 1099 -3 c1223 -3 1145--}}
{{--                            -7 1175 65 19 43 5 93 -33 123 -25 20 -37 20 -1127 19 -741 0 -1108 -4 -1123--}}
{{--                            -11z"/>--}}
{{--                            <path d="M4425 2681 c-86 -22 -114 -48 -967 -900 -472 -470 -862 -866 -867--}}
{{--                            -880 -22 -57 -162 -794 -156 -820 9 -36 42 -69 76 -76 27 -6 766 134 820 156--}}
{{--                            14 5 410 395 881 867 684 686 860 867 879 907 19 39 24 67 24 125 0 131 -10--}}
{{--                            148 -238 377 -159 161 -211 206 -251 224 -55 23 -152 33 -201 20z m108 -211--}}
{{--                            c6 0 90 -79 188 -176 189 -188 201 -207 175 -267 -8 -18 -363 -380 -837 -853--}}
{{--                            l-824 -820 -273 -54 c-150 -29 -275 -50 -279 -47 -3 4 18 129 47 279 l54 273--}}
{{--                            830 832 c563 563 839 833 856 836 14 2 31 3 38 1 8 -2 19 -4 25 -4z"/>--}}
{{--                            <path d="M693 2118 c-57 -28 -67 -122 -17 -169 l26 -24 1099 -3 c1223 -3 1145--}}
{{--                            -7 1175 65 19 43 5 93 -33 123 -25 20 -37 20 -1127 19 -741 0 -1108 -4 -1123--}}
{{--                            -11z"/>--}}
{{--                            </g>--}}
{{--                            </svg>--}}
{{--                                <p class="pro_desc">UK-registered pharmacy</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="hair-banner-inr text-color">--}}
{{--                            <?xml version="1.0" standalone="no"?>--}}
{{--                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"--}}
{{--                                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">--}}
{{--                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"--}}
{{--                                preserveAspectRatio="xMidYMid meet">--}}

{{--                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"--}}
{{--                                fill="#fff" stroke="none">--}}
{{--                                <path d="M2433 4960 c-164 -30 -305 -127 -385 -267 l-29 -52 -442 -3 -442 -3--}}
{{--                                -68 -27 c-171 -69 -296 -214 -333 -387 -21 -101 -20 -3534 1 -3636 41 -192--}}
{{--                                191 -350 380 -400 52 -13 229 -15 1405 -15 1484 0 1399 -3 1524 63 75 40 162--}}
{{--                                124 204 198 18 32 41 92 52 135 20 76 20 114 20 1833 0 1469 -3 1767 -14 1822--}}
{{--                                -37 173 -162 318 -333 387 l-68 27 -442 3 -442 3 -32 57 c-104 184 -347 299--}}
{{--                                -556 262z m190 -253 c54 -18 125 -73 150 -114 12 -21 31 -62 42 -92 32 -89 58--}}
{{--                                -101 223 -101 l134 0 -4 -92 c-6 -139 -54 -218 -163 -269 l-60 -29 -426 0--}}
{{--                                -426 0 -61 31 c-109 54 -154 128 -160 267 l-4 92 134 0 c166 0 191 11 223 102--}}
{{--                                63 178 231 264 398 205z m-993 -387 c0 -104 14 -169 57 -259 42 -89 131 -182--}}
{{--                                219 -228 112 -59 144 -63 610 -63 239 0 445 4 475 10 87 16 194 75 263 144--}}
{{--                                106 106 156 231 156 394 l0 82 215 0 c191 0 220 -2 269 -20 65 -25 130 -86--}}
{{--                                160 -150 l21 -45 0 -1781 0 -1780 -30 -59 c-34 -66 -101 -125 -165 -144 -27--}}
{{--                                -8 -408 -11 -1368 -11 l-1330 0 -63 33 c-40 20 -75 48 -96 75 -67 89 -63 -37--}}
{{--                                -61 1907 l3 1760 23 46 c31 64 96 125 157 149 44 17 77 19 268 19 l217 1 0--}}
{{--                                -80z"/>--}}
{{--                                <path d="M3145 2770 c-11 -5 -200 -185 -420 -399 l-400 -391 -135 133 c-286--}}
{{--                                281 -293 287 -339 287 -56 0 -95 -22 -115 -64 -20 -43 -20 -64 2 -103 9 -17--}}
{{--                                132 -144 273 -282 276 -268 290 -278 356 -249 49 21 930 885 944 925 15 47 3--}}
{{--                                87 -37 123 -36 31 -86 39 -129 20z"/>--}}
{{--                                </g>--}}
{{--                                </svg>--}}
{{--                            <p class="pro_desc">Possible results in 3 to 6 months</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="hair-banner-inr text-color">--}}
{{--                            <?xml version="1.0" standalone="no"?>--}}
{{--                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"--}}
{{--                                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">--}}
{{--                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"--}}
{{--                                preserveAspectRatio="xMidYMid meet">--}}

{{--                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"--}}
{{--                                fill="#fff" stroke="none">--}}
{{--                                <path d="M2431 4885 c-105 -30 -149 -63 -366 -275 -1326 -1300 -2024 -1990--}}
{{--                                -2042 -2019 -53 -84 -2 -198 96 -217 67 -14 98 2 202 103 l98 95 4 -903 c3--}}
{{--                                -831 5 -909 21 -964 69 -231 248 -408 472 -465 75 -19 117 -20 1644 -20 1527--}}
{{--                                0 1569 1 1644 20 176 45 331 167 414 326 79 154 75 99 79 1108 l4 898 98 -95--}}
{{--                                c104 -101 135 -117 202 -103 99 19 149 133 96 217 -28 45 -2201 2181 -2264--}}
{{--                                2226 -74 53 -145 75 -253 79 -65 3 -112 -1 -149 -11z m203 -299 c21 -9 367--}}
{{--                                -341 900 -866 l866 -852 0 -991 c0 -634 -4 -1015 -10 -1056 -20 -120 -94 -220--}}
{{--                                -200 -270 l-55 -26 -1575 0 -1575 0 -55 26 c-106 50 -180 150 -200 270 -6 41--}}
{{--                                -10 422 -10 1056 l0 991 866 852 c477 469 881 858 898 866 41 17 108 18 150 0z"/>--}}
{{--                                <path d="M2192 3283 c-18 -9 -43 -30 -55 -47 -21 -30 -22 -41 -25 -298 l-3--}}
{{--                                -268 -252 0 c-285 0 -315 -6 -355 -72 -21 -34 -22 -45 -22 -380 0 -476 -23--}}
{{--                                -448 373 -448 l257 0 0 -257 c0 -288 4 -307 69 -350 34 -23 37 -23 380 -23--}}
{{--                                329 0 348 1 379 20 65 40 72 73 72 357 l0 252 268 3 c386 4 362 -26 362 451 0--}}
{{--                                330 0 334 -22 367 -52 75 -50 75 -343 78 l-264 3 -3 264 c-3 293 -3 291 -78--}}
{{--                                343 -33 22 -37 22 -369 22 -289 0 -341 -3 -369 -17z m518 -545 c0 -245 1 -265--}}
{{--                                20 -296 11 -18 34 -41 52 -52 31 -19 51 -20 296 -20 l262 0 0 -150 0 -150--}}
{{--                                -253 0 c-242 0 -255 -1 -297 -22 -77 -40 -80 -54 -80 -350 l0 -258 -150 0--}}
{{--                                -149 0 -3 264 c-3 249 -4 266 -24 292 -11 15 -33 37 -48 48 -26 20 -43 21--}}
{{--                                -292 24 l-264 3 0 149 0 150 255 0 c284 0 305 4 346 61 24 34 24 37 27 302 l3--}}
{{--                                267 149 0 150 0 0 -262z"/>--}}
{{--                                </g>--}}
{{--                                </svg>--}}
{{--                            <p class="pro_desc">Clinically proven treatment options</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="hair-banner-inr text-color">--}}
{{--                            <?xml version="1.0" standalone="no"?>--}}
{{--                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"--}}
{{--                                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">--}}
{{--                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"--}}
{{--                                preserveAspectRatio="xMidYMid meet">--}}

{{--                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"--}}
{{--                                fill="#fff" stroke="none">--}}
{{--                                <path d="M2546 4949 c-62 -15 -153 -68 -197 -116 -22 -24 -55 -74 -72 -111--}}
{{--                                l-32 -67 -3 -247 -4 -246 -247 -4 -247 -3 -76 -37 c-91 -45 -147 -103 -191--}}
{{--                                -196 l-32 -67 -3 -1269 c-2 -1159 -4 -1271 -19 -1288 -15 -16 -37 -18 -240--}}
{{--                                -18 l-223 0 0 55 c0 46 -4 60 -25 80 l-24 25 -351 0 -351 0 -24 -25 -25 -24 0--}}
{{--                                -591 0 -591 25 -24 24 -25 351 0 351 0 24 25 c14 13 25 31 25 40 0 13 137 15--}}
{{--                                1331 15 l1331 0 592 332 c397 224 607 347 638 377 26 24 60 69 75 100 24 47--}}
{{--                                28 69 28 136 0 71 -4 89 -33 147 -20 41 -49 81 -75 103 l-42 36 -5 1193 -5--}}
{{--                                1192 -37 76 c-45 91 -103 147 -196 191 l-67 32 -247 3 -246 4 -4 247 -3 247--}}
{{--                                -37 76 c-45 91 -103 147 -196 191 l-67 32 -555 2 c-315 1 -572 -3 -594 -8z--}}
{{--                                m1128 -161 c55 -16 138 -99 154 -154 8 -27 12 -117 12 -258 l0 -216 -80 0 -80--}}
{{--                                0 0 215 c0 216 0 216 -25 240 l-24 25 -511 0 -511 0 -24 -25 c-25 -24 -25 -24--}}
{{--                                -25 -240 l0 -215 -80 0 -80 0 0 216 c0 141 4 231 12 258 15 51 99 137 148 153--}}
{{--                                52 16 1059 17 1114 1z m-154 -468 l0 -160 -400 0 -400 0 0 160 0 160 400 0--}}
{{--                                400 0 0 -160z m954 -332 c55 -16 138 -99 154 -154 9 -31 12 -315 12 -1178 l0--}}
{{--                                -1136 -32 0 c-60 0 -110 -21 -610 -251 l-497 -229 -180 0 -180 0 27 58 c23 48--}}
{{--                                27 71 27 142 0 72 -4 94 -28 145 -47 100 -126 169 -227 199 -46 14 -133 16--}}
{{--                                -633 16 l-579 0 -64 -62 -64 -61 0 1158 c0 880 3 1168 12 1199 15 51 99 137--}}
{{--                                148 153 53 17 2658 17 2714 1z m-1531 -2577 c21 -13 50 -42 65 -64 23 -34 27--}}
{{--                                -52 27 -107 0 -55 -4 -73 -27 -107 -15 -22 -44 -51 -65 -64 -38 -24 -38 -24--}}
{{--                                -410 -27 l-373 -3 0 -79 0 -80 689 0 689 0 520 240 c416 192 527 240 561 240--}}
{{--                                113 0 197 -97 177 -204 -15 -79 -18 -81 -631 -427 l-580 -328 -1312 0 -1313--}}
{{--                                -1 0 360 0 360 257 0 257 0 160 160 161 160 555 -2 555 -3 38 -24z m-2143--}}
{{--                                -611 l0 -480 -240 0 -240 0 0 480 0 480 240 0 240 0 0 -480z"/>--}}
{{--                                <path d="M2953 3665 c-201 -36 -365 -124 -513 -274 -129 -130 -212 -278 -257--}}
{{--                                -457 -24 -95 -24 -333 0 -428 45 -179 128 -327 257 -457 177 -180 385 -273--}}
{{--                                635 -286 277 -14 519 81 720 282 137 137 216 276 262 461 24 95 24 333 0 428--}}
{{--                                -25 99 -72 210 -125 296 -62 102 -206 243 -311 308 -196 120 -445 168 -668--}}
{{--                                127z m357 -168 c209 -57 367 -171 481 -345 88 -134 124 -258 124 -432 0 -226--}}
{{--                                -75 -408 -231 -564 -310 -310 -812 -312 -1123 -5 -161 159 -236 340 -236 569--}}
{{--                                0 174 36 297 125 434 118 180 303 306 520 352 80 17 262 12 340 -9z"/>--}}
{{--                                <path d="M2905 3255 c-24 -23 -25 -29 -25 -160 l0 -135 -135 0 c-131 0 -137--}}
{{--                                -1 -160 -25 -25 -24 -25 -26 -25 -215 0 -189 0 -191 25 -215 23 -24 29 -25--}}
{{--                                160 -25 l135 0 0 -135 c0 -131 1 -137 25 -160 24 -25 26 -25 215 -25 189 0--}}
{{--                                191 0 215 25 24 23 25 29 25 160 l0 135 135 0 c131 0 137 1 160 25 25 24 25--}}
{{--                                26 25 215 0 189 0 191 -25 215 -23 24 -29 25 -160 25 l-135 0 0 135 c0 131 -1--}}
{{--                                137 -25 160 -24 25 -26 25 -215 25 -189 0 -191 0 -215 -25z m295 -270 c0 -131--}}
{{--                                1 -137 25 -160 23 -24 29 -25 160 -25 l135 0 0 -80 0 -80 -135 0 c-131 0 -137--}}
{{--                                -1 -160 -25 -24 -23 -25 -29 -25 -160 l0 -135 -80 0 -80 0 0 135 c0 131 -1--}}
{{--                                137 -25 160 -23 24 -29 25 -160 25 l-135 0 0 80 0 80 135 0 c131 0 137 1 160--}}
{{--                                25 24 23 25 29 25 160 l0 135 80 0 80 0 0 -135z"/>--}}
{{--                                </g>--}}
{{--                                </svg>--}}
{{--                            <p class="pro_desc">Support from uk clinicians </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="align-self-sm-center" style="margin: 50px 0;">--}}
{{--                    <a class="pure-white-btn" href="{{ route('questionnaire.index', $products[0]->category_id) }}">Begin your regrowth journey--}}
{{--</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- <div class="col-lg-6 col-sm-12 order-img-1">--}}
{{--                <div class="save-hair-image">--}}
{{--                    <figure>--}}
{{--                        <img src="{{ asset('frontend_new/images/save-hair-1.svg') }}" alt="img"/>--}}
{{--                    </figure>--}}
{{--                </div>--}}
{{--            </div> -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="arrow">--}}
{{--        <a class="arrow-down scrollDown" href="#Hair-Treatment"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Save-hair html end -->
<!-- hair-treatment start-->
<section id="Hair-Treatment" class="bread-journey-sec hair-treatment-sec pt-100">
    <div class="container-xxl container">
        <div class="pro_heading_desc">
            <h2 class="big-heading text-center">We’ve got you <span>covered</span></h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="bread-journey-box">
                <?xml version="1.0" standalone="no"?>
                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="392.000000pt" height="314.000000pt" viewBox="0 0 392.000000 314.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,314.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M1800 3016 c-162 -30 -285 -93 -396 -204 -156 -153 -219 -308 -230
                -562 -4 -90 -1 -154 10 -229 21 -134 21 -131 -11 -132 l-28 -1 30 -7 c24 -5
                32 -14 41 -46 7 -22 13 -49 13 -59 1 -18 0 -18 -22 2 -36 34 -42 26 -9 -12 25
                -29 31 -46 37 -107 4 -40 14 -88 22 -107 l14 -35 -33 7 c-44 8 -74 44 -94 113
                -19 65 -15 160 7 174 10 6 11 9 1 9 -31 0 -42 -104 -21 -202 14 -62 50 -102
                106 -115 35 -8 39 -12 47 -56 8 -39 7 -51 -7 -64 -14 -15 -18 -15 -40 0 -13 8
                -34 41 -47 72 -12 30 -25 54 -27 51 -6 -6 37 -107 55 -128 8 -10 27 -18 42
                -18 30 0 30 5 10 -110 -27 -150 -29 -207 -15 -338 13 -125 44 -249 70 -282 7
                -8 20 -32 30 -53 10 -20 30 -45 46 -54 15 -9 58 -57 95 -105 37 -49 81 -99 98
                -111 17 -12 49 -39 71 -61 22 -21 49 -42 60 -47 11 -5 27 -13 35 -18 101 -62
                172 -75 220 -39 27 20 31 20 47 6 22 -20 71 -18 104 3 13 9 38 20 54 26 45 15
                131 106 199 209 33 49 84 115 113 146 74 79 140 218 159 336 18 111 18 252 0
                339 -8 37 -16 86 -18 107 -3 38 -1 40 30 47 43 9 44 10 81 98 42 99 38 101
                -12 7 -45 -86 -68 -109 -89 -88 -12 12 -13 69 -2 103 2 9 25 22 50 29 56 16
                80 45 94 117 14 68 9 168 -10 186 -11 10 -12 8 -5 -8 23 -62 12 -179 -22 -233
                -14 -23 -78 -60 -88 -50 -3 3 1 31 10 64 8 32 15 78 15 103 0 39 6 51 38 84
                25 27 30 36 15 28 -12 -6 -25 -16 -28 -21 -3 -6 -10 -10 -14 -10 -14 0 8 94
                25 106 10 9 11 13 3 16 -9 3 -9 34 1 137 22 230 -4 392 -87 555 -113 217 -286
                373 -468 420 -87 22 -284 28 -375 12z m540 -604 c63 -16 144 -41 180 -54 l65
                -25 3 -133 c1 -74 7 -139 13 -146 15 -18 69 -318 69 -384 0 -36 -12 -91 -35
                -160 -19 -58 -44 -148 -56 -200 -31 -135 -57 -183 -108 -198 -22 -7 -54 -24
                -71 -39 -17 -14 -32 -24 -34 -22 -2 2 -13 22 -25 44 -41 75 -220 184 -302 185
                -25 0 -50 -5 -57 -12 -15 -15 -16 -74 -2 -83 20 -12 11 -37 -12 -33 -15 2 -22
                9 -19 18 22 83 8 110 -58 110 -82 0 -255 -104 -304 -182 -25 -40 -32 -46 -44
                -35 -8 6 -42 26 -76 42 -84 41 -104 80 -142 280 -8 39 -28 108 -44 155 -35 98
                -36 111 -16 245 34 226 33 222 82 268 l44 41 -7 132 -7 132 34 10 c55 17 227
                53 329 67 64 10 160 13 290 11 178 -3 205 -6 310 -34z m-210 -1319 l85 -44
                -60 7 c-33 4 -80 6 -105 5 -74 -4 -123 -4 -165 -1 -22 2 -69 0 -105 -4 l-65
                -7 85 45 c80 42 89 44 165 44 74 -1 86 -4 165 -45z m-162 -54 c76 2 156 3 225
                1 56 -2 70 -5 82 -23 20 -29 19 -56 -4 -94 -11 -17 -25 -49 -30 -70 -6 -22
                -23 -51 -39 -66 l-28 -27 -34 22 c-18 13 -48 50 -66 83 l-33 60 39 11 c36 11
                135 74 116 74 -5 0 -33 -14 -62 -31 -50 -28 -60 -30 -163 -31 -108 -1 -112 -1
                -183 35 -63 30 -69 32 -43 10 35 -29 103 -62 128 -63 9 0 17 -2 17 -5 0 -14
                -50 -102 -66 -117 -57 -51 -123 -34 -124 32 0 14 -11 41 -24 61 -54 79 -31
                145 48 134 22 -3 57 -1 76 4 19 6 55 7 80 4 25 -3 64 -5 88 -4z"/>
                <path d="M1475 2008 c-32 -17 -85 -71 -101 -100 -22 -42 -16 -46 12 -10 54 68
                141 89 215 52 22 -12 65 -26 97 -31 90 -17 136 -50 161 -114 l11 -30 -5 33
                c-3 19 -14 46 -25 61 -11 16 -17 31 -14 34 13 13 -7 54 -31 65 -36 17 -216 52
                -262 52 -21 0 -47 -6 -58 -12z"/>
                <path d="M2260 2004 c-46 -8 -100 -22 -120 -32 -30 -14 -35 -22 -36 -52 0 -19
                -10 -55 -22 -80 -23 -49 -42 -152 -41 -215 1 -23 7 3 14 58 16 112 44 181 87
                207 16 10 56 23 89 29 32 7 83 23 114 37 54 25 56 25 103 10 47 -16 81 -44
                115 -96 30 -44 18 2 -13 50 -62 96 -122 113 -290 84z"/>
                <path d="M1582 1879 c-65 -8 -109 -28 -119 -55 -9 -25 7 -30 38 -11 41 23 48
                22 60 -9 12 -33 7 -39 -23 -24 -22 11 -22 10 -4 -4 30 -24 78 -29 142 -16 63
                13 113 35 59 26 -16 -2 -38 -8 -48 -12 -17 -6 -17 -5 -1 30 10 20 23 36 30 36
                20 0 65 -42 60 -56 -3 -8 -1 -14 4 -14 25 0 0 54 -33 72 -12 7 -58 15 -102 18
                l-80 7 67 1 c37 1 79 -3 94 -8 31 -12 44 -6 17 8 -30 16 -94 20 -161 11z m-57
                -39 c-21 -11 -40 -18 -43 -16 -5 6 50 35 68 36 8 0 -3 -9 -25 -20z"/>
                <path d="M2245 1884 c-5 -1 -22 -5 -37 -8 -16 -4 -28 -10 -28 -15 0 -5 10 -7
                23 -4 19 4 18 2 -5 -12 -24 -14 -48 -43 -48 -59 0 -3 10 -6 23 -6 12 0 44 -7
                71 -15 61 -18 92 -18 131 0 l30 15 -35 -6 c-29 -5 -33 -4 -22 7 6 7 12 23 12
                36 0 28 2 28 56 1 24 -12 47 -19 50 -15 14 14 -8 39 -48 56 -38 17 -147 33
                -173 25z m78 -21 c-18 -2 -48 -2 -65 0 -18 2 -4 4 32 4 36 0 50 -2 33 -4z
                m111 -28 c11 -8 16 -15 10 -15 -5 0 -18 7 -28 15 -11 8 -16 15 -10 15 5 0 18
                -7 28 -15z m-198 -52 c-1 -1 -19 0 -41 4 l-38 6 29 25 28 25 12 -29 c7 -16 11
                -30 10 -31z"/>
                <path d="M2255 1736 c33 -14 102 -30 93 -20 -4 3 -21 9 -40 13 -18 5 -44 11
                -58 14 -19 5 -18 4 5 -7z"/>
                <path d="M1608 1723 c12 -2 30 -2 40 0 9 3 -1 5 -23 4 -22 0 -30 -2 -17 -4z"/>
                <path d="M1805 1478 c-31 -24 -55 -74 -55 -113 0 -32 41 -75 72 -75 21 1 21 2
                -7 17 -39 21 -45 30 -45 75 0 30 8 47 36 78 41 45 40 51 -1 18z"/>
                <path d="M2151 1465 c0 -5 6 -21 14 -35 31 -55 14 -105 -45 -129 l-25 -10 23
                0 c55 -2 88 50 71 112 -9 33 -38 81 -38 62z"/>
                <path d="M1826 1361 c-11 -18 6 -41 31 -41 16 0 22 4 17 12 -5 8 0 9 17 4 59
                -18 108 -18 153 -1 25 10 55 15 66 12 11 -3 20 -1 20 4 0 18 -52 21 -93 5 -52
                -20 -94 -20 -127 -1 -28 16 -76 20 -84 6z"/>
                <path d="M2065 1330 c-4 -6 7 -10 25 -10 18 0 29 4 25 10 -3 6 -15 10 -25 10
                -10 0 -22 -4 -25 -10z"/>
                <path d="M1092 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                <path d="M2822 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                </g>
                </svg>
                    <div class="bread-pro-heading text-center">
                        <h4 class="text-center">Genetic Hair Loss</h4>
                        <p class="pro_desc text-center">
                            Genetic hair loss can occur as early as the late teens. Our treatments not only stimulate regrowth but also effectively stop hair loss progression. These measures can proactively tackle hair loss before it becomes a major concern.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="bread-journey-box">
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="392.000000pt" height="314.000000pt" viewBox="0 0 392.000000 314.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,314.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M1805 3017 c-259 -47 -479 -220 -569 -448 -61 -153 -81 -362 -52
                    -548 21 -134 21 -131 -11 -132 l-28 -1 30 -7 c24 -5 32 -14 41 -46 7 -22 13
                    -49 13 -59 1 -18 0 -18 -22 2 -36 34 -42 26 -9 -12 25 -29 31 -46 37 -107 4
                    -40 14 -88 22 -107 l14 -35 -33 7 c-44 8 -74 44 -94 113 -19 65 -15 160 7 174
                    10 6 11 9 1 9 -31 0 -42 -104 -21 -202 14 -62 50 -102 106 -115 35 -8 39 -12
                    47 -56 8 -39 7 -51 -7 -64 -14 -15 -18 -15 -40 0 -13 8 -34 41 -47 72 -12 30
                    -25 54 -27 51 -6 -6 37 -107 55 -128 8 -10 27 -18 42 -18 30 0 30 5 10 -110
                    -27 -150 -29 -207 -15 -338 13 -125 44 -249 70 -282 7 -8 20 -32 30 -53 10
                    -20 30 -45 46 -54 15 -9 58 -57 95 -105 37 -49 81 -99 98 -111 17 -12 49 -39
                    71 -61 22 -21 49 -42 60 -47 11 -5 27 -13 35 -18 101 -62 172 -75 220 -39 27
                    20 31 20 47 6 22 -20 71 -18 104 3 13 9 38 20 54 26 45 15 131 106 199 209 33
                    49 84 115 113 146 74 79 140 218 159 336 18 111 18 252 0 339 -8 37 -16 86
                    -18 107 -3 38 -1 40 30 47 43 9 44 10 81 98 42 99 38 101 -12 7 -45 -86 -68
                    -109 -89 -88 -12 12 -13 69 -2 103 2 9 25 22 50 29 56 16 80 45 94 117 14 68
                    9 168 -10 186 -11 10 -12 8 -5 -8 23 -62 12 -179 -22 -233 -14 -23 -78 -60
                    -88 -50 -3 3 1 31 10 64 8 32 15 78 15 103 0 39 6 51 38 84 25 27 30 36 15 28
                    -12 -6 -25 -16 -28 -21 -3 -6 -10 -10 -14 -10 -14 0 8 94 25 106 10 9 11 13 3
                    16 -9 3 -9 34 1 137 22 230 -4 392 -87 555 -113 217 -286 373 -468 420 -84 21
                    -283 28 -370 13z m305 -153 c0 -11 6 -15 19 -11 21 5 31 -10 31 -44 0 -22 25
                    -26 33 -5 7 17 47 28 47 13 1 -18 48 -49 62 -41 7 4 8 3 4 -5 -5 -8 -20 -9
                    -43 -5 -33 6 -36 5 -30 -15 3 -13 -1 -28 -11 -38 -10 -9 -18 -21 -18 -27 -1
                    -6 -2 -18 -3 -26 -1 -11 -7 -8 -21 10 -20 24 -21 25 -35 6 -8 -11 -15 -29 -16
                    -40 0 -17 -4 -14 -16 12 -17 33 -43 44 -43 16 0 -8 5 -24 10 -34 6 -11 6 -21
                    1 -24 -5 -3 -12 5 -15 19 -6 24 -36 36 -36 15 0 -18 -39 -50 -55 -44 -8 4 -15
                    17 -15 31 0 33 -24 25 -28 -10 -4 -30 -17 -36 -26 -12 -3 9 -14 15 -23 13 -11
                    -2 -22 6 -28 20 -11 25 -33 29 -41 7 -4 -8 -12 -15 -20 -15 -10 0 -12 8 -7 30
                    8 43 -23 41 -36 -2 -9 -31 -10 -31 -16 -10 -9 27 -20 28 -34 5 -9 -16 -10 -15
                    -8 6 3 33 -21 38 -33 7 -5 -14 -15 -26 -21 -26 -8 0 -7 5 2 16 11 14 10 18 -5
                    30 -17 12 -17 14 -3 20 10 3 17 13 17 21 0 12 -7 14 -32 9 -25 -5 -30 -4 -20
                    6 8 8 9 15 1 25 -9 10 -7 13 9 13 30 0 38 21 16 38 -18 13 -18 14 4 7 16 -4
                    30 -1 42 10 12 11 20 13 25 6 11 -18 35 -12 35 9 0 11 5 20 11 20 6 0 13 -9
                    16 -20 3 -11 12 -20 19 -20 8 0 14 9 14 20 0 23 25 27 34 5 7 -18 36 -20 36
                    -2 0 7 16 12 45 13 37 1 45 -2 45 -16 0 -17 19 -30 41 -30 5 0 15 11 21 25 6
                    14 17 25 23 25 8 0 10 -10 7 -25 -7 -37 23 -33 37 5 11 32 31 41 31 14z m230
                    -452 c63 -16 144 -41 180 -54 l65 -25 3 -133 c1 -74 7 -139 13 -146 15 -18 69
                    -318 69 -384 0 -36 -12 -91 -35 -160 -19 -58 -44 -148 -56 -200 -31 -135 -57
                    -183 -108 -198 -22 -7 -54 -24 -71 -39 -17 -14 -32 -24 -34 -22 -2 2 -13 22
                    -25 44 -41 75 -220 184 -302 185 -25 0 -50 -5 -57 -12 -15 -15 -16 -74 -2 -83
                    20 -12 11 -37 -12 -33 -15 2 -22 9 -19 18 22 83 8 110 -58 110 -82 0 -255
                    -104 -304 -182 -25 -40 -32 -46 -44 -35 -8 6 -42 26 -76 42 -84 41 -104 80
                    -142 280 -8 39 -28 108 -44 155 -35 98 -36 111 -16 245 34 226 33 222 82 268
                    l44 41 -7 132 -7 132 34 10 c55 17 227 53 329 67 64 10 160 13 290 11 178 -3
                    205 -6 310 -34z m-210 -1319 l85 -44 -60 7 c-33 4 -80 6 -105 5 -74 -4 -123
                    -4 -165 -1 -22 2 -69 0 -105 -4 l-65 -7 85 45 c80 42 89 44 165 44 74 -1 86
                    -4 165 -45z m-162 -54 c76 2 156 3 225 1 56 -2 70 -5 82 -23 20 -29 19 -56 -4
                    -94 -11 -17 -25 -49 -30 -70 -6 -22 -23 -51 -39 -66 l-28 -27 -34 22 c-18 13
                    -48 50 -66 83 l-33 60 39 11 c36 11 135 74 116 74 -5 0 -33 -14 -62 -31 -50
                    -28 -60 -30 -163 -31 -108 -1 -112 -1 -183 35 -63 30 -69 32 -43 10 35 -29
                    103 -62 128 -63 9 0 17 -2 17 -5 0 -14 -50 -102 -66 -117 -57 -51 -123 -34
                    -124 32 0 14 -11 41 -24 61 -54 79 -31 145 48 134 22 -3 57 -1 76 4 19 6 55 7
                    80 4 25 -3 64 -5 88 -4z"/>
                    <path d="M1475 2008 c-32 -17 -85 -71 -101 -100 -22 -42 -16 -46 12 -10 54 68
                    141 89 215 52 22 -12 65 -26 97 -31 90 -17 136 -50 161 -114 l11 -30 -5 33
                    c-3 19 -14 46 -25 61 -11 16 -17 31 -14 34 13 13 -7 54 -31 65 -36 17 -216 52
                    -262 52 -21 0 -47 -6 -58 -12z"/>
                    <path d="M2260 2004 c-46 -8 -100 -22 -120 -32 -30 -14 -35 -22 -36 -52 0 -19
                    -10 -55 -22 -80 -23 -49 -42 -152 -41 -215 1 -23 7 3 14 58 16 112 44 181 87
                    207 16 10 56 23 89 29 32 7 83 23 114 37 54 25 56 25 103 10 47 -16 81 -44
                    115 -96 30 -44 18 2 -13 50 -62 96 -122 113 -290 84z"/>
                    <path d="M1582 1879 c-65 -8 -109 -28 -119 -55 -9 -25 7 -30 38 -11 41 23 48
                    22 60 -9 12 -33 7 -39 -23 -24 -22 11 -22 10 -4 -4 30 -24 78 -29 142 -16 63
                    13 113 35 59 26 -16 -2 -38 -8 -48 -12 -17 -6 -17 -5 -1 30 10 20 23 36 30 36
                    20 0 65 -42 60 -56 -3 -8 -1 -14 4 -14 25 0 0 54 -33 72 -12 7 -58 15 -102 18
                    l-80 7 67 1 c37 1 79 -3 94 -8 31 -12 44 -6 17 8 -30 16 -94 20 -161 11z m-57
                    -39 c-21 -11 -40 -18 -43 -16 -5 6 50 35 68 36 8 0 -3 -9 -25 -20z"/>
                    <path d="M2245 1884 c-5 -1 -22 -5 -37 -8 -16 -4 -28 -10 -28 -15 0 -5 10 -7
                    23 -4 19 4 18 2 -5 -12 -24 -14 -48 -43 -48 -59 0 -3 10 -6 23 -6 12 0 44 -7
                    71 -15 61 -18 92 -18 131 0 l30 15 -35 -6 c-29 -5 -33 -4 -22 7 6 7 12 23 12
                    36 0 28 2 28 56 1 24 -12 47 -19 50 -15 14 14 -8 39 -48 56 -38 17 -147 33
                    -173 25z m78 -21 c-18 -2 -48 -2 -65 0 -18 2 -4 4 32 4 36 0 50 -2 33 -4z
                    m111 -28 c11 -8 16 -15 10 -15 -5 0 -18 7 -28 15 -11 8 -16 15 -10 15 5 0 18
                    -7 28 -15z m-198 -52 c-1 -1 -19 0 -41 4 l-38 6 29 25 28 25 12 -29 c7 -16 11
                    -30 10 -31z"/>
                    <path d="M2255 1736 c33 -14 102 -30 93 -20 -4 3 -21 9 -40 13 -18 5 -44 11
                    -58 14 -19 5 -18 4 5 -7z"/>
                    <path d="M1608 1723 c12 -2 30 -2 40 0 9 3 -1 5 -23 4 -22 0 -30 -2 -17 -4z"/>
                    <path d="M1805 1478 c-31 -24 -55 -74 -55 -113 0 -32 41 -75 72 -75 21 1 21 2
                    -7 17 -39 21 -45 30 -45 75 0 30 8 47 36 78 41 45 40 51 -1 18z"/>
                    <path d="M2151 1465 c0 -5 6 -21 14 -35 31 -55 14 -105 -45 -129 l-25 -10 23
                    0 c55 -2 88 50 71 112 -9 33 -38 81 -38 62z"/>
                    <path d="M1826 1361 c-11 -18 6 -41 31 -41 16 0 22 4 17 12 -5 8 0 9 17 4 59
                    -18 108 -18 153 -1 25 10 55 15 66 12 11 -3 20 -1 20 4 0 18 -52 21 -93 5 -52
                    -20 -94 -20 -127 -1 -28 16 -76 20 -84 6z"/>
                    <path d="M2065 1330 c-4 -6 7 -10 25 -10 18 0 29 4 25 10 -3 6 -15 10 -25 10
                    -10 0 -22 -4 -25 -10z"/>
                    <path d="M1092 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                    <path d="M2822 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                    </g>
                    </svg>
                     <div class="bread-pro-heading text-center">
                        <h4>Crown Hair Loss</h4>
                        <p class="pro_desc">
                            A primary sign of male pattern baldness is thinning on and around the crown, but with the right treatments, you can slow down the process and eventually promote hair regrowth.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="bread-journey-box">
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="392.000000pt" height="314.000000pt" viewBox="0 0 392.000000 314.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,314.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M1705 3025 c-219 -47 -411 -200 -518 -411 -42 -82 -52 -155 -38 -260
                    7 -49 15 -177 18 -284 5 -170 8 -197 23 -207 17 -12 46 -101 36 -111 -3 -3
                    -15 3 -26 13 -28 25 -25 9 4 -25 17 -21 25 -47 31 -96 4 -37 13 -84 21 -105
                    11 -34 11 -39 -2 -39 -36 0 -76 33 -97 78 -26 59 -31 197 -7 212 10 7 11 10 2
                    10 -42 0 -42 -173 1 -258 12 -26 75 -62 106 -62 15 0 20 -10 26 -51 8 -57 0
                    -72 -36 -67 -17 2 -32 20 -56 68 -36 68 -37 66 -8 -10 24 -60 43 -80 75 -80
                    30 0 30 5 10 -110 -6 -30 -14 -89 -19 -130 -18 -145 28 -431 81 -499 10 -13
                    18 -29 18 -35 0 -14 58 -76 71 -76 5 0 41 -43 80 -95 38 -52 82 -101 97 -109
                    15 -8 45 -33 67 -55 47 -49 208 -131 258 -131 21 0 41 7 52 20 22 24 38 25 55
                    5 7 -8 24 -13 39 -12 40 5 141 57 186 96 38 34 139 163 166 212 6 13 34 46 60
                    74 164 174 226 440 169 733 -20 101 -19 129 1 116 6 -3 20 -3 33 0 17 4 33 27
                    60 85 48 105 45 116 -4 19 -43 -83 -69 -107 -92 -84 -10 10 -13 28 -9 62 6 48
                    6 48 61 69 45 17 58 28 73 58 23 46 34 180 18 221 -16 41 -23 27 -9 -18 14
                    -44 -3 -166 -28 -204 -15 -22 -81 -58 -90 -49 -3 2 2 30 11 63 8 32 15 78 15
                    103 0 38 6 51 38 85 l37 39 -37 -22 -38 -23 7 34 c10 56 22 78 45 88 13 5 16
                    9 8 9 -21 1 -21 84 -3 291 l16 165 -37 163 c-20 90 -47 185 -60 211 -58 114
                    -217 239 -374 294 -86 30 -91 30 -307 33 -150 1 -239 -2 -280 -11z m-111 -435
                    c23 -11 79 -52 126 -91 118 -100 170 -123 269 -117 96 6 133 25 237 119 43 39
                    97 80 119 90 167 77 268 -84 251 -398 -5 -93 -3 -125 13 -185 30 -115 61 -298
                    61 -358 0 -36 -12 -88 -34 -151 -19 -53 -37 -116 -41 -140 -12 -72 -43 -179
                    -63 -212 -12 -21 -39 -42 -78 -60 -32 -16 -60 -33 -62 -38 -8 -21 -32 -6 -56
                    35 -26 45 -108 107 -206 156 -51 26 -119 31 -143 11 -21 -17 -22 -60 -1 -89
                    15 -21 14 -22 -15 -22 -32 0 -39 8 -20 27 6 6 9 26 7 44 -2 26 -10 37 -31 47
                    -39 19 -87 6 -182 -49 -98 -56 -141 -92 -166 -141 l-20 -40 -22 20 c-12 11
                    -42 28 -67 38 -25 9 -51 21 -57 27 -30 23 -60 107 -88 252 -8 39 -28 110 -45
                    159 l-32 90 12 135 c6 75 20 179 30 231 13 61 19 132 18 200 -1 81 3 123 20
                    183 60 213 146 286 266 227z m404 -1471 c32 1 63 -8 130 -40 96 -46 92 -60
                    -10 -39 -47 11 -69 10 -112 0 -42 -10 -61 -10 -90 0 -29 9 -51 9 -105 0 -37
                    -7 -74 -10 -82 -8 -8 3 29 26 81 51 68 33 102 44 120 40 14 -4 44 -5 68 -4z
                    m-28 -99 c19 0 91 1 160 0 99 -1 128 -4 142 -17 25 -22 22 -60 -7 -108 -14
                    -22 -25 -49 -25 -59 0 -27 -48 -86 -70 -86 -25 0 -76 53 -105 109 l-23 47 46
                    17 c26 9 63 30 82 47 l35 30 -55 -32 c-53 -31 -60 -33 -175 -36 l-120 -4 -68
                    36 c-37 20 -67 34 -67 32 0 -11 109 -74 138 -81 17 -3 32 -9 32 -11 0 -18 -54
                    -106 -76 -123 -50 -39 -114 -16 -114 41 0 10 -13 43 -30 74 -27 51 -28 58 -16
                    87 12 32 13 32 85 33 40 1 75 5 79 9 4 4 32 4 62 0 30 -4 71 -6 90 -5z"/>
                    <path d="M2335 1998 c-219 -39 -238 -48 -234 -103 2 -16 -7 -50 -19 -75 -23
                    -49 -42 -152 -41 -215 1 -23 7 3 14 58 15 105 42 175 80 206 14 10 52 23 87
                    30 35 6 89 23 120 38 53 24 61 25 100 14 29 -9 58 -29 91 -63 26 -28 47 -46
                    47 -41 0 23 -63 104 -97 126 -47 30 -83 36 -148 25z"/>
                    <path d="M1473 1990 c-33 -14 -100 -86 -112 -123 -11 -32 -11 -32 25 11 66 77
                    131 96 203 59 26 -14 77 -31 112 -37 88 -15 128 -45 156 -115 9 -23 12 -25 12
                    -10 1 12 -8 38 -19 60 -11 22 -20 52 -20 67 0 39 -28 53 -147 77 -107 22 -174
                    25 -210 11z"/>
                    <path d="M1572 1860 c-55 -8 -99 -31 -109 -56 -9 -24 2 -26 42 -7 36 17 37 17
                    51 -2 24 -32 18 -46 -13 -35 -25 9 -26 9 -10 -4 32 -25 89 -28 162 -10 38 10
                    64 19 58 21 -7 3 -28 0 -47 -5 l-35 -10 16 34 c21 42 43 43 77 3 14 -17 26
                    -26 26 -20 0 5 -11 23 -24 38 -22 26 -31 28 -109 31 -69 3 -93 0 -131 -17 -26
                    -11 -44 -16 -41 -11 3 4 25 16 50 26 35 13 65 16 137 12 61 -4 86 -2 74 4 -24
                    14 -112 18 -174 8z"/>
                    <path d="M2205 1856 c-18 -9 -24 -15 -13 -15 13 -1 10 -7 -13 -30 -38 -38 -37
                    -47 9 -54 20 -3 62 -11 92 -18 47 -10 60 -9 90 5 l35 16 -31 -4 -31 -5 11 35
                    c6 19 14 34 19 34 4 0 26 -9 48 -21 44 -22 60 -19 43 9 -28 46 -197 77 -259
                    48z m123 -13 c-21 -2 -55 -2 -75 0 -21 2 -4 4 37 4 41 0 58 -2 38 -4z m92 -18
                    c17 -9 30 -18 30 -21 0 -2 -12 2 -27 9 -16 8 -35 17 -43 20 -10 4 -11 6 -2 6
                    7 1 26 -6 42 -14z m-196 -21 c11 -29 6 -34 -31 -34 l-36 0 23 25 c27 29 36 31
                    44 9z"/>
                    <path d="M2255 1715 c17 -8 46 -14 65 -13 l35 1 -40 6 c-22 4 -51 10 -65 14
                    -20 5 -19 4 5 -8z"/>
                    <path d="M1603 1703 c9 -2 25 -2 35 0 9 3 1 5 -18 5 -19 0 -27 -2 -17 -5z"/>
                    <path d="M1792 1445 c-36 -40 -50 -95 -33 -131 11 -25 55 -48 75 -40 6 2 2 7
                    -9 11 -76 29 -73 120 5 182 9 7 10 12 4 13 -7 0 -26 -16 -42 -35z"/>
                    <path d="M2150 1449 c0 -4 7 -20 15 -35 29 -56 15 -105 -38 -128 -28 -13 -29
                    -14 -9 -15 55 -2 88 50 71 112 -8 30 -38 81 -39 66z"/>
                    <path d="M1828 1344 c-12 -11 5 -44 23 -44 27 0 34 20 7 21 -15 1 -17 3 -6 6
                    9 2 33 -3 53 -11 47 -20 83 -20 128 -1 20 8 50 15 67 15 18 0 29 4 25 10 -9
                    15 -66 12 -95 -5 -14 -8 -41 -14 -60 -14 -19 0 -46 6 -60 14 -25 14 -72 20
                    -82 9z"/>
                    <path d="M2065 1310 c-4 -6 7 -10 24 -10 17 0 31 5 31 10 0 6 -11 10 -24 10
                    -14 0 -28 -4 -31 -10z"/>
                    <path d="M1092 1735 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                    <path d="M2822 1735 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                    </g>
                    </svg>
                    <div class="bread-pro-heading text-center">
                        <h4>Receding Hairline</h4>
                        <p class="pro_desc">
                            Even the most confident of gents can be affected by a receding hairline. Counteract the follicle shrinkage and reclaim the look of your youth, when selecting a treatment tailored specifically for you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="bread-journey-box">
                <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="392.000000pt" height="314.000000pt" viewBox="0 0 392.000000 314.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,314.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M1858 3010 c-68 -8 -154 -30 -221 -55 -20 -8 -55 -15 -77 -15 -66 0
                    -128 -37 -225 -135 -95 -94 -140 -165 -169 -264 -20 -68 -20 -123 -1 -297 9
                    -76 14 -180 13 -231 -2 -75 0 -96 12 -103 12 -8 10 -10 -10 -11 l-25 -1 25 -7
                    c20 -5 28 -17 38 -60 7 -29 11 -56 8 -58 -3 -3 -22 9 -42 27 l-37 32 -13 -23
                    c-16 -30 -18 -111 -3 -181 14 -62 48 -101 106 -118 38 -12 42 -16 47 -55 8
                    -49 0 -75 -23 -75 -28 0 -39 14 -70 80 -17 36 -30 60 -31 53 0 -6 13 -41 29
                    -76 27 -60 32 -66 63 -69 l34 -3 -13 -85 c-32 -211 -33 -225 -18 -361 14 -130
                    44 -248 71 -280 8 -8 19 -29 25 -47 6 -17 30 -47 55 -67 24 -20 68 -68 98
                    -108 72 -94 247 -247 284 -247 5 0 31 -11 58 -25 62 -31 94 -32 128 0 27 25
                    50 25 60 -2 4 -10 12 -13 24 -8 9 4 24 8 32 9 30 3 136 59 168 90 40 38 137
                    164 174 226 14 25 42 60 62 78 74 69 145 219 165 350 15 98 14 247 -3 329 -8
                    37 -16 86 -18 108 -3 39 -2 40 32 45 32 5 38 11 72 80 50 103 47 113 -5 15
                    -42 -78 -67 -99 -90 -76 -14 14 -10 93 6 107 7 6 33 18 59 28 39 14 49 24 63
                    58 29 73 33 238 5 238 -5 0 -4 -14 2 -31 20 -57 -7 -194 -45 -229 -21 -20 -64
                    -37 -72 -28 -2 2 2 28 10 58 8 30 15 76 15 102 0 36 6 53 23 70 13 13 30 32
                    38 43 12 17 11 17 -18 -3 -17 -12 -33 -22 -36 -22 -5 0 10 88 18 101 4 5 14 9
                    23 10 9 0 13 2 7 5 -15 6 -11 233 5 342 11 74 12 104 2 145 -6 29 -22 102 -36
                    163 -13 61 -35 133 -49 160 -32 62 -116 148 -198 203 -55 37 -69 42 -113 40
                    -31 -1 -84 8 -136 24 -79 24 -227 49 -275 46 -11 -1 -50 -5 -87 -9z m327 -55
                    c78 -21 87 -31 39 -44 -90 -25 -171 -33 -297 -28 -130 4 -282 31 -272 47 5 8
                    111 34 180 44 62 9 291 -3 350 -19z m-419 -242 c116 -57 119 -58 204 -58 85 0
                    89 1 191 53 147 74 212 68 306 -28 105 -108 159 -303 133 -487 -11 -77 -10
                    -90 13 -185 34 -142 57 -274 57 -333 0 -30 -13 -91 -34 -155 -19 -58 -45 -148
                    -57 -200 -32 -145 -50 -176 -117 -206 -31 -14 -65 -33 -76 -42 -13 -12 -20
                    -13 -23 -5 -12 35 -69 97 -123 133 -122 83 -218 111 -254 74 -20 -20 -20 -63
                    0 -92 15 -21 14 -22 -17 -22 -26 0 -30 3 -24 18 33 75 8 117 -67 110 -88 -9
                    -270 -130 -299 -199 -14 -34 -13 -34 -47 -10 -15 10 -49 26 -75 36 -38 14 -53
                    27 -69 59 -23 44 -43 114 -62 216 -7 36 -16 74 -21 85 -26 63 -43 115 -49 151
                    -9 52 18 287 44 390 16 62 19 96 14 159 -12 148 33 341 105 452 50 78 138 143
                    192 143 25 0 75 -19 155 -57z m-568 -941 c24 -30 31 -51 37 -107 4 -39 13 -85
                    21 -102 12 -32 12 -33 -10 -33 -72 0 -133 134 -112 244 9 46 27 46 64 -2z
                    m925 -667 c98 -43 98 -59 -1 -42 -42 7 -78 8 -111 1 -28 -6 -60 -6 -77 -1 -16
                    4 -69 5 -119 2 -49 -4 -86 -3 -82 1 4 4 42 24 85 44 67 32 86 37 147 36 59 -1
                    85 -8 158 -41z m-158 -58 c28 1 70 2 95 3 221 6 261 -18 206 -128 -13 -26 -26
                    -59 -29 -73 -7 -28 -50 -79 -67 -79 -18 0 -77 63 -105 112 -25 45 -26 48 -8
                    54 47 15 92 38 119 60 25 20 17 19 -48 -12 -75 -35 -80 -36 -176 -32 -88 3
                    -106 7 -163 36 l-64 32 35 -30 c19 -16 53 -35 75 -42 22 -6 43 -14 48 -18 4
                    -3 -7 -32 -24 -64 -37 -68 -82 -97 -123 -78 -15 7 -28 23 -31 39 -3 15 -17 51
                    -32 79 -48 95 -29 139 59 136 29 -1 67 2 83 7 17 6 46 7 65 3 19 -4 58 -6 85
                    -5z"/>
                    <path d="M1491 2023 c-32 -6 -115 -90 -129 -131 -6 -17 -10 -32 -8 -32 2 0 15
                    17 29 38 28 42 98 82 145 82 15 0 44 -9 65 -20 21 -11 69 -27 108 -35 103 -22
                    127 -39 153 -111 12 -32 15 -35 15 -14 1 14 -9 41 -21 60 -12 19 -21 47 -20
                    61 3 42 -27 59 -155 85 -117 24 -136 25 -182 17z"/>
                    <path d="M2263 2010 c-136 -24 -158 -36 -158 -80 0 -19 -10 -55 -21 -80 -25
                    -51 -48 -180 -41 -225 3 -26 4 -24 6 10 2 66 29 173 52 215 25 45 59 64 141
                    79 31 5 75 19 97 31 22 11 52 20 67 20 45 0 111 -38 144 -83 34 -47 39 -43 11
                    11 -24 46 -76 97 -114 111 -36 14 -60 13 -184 -9z"/>
                    <path d="M1526 1873 c-48 -18 -77 -45 -63 -59 4 -4 24 0 43 10 20 9 38 16 39
                    14 6 -8 25 -48 25 -53 0 -4 -12 -5 -27 -1 -28 5 -28 5 2 -9 37 -18 105 -17
                    170 1 l50 13 -47 -4 -46 -4 15 32 c21 42 18 40 43 32 12 -4 30 -21 41 -38 10
                    -18 19 -25 19 -17 -1 25 -27 51 -67 66 l-38 15 40 -6 c33 -6 38 -4 27 7 -21
                    21 -167 22 -226 1z m142 0 c-10 -2 -28 -2 -40 0 -13 2 -5 4 17 4 22 1 32 -1
                    23 -4z m-109 -12 c-14 -5 -35 -14 -47 -20 -12 -6 -22 -9 -22 -7 0 10 55 35 75
                    35 16 -1 14 -2 -6 -8z"/>
                    <path d="M2195 1876 c-19 -16 -19 -16 10 -11 17 3 23 2 15 -1 -23 -10 -70 -56
                    -70 -70 0 -11 38 -18 160 -30 41 -4 60 -2 75 10 19 15 18 15 -13 9 -31 -5 -33
                    -4 -24 13 6 10 13 27 16 37 5 17 8 16 45 -3 47 -24 61 -25 61 -6 0 8 -16 24
                    -36 37 -49 30 -208 40 -239 15z m108 -3 c-7 -2 -19 -2 -25 0 -7 3 -2 5 12 5
                    14 0 19 -2 13 -5z m74 -9 c-3 -3 -12 -4 -19 -1 -8 3 -5 6 6 6 11 1 17 -2 13
                    -5z m49 -20 c18 -14 18 -14 -6 -3 -31 14 -36 19 -24 19 6 0 19 -7 30 -16z
                    m-202 -20 c3 -9 6 -20 6 -25 0 -11 -40 -12 -59 0 -10 7 -8 12 10 25 29 20 35
                    20 43 0z"/>
                    <path d="M2250 1741 c8 -5 35 -11 60 -15 l45 -6 -50 15 c-56 16 -77 19 -55 6z"/>
                    <path d="M1633 1733 c9 -2 23 -2 30 0 6 3 -1 5 -18 5 -16 0 -22 -2 -12 -5z"/>
                    <path d="M1796 1476 c-65 -66 -54 -167 20 -174 l29 -2 -31 14 c-62 28 -60 99
                    4 169 37 39 19 33 -22 -7z"/>
                    <path d="M2168 1427 c22 -61 10 -98 -38 -114 l-35 -12 31 0 c52 -1 82 52 62
                    112 -6 18 -16 38 -24 46 -8 9 -7 -1 4 -32z"/>
                    <path d="M1830 1369 c-11 -8 -12 -12 -2 -16 6 -2 10 -9 6 -14 -8 -14 26 -23
                    39 -10 8 8 6 11 -8 11 -10 0 -15 3 -12 7 4 3 34 -2 67 -12 56 -17 62 -17 103
                    -1 23 9 58 16 77 16 32 0 33 1 17 17 -16 16 -21 16 -85 -6 l-68 -24 -48 22
                    c-55 24 -65 25 -86 10z"/>
                    <path d="M2065 1330 c3 -5 15 -10 25 -10 10 0 22 5 25 10 4 6 -7 10 -25 10
                    -18 0 -29 -4 -25 -10z"/>
                    <path d="M1092 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                    <path d="M2822 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                    </g>
                    </svg>
                    <div class="bread-pro-heading text-center">
                        <h4>General Thinning</h4>
                        <p class="pro_desc">
                            Father time plays no favourites when it comes to hair thinning. With clinically proven treatments, there's no need to simply accept this fate. Reclaim your youthful vigour and combat hair loss!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 pt-40">
                <div class="bread-start-button">
                    <a href="https://agenthealth.co.uk/questionnaire/30" class="trans-btn black-btn learn-more-card-btn">Start your journey</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="container">
        <img src="{{asset('frontend_new/images/money-back.jpeg')}}" class="img-fluid"/>
    </div>


<!-- hair-treatment html end -->
<!-- Men getting html start -->
<section class="men-getting-sec men-banner-sec swiper-design">
    <div class="container-xxl container">
        <div class="">
            <h2 class="big-heading text-center">Join the tribe of <span>satisfied men</span> who have already <span>reversed</span> their hair loss.</h2>
        </div>
        <div class="men-getting-star">
            <p class="pro_desc text-center">Average rating</p>
            <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
        </div>
        <div class="swiper-slider4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="men-get-box">


                        <div class="men-get-text">

                            <h4>Issac</h4>
                            <h6>Verified review
                            <span>
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M1910 5083 c-25 -13 -85 -84 -210 -250 -96 -127 -178 -235 -182 -239
                                -4 -4 -142 -12 -307 -19 -320 -12 -328 -14 -374 -69 -30 -36 -36 -59 -82 -349
                                -25 -155 -47 -282 -48 -283 -1 -1 -112 -66 -247 -143 -154 -89 -257 -155 -277
                                -177 -59 -67 -57 -85 49 -405 l94 -283 -158 -249 c-88 -140 -160 -265 -164
                                -284 -14 -75 6 -106 180 -273 88 -86 186 -180 217 -210 l57 -55 -25 -297 -25
                                -298 23 -47 c14 -27 37 -55 54 -65 17 -9 149 -51 295 -93 146 -41 271 -79 278
                                -83 7 -4 63 -124 123 -266 61 -143 119 -272 129 -287 25 -34 83 -62 129 -61
                                20 0 159 25 310 57 238 49 275 54 290 42 119 -102 424 -346 451 -359 44 -23
                                96 -23 140 0 27 13 332 257 451 359 15 12 52 7 290 -42 151 -32 290 -57 310
                                -57 46 -1 104 27 129 61 10 15 68 144 129 287 60 142 116 262 123 266 7 4 132
                                42 278 83 146 42 279 84 295 93 17 10 40 38 54 65 l23 47 -25 298 -25 297 57
                                55 c31 30 129 124 217 210 174 167 194 198 180 272 -3 19 -77 146 -164 284
                                l-158 249 94 284 c106 320 108 338 49 405 -20 22 -124 88 -276 176 -135 77
                                -246 142 -247 143 -2 2 -24 129 -49 284 -24 155 -49 292 -54 306 -17 43 -67
                                84 -118 95 -26 6 -147 14 -268 17 -121 3 -243 8 -272 11 l-52 6 -175 234 c-97
                                128 -187 241 -201 250 -15 9 -48 19 -75 22 -46 4 -64 -3 -314 -122 -146 -69
                                -270 -126 -276 -126 -6 0 -125 54 -263 121 -277 132 -322 146 -387 112z m1522
                                -1539 c70 -36 283 -191 300 -219 14 -23 18 -43 15 -83 -4 -52 -22 -81 -573
                                -905 -313 -468 -584 -869 -603 -890 -71 -79 -154 -96 -248 -53 -42 20 -121 95
                                -420 398 -520 527 -523 530 -533 573 -15 66 3 99 128 229 143 149 152 156 222
                                156 l54 0 292 -291 292 -291 453 678 c307 458 464 683 484 696 37 22 96 23
                                137 2z"></path>
                                </g>
                                </svg>
                            </span>
                            </h6>
                            <div class="quotes-img">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M1715 4578 c-42 -16 -1004 -658 -1092 -730 -165 -134 -324 -335 -422
                                -533 -73 -147 -113 -261 -148 -419 l-27 -121 -3 -1079 c-3 -815 -1 -1087 8
                                -1108 25 -61 -20 -58 1014 -58 l947 0 29 29 29 29 0 947 c0 1028 2 987 -55
                                1013 -19 9 -209 12 -745 12 l-720 0 0 54 c0 198 97 467 232 648 108 142 182
                                200 704 549 314 209 504 342 526 368 136 159 18 412 -192 410 -30 0 -68 -5
                                -85 -11z"></path>
                                <path d="M4759 4576 c-45 -18 -946 -617 -1054 -702 -304 -238 -517 -581 -607
                                -979 -22 -100 -22 -100 -25 -1203 l-4 -1103 30 -29 29 -30 947 0 c1028 0 987
                                -2 1013 55 9 19 12 259 12 966 l0 941 -34 34 -34 34 -726 0 -726 0 0 66 c0 80
                                32 242 65 329 66 177 143 295 279 431 93 92 142 127 586 423 267 178 498 335
                                513 350 119 109 92 314 -50 398 -54 31 -158 41 -214 19z"></path>
                                </g>
                                </svg>
                            </div>
                            <p>Two months in and my thinning corners were filling. By month 4, my hairline had regrown centimeters forward, allowing me to cut my hair shorter without the fear of exposing thin corners.</p>
                        </div>

                        <div class="men-get-image longEnough mCustomScrollbar" data-mcs-theme="dark">
                            <img src="{{asset('frontend_new/images/issac-new.png')}}" alt="img">
                            <img src="{{asset('frontend_new/images/men-get-image_2.jpeg')}}" alt="img">
                            <!-- <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/men-get-image-1.png" alt="img">
                            <img src="{{asset('frontend_new/images/men-get-image_2.jpeg')}}" alt="img">
                            <img src="{{asset('frontend_new/images/men-get-image-1.png')}}" alt="img">
                            <img src="{{asset('frontend_new/images/men-get-image_2.jpeg')}}" alt="img"> -->
                        </div>

                    </div>




                </div>
                <div class="swiper-slide">
                    <div class="men-get-box">
                        <div class="men-get-text">
                            <h4>Harry</h4>
                            <h6>Verified review
                                <span>
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                    <path d="M1910 5083 c-25 -13 -85 -84 -210 -250 -96 -127 -178 -235 -182 -239
                                    -4 -4 -142 -12 -307 -19 -320 -12 -328 -14 -374 -69 -30 -36 -36 -59 -82 -349
                                    -25 -155 -47 -282 -48 -283 -1 -1 -112 -66 -247 -143 -154 -89 -257 -155 -277
                                    -177 -59 -67 -57 -85 49 -405 l94 -283 -158 -249 c-88 -140 -160 -265 -164
                                    -284 -14 -75 6 -106 180 -273 88 -86 186 -180 217 -210 l57 -55 -25 -297 -25
                                    -298 23 -47 c14 -27 37 -55 54 -65 17 -9 149 -51 295 -93 146 -41 271 -79 278
                                    -83 7 -4 63 -124 123 -266 61 -143 119 -272 129 -287 25 -34 83 -62 129 -61
                                    20 0 159 25 310 57 238 49 275 54 290 42 119 -102 424 -346 451 -359 44 -23
                                    96 -23 140 0 27 13 332 257 451 359 15 12 52 7 290 -42 151 -32 290 -57 310
                                    -57 46 -1 104 27 129 61 10 15 68 144 129 287 60 142 116 262 123 266 7 4 132
                                    42 278 83 146 42 279 84 295 93 17 10 40 38 54 65 l23 47 -25 298 -25 297 57
                                    55 c31 30 129 124 217 210 174 167 194 198 180 272 -3 19 -77 146 -164 284
                                    l-158 249 94 284 c106 320 108 338 49 405 -20 22 -124 88 -276 176 -135 77
                                    -246 142 -247 143 -2 2 -24 129 -49 284 -24 155 -49 292 -54 306 -17 43 -67
                                    84 -118 95 -26 6 -147 14 -268 17 -121 3 -243 8 -272 11 l-52 6 -175 234 c-97
                                    128 -187 241 -201 250 -15 9 -48 19 -75 22 -46 4 -64 -3 -314 -122 -146 -69
                                    -270 -126 -276 -126 -6 0 -125 54 -263 121 -277 132 -322 146 -387 112z m1522
                                    -1539 c70 -36 283 -191 300 -219 14 -23 18 -43 15 -83 -4 -52 -22 -81 -573
                                    -905 -313 -468 -584 -869 -603 -890 -71 -79 -154 -96 -248 -53 -42 20 -121 95
                                    -420 398 -520 527 -523 530 -533 573 -15 66 3 99 128 229 143 149 152 156 222
                                    156 l54 0 292 -291 292 -291 453 678 c307 458 464 683 484 696 37 22 96 23
                                    137 2z"></path>
                                    </g>
                                    </svg>
                                </span>
                            </h6>
                            <div class="quotes-img">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M1715 4578 c-42 -16 -1004 -658 -1092 -730 -165 -134 -324 -335 -422
                                -533 -73 -147 -113 -261 -148 -419 l-27 -121 -3 -1079 c-3 -815 -1 -1087 8
                                -1108 25 -61 -20 -58 1014 -58 l947 0 29 29 29 29 0 947 c0 1028 2 987 -55
                                1013 -19 9 -209 12 -745 12 l-720 0 0 54 c0 198 97 467 232 648 108 142 182
                                200 704 549 314 209 504 342 526 368 136 159 18 412 -192 410 -30 0 -68 -5
                                -85 -11z"></path>
                                <path d="M4759 4576 c-45 -18 -946 -617 -1054 -702 -304 -238 -517 -581 -607
                                -979 -22 -100 -22 -100 -25 -1203 l-4 -1103 30 -29 29 -30 947 0 c1028 0 987
                                -2 1013 55 9 19 12 259 12 966 l0 941 -34 34 -34 34 -726 0 -726 0 0 66 c0 80
                                32 242 65 329 66 177 143 295 279 431 93 92 142 127 586 423 267 178 498 335
                                513 350 119 109 92 314 -50 398 -54 31 -158 41 -214 19z"></path>
                                </g>
                                </svg>
                            </div>
                            <p>After two failed transplants, I was contemplating a third. But 3 months into treatment, my hair is denser, haircut days are good days again.</p>
                        </div>
                        <div class="men-get-image longEnough mCustomScrollbar" data-mcs-theme="dark">
                            <img src="{{asset('frontend_new/images/abdul-rehman1.jpg')}}" alt="img">
                            <img src="{{asset('frontend_new/images/harry2.jpg')}}" alt="img">
                            <!-- <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/abdul-rehman1.jpg" alt="img">
                            <img src="{{asset('frontend_new/images/abdul-rehman2.png')}}" alt="img">
                            <img src="{{asset('frontend_new/images/abdul-rehman1.jpg')}}" alt="img">
                            <img src="{{asset('frontend_new/images/abdul-rehman2.png')}}" alt="img"> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="men-get-box">
                        <div class="men-get-text">
                            <h4>Eddy</h4>
                            <h6>Verified review
                                <span>
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                    <path d="M1910 5083 c-25 -13 -85 -84 -210 -250 -96 -127 -178 -235 -182 -239
                                    -4 -4 -142 -12 -307 -19 -320 -12 -328 -14 -374 -69 -30 -36 -36 -59 -82 -349
                                    -25 -155 -47 -282 -48 -283 -1 -1 -112 -66 -247 -143 -154 -89 -257 -155 -277
                                    -177 -59 -67 -57 -85 49 -405 l94 -283 -158 -249 c-88 -140 -160 -265 -164
                                    -284 -14 -75 6 -106 180 -273 88 -86 186 -180 217 -210 l57 -55 -25 -297 -25
                                    -298 23 -47 c14 -27 37 -55 54 -65 17 -9 149 -51 295 -93 146 -41 271 -79 278
                                    -83 7 -4 63 -124 123 -266 61 -143 119 -272 129 -287 25 -34 83 -62 129 -61
                                    20 0 159 25 310 57 238 49 275 54 290 42 119 -102 424 -346 451 -359 44 -23
                                    96 -23 140 0 27 13 332 257 451 359 15 12 52 7 290 -42 151 -32 290 -57 310
                                    -57 46 -1 104 27 129 61 10 15 68 144 129 287 60 142 116 262 123 266 7 4 132
                                    42 278 83 146 42 279 84 295 93 17 10 40 38 54 65 l23 47 -25 298 -25 297 57
                                    55 c31 30 129 124 217 210 174 167 194 198 180 272 -3 19 -77 146 -164 284
                                    l-158 249 94 284 c106 320 108 338 49 405 -20 22 -124 88 -276 176 -135 77
                                    -246 142 -247 143 -2 2 -24 129 -49 284 -24 155 -49 292 -54 306 -17 43 -67
                                    84 -118 95 -26 6 -147 14 -268 17 -121 3 -243 8 -272 11 l-52 6 -175 234 c-97
                                    128 -187 241 -201 250 -15 9 -48 19 -75 22 -46 4 -64 -3 -314 -122 -146 -69
                                    -270 -126 -276 -126 -6 0 -125 54 -263 121 -277 132 -322 146 -387 112z m1522
                                    -1539 c70 -36 283 -191 300 -219 14 -23 18 -43 15 -83 -4 -52 -22 -81 -573
                                    -905 -313 -468 -584 -869 -603 -890 -71 -79 -154 -96 -248 -53 -42 20 -121 95
                                    -420 398 -520 527 -523 530 -533 573 -15 66 3 99 128 229 143 149 152 156 222
                                    156 l54 0 292 -291 292 -291 453 678 c307 458 464 683 484 696 37 22 96 23
                                    137 2z"></path>
                                    </g>
                                    </svg>
                                </span>
                            </h6>
                            <div class="quotes-img">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M1715 4578 c-42 -16 -1004 -658 -1092 -730 -165 -134 -324 -335 -422
                                -533 -73 -147 -113 -261 -148 -419 l-27 -121 -3 -1079 c-3 -815 -1 -1087 8
                                -1108 25 -61 -20 -58 1014 -58 l947 0 29 29 29 29 0 947 c0 1028 2 987 -55
                                1013 -19 9 -209 12 -745 12 l-720 0 0 54 c0 198 97 467 232 648 108 142 182
                                200 704 549 314 209 504 342 526 368 136 159 18 412 -192 410 -30 0 -68 -5
                                -85 -11z"></path>
                                <path d="M4759 4576 c-45 -18 -946 -617 -1054 -702 -304 -238 -517 -581 -607
                                -979 -22 -100 -22 -100 -25 -1203 l-4 -1103 30 -29 29 -30 947 0 c1028 0 987
                                -2 1013 55 9 19 12 259 12 966 l0 941 -34 34 -34 34 -726 0 -726 0 0 66 c0 80
                                32 242 65 329 66 177 143 295 279 431 93 92 142 127 586 423 267 178 498 335
                                513 350 119 109 92 314 -50 398 -54 31 -158 41 -214 19z"></path>
                                </g>
                                </svg>
                            </div>
                            <p>I struggled with thinning hair and wasted time on various serums/oils with no results. Since starting my treatment, my hair has done a 180 - it’s now fuller and denser</p>
                        </div>
                        <div class="men-get-image longEnough mCustomScrollbar" data-mcs-theme="dark">
                            <img src="{{asset('frontend_new/images/abdulrehman1.jpg')}}" alt="img">
                            <img src="{{asset('frontend_new/images/abdulrehman2.png')}}" alt="img">
                            <!-- <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/abdulrehman1.JPG" alt="img">
                            <img src="{{asset('frontend_new/images/abdulrehman2.png')}}" alt="img">
                            <img src="{{asset('frontend_new/images/abdulrehman1.jpg')}}" alt="img">
                            <img src="{{asset('frontend_new/images/abdulrehman2.png')}}" alt="img"> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="men-get-box">
                        <div class="men-get-text">
                            <h4>James</h4>
                            <h6>Verified review
                                <span>
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                    <path d="M1910 5083 c-25 -13 -85 -84 -210 -250 -96 -127 -178 -235 -182 -239
                                    -4 -4 -142 -12 -307 -19 -320 -12 -328 -14 -374 -69 -30 -36 -36 -59 -82 -349
                                    -25 -155 -47 -282 -48 -283 -1 -1 -112 -66 -247 -143 -154 -89 -257 -155 -277
                                    -177 -59 -67 -57 -85 49 -405 l94 -283 -158 -249 c-88 -140 -160 -265 -164
                                    -284 -14 -75 6 -106 180 -273 88 -86 186 -180 217 -210 l57 -55 -25 -297 -25
                                    -298 23 -47 c14 -27 37 -55 54 -65 17 -9 149 -51 295 -93 146 -41 271 -79 278
                                    -83 7 -4 63 -124 123 -266 61 -143 119 -272 129 -287 25 -34 83 -62 129 -61
                                    20 0 159 25 310 57 238 49 275 54 290 42 119 -102 424 -346 451 -359 44 -23
                                    96 -23 140 0 27 13 332 257 451 359 15 12 52 7 290 -42 151 -32 290 -57 310
                                    -57 46 -1 104 27 129 61 10 15 68 144 129 287 60 142 116 262 123 266 7 4 132
                                    42 278 83 146 42 279 84 295 93 17 10 40 38 54 65 l23 47 -25 298 -25 297 57
                                    55 c31 30 129 124 217 210 174 167 194 198 180 272 -3 19 -77 146 -164 284
                                    l-158 249 94 284 c106 320 108 338 49 405 -20 22 -124 88 -276 176 -135 77
                                    -246 142 -247 143 -2 2 -24 129 -49 284 -24 155 -49 292 -54 306 -17 43 -67
                                    84 -118 95 -26 6 -147 14 -268 17 -121 3 -243 8 -272 11 l-52 6 -175 234 c-97
                                    128 -187 241 -201 250 -15 9 -48 19 -75 22 -46 4 -64 -3 -314 -122 -146 -69
                                    -270 -126 -276 -126 -6 0 -125 54 -263 121 -277 132 -322 146 -387 112z m1522
                                    -1539 c70 -36 283 -191 300 -219 14 -23 18 -43 15 -83 -4 -52 -22 -81 -573
                                    -905 -313 -468 -584 -869 -603 -890 -71 -79 -154 -96 -248 -53 -42 20 -121 95
                                    -420 398 -520 527 -523 530 -533 573 -15 66 3 99 128 229 143 149 152 156 222
                                    156 l54 0 292 -291 292 -291 453 678 c307 458 464 683 484 696 37 22 96 23
                                    137 2z"></path>
                                    </g>
                                    </svg>
                                </span>
                            </h6>
                            <div class="quotes-img">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M1715 4578 c-42 -16 -1004 -658 -1092 -730 -165 -134 -324 -335 -422
                                -533 -73 -147 -113 -261 -148 -419 l-27 -121 -3 -1079 c-3 -815 -1 -1087 8
                                -1108 25 -61 -20 -58 1014 -58 l947 0 29 29 29 29 0 947 c0 1028 2 987 -55
                                1013 -19 9 -209 12 -745 12 l-720 0 0 54 c0 198 97 467 232 648 108 142 182
                                200 704 549 314 209 504 342 526 368 136 159 18 412 -192 410 -30 0 -68 -5
                                -85 -11z"></path>
                                <path d="M4759 4576 c-45 -18 -946 -617 -1054 -702 -304 -238 -517 -581 -607
                                -979 -22 -100 -22 -100 -25 -1203 l-4 -1103 30 -29 29 -30 947 0 c1028 0 987
                                -2 1013 55 9 19 12 259 12 966 l0 941 -34 34 -34 34 -726 0 -726 0 0 66 c0 80
                                32 242 65 329 66 177 143 295 279 431 93 92 142 127 586 423 267 178 498 335
                                513 350 119 109 92 314 -50 398 -54 31 -158 41 -214 19z"></path>
                                </g>
                                </svg>
                            </div>
                            <p>From a forced buzz cut due to thinning, to thicker, fuller hair in just 8 months. The change is undeniable.</p>
                        </div>
                        <div class="men-get-image longEnough mCustomScrollbar" data-mcs-theme="dark">
                            <img src="{{asset('frontend_new/images/abdul1.jpg')}}" alt="img">
                            <img src="{{asset('frontend_new/images/abdul2.png')}}" alt="img">
                            <img src="{{asset('frontend_new/images/abdul3%20(2).jpg')}}" alt="img">
                            <!-- <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/abdul3.jpg" alt="img">
                            <img src="{{asset('frontend_new/images/abdul1.png')}}" alt="img">
                            <img src="{{asset('frontend_new/images/abdul2.png')}}" alt="img">
                            <img src="{{asset('frontend_new/images/abdul3.jpg')}}" alt="img"> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- Men getting html end -->
<section class="pro-get-started">
    <div class="container-xxl container">
        <div class="get-started-inr d-flex">
            <h2 class="text-white">Reclaim Your Hair Just Like These Gentlemen Did!</h2>
            <a class="pure-white-btn" href="{{ route('questionnaire.index', $products[0]->category_id) }}">Get Started</a>
        </div>
    </div>
</section>
<!-- science behind how our treatments work html start -->
<section class="bread-journey-sec sci-behind-sec">
    <div class="container-xxl container">
        <div class="">
            <h2 class="text-center big-heading">The Science</h2>
            <h4 class="text-center big-heading">How we have you <span>covered</span></h4>
            <p class="pro_desc text-center">
                Did you know that two-thirds of men under the age of 35 suffer from male pattern baldness (MPB)? Once it starts, it often accelerates as time goes by. Agent is here to reverse this process.<br>
                Not only do our hair growth treatments put a halt to the process, but they also trigger the growth of new hair. Our hair loss experts are here to address the effects of genetics that lead to male pattern baldness.<br>
                Tell us about the nature of your hair loss, and we’ll prescribe the ideal treatment for you.


            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 ques-col-margin">
                <div class="bread-journey-box">
                  <figure class="sci-behind-img">
                  <img src="{{ asset('frontend_new/images/hair-loss1.png') }}" alt="treatment" />
                  </figure>

                    <div class="bread-journey-heading">
                        <h4>Why Do Men Lose Their Hair?</h4>
                        <p class="pro_desc">DHT, the byproduct of testosterone, is the offending chemical that causes hair loss in men. DHT can shrink and weaken hair follicles over time — causing them to fall out and stop growing.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 ques-col-margin">
                <div class="bread-journey-box">
                    <figure class="sci-behind-img">
                    <img src="{{ asset('frontend_new/images/hair-loss2.png') }}" alt="treatment" />
                    </figure>
                    <div class="bread-journey-heading">
                        <h4>Why Is Finasteride an Effective Solution?</h4>
                        <p class="pro_desc">Think of finasteride as your personal defence system against hair thinning. It skilfully intercepts the enzymes that transform testosterone into DHT. By reducing DHT levels, finasteride safeguards your hair follicles from shrinking and falling out.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 ques-col-margin">
                <div class="bread-journey-box">
                    <figure class="sci-behind-img">
                    <img src="{{ asset('frontend_new/images/hair-loss3.png') }}" alt="treatment" />
                    </figure>

                    <div class="bread-journey-heading">
                        <h4>Why Minoxidil is an effective solution</h4>
                        <p class="pro_desc">Minoxidil amplifies blood circulation to your hair follicles, enriching them with nutrients for robust growth. By extending your hair's growth phase, it boosts hair density and fosters regrowth. The outcome? Thicker, fuller hair for a mane of confidence.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--science behind how our treatments work html end  -->
<!-- Clinically proven treatment to stop hair loss and improve growth start-->
<section class="Save-hair-banner faq improve-growth-banner">
    <div class="container-xxl container">
        <div class="row">
            <div class="col-xl-6 col-sm-12">
                <div class="improve-growth-content ">
                    <div class="">
                        <h4 class="big-heading">Clinically Proven Hair Regrowth Treatments That Deliver <span>Real Results</span></h4>
                        <p class="pro_desc mb-30">Take control of your hair loss and win the war against DHT, using our effective clinically proven treatments to rejuvenate hair growth. It really works!</p>
                    </div>
                </div>
                <div class="accordion" id="questionaccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Do these treatments work for everyone?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#questionaccordion">
                            <div class="accordion-body">
                            In clinical studies 94% reported positive results when the two treatments were combined, so not absolutely everyone but pretty damn close.
                             An impressive 83% of respondents reported regrowth after taking Finasteride alone. Whilst another study revealed that 70% of Minoxidil users reported the growth of new follicles.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Are there any side effects related to hair growth treatments?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#questionaccordion">
                            <div class="accordion-body">
                            While there are a few side effects related to the use of Minoxidil and Finasteride, they’re not common and, in most cases,
                             relatively mild. Minoxidil side effects, for example, are usually down to over-application. Among the most common are dizziness,
                              drowsiness, abnormal hair growth (hypertrichosis), headaches, palpitations and low blood pressure. Oral Finasteride can, in uncommon
                               circumstances, cause issues such as erectile dysfunction, reduced ejaculation volume and decreased libido.
                            Although studies have found topical finasteride was found to have less reported none of these side effects. </br>

                            Both Minoxidil and Finasteride are fully licensed in the UK for hair loss, which means their efficacy and safety is tested and proven.
                             Check the packaging for application or dosage instructions and a product literature for full list of potential side effects.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               How long before I see hair regrowth?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#questionaccordion">
                            <div class="accordion-body">
                            While both Minoxidil and Finasteride are clinically proven to be very effective,
                            hair growth is a slow process at the best of times. For the first two or three
                             months, you may struggle to notice any discernible changes to your scalp, but
                             stick with it! After around three to six months of treatments, you should notice
                              new hairs sprouting in the worst-affected areas. Just follow the application or
                               dosage instructions and remain patient!

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Do I have to take pills?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#questionaccordion">
                            <div class="accordion-body">
                            If you’re prescribed Minoxidil, you will have to apply it directly to your scalp.
                             Over time, it should increase blood flow to your hair follicles and trigger hair
                              growth. Finasteride is available as both a topical solution and a pill that’s taken
                               orally. Depending on the nature of your hair, our clinicians will decide which option is best for you.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mprove-growth-citation phone-none">
                    <h4>citations</h4>
                    <ul class="mprove-grow">
                        <li class="mprove-grow-inner">
                            <a href="javascript:void(0)">
                                     <?xml version="1.0" standalone="no"?>
                                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                        "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                        width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                        preserveAspectRatio="xMidYMid meet">

                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path d="M1640 4850 c-345 -16 -598 -105 -792 -277 -199 -176 -312 -407 -354
                                        -723 -20 -155 -20 -2425 0 -2580 42 -316 155 -547 354 -723 152 -135 360 -225
                                        605 -261 156 -24 2058 -24 2214 0 462 68 771 317 902 727 68 212 64 137 68
                                        1472 3 838 1 1244 -7 1320 -59 586 -387 938 -962 1031 -90 14 -218 17 -983 19
                                        -484 2 -954 -1 -1045 -5z m10 -1080 c0 -508 4 -776 11 -810 15 -72 64 -137
                                        129 -174 48 -27 64 -31 130 -31 58 0 85 6 117 22 22 13 148 120 278 240 131
                                        120 240 219 244 220 3 2 114 -97 246 -219 150 -138 257 -229 285 -241 61 -29
                                        159 -29 220 0 58 26 108 76 134 133 21 44 21 57 24 834 l3 789 89 -7 c105 -8
                                        250 -43 334 -80 232 -103 377 -324 415 -631 15 -123 15 -2367 0 -2502 -45
                                        -407 -266 -644 -660 -708 -140 -22 -2038 -22 -2178 0 -392 64 -610 296 -660
                                        700 -7 61 -11 467 -11 1255 0 788 4 1194 11 1255 23 186 93 360 189 468 129
                                        144 363 240 598 246 l52 1 0 -760z m1500 63 l0 -697 -32 31 c-288 269 -420
                                        382 -464 397 -61 20 -127 20 -188 0 -46 -16 -70 -37 -468 -402 l-28 -26 0 697
                                        0 697 590 0 590 0 0 -697z"/>
                                        <path d="M2752 2273 c-49 -24 -75 -68 -80 -132 -4 -66 20 -111 78 -145 34 -20
                                        49 -21 530 -21 481 0 496 1 530 21 58 34 82 79 78 145 -5 65 -32 109 -82 133
                                        -30 14 -93 16 -528 16 -434 0 -497 -2 -526 -17z"/>
                                        <path d="M1852 1423 c-18 -9 -45 -32 -60 -51 -39 -51 -38 -134 0 -184 56 -73
                                        -12 -69 1047 -66 946 3 950 3 978 24 98 73 98 195 0 268 -28 21 -32 21 -980
                                        23 -866 2 -955 1 -985 -14z"/>
                                        </g>
                                        </svg>

                                <span> minoxidil increases blood flow to the follicles and actively increases how long they stay in the growth phase of
                                    the hair. Keeping new follicles coming back in actively fertilising your hair growth.</span>
                            </a>
                        </li>
                        <li class="mprove-grow-inner">
                            <a href="javascript:void(0)">
                                <?xml version="1.0" standalone="no"?>
                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                fill="#000000" stroke="none">
                                <path d="M1640 4850 c-345 -16 -598 -105 -792 -277 -199 -176 -312 -407 -354
                                -723 -20 -155 -20 -2425 0 -2580 42 -316 155 -547 354 -723 152 -135 360 -225
                                605 -261 156 -24 2058 -24 2214 0 462 68 771 317 902 727 68 212 64 137 68
                                1472 3 838 1 1244 -7 1320 -59 586 -387 938 -962 1031 -90 14 -218 17 -983 19
                                -484 2 -954 -1 -1045 -5z m10 -1080 c0 -508 4 -776 11 -810 15 -72 64 -137
                                129 -174 48 -27 64 -31 130 -31 58 0 85 6 117 22 22 13 148 120 278 240 131
                                120 240 219 244 220 3 2 114 -97 246 -219 150 -138 257 -229 285 -241 61 -29
                                159 -29 220 0 58 26 108 76 134 133 21 44 21 57 24 834 l3 789 89 -7 c105 -8
                                250 -43 334 -80 232 -103 377 -324 415 -631 15 -123 15 -2367 0 -2502 -45
                                -407 -266 -644 -660 -708 -140 -22 -2038 -22 -2178 0 -392 64 -610 296 -660
                                700 -7 61 -11 467 -11 1255 0 788 4 1194 11 1255 23 186 93 360 189 468 129
                                144 363 240 598 246 l52 1 0 -760z m1500 63 l0 -697 -32 31 c-288 269 -420
                                382 -464 397 -61 20 -127 20 -188 0 -46 -16 -70 -37 -468 -402 l-28 -26 0 697
                                0 697 590 0 590 0 0 -697z"/>
                                <path d="M2752 2273 c-49 -24 -75 -68 -80 -132 -4 -66 20 -111 78 -145 34 -20
                                49 -21 530 -21 481 0 496 1 530 21 58 34 82 79 78 145 -5 65 -32 109 -82 133
                                -30 14 -93 16 -528 16 -434 0 -497 -2 -526 -17z"/>
                                <path d="M1852 1423 c-18 -9 -45 -32 -60 -51 -39 -51 -38 -134 0 -184 56 -73
                                -12 -69 1047 -66 946 3 950 3 978 24 98 73 98 195 0 268 -28 21 -32 21 -980
                                23 -866 2 -955 1 -985 -14z"/>
                                </g>
                                </svg>

                                <span> Finasteride also clinically proven blocks the effect of DHT thus preventing it from weakening and thinning
                                    your hair follicles.</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12">
                <div class="graph-image">
                    <svg viewBox="0 0 862 820" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M671.61 801.97C671.61 800.603 671.91 799.411 672.51 798.395C673.127 797.361 673.927 796.553 674.91 795.97C675.894 795.386 676.96 795.095 678.11 795.095C678.944 795.095 679.702 795.203 680.385 795.42C681.085 795.636 681.719 795.945 682.285 796.345C682.852 796.728 683.335 797.178 683.735 797.695V794.895C683.002 794.245 682.202 793.761 681.335 793.445C680.469 793.128 679.394 792.97 678.11 792.97C676.894 792.97 675.752 793.195 674.685 793.645C673.635 794.078 672.71 794.703 671.91 795.52C671.11 796.32 670.485 797.27 670.035 798.37C669.585 799.47 669.36 800.67 669.36 801.97C669.36 803.27 669.585 804.47 670.035 805.57C670.485 806.67 671.11 807.628 671.91 808.445C672.71 809.245 673.635 809.87 674.685 810.32C675.752 810.753 676.894 810.97 678.11 810.97C679.394 810.97 680.469 810.811 681.335 810.495C682.202 810.178 683.002 809.695 683.735 809.045V806.245C683.335 806.761 682.852 807.22 682.285 807.62C681.719 808.003 681.085 808.303 680.385 808.52C679.702 808.736 678.944 808.845 678.11 808.845C676.96 808.845 675.894 808.553 674.91 807.97C673.927 807.386 673.127 806.578 672.51 805.545C671.91 804.511 671.61 803.32 671.61 801.97ZM686.35 804.97C686.35 806.12 686.608 807.153 687.125 808.07C687.658 808.97 688.375 809.678 689.275 810.195C690.175 810.711 691.183 810.97 692.3 810.97C693.433 810.97 694.441 810.711 695.325 810.195C696.225 809.678 696.933 808.97 697.45 808.07C697.983 807.153 698.25 806.12 698.25 804.97C698.25 803.803 697.983 802.77 697.45 801.87C696.933 800.97 696.225 800.261 695.325 799.745C694.441 799.228 693.433 798.97 692.3 798.97C691.183 798.97 690.175 799.228 689.275 799.745C688.375 800.261 687.658 800.97 687.125 801.87C686.608 802.77 686.35 803.803 686.35 804.97ZM688.375 804.97C688.375 804.17 688.541 803.461 688.875 802.845C689.225 802.211 689.691 801.72 690.275 801.37C690.875 801.02 691.55 800.845 692.3 800.845C693.05 800.845 693.716 801.02 694.3 801.37C694.9 801.72 695.366 802.211 695.7 802.845C696.05 803.461 696.225 804.17 696.225 804.97C696.225 805.77 696.05 806.478 695.7 807.095C695.366 807.711 694.9 808.203 694.3 808.57C693.716 808.92 693.05 809.095 692.3 809.095C691.55 809.095 690.875 808.92 690.275 808.57C689.691 808.203 689.225 807.711 688.875 807.095C688.541 806.478 688.375 805.77 688.375 804.97ZM716.747 803.47C716.747 802.52 716.597 801.711 716.297 801.045C716.014 800.361 715.597 799.845 715.047 799.495C714.497 799.145 713.83 798.97 713.047 798.97C712.28 798.97 711.597 799.153 710.997 799.52C710.397 799.87 709.897 800.403 709.497 801.12C709.23 800.436 708.805 799.911 708.222 799.545C707.655 799.161 706.972 798.97 706.172 798.97C705.455 798.97 704.83 799.128 704.297 799.445C703.78 799.761 703.347 800.245 702.997 800.895V799.22H700.997V810.72H702.997V803.72C702.997 803.12 703.105 802.603 703.322 802.17C703.539 801.736 703.847 801.411 704.247 801.195C704.647 800.961 705.122 800.845 705.672 800.845C706.422 800.845 706.972 801.078 707.322 801.545C707.689 802.011 707.872 802.736 707.872 803.72V810.72H709.872V803.72C709.872 803.12 709.98 802.603 710.197 802.17C710.414 801.736 710.722 801.411 711.122 801.195C711.522 800.961 711.997 800.845 712.547 800.845C713.297 800.845 713.847 801.078 714.197 801.545C714.564 802.011 714.747 802.736 714.747 803.72V810.72H716.747V803.47ZM722.379 791.22H720.379V810.72H722.379V791.22ZM732.004 804.97C732.004 803.72 731.746 802.653 731.229 801.77C730.712 800.87 730.021 800.178 729.154 799.695C728.304 799.211 727.354 798.97 726.304 798.97C725.354 798.97 724.512 799.211 723.779 799.695C723.062 800.178 722.496 800.87 722.079 801.77C721.679 802.653 721.479 803.72 721.479 804.97C721.479 806.203 721.679 807.27 722.079 808.17C722.496 809.07 723.062 809.761 723.779 810.245C724.512 810.728 725.354 810.97 726.304 810.97C727.354 810.97 728.304 810.728 729.154 810.245C730.021 809.761 730.712 809.07 731.229 808.17C731.746 807.27 732.004 806.203 732.004 804.97ZM729.979 804.97C729.979 805.853 729.796 806.603 729.429 807.22C729.079 807.836 728.604 808.303 728.004 808.62C727.421 808.936 726.771 809.095 726.054 809.095C725.471 809.095 724.896 808.936 724.329 808.62C723.762 808.303 723.296 807.836 722.929 807.22C722.562 806.603 722.379 805.853 722.379 804.97C722.379 804.086 722.562 803.336 722.929 802.72C723.296 802.103 723.762 801.636 724.329 801.32C724.896 801.003 725.471 800.845 726.054 800.845C726.771 800.845 727.421 801.003 728.004 801.32C728.604 801.636 729.079 802.103 729.429 802.72C729.796 803.336 729.979 804.086 729.979 804.97ZM734.762 794.47C734.762 794.836 734.895 795.161 735.162 795.445C735.445 795.711 735.77 795.845 736.137 795.845C736.52 795.845 736.845 795.711 737.112 795.445C737.378 795.161 737.512 794.836 737.512 794.47C737.512 794.086 737.378 793.761 737.112 793.495C736.845 793.228 736.52 793.095 736.137 793.095C735.77 793.095 735.445 793.228 735.162 793.495C734.895 793.761 734.762 794.086 734.762 794.47ZM735.137 799.22V810.72H737.137V799.22H735.137ZM748.631 803.72V810.72H750.631V803.47C750.631 802.086 750.273 800.995 749.556 800.195C748.856 799.378 747.898 798.97 746.681 798.97C745.931 798.97 745.264 799.136 744.681 799.47C744.114 799.803 743.639 800.32 743.256 801.02V799.22H741.256V810.72H743.256V803.72C743.256 803.153 743.373 802.653 743.606 802.22C743.856 801.786 744.198 801.453 744.631 801.22C745.081 800.97 745.598 800.845 746.181 800.845C746.981 800.845 747.589 801.086 748.006 801.57C748.423 802.053 748.631 802.77 748.631 803.72ZM758.841 810.97C760.074 810.97 761.141 810.728 762.041 810.245C762.957 809.745 763.716 809.011 764.316 808.045L762.691 807.02C762.274 807.72 761.766 808.245 761.166 808.595C760.566 808.928 759.874 809.095 759.091 809.095C758.307 809.095 757.641 808.928 757.091 808.595C756.541 808.261 756.124 807.778 755.841 807.145C755.557 806.511 755.416 805.745 755.416 804.845C755.432 803.961 755.582 803.22 755.866 802.62C756.166 802.003 756.582 801.536 757.116 801.22C757.666 800.886 758.324 800.72 759.091 800.72C759.741 800.72 760.307 800.861 760.791 801.145C761.274 801.428 761.649 801.82 761.916 802.32C762.199 802.82 762.341 803.411 762.341 804.095C762.341 804.211 762.316 804.361 762.266 804.545C762.216 804.711 762.166 804.836 762.116 804.92L762.916 803.77H754.666V805.47H764.491C764.491 805.436 764.491 805.361 764.491 805.245C764.507 805.111 764.516 804.986 764.516 804.87C764.516 803.653 764.299 802.603 763.866 801.72C763.432 800.836 762.807 800.161 761.991 799.695C761.191 799.211 760.224 798.97 759.091 798.97C757.957 798.97 756.957 799.22 756.091 799.72C755.241 800.22 754.574 800.92 754.091 801.82C753.624 802.72 753.391 803.77 753.391 804.97C753.391 806.153 753.616 807.195 754.066 808.095C754.532 808.995 755.174 809.703 755.991 810.22C756.824 810.72 757.774 810.97 758.841 810.97ZM775.882 791.22V810.72H777.882V791.22H775.882ZM766.257 804.97C766.257 806.203 766.515 807.27 767.032 808.17C767.549 809.07 768.24 809.761 769.107 810.245C769.974 810.728 770.924 810.97 771.957 810.97C772.924 810.97 773.765 810.728 774.482 810.245C775.199 809.761 775.757 809.07 776.157 808.17C776.574 807.27 776.782 806.203 776.782 804.97C776.782 803.72 776.574 802.653 776.157 801.77C775.757 800.87 775.199 800.178 774.482 799.695C773.765 799.211 772.924 798.97 771.957 798.97C770.924 798.97 769.974 799.211 769.107 799.695C768.24 800.178 767.549 800.87 767.032 801.77C766.515 802.653 766.257 803.72 766.257 804.97ZM768.282 804.97C768.282 804.086 768.457 803.336 768.807 802.72C769.174 802.103 769.657 801.636 770.257 801.32C770.857 801.003 771.507 800.845 772.207 800.845C772.79 800.845 773.365 801.003 773.932 801.32C774.499 801.636 774.965 802.103 775.332 802.72C775.699 803.336 775.882 804.086 775.882 804.97C775.882 805.853 775.699 806.603 775.332 807.22C774.965 807.836 774.499 808.303 773.932 808.62C773.365 808.936 772.79 809.095 772.207 809.095C771.507 809.095 770.857 808.936 770.257 808.62C769.657 808.303 769.174 807.836 768.807 807.22C768.457 806.603 768.282 805.853 768.282 804.97Z" fill="#242423" fill-opacity="0.7"/>
                    <path d="M470.521 795.22H478.346V793.22H470.521V795.22ZM470.521 802.22H478.096V800.22H470.521V802.22ZM469.346 793.22V810.72H471.471V793.22H469.346ZM481.721 794.47C481.721 794.836 481.855 795.161 482.121 795.445C482.405 795.711 482.73 795.845 483.096 795.845C483.48 795.845 483.805 795.711 484.071 795.445C484.338 795.161 484.471 794.836 484.471 794.47C484.471 794.086 484.338 793.761 484.071 793.495C483.805 793.228 483.48 793.095 483.096 793.095C482.73 793.095 482.405 793.228 482.121 793.495C481.855 793.761 481.721 794.086 481.721 794.47ZM482.096 799.22V810.72H484.096V799.22H482.096ZM495.59 803.72V810.72H497.59V803.47C497.59 802.086 497.232 800.995 496.515 800.195C495.815 799.378 494.857 798.97 493.64 798.97C492.89 798.97 492.224 799.136 491.64 799.47C491.074 799.803 490.599 800.32 490.215 801.02V799.22H488.215V810.72H490.215V803.72C490.215 803.153 490.332 802.653 490.565 802.22C490.815 801.786 491.157 801.453 491.59 801.22C492.04 800.97 492.557 800.845 493.14 800.845C493.94 800.845 494.549 801.086 494.965 801.57C495.382 802.053 495.59 802.77 495.59 803.72ZM502.25 807.17C502.25 806.753 502.35 806.395 502.55 806.095C502.75 805.795 503.05 805.561 503.45 805.395C503.867 805.228 504.4 805.145 505.05 805.145C505.75 805.145 506.408 805.236 507.025 805.42C507.642 805.586 508.242 805.87 508.825 806.27V805.095C508.708 804.945 508.483 804.753 508.15 804.52C507.817 804.27 507.367 804.053 506.8 803.87C506.25 803.67 505.558 803.57 504.725 803.57C503.308 803.57 502.2 803.911 501.4 804.595C500.617 805.261 500.225 806.153 500.225 807.27C500.225 808.053 500.408 808.72 500.775 809.27C501.142 809.82 501.625 810.245 502.225 810.545C502.842 810.828 503.5 810.97 504.2 810.97C504.833 810.97 505.467 810.853 506.1 810.62C506.75 810.386 507.292 810.028 507.725 809.545C508.175 809.061 508.4 808.453 508.4 807.72L508 806.22C508 806.82 507.85 807.353 507.55 807.82C507.267 808.27 506.875 808.62 506.375 808.87C505.892 809.12 505.342 809.245 504.725 809.245C504.242 809.245 503.808 809.17 503.425 809.02C503.058 808.853 502.767 808.611 502.55 808.295C502.35 807.978 502.25 807.603 502.25 807.17ZM501.95 801.87C502.133 801.736 502.383 801.578 502.7 801.395C503.017 801.211 503.4 801.053 503.85 800.92C504.317 800.786 504.833 800.72 505.4 800.72C505.75 800.72 506.083 800.753 506.4 800.82C506.717 800.886 506.992 800.995 507.225 801.145C507.475 801.295 507.667 801.503 507.8 801.77C507.933 802.02 508 802.345 508 802.745V810.72H510V802.47C510 801.72 509.808 801.086 509.425 800.57C509.058 800.053 508.533 799.661 507.85 799.395C507.183 799.111 506.4 798.97 505.5 798.97C504.433 798.97 503.517 799.128 502.75 799.445C502 799.761 501.408 800.078 500.975 800.395L501.95 801.87ZM513.861 807.195L512.286 808.17C512.503 808.62 512.82 809.061 513.236 809.495C513.67 809.928 514.195 810.286 514.811 810.57C515.428 810.836 516.12 810.97 516.886 810.97C518.07 810.97 519.02 810.636 519.736 809.97C520.47 809.303 520.836 808.47 520.836 807.47C520.836 806.786 520.67 806.228 520.336 805.795C520.02 805.361 519.586 804.995 519.036 804.695C518.486 804.378 517.878 804.086 517.211 803.82C516.811 803.653 516.428 803.478 516.061 803.295C515.695 803.111 515.395 802.903 515.161 802.67C514.928 802.436 514.811 802.17 514.811 801.87C514.811 801.486 514.961 801.203 515.261 801.02C515.561 800.836 515.92 800.745 516.336 800.745C516.936 800.745 517.47 800.886 517.936 801.17C518.42 801.453 518.82 801.811 519.136 802.245L520.736 801.22C520.503 800.786 520.178 800.403 519.761 800.07C519.345 799.736 518.861 799.47 518.311 799.27C517.778 799.07 517.203 798.97 516.586 798.97C515.97 798.97 515.37 799.078 514.786 799.295C514.22 799.511 513.753 799.845 513.386 800.295C513.036 800.745 512.861 801.311 512.861 801.995C512.861 802.661 513.028 803.22 513.361 803.67C513.711 804.103 514.136 804.461 514.636 804.745C515.153 805.011 515.661 805.245 516.161 805.445C516.611 805.611 517.036 805.795 517.436 805.995C517.836 806.178 518.161 806.411 518.411 806.695C518.678 806.961 518.811 807.295 518.811 807.695C518.811 808.145 518.645 808.503 518.311 808.77C517.995 809.02 517.553 809.145 516.986 809.145C516.52 809.145 516.086 809.061 515.686 808.895C515.303 808.711 514.961 808.47 514.661 808.17C514.361 807.87 514.095 807.545 513.861 807.195ZM521.719 799.22V801.095H527.469V799.22H521.719ZM523.594 795.22V810.72H525.594V795.22H523.594ZM533.925 810.97C535.158 810.97 536.225 810.728 537.125 810.245C538.042 809.745 538.8 809.011 539.4 808.045L537.775 807.02C537.358 807.72 536.85 808.245 536.25 808.595C535.65 808.928 534.958 809.095 534.175 809.095C533.392 809.095 532.725 808.928 532.175 808.595C531.625 808.261 531.208 807.778 530.925 807.145C530.642 806.511 530.5 805.745 530.5 804.845C530.517 803.961 530.667 803.22 530.95 802.62C531.25 802.003 531.667 801.536 532.2 801.22C532.75 800.886 533.408 800.72 534.175 800.72C534.825 800.72 535.392 800.861 535.875 801.145C536.358 801.428 536.733 801.82 537 802.32C537.283 802.82 537.425 803.411 537.425 804.095C537.425 804.211 537.4 804.361 537.35 804.545C537.3 804.711 537.25 804.836 537.2 804.92L538 803.77H529.75V805.47H539.575C539.575 805.436 539.575 805.361 539.575 805.245C539.592 805.111 539.6 804.986 539.6 804.87C539.6 803.653 539.383 802.603 538.95 801.72C538.517 800.836 537.892 800.161 537.075 799.695C536.275 799.211 535.308 798.97 534.175 798.97C533.042 798.97 532.042 799.22 531.175 799.72C530.325 800.22 529.658 800.92 529.175 801.82C528.708 802.72 528.475 803.77 528.475 804.97C528.475 806.153 528.7 807.195 529.15 808.095C529.617 808.995 530.258 809.703 531.075 810.22C531.908 810.72 532.858 810.97 533.925 810.97ZM544.341 799.22H542.341V810.72H544.341V799.22ZM547.816 801.42L548.916 799.77C548.616 799.453 548.283 799.245 547.916 799.145C547.566 799.028 547.183 798.97 546.766 798.97C546.233 798.97 545.708 799.178 545.191 799.595C544.675 800.011 544.25 800.578 543.916 801.295C543.6 801.995 543.441 802.803 543.441 803.72H544.341C544.341 803.17 544.391 802.678 544.491 802.245C544.608 801.811 544.808 801.47 545.091 801.22C545.375 800.97 545.766 800.845 546.266 800.845C546.6 800.845 546.875 800.895 547.091 800.995C547.308 801.078 547.55 801.22 547.816 801.42ZM550.911 794.47C550.911 794.836 551.044 795.161 551.311 795.445C551.594 795.711 551.919 795.845 552.286 795.845C552.669 795.845 552.994 795.711 553.261 795.445C553.527 795.161 553.661 794.836 553.661 794.47C553.661 794.086 553.527 793.761 553.261 793.495C552.994 793.228 552.669 793.095 552.286 793.095C551.919 793.095 551.594 793.228 551.311 793.495C551.044 793.761 550.911 794.086 550.911 794.47ZM551.286 799.22V810.72H553.286V799.22H551.286ZM566.03 791.22V810.72H568.03V791.22H566.03ZM556.405 804.97C556.405 806.203 556.663 807.27 557.18 808.17C557.696 809.07 558.388 809.761 559.255 810.245C560.121 810.728 561.071 810.97 562.105 810.97C563.071 810.97 563.913 810.728 564.63 810.245C565.346 809.761 565.905 809.07 566.305 808.17C566.721 807.27 566.93 806.203 566.93 804.97C566.93 803.72 566.721 802.653 566.305 801.77C565.905 800.87 565.346 800.178 564.63 799.695C563.913 799.211 563.071 798.97 562.105 798.97C561.071 798.97 560.121 799.211 559.255 799.695C558.388 800.178 557.696 800.87 557.18 801.77C556.663 802.653 556.405 803.72 556.405 804.97ZM558.43 804.97C558.43 804.086 558.605 803.336 558.955 802.72C559.321 802.103 559.805 801.636 560.405 801.32C561.005 801.003 561.655 800.845 562.355 800.845C562.938 800.845 563.513 801.003 564.08 801.32C564.646 801.636 565.113 802.103 565.48 802.72C565.846 803.336 566.03 804.086 566.03 804.97C566.03 805.853 565.846 806.603 565.48 807.22C565.113 807.836 564.646 808.303 564.08 808.62C563.513 808.936 562.938 809.095 562.355 809.095C561.655 809.095 561.005 808.936 560.405 808.62C559.805 808.303 559.321 807.836 558.955 807.22C558.605 806.603 558.43 805.853 558.43 804.97ZM576.113 810.97C577.346 810.97 578.413 810.728 579.313 810.245C580.229 809.745 580.988 809.011 581.588 808.045L579.963 807.02C579.546 807.72 579.038 808.245 578.438 808.595C577.838 808.928 577.146 809.095 576.363 809.095C575.579 809.095 574.913 808.928 574.363 808.595C573.813 808.261 573.396 807.778 573.113 807.145C572.829 806.511 572.688 805.745 572.688 804.845C572.704 803.961 572.854 803.22 573.138 802.62C573.438 802.003 573.854 801.536 574.388 801.22C574.938 800.886 575.596 800.72 576.363 800.72C577.013 800.72 577.579 800.861 578.063 801.145C578.546 801.428 578.921 801.82 579.188 802.32C579.471 802.82 579.613 803.411 579.613 804.095C579.613 804.211 579.588 804.361 579.538 804.545C579.488 804.711 579.438 804.836 579.388 804.92L580.188 803.77H571.938V805.47H581.763C581.763 805.436 581.763 805.361 581.763 805.245C581.779 805.111 581.788 804.986 581.788 804.87C581.788 803.653 581.571 802.603 581.138 801.72C580.704 800.836 580.079 800.161 579.263 799.695C578.463 799.211 577.496 798.97 576.363 798.97C575.229 798.97 574.229 799.22 573.363 799.72C572.513 800.22 571.846 800.92 571.363 801.82C570.896 802.72 570.663 803.77 570.663 804.97C570.663 806.153 570.888 807.195 571.338 808.095C571.804 808.995 572.446 809.703 573.263 810.22C574.096 810.72 575.046 810.97 576.113 810.97Z" fill="#242423" fill-opacity="0.7"/>
                    <path d="M289.597 798.895L295.297 809.095L300.997 798.895L302.297 810.72H304.422L302.297 792.345L295.297 805.02L288.297 792.345L286.172 810.72H288.297L289.597 798.895ZM307.287 794.47C307.287 794.836 307.42 795.161 307.687 795.445C307.97 795.711 308.295 795.845 308.662 795.845C309.045 795.845 309.37 795.711 309.637 795.445C309.903 795.161 310.037 794.836 310.037 794.47C310.037 794.086 309.903 793.761 309.637 793.495C309.37 793.228 309.045 793.095 308.662 793.095C308.295 793.095 307.97 793.228 307.687 793.495C307.42 793.761 307.287 794.086 307.287 794.47ZM307.662 799.22V810.72H309.662V799.22H307.662ZM321.156 803.72V810.72H323.156V803.47C323.156 802.086 322.797 800.995 322.081 800.195C321.381 799.378 320.422 798.97 319.206 798.97C318.456 798.97 317.789 799.136 317.206 799.47C316.639 799.803 316.164 800.32 315.781 801.02V799.22H313.781V810.72H315.781V803.72C315.781 803.153 315.897 802.653 316.131 802.22C316.381 801.786 316.722 801.453 317.156 801.22C317.606 800.97 318.122 800.845 318.706 800.845C319.506 800.845 320.114 801.086 320.531 801.57C320.947 802.053 321.156 802.77 321.156 803.72ZM325.916 804.97C325.916 806.12 326.174 807.153 326.691 808.07C327.224 808.97 327.941 809.678 328.841 810.195C329.741 810.711 330.749 810.97 331.866 810.97C332.999 810.97 334.007 810.711 334.891 810.195C335.791 809.678 336.499 808.97 337.016 808.07C337.549 807.153 337.816 806.12 337.816 804.97C337.816 803.803 337.549 802.77 337.016 801.87C336.499 800.97 335.791 800.261 334.891 799.745C334.007 799.228 332.999 798.97 331.866 798.97C330.749 798.97 329.741 799.228 328.841 799.745C327.941 800.261 327.224 800.97 326.691 801.87C326.174 802.77 325.916 803.803 325.916 804.97ZM327.941 804.97C327.941 804.17 328.107 803.461 328.441 802.845C328.791 802.211 329.257 801.72 329.841 801.37C330.441 801.02 331.116 800.845 331.866 800.845C332.616 800.845 333.282 801.02 333.866 801.37C334.466 801.72 334.932 802.211 335.266 802.845C335.616 803.461 335.791 804.17 335.791 804.97C335.791 805.77 335.616 806.478 335.266 807.095C334.932 807.711 334.466 808.203 333.866 808.57C333.282 808.92 332.616 809.095 331.866 809.095C331.116 809.095 330.441 808.92 329.841 808.57C329.257 808.203 328.791 807.711 328.441 807.095C328.107 806.478 327.941 805.77 327.941 804.97ZM346.322 799.22L343.572 803.22L340.822 799.22H338.572L342.497 804.795L338.322 810.72H340.572L343.572 806.37L346.572 810.72H348.822L344.647 804.795L348.572 799.22H346.322ZM350.695 794.47C350.695 794.836 350.828 795.161 351.095 795.445C351.378 795.711 351.703 795.845 352.07 795.845C352.453 795.845 352.778 795.711 353.045 795.445C353.311 795.161 353.445 794.836 353.445 794.47C353.445 794.086 353.311 793.761 353.045 793.495C352.778 793.228 352.453 793.095 352.07 793.095C351.703 793.095 351.378 793.228 351.095 793.495C350.828 793.761 350.695 794.086 350.695 794.47ZM351.07 799.22V810.72H353.07V799.22H351.07ZM365.814 791.22V810.72H367.814V791.22H365.814ZM356.189 804.97C356.189 806.203 356.447 807.27 356.964 808.17C357.481 809.07 358.172 809.761 359.039 810.245C359.906 810.728 360.856 810.97 361.889 810.97C362.856 810.97 363.697 810.728 364.414 810.245C365.131 809.761 365.689 809.07 366.089 808.17C366.506 807.27 366.714 806.203 366.714 804.97C366.714 803.72 366.506 802.653 366.089 801.77C365.689 800.87 365.131 800.178 364.414 799.695C363.697 799.211 362.856 798.97 361.889 798.97C360.856 798.97 359.906 799.211 359.039 799.695C358.172 800.178 357.481 800.87 356.964 801.77C356.447 802.653 356.189 803.72 356.189 804.97ZM358.214 804.97C358.214 804.086 358.389 803.336 358.739 802.72C359.106 802.103 359.589 801.636 360.189 801.32C360.789 801.003 361.439 800.845 362.139 800.845C362.722 800.845 363.297 801.003 363.864 801.32C364.431 801.636 364.897 802.103 365.264 802.72C365.631 803.336 365.814 804.086 365.814 804.97C365.814 805.853 365.631 806.603 365.264 807.22C364.897 807.836 364.431 808.303 363.864 808.62C363.297 808.936 362.722 809.095 362.139 809.095C361.439 809.095 360.789 808.936 360.189 808.62C359.589 808.303 359.106 807.836 358.739 807.22C358.389 806.603 358.214 805.853 358.214 804.97ZM371.447 794.47C371.447 794.836 371.58 795.161 371.847 795.445C372.13 795.711 372.455 795.845 372.822 795.845C373.205 795.845 373.53 795.711 373.797 795.445C374.063 795.161 374.197 794.836 374.197 794.47C374.197 794.086 374.063 793.761 373.797 793.495C373.53 793.228 373.205 793.095 372.822 793.095C372.455 793.095 372.13 793.228 371.847 793.495C371.58 793.761 371.447 794.086 371.447 794.47ZM371.822 799.22V810.72H373.822V799.22H371.822ZM377.941 791.22V810.72H379.941V791.22H377.941Z" fill="#242423" fill-opacity="0.7"/>
                    <path d="M88.8141 805.42L87.1141 806.57C87.4974 807.336 87.9891 808.061 88.5891 808.745C89.2057 809.411 89.9141 809.953 90.7141 810.37C91.5307 810.77 92.4141 810.97 93.3641 810.97C94.0641 810.97 94.7307 810.853 95.3641 810.62C96.0141 810.386 96.5891 810.053 97.0891 809.62C97.6057 809.186 98.0057 808.661 98.2891 808.045C98.5891 807.428 98.7391 806.736 98.7391 805.97C98.7391 805.17 98.5974 804.486 98.3141 803.92C98.0307 803.336 97.6641 802.845 97.2141 802.445C96.7807 802.028 96.3057 801.686 95.7891 801.42C95.2724 801.153 94.7807 800.936 94.3141 800.77C93.2974 800.42 92.4891 800.07 91.8891 799.72C91.3057 799.353 90.8891 798.97 90.6391 798.57C90.3891 798.153 90.2641 797.703 90.2641 797.22C90.2641 796.653 90.4807 796.145 90.9141 795.695C91.3474 795.228 92.0391 794.995 92.9891 794.995C93.6724 794.995 94.2474 795.128 94.7141 795.395C95.1974 795.661 95.6057 796.003 95.9391 796.42C96.2724 796.836 96.5474 797.261 96.7641 797.695L98.5891 796.645C98.3057 796.028 97.9141 795.445 97.4141 794.895C96.9141 794.328 96.3057 793.87 95.5891 793.52C94.8891 793.153 94.0641 792.97 93.1141 792.97C92.1307 792.97 91.2557 793.17 90.4891 793.57C89.7224 793.953 89.1224 794.486 88.6891 795.17C88.2557 795.853 88.0391 796.628 88.0391 797.495C88.0391 798.295 88.1891 798.97 88.4891 799.52C88.8057 800.07 89.2057 800.536 89.6891 800.92C90.1724 801.286 90.6807 801.595 91.2141 801.845C91.7474 802.078 92.2307 802.27 92.6641 802.42C93.3307 802.653 93.9557 802.92 94.5391 803.22C95.1391 803.503 95.6224 803.878 95.9891 804.345C96.3557 804.811 96.5391 805.436 96.5391 806.22C96.5391 807.02 96.2557 807.678 95.6891 808.195C95.1224 808.711 94.3724 808.97 93.4391 808.97C92.7391 808.97 92.1141 808.82 91.5641 808.52C91.0141 808.22 90.5141 807.803 90.0641 807.27C89.6307 806.736 89.2141 806.12 88.8141 805.42ZM101.735 794.47C101.735 794.836 101.869 795.161 102.135 795.445C102.419 795.711 102.744 795.845 103.11 795.845C103.494 795.845 103.819 795.711 104.085 795.445C104.352 795.161 104.485 794.836 104.485 794.47C104.485 794.086 104.352 793.761 104.085 793.495C103.819 793.228 103.494 793.095 103.11 793.095C102.744 793.095 102.419 793.228 102.135 793.495C101.869 793.761 101.735 794.086 101.735 794.47ZM102.11 799.22V810.72H104.11V799.22H102.11ZM116.854 791.22V810.72H118.854V791.22H116.854ZM107.229 804.97C107.229 806.203 107.488 807.27 108.004 808.17C108.521 809.07 109.213 809.761 110.079 810.245C110.946 810.728 111.896 810.97 112.929 810.97C113.896 810.97 114.738 810.728 115.454 810.245C116.171 809.761 116.729 809.07 117.129 808.17C117.546 807.27 117.754 806.203 117.754 804.97C117.754 803.72 117.546 802.653 117.129 801.77C116.729 800.87 116.171 800.178 115.454 799.695C114.738 799.211 113.896 798.97 112.929 798.97C111.896 798.97 110.946 799.211 110.079 799.695C109.213 800.178 108.521 800.87 108.004 801.77C107.488 802.653 107.229 803.72 107.229 804.97ZM109.254 804.97C109.254 804.086 109.429 803.336 109.779 802.72C110.146 802.103 110.629 801.636 111.229 801.32C111.829 801.003 112.479 800.845 113.179 800.845C113.763 800.845 114.338 801.003 114.904 801.32C115.471 801.636 115.938 802.103 116.304 802.72C116.671 803.336 116.854 804.086 116.854 804.97C116.854 805.853 116.671 806.603 116.304 807.22C115.938 807.836 115.471 808.303 114.904 808.62C114.338 808.936 113.763 809.095 113.179 809.095C112.479 809.095 111.829 808.936 111.229 808.62C110.629 808.303 110.146 807.836 109.779 807.22C109.429 806.603 109.254 805.853 109.254 804.97ZM126.937 810.97C128.171 810.97 129.237 810.728 130.137 810.245C131.054 809.745 131.812 809.011 132.412 808.045L130.787 807.02C130.371 807.72 129.862 808.245 129.262 808.595C128.662 808.928 127.971 809.095 127.187 809.095C126.404 809.095 125.737 808.928 125.187 808.595C124.637 808.261 124.221 807.778 123.937 807.145C123.654 806.511 123.512 805.745 123.512 804.845C123.529 803.961 123.679 803.22 123.962 802.62C124.262 802.003 124.679 801.536 125.212 801.22C125.762 800.886 126.421 800.72 127.187 800.72C127.837 800.72 128.404 800.861 128.887 801.145C129.371 801.428 129.746 801.82 130.012 802.32C130.296 802.82 130.437 803.411 130.437 804.095C130.437 804.211 130.412 804.361 130.362 804.545C130.312 804.711 130.262 804.836 130.212 804.92L131.012 803.77H122.762V805.47H132.587C132.587 805.436 132.587 805.361 132.587 805.245C132.604 805.111 132.612 804.986 132.612 804.87C132.612 803.653 132.396 802.603 131.962 801.72C131.529 800.836 130.904 800.161 130.087 799.695C129.287 799.211 128.321 798.97 127.187 798.97C126.054 798.97 125.054 799.22 124.187 799.72C123.337 800.22 122.671 800.92 122.187 801.82C121.721 802.72 121.487 803.77 121.487 804.97C121.487 806.153 121.712 807.195 122.162 808.095C122.629 808.995 123.271 809.703 124.087 810.22C124.921 810.72 125.871 810.97 126.937 810.97ZM144.149 810.72H152.974V808.72H144.149V810.72ZM144.149 795.22H152.974V793.22H144.149V795.22ZM144.149 802.22H152.474V800.22H144.149V802.22ZM142.974 793.22V810.72H145.099V793.22H142.974ZM155.719 799.22V801.095H161.469V799.22H155.719ZM161.269 793.62L162.369 791.97C162.252 791.803 162.085 791.645 161.869 791.495C161.669 791.345 161.427 791.22 161.144 791.12C160.86 791.02 160.535 790.97 160.169 790.97C159.469 790.97 158.869 791.12 158.369 791.42C157.885 791.703 157.51 792.136 157.244 792.72C156.977 793.303 156.844 794.053 156.844 794.97V810.72H158.844V795.22C158.844 794.67 158.894 794.228 158.994 793.895C159.094 793.561 159.227 793.328 159.394 793.195C159.577 793.045 159.794 792.97 160.044 792.97C160.244 792.97 160.452 793.011 160.669 793.095C160.902 793.161 161.102 793.336 161.269 793.62ZM162.872 799.22V801.095H168.622V799.22H162.872ZM168.422 793.62L169.522 791.97C169.405 791.803 169.239 791.645 169.022 791.495C168.822 791.345 168.58 791.22 168.297 791.12C168.014 791.02 167.689 790.97 167.322 790.97C166.622 790.97 166.022 791.12 165.522 791.42C165.039 791.703 164.664 792.136 164.397 792.72C164.13 793.303 163.997 794.053 163.997 794.97V810.72H165.997V795.22C165.997 794.67 166.047 794.228 166.147 793.895C166.247 793.561 166.38 793.328 166.547 793.195C166.73 793.045 166.947 792.97 167.197 792.97C167.397 792.97 167.605 793.011 167.822 793.095C168.055 793.161 168.255 793.336 168.422 793.62ZM175.35 810.97C176.584 810.97 177.65 810.728 178.55 810.245C179.467 809.745 180.225 809.011 180.825 808.045L179.2 807.02C178.784 807.72 178.275 808.245 177.675 808.595C177.075 808.928 176.384 809.095 175.6 809.095C174.817 809.095 174.15 808.928 173.6 808.595C173.05 808.261 172.634 807.778 172.35 807.145C172.067 806.511 171.925 805.745 171.925 804.845C171.942 803.961 172.092 803.22 172.375 802.62C172.675 802.003 173.092 801.536 173.625 801.22C174.175 800.886 174.834 800.72 175.6 800.72C176.25 800.72 176.817 800.861 177.3 801.145C177.784 801.428 178.159 801.82 178.425 802.32C178.709 802.82 178.85 803.411 178.85 804.095C178.85 804.211 178.825 804.361 178.775 804.545C178.725 804.711 178.675 804.836 178.625 804.92L179.425 803.77H171.175V805.47H181C181 805.436 181 805.361 181 805.245C181.017 805.111 181.025 804.986 181.025 804.87C181.025 803.653 180.809 802.603 180.375 801.72C179.942 800.836 179.317 800.161 178.5 799.695C177.7 799.211 176.734 798.97 175.6 798.97C174.467 798.97 173.467 799.22 172.6 799.72C171.75 800.22 171.084 800.92 170.6 801.82C170.134 802.72 169.9 803.77 169.9 804.97C169.9 806.153 170.125 807.195 170.575 808.095C171.042 808.995 171.684 809.703 172.5 810.22C173.334 810.72 174.284 810.97 175.35 810.97ZM184.667 804.97C184.667 804.17 184.833 803.461 185.167 802.845C185.517 802.211 185.983 801.72 186.567 801.37C187.167 801.02 187.842 800.845 188.592 800.845C189.208 800.845 189.783 800.945 190.317 801.145C190.867 801.328 191.342 801.578 191.742 801.895C192.142 802.211 192.425 802.561 192.592 802.945V800.445C192.192 799.978 191.617 799.62 190.867 799.37C190.133 799.103 189.375 798.97 188.592 798.97C187.475 798.97 186.467 799.228 185.567 799.745C184.667 800.261 183.95 800.97 183.417 801.87C182.9 802.77 182.642 803.803 182.642 804.97C182.642 806.12 182.9 807.153 183.417 808.07C183.95 808.97 184.667 809.678 185.567 810.195C186.467 810.711 187.475 810.97 188.592 810.97C189.375 810.97 190.133 810.845 190.867 810.595C191.617 810.328 192.192 809.961 192.592 809.495V806.995C192.425 807.361 192.142 807.711 191.742 808.045C191.342 808.361 190.867 808.62 190.317 808.82C189.783 809.003 189.208 809.095 188.592 809.095C187.842 809.095 187.167 808.92 186.567 808.57C185.983 808.203 185.517 807.711 185.167 807.095C184.833 806.478 184.667 805.77 184.667 804.97ZM193.955 799.22V801.095H199.705V799.22H193.955ZM195.83 795.22V810.72H197.83V795.22H195.83Z" fill="#242423" fill-opacity="0.7"/>
                    <path d="M858.286 762.562H3.15842C2.76138 762.562 2.43652 762.154 2.43652 761.655C2.43652 761.155 2.76138 760.747 3.15842 760.747H858.286C858.683 760.747 859.008 761.155 859.008 761.655C859.008 762.154 858.683 762.562 858.286 762.562Z" fill="#DFDFDF"/>
                    <path d="M858.286 730.865H3.15842C2.76138 730.865 2.43652 730.457 2.43652 729.957C2.43652 729.458 2.76138 729.05 3.15842 729.05H858.286C858.683 729.05 859.008 729.458 859.008 729.957C859.008 730.457 858.683 730.865 858.286 730.865Z" fill="#DFDFDF"/>
                    <path d="M858.286 699.167H3.15842C2.76138 699.167 2.43652 698.758 2.43652 698.259C2.43652 697.76 2.76138 697.352 3.15842 697.352H858.286C858.683 697.352 859.008 697.76 859.008 698.259C859.008 698.758 858.683 699.167 858.286 699.167Z" fill="#DFDFDF"/>
                    <path d="M858.286 667.469H3.15842C2.76138 667.469 2.43652 667.061 2.43652 666.562C2.43652 666.063 2.76138 665.654 3.15842 665.654H858.286C858.683 665.654 859.008 666.063 859.008 666.562C859.008 667.061 858.683 667.469 858.286 667.469Z" fill="#DFDFDF"/>
                    <path d="M858.286 635.771H3.15842C2.76138 635.771 2.43652 635.363 2.43652 634.864C2.43652 634.364 2.76138 633.956 3.15842 633.956H858.286C858.683 633.956 859.008 634.364 859.008 634.864C859.008 635.363 858.683 635.771 858.286 635.771Z" fill="#DFDFDF"/>
                    <path d="M858.286 604.074H3.15842C2.76138 604.074 2.43652 603.666 2.43652 603.166C2.43652 602.667 2.76138 602.259 3.15842 602.259H858.286C858.683 602.259 859.008 602.667 859.008 603.166C859.008 603.666 858.683 604.074 858.286 604.074Z" fill="#DFDFDF"/>
                    <path d="M858.286 572.376H3.15842C2.76138 572.376 2.43652 571.967 2.43652 571.468C2.43652 570.969 2.76138 570.561 3.15842 570.561H858.286C858.683 570.561 859.008 570.969 859.008 571.468C859.008 571.967 858.683 572.376 858.286 572.376Z" fill="#DFDFDF"/>
                    <path d="M858.286 540.678H3.15842C2.76138 540.678 2.43652 540.27 2.43652 539.771C2.43652 539.272 2.76138 538.863 3.15842 538.863H858.286C858.683 538.863 859.008 539.272 859.008 539.771C859.008 540.27 858.683 540.678 858.286 540.678Z" fill="#DFDFDF"/>
                    <path d="M858.286 508.98H3.15842C2.76138 508.98 2.43652 508.572 2.43652 508.073C2.43652 507.573 2.76138 507.165 3.15842 507.165H858.286C858.683 507.165 859.008 507.573 859.008 508.073C859.008 508.572 858.683 508.98 858.286 508.98Z" fill="#DFDFDF"/>
                    <path d="M858.286 477.282H3.15842C2.76138 477.282 2.43652 476.874 2.43652 476.374C2.43652 475.875 2.76138 475.467 3.15842 475.467H858.286C858.683 475.467 859.008 475.875 859.008 476.374C859.008 476.874 858.683 477.282 858.286 477.282Z" fill="#DFDFDF"/>
                    <path d="M858.286 445.585H3.15842C2.76138 445.585 2.43652 445.176 2.43652 444.677C2.43652 444.178 2.76138 443.77 3.15842 443.77H858.286C858.683 443.77 859.008 444.178 859.008 444.677C859.008 445.176 858.683 445.585 858.286 445.585Z" fill="#DFDFDF"/>
                    <path d="M858.286 413.886H3.15842C2.76138 413.886 2.43652 413.478 2.43652 412.979C2.43652 412.48 2.76138 412.071 3.15842 412.071H858.286C858.683 412.071 859.008 412.48 859.008 412.979C859.008 413.478 858.683 413.886 858.286 413.886Z" fill="#DFDFDF"/>
                    <path d="M858.286 382.189H3.15842C2.76138 382.189 2.43652 381.781 2.43652 381.282C2.43652 380.782 2.76138 380.374 3.15842 380.374H858.286C858.683 380.374 859.008 380.782 859.008 381.282C859.008 381.781 858.683 382.189 858.286 382.189Z" fill="#DFDFDF"/>
                    <path d="M858.286 350.491H3.15842C2.76138 350.491 2.43652 350.083 2.43652 349.583C2.43652 349.084 2.76138 348.676 3.15842 348.676H858.286C858.683 348.676 859.008 349.084 859.008 349.583C859.008 350.083 858.683 350.491 858.286 350.491Z" fill="#DFDFDF"/>
                    <path d="M858.286 318.794H3.15842C2.76138 318.794 2.43652 318.385 2.43652 317.886C2.43652 317.387 2.76138 316.979 3.15842 316.979H858.286C858.683 316.979 859.008 317.387 859.008 317.886C859.008 318.385 858.683 318.794 858.286 318.794Z" fill="#DFDFDF"/>
                    <path d="M858.286 287.095H3.15842C2.76138 287.095 2.43652 286.687 2.43652 286.188C2.43652 285.689 2.76138 285.28 3.15842 285.28H858.286C858.683 285.28 859.008 285.689 859.008 286.188C859.008 286.687 858.683 287.095 858.286 287.095Z" fill="#DFDFDF"/>
                    <path d="M858.286 255.397H3.15842C2.76138 255.397 2.43652 254.989 2.43652 254.49C2.43652 253.99 2.76138 253.582 3.15842 253.582H858.286C858.683 253.582 859.008 253.99 859.008 254.49C859.008 254.989 858.683 255.397 858.286 255.397Z" fill="#DFDFDF"/>
                    <path d="M858.286 223.7H3.15842C2.76138 223.7 2.43652 223.292 2.43652 222.792C2.43652 222.293 2.76138 221.885 3.15842 221.885H858.286C858.683 221.885 859.008 222.293 859.008 222.792C859.008 223.292 858.683 223.7 858.286 223.7Z" fill="#DFDFDF"/>
                    <path d="M858.286 192.002H3.15842C2.76138 192.002 2.43652 191.593 2.43652 191.094C2.43652 190.595 2.76138 190.187 3.15842 190.187H858.286C858.683 190.187 859.008 190.595 859.008 191.094C859.008 191.593 858.683 192.002 858.286 192.002Z" fill="#DFDFDF"/>
                    <path d="M858.286 160.304H3.15842C2.76138 160.304 2.43652 159.896 2.43652 159.397C2.43652 158.898 2.76138 158.489 3.15842 158.489H858.286C858.683 158.489 859.008 158.898 859.008 159.397C859.008 159.896 858.683 160.304 858.286 160.304Z" fill="#DFDFDF"/>
                    <path d="M858.286 128.607H3.15842C2.76138 128.607 2.43652 128.198 2.43652 127.699C2.43652 127.2 2.76138 126.792 3.15842 126.792H858.286C858.683 126.792 859.008 127.2 859.008 127.699C859.008 128.198 858.683 128.607 858.286 128.607Z" fill="#DFDFDF"/>
                    <path d="M858.286 96.9084H3.15842C2.76138 96.9084 2.43652 96.5 2.43652 96.0009C2.43652 95.5017 2.76138 95.0933 3.15842 95.0933H858.286C858.683 95.0933 859.008 95.5017 859.008 96.0009C859.008 96.5 858.683 96.9084 858.286 96.9084Z" fill="#DFDFDF"/>
                    <path d="M858.286 65.2107H3.15842C2.76138 65.2107 2.43652 64.8023 2.43652 64.3031C2.43652 63.8039 2.76138 63.3955 3.15842 63.3955H858.286C858.683 63.3955 859.008 63.8039 859.008 64.3031C859.008 64.8023 858.683 65.2107 858.286 65.2107Z" fill="#DFDFDF"/>
                    <path d="M858.286 33.513H3.15842C2.76138 33.513 2.43652 33.1045 2.43652 32.6054C2.43652 32.1062 2.76138 31.6978 3.15842 31.6978H858.286C858.683 31.6978 859.008 32.1062 859.008 32.6054C859.008 33.1045 858.683 33.513 858.286 33.513Z" fill="#DFDFDF"/>
                    <path d="M858.286 1.8152H3.15842C2.76138 1.8152 2.43652 1.40678 2.43652 0.9076C2.43652 0.408422 2.76138 0 3.15842 0H858.286C858.683 0 859.008 0.408422 859.008 0.9076C859.008 1.40678 858.683 1.8152 858.286 1.8152Z" fill="#DFDFDF"/>
                    <path d="M858.286 768.508H3.15831C1.42575 768.508 0 766.738 0 764.537C0 762.359 1.40771 760.566 3.15831 760.566H858.286C860.018 760.566 861.444 762.336 861.444 764.537C861.426 766.738 860.018 768.508 858.286 768.508Z" fill="#4C4F60"/>
                    <path d="M221.722 686.176L142.052 664.61L62.3813 686.176V761.655H221.722V686.176Z" fill="url(#paint0_linear_28_347)"/>
                    <path d="M415.133 435.125L336.08 362.562L255.792 435.125V761.655H415.133V435.125Z" fill="url(#paint1_linear_28_347)"/>
                    <path d="M607.989 326.282L528.297 253.72L448.627 326.282V761.655H607.989V326.282Z" fill="url(#paint2_linear_28_347)"/>
                    <path d="M800.451 196.865L721.057 126.859L641.684 196.865V756.912H800.451V196.865Z" fill="url(#paint3_linear_28_347)"/>
                    <path d="M709.355 98.4397C709.355 99.0131 709.228 99.5197 708.975 99.9597C708.735 100.4 708.401 100.746 707.975 101C707.548 101.253 707.068 101.38 706.535 101.38C705.988 101.38 705.501 101.253 705.075 101C704.648 100.746 704.308 100.4 704.055 99.9597C703.815 99.5197 703.695 99.0131 703.695 98.4397C703.695 97.8664 703.815 97.3664 704.055 96.9397C704.308 96.4997 704.648 96.1597 705.075 95.9197C705.501 95.6664 705.988 95.5397 706.535 95.5397C707.068 95.5397 707.548 95.6664 707.975 95.9197C708.401 96.1597 708.735 96.4997 708.975 96.9397C709.228 97.3664 709.355 97.8664 709.355 98.4397ZM706.035 107.7L710.475 101.74C710.821 101.286 711.101 100.786 711.315 100.24C711.541 99.6931 711.655 99.0931 711.655 98.4397C711.655 97.3997 711.428 96.5131 710.975 95.7797C710.521 95.0331 709.908 94.4664 709.135 94.0797C708.361 93.6797 707.495 93.4797 706.535 93.4797C705.575 93.4797 704.708 93.6797 703.935 94.0797C703.161 94.4664 702.541 95.0331 702.075 95.7797C701.621 96.5131 701.395 97.3997 701.395 98.4397C701.395 99.1064 701.508 99.7197 701.735 100.28C701.961 100.84 702.268 101.326 702.655 101.74C703.055 102.14 703.508 102.446 704.015 102.66C704.521 102.873 705.055 102.98 705.615 102.98C706.081 102.98 706.488 102.926 706.835 102.82C707.181 102.713 707.515 102.486 707.835 102.14L707.475 102.2L703.035 107.7H706.035ZM713.02 105.04H724.54V103H721.68L721.34 103.18H716.48L720.06 97.9397V103.98L719.92 104.2V107.72H722.34V93.7197H720.92L713.02 105.04ZM725.838 96.8397C725.838 97.4664 725.978 98.0397 726.258 98.5597C726.552 99.0664 726.958 99.4731 727.478 99.7797C727.998 100.086 728.585 100.24 729.238 100.24C729.918 100.24 730.512 100.086 731.018 99.7797C731.538 99.4731 731.938 99.0664 732.218 98.5597C732.512 98.0397 732.658 97.4664 732.658 96.8397C732.658 96.2131 732.512 95.6464 732.218 95.1397C731.938 94.6197 731.538 94.2064 731.018 93.8997C730.512 93.5931 729.918 93.4397 729.238 93.4397C728.585 93.4397 727.998 93.5931 727.478 93.8997C726.958 94.2064 726.552 94.6197 726.258 95.1397C725.978 95.6464 725.838 96.2131 725.838 96.8397ZM727.678 96.8397C727.678 96.5331 727.745 96.2531 727.878 95.9997C728.012 95.7464 728.192 95.5464 728.418 95.3997C728.658 95.2531 728.932 95.1797 729.238 95.1797C729.572 95.1797 729.852 95.2531 730.078 95.3997C730.305 95.5464 730.485 95.7464 730.618 95.9997C730.752 96.2531 730.818 96.5331 730.818 96.8397C730.818 97.1331 730.752 97.4131 730.618 97.6797C730.485 97.9331 730.305 98.1397 730.078 98.2997C729.852 98.4464 729.572 98.5197 729.238 98.5197C728.932 98.5197 728.658 98.4464 728.418 98.2997C728.192 98.1397 728.012 97.9331 727.878 97.6797C727.745 97.4131 727.678 97.1331 727.678 96.8397ZM734.178 104.6C734.178 105.213 734.325 105.78 734.618 106.3C734.912 106.82 735.312 107.233 735.818 107.54C736.338 107.833 736.932 107.98 737.598 107.98C738.265 107.98 738.852 107.833 739.358 107.54C739.878 107.233 740.278 106.82 740.558 106.3C740.852 105.78 740.998 105.213 740.998 104.6C740.998 103.96 740.852 103.386 740.558 102.88C740.278 102.36 739.878 101.953 739.358 101.66C738.852 101.353 738.265 101.2 737.598 101.2C736.932 101.2 736.338 101.353 735.818 101.66C735.312 101.953 734.912 102.36 734.618 102.88C734.325 103.386 734.178 103.96 734.178 104.6ZM736.038 104.58C736.038 104.286 736.098 104.013 736.218 103.76C736.352 103.506 736.532 103.306 736.758 103.16C736.998 103 737.278 102.92 737.598 102.92C737.918 102.92 738.192 103 738.418 103.16C738.658 103.306 738.838 103.506 738.958 103.76C739.092 104.013 739.158 104.286 739.158 104.58C739.158 104.886 739.092 105.166 738.958 105.42C738.838 105.673 738.658 105.88 738.418 106.04C738.192 106.186 737.918 106.26 737.598 106.26C737.278 106.26 736.998 106.186 736.758 106.04C736.532 105.88 736.352 105.673 736.218 105.42C736.098 105.153 736.038 104.873 736.038 104.58ZM737.198 93.7197L727.498 107.72H729.638L739.338 93.7197H737.198Z" fill="#1A1919"/>
                    <path d="M511.853 228.1C511.853 228.686 511.96 229.206 512.173 229.66C512.4 230.1 512.707 230.473 513.093 230.78C513.48 231.086 513.927 231.32 514.433 231.48C514.94 231.64 515.48 231.72 516.053 231.72C516.627 231.72 517.167 231.64 517.673 231.48C518.18 231.32 518.627 231.086 519.013 230.78C519.4 230.473 519.707 230.1 519.933 229.66C520.16 229.206 520.273 228.686 520.273 228.1C520.273 227.38 520.08 226.753 519.693 226.22C519.32 225.673 518.813 225.246 518.173 224.94C517.547 224.633 516.84 224.48 516.053 224.48C515.267 224.48 514.553 224.633 513.913 224.94C513.287 225.246 512.787 225.673 512.413 226.22C512.04 226.753 511.853 227.38 511.853 228.1ZM514.093 228.34C514.093 227.953 514.173 227.606 514.333 227.3C514.507 226.993 514.74 226.76 515.033 226.6C515.34 226.426 515.68 226.34 516.053 226.34C516.44 226.34 516.78 226.426 517.073 226.6C517.367 226.76 517.593 226.993 517.753 227.3C517.927 227.606 518.013 227.953 518.013 228.34C518.013 228.74 517.927 229.086 517.753 229.38C517.58 229.673 517.34 229.906 517.033 230.08C516.74 230.24 516.413 230.32 516.053 230.32C515.693 230.32 515.367 230.24 515.073 230.08C514.78 229.906 514.54 229.673 514.353 229.38C514.18 229.086 514.093 228.74 514.093 228.34ZM511.353 234.92C511.353 235.506 511.473 236.046 511.713 236.54C511.953 237.02 512.287 237.446 512.713 237.82C513.153 238.18 513.653 238.46 514.213 238.66C514.787 238.86 515.4 238.96 516.053 238.96C516.707 238.96 517.313 238.86 517.873 238.66C518.447 238.46 518.947 238.18 519.373 237.82C519.813 237.446 520.153 237.02 520.393 236.54C520.647 236.046 520.773 235.506 520.773 234.92C520.773 234.24 520.633 233.646 520.353 233.14C520.087 232.633 519.727 232.213 519.273 231.88C518.82 231.533 518.313 231.28 517.753 231.12C517.193 230.96 516.627 230.88 516.053 230.88C515.48 230.88 514.913 230.96 514.353 231.12C513.793 231.28 513.287 231.533 512.833 231.88C512.38 232.213 512.02 232.633 511.753 233.14C511.487 233.646 511.353 234.24 511.353 234.92ZM513.673 234.6C513.673 234.16 513.78 233.76 513.993 233.4C514.22 233.04 514.513 232.76 514.873 232.56C515.247 232.346 515.64 232.24 516.053 232.24C516.467 232.24 516.853 232.346 517.213 232.56C517.587 232.76 517.887 233.04 518.113 233.4C518.34 233.76 518.453 234.16 518.453 234.6C518.453 235.106 518.34 235.54 518.113 235.9C517.887 236.246 517.587 236.513 517.213 236.7C516.853 236.886 516.467 236.98 516.053 236.98C515.64 236.98 515.247 236.886 514.873 236.7C514.513 236.513 514.22 236.246 513.993 235.9C513.78 235.54 513.673 235.106 513.673 234.6ZM527.076 231.86C528.063 231.86 528.936 231.713 529.696 231.42C530.469 231.126 531.076 230.706 531.516 230.16C531.956 229.613 532.176 228.986 532.176 228.28C532.176 227.586 532.003 226.96 531.656 226.4C531.323 225.826 530.836 225.366 530.196 225.02C529.556 224.673 528.783 224.5 527.876 224.5C527.023 224.5 526.269 224.673 525.616 225.02C524.963 225.353 524.449 225.813 524.076 226.4C523.716 226.986 523.536 227.666 523.536 228.44H525.756C525.756 227.88 525.956 227.42 526.356 227.06C526.769 226.686 527.283 226.5 527.896 226.5C528.309 226.5 528.656 226.58 528.936 226.74C529.216 226.9 529.429 227.126 529.576 227.42C529.723 227.7 529.796 228.026 529.796 228.4C529.796 228.693 529.729 228.98 529.596 229.26C529.476 229.526 529.296 229.76 529.056 229.96C528.829 230.16 528.549 230.32 528.216 230.44C527.883 230.546 527.503 230.6 527.076 230.6V231.86ZM527.776 238.96C528.736 238.96 529.576 238.793 530.296 238.46C531.016 238.126 531.576 237.66 531.976 237.06C532.376 236.46 532.576 235.766 532.576 234.98C532.576 234.273 532.436 233.673 532.156 233.18C531.876 232.673 531.483 232.266 530.976 231.96C530.483 231.64 529.903 231.406 529.236 231.26C528.569 231.1 527.849 231.02 527.076 231.02V232.36C527.543 232.36 527.969 232.413 528.356 232.52C528.743 232.626 529.069 232.78 529.336 232.98C529.616 233.18 529.829 233.426 529.976 233.72C530.123 234.013 530.196 234.346 530.196 234.72C530.196 235.186 530.096 235.586 529.896 235.92C529.696 236.24 529.416 236.486 529.056 236.66C528.709 236.833 528.296 236.92 527.816 236.92C527.349 236.92 526.923 236.833 526.536 236.66C526.149 236.473 525.843 236.22 525.616 235.9C525.403 235.566 525.296 235.173 525.296 234.72H522.936C522.936 235.293 523.049 235.84 523.276 236.36C523.503 236.866 523.823 237.32 524.236 237.72C524.649 238.106 525.156 238.413 525.756 238.64C526.356 238.853 527.029 238.96 527.776 238.96ZM533.959 227.84C533.959 228.466 534.099 229.04 534.379 229.56C534.673 230.066 535.079 230.473 535.599 230.78C536.119 231.086 536.706 231.24 537.359 231.24C538.039 231.24 538.633 231.086 539.139 230.78C539.659 230.473 540.059 230.066 540.339 229.56C540.633 229.04 540.779 228.466 540.779 227.84C540.779 227.213 540.633 226.646 540.339 226.14C540.059 225.62 539.659 225.206 539.139 224.9C538.633 224.593 538.039 224.44 537.359 224.44C536.706 224.44 536.119 224.593 535.599 224.9C535.079 225.206 534.673 225.62 534.379 226.14C534.099 226.646 533.959 227.213 533.959 227.84ZM535.799 227.84C535.799 227.533 535.866 227.253 535.999 227C536.133 226.746 536.313 226.546 536.539 226.4C536.779 226.253 537.053 226.18 537.359 226.18C537.693 226.18 537.973 226.253 538.199 226.4C538.426 226.546 538.606 226.746 538.739 227C538.873 227.253 538.939 227.533 538.939 227.84C538.939 228.133 538.873 228.413 538.739 228.68C538.606 228.933 538.426 229.14 538.199 229.3C537.973 229.446 537.693 229.52 537.359 229.52C537.053 229.52 536.779 229.446 536.539 229.3C536.313 229.14 536.133 228.933 535.999 228.68C535.866 228.413 535.799 228.133 535.799 227.84ZM542.299 235.6C542.299 236.213 542.446 236.78 542.739 237.3C543.033 237.82 543.433 238.233 543.939 238.54C544.459 238.833 545.053 238.98 545.719 238.98C546.386 238.98 546.973 238.833 547.479 238.54C547.999 238.233 548.399 237.82 548.679 237.3C548.973 236.78 549.119 236.213 549.119 235.6C549.119 234.96 548.973 234.386 548.679 233.88C548.399 233.36 547.999 232.953 547.479 232.66C546.973 232.353 546.386 232.2 545.719 232.2C545.053 232.2 544.459 232.353 543.939 232.66C543.433 232.953 543.033 233.36 542.739 233.88C542.446 234.386 542.299 234.96 542.299 235.6ZM544.159 235.58C544.159 235.286 544.219 235.013 544.339 234.76C544.473 234.506 544.653 234.306 544.879 234.16C545.119 234 545.399 233.92 545.719 233.92C546.039 233.92 546.313 234 546.539 234.16C546.779 234.306 546.959 234.506 547.079 234.76C547.213 235.013 547.279 235.286 547.279 235.58C547.279 235.886 547.213 236.166 547.079 236.42C546.959 236.673 546.779 236.88 546.539 237.04C546.313 237.186 546.039 237.26 545.719 237.26C545.399 237.26 545.119 237.186 544.879 237.04C544.653 236.88 544.473 236.673 544.339 236.42C544.219 236.153 544.159 235.873 544.159 235.58ZM545.319 224.72L535.619 238.72H537.759L547.459 224.72H545.319Z" fill="#1A1919"/>
                    <path d="M317.61 327.94H324.55L318.81 339.72H321.33L328.05 325.72H317.61V327.94ZM331.243 332.72C331.243 331.973 331.316 331.286 331.463 330.66C331.61 330.033 331.816 329.493 332.083 329.04C332.363 328.586 332.696 328.24 333.083 328C333.47 327.746 333.896 327.62 334.363 327.62C334.856 327.62 335.29 327.746 335.663 328C336.05 328.24 336.376 328.586 336.643 329.04C336.923 329.493 337.136 330.033 337.283 330.66C337.43 331.286 337.503 331.973 337.503 332.72C337.503 333.466 337.43 334.153 337.283 334.78C337.136 335.406 336.923 335.946 336.643 336.4C336.376 336.853 336.05 337.206 335.663 337.46C335.29 337.7 334.856 337.82 334.363 337.82C333.896 337.82 333.47 337.7 333.083 337.46C332.696 337.206 332.363 336.853 332.083 336.4C331.816 335.946 331.61 335.406 331.463 334.78C331.316 334.153 331.243 333.466 331.243 332.72ZM328.923 332.72C328.923 334.173 329.15 335.44 329.603 336.52C330.07 337.6 330.71 338.44 331.523 339.04C332.35 339.64 333.296 339.94 334.363 339.94C335.456 339.94 336.41 339.64 337.223 339.04C338.05 338.44 338.69 337.6 339.143 336.52C339.596 335.44 339.823 334.173 339.823 332.72C339.823 331.266 339.596 330 339.143 328.92C338.69 327.84 338.05 327 337.223 326.4C336.41 325.8 335.456 325.5 334.363 325.5C333.296 325.5 332.35 325.8 331.523 326.4C330.71 327 330.07 327.84 329.603 328.92C329.15 330 328.923 331.266 328.923 332.72ZM341.223 328.84C341.223 329.466 341.363 330.04 341.643 330.56C341.936 331.066 342.343 331.473 342.863 331.78C343.383 332.086 343.97 332.24 344.623 332.24C345.303 332.24 345.896 332.086 346.403 331.78C346.923 331.473 347.323 331.066 347.603 330.56C347.896 330.04 348.043 329.466 348.043 328.84C348.043 328.213 347.896 327.646 347.603 327.14C347.323 326.62 346.923 326.206 346.403 325.9C345.896 325.593 345.303 325.44 344.623 325.44C343.97 325.44 343.383 325.593 342.863 325.9C342.343 326.206 341.936 326.62 341.643 327.14C341.363 327.646 341.223 328.213 341.223 328.84ZM343.063 328.84C343.063 328.533 343.13 328.253 343.263 328C343.396 327.746 343.576 327.546 343.803 327.4C344.043 327.253 344.316 327.18 344.623 327.18C344.956 327.18 345.236 327.253 345.463 327.4C345.69 327.546 345.87 327.746 346.003 328C346.136 328.253 346.203 328.533 346.203 328.84C346.203 329.133 346.136 329.413 346.003 329.68C345.87 329.933 345.69 330.14 345.463 330.3C345.236 330.446 344.956 330.52 344.623 330.52C344.316 330.52 344.043 330.446 343.803 330.3C343.576 330.14 343.396 329.933 343.263 329.68C343.13 329.413 343.063 329.133 343.063 328.84ZM349.563 336.6C349.563 337.213 349.71 337.78 350.003 338.3C350.296 338.82 350.696 339.233 351.203 339.54C351.723 339.833 352.316 339.98 352.983 339.98C353.65 339.98 354.236 339.833 354.743 339.54C355.263 339.233 355.663 338.82 355.943 338.3C356.236 337.78 356.383 337.213 356.383 336.6C356.383 335.96 356.236 335.386 355.943 334.88C355.663 334.36 355.263 333.953 354.743 333.66C354.236 333.353 353.65 333.2 352.983 333.2C352.316 333.2 351.723 333.353 351.203 333.66C350.696 333.953 350.296 334.36 350.003 334.88C349.71 335.386 349.563 335.96 349.563 336.6ZM351.423 336.58C351.423 336.286 351.483 336.013 351.603 335.76C351.736 335.506 351.916 335.306 352.143 335.16C352.383 335 352.663 334.92 352.983 334.92C353.303 334.92 353.576 335 353.803 335.16C354.043 335.306 354.223 335.506 354.343 335.76C354.476 336.013 354.543 336.286 354.543 336.58C354.543 336.886 354.476 337.166 354.343 337.42C354.223 337.673 354.043 337.88 353.803 338.04C353.576 338.186 353.303 338.26 352.983 338.26C352.663 338.26 352.383 338.186 352.143 338.04C351.916 337.88 351.736 337.673 351.603 337.42C351.483 337.153 351.423 336.873 351.423 336.58ZM352.583 325.72L342.883 339.72H345.023L354.723 325.72H352.583Z" fill="#1A1919"/>
                    <path d="M127.681 635.72H138.361V633.52H132.281L136.261 629.62C136.835 629.086 137.295 628.48 137.641 627.8C138.001 627.12 138.181 626.413 138.181 625.68C138.181 625.213 138.081 624.733 137.881 624.24C137.695 623.746 137.401 623.293 137.001 622.88C136.615 622.466 136.121 622.133 135.521 621.88C134.921 621.613 134.215 621.48 133.401 621.48C132.335 621.48 131.428 621.706 130.681 622.16C129.948 622.6 129.388 623.213 129.001 624C128.628 624.773 128.441 625.66 128.441 626.66H130.781C130.781 626.046 130.881 625.506 131.081 625.04C131.295 624.573 131.595 624.22 131.981 623.98C132.368 623.726 132.828 623.6 133.361 623.6C133.748 623.6 134.088 623.666 134.381 623.8C134.675 623.92 134.921 624.086 135.121 624.3C135.335 624.513 135.488 624.753 135.581 625.02C135.688 625.273 135.741 625.533 135.741 625.8C135.741 626.173 135.681 626.526 135.561 626.86C135.441 627.193 135.261 627.526 135.021 627.86C134.781 628.193 134.495 628.54 134.161 628.9L127.681 635.72ZM139.952 624.84C139.952 625.466 140.092 626.04 140.372 626.56C140.665 627.066 141.072 627.473 141.592 627.78C142.112 628.086 142.698 628.24 143.352 628.24C144.032 628.24 144.625 628.086 145.132 627.78C145.652 627.473 146.052 627.066 146.332 626.56C146.625 626.04 146.772 625.466 146.772 624.84C146.772 624.213 146.625 623.646 146.332 623.14C146.052 622.62 145.652 622.206 145.132 621.9C144.625 621.593 144.032 621.44 143.352 621.44C142.698 621.44 142.112 621.593 141.592 621.9C141.072 622.206 140.665 622.62 140.372 623.14C140.092 623.646 139.952 624.213 139.952 624.84ZM141.792 624.84C141.792 624.533 141.858 624.253 141.992 624C142.125 623.746 142.305 623.546 142.532 623.4C142.772 623.253 143.045 623.18 143.352 623.18C143.685 623.18 143.965 623.253 144.192 623.4C144.418 623.546 144.598 623.746 144.732 624C144.865 624.253 144.932 624.533 144.932 624.84C144.932 625.133 144.865 625.413 144.732 625.68C144.598 625.933 144.418 626.14 144.192 626.3C143.965 626.446 143.685 626.52 143.352 626.52C143.045 626.52 142.772 626.446 142.532 626.3C142.305 626.14 142.125 625.933 141.992 625.68C141.858 625.413 141.792 625.133 141.792 624.84ZM148.292 632.6C148.292 633.213 148.438 633.78 148.732 634.3C149.025 634.82 149.425 635.233 149.932 635.54C150.452 635.833 151.045 635.98 151.712 635.98C152.378 635.98 152.965 635.833 153.472 635.54C153.992 635.233 154.392 634.82 154.672 634.3C154.965 633.78 155.112 633.213 155.112 632.6C155.112 631.96 154.965 631.386 154.672 630.88C154.392 630.36 153.992 629.953 153.472 629.66C152.965 629.353 152.378 629.2 151.712 629.2C151.045 629.2 150.452 629.353 149.932 629.66C149.425 629.953 149.025 630.36 148.732 630.88C148.438 631.386 148.292 631.96 148.292 632.6ZM150.152 632.58C150.152 632.286 150.212 632.013 150.332 631.76C150.465 631.506 150.645 631.306 150.872 631.16C151.112 631 151.392 630.92 151.712 630.92C152.032 630.92 152.305 631 152.532 631.16C152.772 631.306 152.952 631.506 153.072 631.76C153.205 632.013 153.272 632.286 153.272 632.58C153.272 632.886 153.205 633.166 153.072 633.42C152.952 633.673 152.772 633.88 152.532 634.04C152.305 634.186 152.032 634.26 151.712 634.26C151.392 634.26 151.112 634.186 150.872 634.04C150.645 633.88 150.465 633.673 150.332 633.42C150.212 633.153 150.152 632.873 150.152 632.58ZM151.312 621.72L141.612 635.72H143.752L153.452 621.72H151.312Z" fill="#1A1919"/>
                    <defs>
                    <linearGradient id="paint0_linear_28_347" x1="142.052" y1="664.61" x2="142.052" y2="761.655" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#242423" stop-opacity="0.9"/>
                    <stop offset="1" stop-color="#242423"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_28_347" x1="335.462" y1="362.562" x2="335.462" y2="761.655" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#242423" stop-opacity="0.9"/>
                    <stop offset="1" stop-color="#242423"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_28_347" x1="528.308" y1="253.72" x2="528.308" y2="761.655" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#242423" stop-opacity="0.9"/>
                    <stop offset="1" stop-color="#242423"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_28_347" x1="721.068" y1="126.859" x2="721.068" y2="756.912" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#242423" stop-opacity="0.9"/>
                    <stop offset="1" stop-color="#242423"/>
                    </linearGradient>
                    </defs>
                    </svg>
                </div>
                <div class="mprove-growth-citation desktop-none">
                    <h4>citations</h4>
                    <ul class="mprove-grow">
                        <li class="mprove-grow-inner">
                            <a href="javascript:void(0)">
                                     <?xml version="1.0" standalone="no"?>
                                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                        "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                        width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                        preserveAspectRatio="xMidYMid meet">

                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path d="M1640 4850 c-345 -16 -598 -105 -792 -277 -199 -176 -312 -407 -354
                                        -723 -20 -155 -20 -2425 0 -2580 42 -316 155 -547 354 -723 152 -135 360 -225
                                        605 -261 156 -24 2058 -24 2214 0 462 68 771 317 902 727 68 212 64 137 68
                                        1472 3 838 1 1244 -7 1320 -59 586 -387 938 -962 1031 -90 14 -218 17 -983 19
                                        -484 2 -954 -1 -1045 -5z m10 -1080 c0 -508 4 -776 11 -810 15 -72 64 -137
                                        129 -174 48 -27 64 -31 130 -31 58 0 85 6 117 22 22 13 148 120 278 240 131
                                        120 240 219 244 220 3 2 114 -97 246 -219 150 -138 257 -229 285 -241 61 -29
                                        159 -29 220 0 58 26 108 76 134 133 21 44 21 57 24 834 l3 789 89 -7 c105 -8
                                        250 -43 334 -80 232 -103 377 -324 415 -631 15 -123 15 -2367 0 -2502 -45
                                        -407 -266 -644 -660 -708 -140 -22 -2038 -22 -2178 0 -392 64 -610 296 -660
                                        700 -7 61 -11 467 -11 1255 0 788 4 1194 11 1255 23 186 93 360 189 468 129
                                        144 363 240 598 246 l52 1 0 -760z m1500 63 l0 -697 -32 31 c-288 269 -420
                                        382 -464 397 -61 20 -127 20 -188 0 -46 -16 -70 -37 -468 -402 l-28 -26 0 697
                                        0 697 590 0 590 0 0 -697z"/>
                                        <path d="M2752 2273 c-49 -24 -75 -68 -80 -132 -4 -66 20 -111 78 -145 34 -20
                                        49 -21 530 -21 481 0 496 1 530 21 58 34 82 79 78 145 -5 65 -32 109 -82 133
                                        -30 14 -93 16 -528 16 -434 0 -497 -2 -526 -17z"/>
                                        <path d="M1852 1423 c-18 -9 -45 -32 -60 -51 -39 -51 -38 -134 0 -184 56 -73
                                        -12 -69 1047 -66 946 3 950 3 978 24 98 73 98 195 0 268 -28 21 -32 21 -980
                                        23 -866 2 -955 1 -985 -14z"/>
                                        </g>
                                        </svg>

                                <span> minoxidil increases blood flow to the follicles and actively increases how long they stay in the growth phase of
                                    the hair. Keeping new follicles coming back in actively fertilising your hair growth.</span>
                            </a>
                        </li>
                        <li class="mprove-grow-inner">
                            <a href="javascript:void(0)">
                           <?xml version="1.0" standalone="no"?>
                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                fill="#000000" stroke="none">
                                <path d="M1640 4850 c-345 -16 -598 -105 -792 -277 -199 -176 -312 -407 -354
                                -723 -20 -155 -20 -2425 0 -2580 42 -316 155 -547 354 -723 152 -135 360 -225
                                605 -261 156 -24 2058 -24 2214 0 462 68 771 317 902 727 68 212 64 137 68
                                1472 3 838 1 1244 -7 1320 -59 586 -387 938 -962 1031 -90 14 -218 17 -983 19
                                -484 2 -954 -1 -1045 -5z m10 -1080 c0 -508 4 -776 11 -810 15 -72 64 -137
                                129 -174 48 -27 64 -31 130 -31 58 0 85 6 117 22 22 13 148 120 278 240 131
                                120 240 219 244 220 3 2 114 -97 246 -219 150 -138 257 -229 285 -241 61 -29
                                159 -29 220 0 58 26 108 76 134 133 21 44 21 57 24 834 l3 789 89 -7 c105 -8
                                250 -43 334 -80 232 -103 377 -324 415 -631 15 -123 15 -2367 0 -2502 -45
                                -407 -266 -644 -660 -708 -140 -22 -2038 -22 -2178 0 -392 64 -610 296 -660
                                700 -7 61 -11 467 -11 1255 0 788 4 1194 11 1255 23 186 93 360 189 468 129
                                144 363 240 598 246 l52 1 0 -760z m1500 63 l0 -697 -32 31 c-288 269 -420
                                382 -464 397 -61 20 -127 20 -188 0 -46 -16 -70 -37 -468 -402 l-28 -26 0 697
                                0 697 590 0 590 0 0 -697z"/>
                                <path d="M2752 2273 c-49 -24 -75 -68 -80 -132 -4 -66 20 -111 78 -145 34 -20
                                49 -21 530 -21 481 0 496 1 530 21 58 34 82 79 78 145 -5 65 -32 109 -82 133
                                -30 14 -93 16 -528 16 -434 0 -497 -2 -526 -17z"/>
                                <path d="M1852 1423 c-18 -9 -45 -32 -60 -51 -39 -51 -38 -134 0 -184 56 -73
                                -12 -69 1047 -66 946 3 950 3 978 24 98 73 98 195 0 268 -28 21 -32 21 -980
                                23 -866 2 -955 1 -985 -14z"/>
                                </g>
                                </svg>

                                <span> Finasteride also clinically proven blocks the effect of DHT thus preventing it from weakening and thinning
                                    your hair follicles.</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clinically proven treatment to stop hair loss and improve growth end -->
<!-- hair regrow the journey html start -->
<section class="bread-journey-sec hair-regrow-sec">
    <div class="container-xxl container">
        <div class="">
            <h2 class="big-heading text-center">Your Hair <span>Regrowth</span> Journey</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-sm-6 col-12 ques-col-margin">
                <div class="bread-journey-box">
                <div class="to-buttons text-center">
                     <a class="btn-visit" href="#">Reset</a>
                </div>
                <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="392.000000pt" height="314.000000pt" viewBox="0 0 392.000000 314.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,314.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M1805 3017 c-259 -47 -479 -220 -569 -448 -61 -153 -81 -362 -52
                    -548 21 -134 21 -131 -11 -132 l-28 -1 30 -7 c24 -5 32 -14 41 -46 7 -22 13
                    -49 13 -59 1 -18 0 -18 -22 2 -36 34 -42 26 -9 -12 25 -29 31 -46 37 -107 4
                    -40 14 -88 22 -107 l14 -35 -33 7 c-44 8 -74 44 -94 113 -19 65 -15 160 7 174
                    10 6 11 9 1 9 -31 0 -42 -104 -21 -202 14 -62 50 -102 106 -115 35 -8 39 -12
                    47 -56 8 -39 7 -51 -7 -64 -14 -15 -18 -15 -40 0 -13 8 -34 41 -47 72 -12 30
                    -25 54 -27 51 -6 -6 37 -107 55 -128 8 -10 27 -18 42 -18 30 0 30 5 10 -110
                    -27 -150 -29 -207 -15 -338 13 -125 44 -249 70 -282 7 -8 20 -32 30 -53 10
                    -20 30 -45 46 -54 15 -9 58 -57 95 -105 37 -49 81 -99 98 -111 17 -12 49 -39
                    71 -61 22 -21 49 -42 60 -47 11 -5 27 -13 35 -18 101 -62 172 -75 220 -39 27
                    20 31 20 47 6 22 -20 71 -18 104 3 13 9 38 20 54 26 45 15 131 106 199 209 33
                    49 84 115 113 146 74 79 140 218 159 336 18 111 18 252 0 339 -8 37 -16 86
                    -18 107 -3 38 -1 40 30 47 43 9 44 10 81 98 42 99 38 101 -12 7 -45 -86 -68
                    -109 -89 -88 -12 12 -13 69 -2 103 2 9 25 22 50 29 56 16 80 45 94 117 14 68
                    9 168 -10 186 -11 10 -12 8 -5 -8 23 -62 12 -179 -22 -233 -14 -23 -78 -60
                    -88 -50 -3 3 1 31 10 64 8 32 15 78 15 103 0 39 6 51 38 84 25 27 30 36 15 28
                    -12 -6 -25 -16 -28 -21 -3 -6 -10 -10 -14 -10 -14 0 8 94 25 106 10 9 11 13 3
                    16 -9 3 -9 34 1 137 22 230 -4 392 -87 555 -113 217 -286 373 -468 420 -84 21
                    -283 28 -370 13z m305 -153 c0 -11 6 -15 19 -11 21 5 31 -10 31 -44 0 -22 25
                    -26 33 -5 7 17 47 28 47 13 1 -18 48 -49 62 -41 7 4 8 3 4 -5 -5 -8 -20 -9
                    -43 -5 -33 6 -36 5 -30 -15 3 -13 -1 -28 -11 -38 -10 -9 -18 -21 -18 -27 -1
                    -6 -2 -18 -3 -26 -1 -11 -7 -8 -21 10 -20 24 -21 25 -35 6 -8 -11 -15 -29 -16
                    -40 0 -17 -4 -14 -16 12 -17 33 -43 44 -43 16 0 -8 5 -24 10 -34 6 -11 6 -21
                    1 -24 -5 -3 -12 5 -15 19 -6 24 -36 36 -36 15 0 -18 -39 -50 -55 -44 -8 4 -15
                    17 -15 31 0 33 -24 25 -28 -10 -4 -30 -17 -36 -26 -12 -3 9 -14 15 -23 13 -11
                    -2 -22 6 -28 20 -11 25 -33 29 -41 7 -4 -8 -12 -15 -20 -15 -10 0 -12 8 -7 30
                    8 43 -23 41 -36 -2 -9 -31 -10 -31 -16 -10 -9 27 -20 28 -34 5 -9 -16 -10 -15
                    -8 6 3 33 -21 38 -33 7 -5 -14 -15 -26 -21 -26 -8 0 -7 5 2 16 11 14 10 18 -5
                    30 -17 12 -17 14 -3 20 10 3 17 13 17 21 0 12 -7 14 -32 9 -25 -5 -30 -4 -20
                    6 8 8 9 15 1 25 -9 10 -7 13 9 13 30 0 38 21 16 38 -18 13 -18 14 4 7 16 -4
                    30 -1 42 10 12 11 20 13 25 6 11 -18 35 -12 35 9 0 11 5 20 11 20 6 0 13 -9
                    16 -20 3 -11 12 -20 19 -20 8 0 14 9 14 20 0 23 25 27 34 5 7 -18 36 -20 36
                    -2 0 7 16 12 45 13 37 1 45 -2 45 -16 0 -17 19 -30 41 -30 5 0 15 11 21 25 6
                    14 17 25 23 25 8 0 10 -10 7 -25 -7 -37 23 -33 37 5 11 32 31 41 31 14z m230
                    -452 c63 -16 144 -41 180 -54 l65 -25 3 -133 c1 -74 7 -139 13 -146 15 -18 69
                    -318 69 -384 0 -36 -12 -91 -35 -160 -19 -58 -44 -148 -56 -200 -31 -135 -57
                    -183 -108 -198 -22 -7 -54 -24 -71 -39 -17 -14 -32 -24 -34 -22 -2 2 -13 22
                    -25 44 -41 75 -220 184 -302 185 -25 0 -50 -5 -57 -12 -15 -15 -16 -74 -2 -83
                    20 -12 11 -37 -12 -33 -15 2 -22 9 -19 18 22 83 8 110 -58 110 -82 0 -255
                    -104 -304 -182 -25 -40 -32 -46 -44 -35 -8 6 -42 26 -76 42 -84 41 -104 80
                    -142 280 -8 39 -28 108 -44 155 -35 98 -36 111 -16 245 34 226 33 222 82 268
                    l44 41 -7 132 -7 132 34 10 c55 17 227 53 329 67 64 10 160 13 290 11 178 -3
                    205 -6 310 -34z m-210 -1319 l85 -44 -60 7 c-33 4 -80 6 -105 5 -74 -4 -123
                    -4 -165 -1 -22 2 -69 0 -105 -4 l-65 -7 85 45 c80 42 89 44 165 44 74 -1 86
                    -4 165 -45z m-162 -54 c76 2 156 3 225 1 56 -2 70 -5 82 -23 20 -29 19 -56 -4
                    -94 -11 -17 -25 -49 -30 -70 -6 -22 -23 -51 -39 -66 l-28 -27 -34 22 c-18 13
                    -48 50 -66 83 l-33 60 39 11 c36 11 135 74 116 74 -5 0 -33 -14 -62 -31 -50
                    -28 -60 -30 -163 -31 -108 -1 -112 -1 -183 35 -63 30 -69 32 -43 10 35 -29
                    103 -62 128 -63 9 0 17 -2 17 -5 0 -14 -50 -102 -66 -117 -57 -51 -123 -34
                    -124 32 0 14 -11 41 -24 61 -54 79 -31 145 48 134 22 -3 57 -1 76 4 19 6 55 7
                    80 4 25 -3 64 -5 88 -4z"/>
                    <path d="M1475 2008 c-32 -17 -85 -71 -101 -100 -22 -42 -16 -46 12 -10 54 68
                    141 89 215 52 22 -12 65 -26 97 -31 90 -17 136 -50 161 -114 l11 -30 -5 33
                    c-3 19 -14 46 -25 61 -11 16 -17 31 -14 34 13 13 -7 54 -31 65 -36 17 -216 52
                    -262 52 -21 0 -47 -6 -58 -12z"/>
                    <path d="M2260 2004 c-46 -8 -100 -22 -120 -32 -30 -14 -35 -22 -36 -52 0 -19
                    -10 -55 -22 -80 -23 -49 -42 -152 -41 -215 1 -23 7 3 14 58 16 112 44 181 87
                    207 16 10 56 23 89 29 32 7 83 23 114 37 54 25 56 25 103 10 47 -16 81 -44
                    115 -96 30 -44 18 2 -13 50 -62 96 -122 113 -290 84z"/>
                    <path d="M1582 1879 c-65 -8 -109 -28 -119 -55 -9 -25 7 -30 38 -11 41 23 48
                    22 60 -9 12 -33 7 -39 -23 -24 -22 11 -22 10 -4 -4 30 -24 78 -29 142 -16 63
                    13 113 35 59 26 -16 -2 -38 -8 -48 -12 -17 -6 -17 -5 -1 30 10 20 23 36 30 36
                    20 0 65 -42 60 -56 -3 -8 -1 -14 4 -14 25 0 0 54 -33 72 -12 7 -58 15 -102 18
                    l-80 7 67 1 c37 1 79 -3 94 -8 31 -12 44 -6 17 8 -30 16 -94 20 -161 11z m-57
                    -39 c-21 -11 -40 -18 -43 -16 -5 6 50 35 68 36 8 0 -3 -9 -25 -20z"/>
                    <path d="M2245 1884 c-5 -1 -22 -5 -37 -8 -16 -4 -28 -10 -28 -15 0 -5 10 -7
                    23 -4 19 4 18 2 -5 -12 -24 -14 -48 -43 -48 -59 0 -3 10 -6 23 -6 12 0 44 -7
                    71 -15 61 -18 92 -18 131 0 l30 15 -35 -6 c-29 -5 -33 -4 -22 7 6 7 12 23 12
                    36 0 28 2 28 56 1 24 -12 47 -19 50 -15 14 14 -8 39 -48 56 -38 17 -147 33
                    -173 25z m78 -21 c-18 -2 -48 -2 -65 0 -18 2 -4 4 32 4 36 0 50 -2 33 -4z
                    m111 -28 c11 -8 16 -15 10 -15 -5 0 -18 7 -28 15 -11 8 -16 15 -10 15 5 0 18
                    -7 28 -15z m-198 -52 c-1 -1 -19 0 -41 4 l-38 6 29 25 28 25 12 -29 c7 -16 11
                    -30 10 -31z"/>
                    <path d="M2255 1736 c33 -14 102 -30 93 -20 -4 3 -21 9 -40 13 -18 5 -44 11
                    -58 14 -19 5 -18 4 5 -7z"/>
                    <path d="M1608 1723 c12 -2 30 -2 40 0 9 3 -1 5 -23 4 -22 0 -30 -2 -17 -4z"/>
                    <path d="M1805 1478 c-31 -24 -55 -74 -55 -113 0 -32 41 -75 72 -75 21 1 21 2
                    -7 17 -39 21 -45 30 -45 75 0 30 8 47 36 78 41 45 40 51 -1 18z"/>
                    <path d="M2151 1465 c0 -5 6 -21 14 -35 31 -55 14 -105 -45 -129 l-25 -10 23
                    0 c55 -2 88 50 71 112 -9 33 -38 81 -38 62z"/>
                    <path d="M1826 1361 c-11 -18 6 -41 31 -41 16 0 22 4 17 12 -5 8 0 9 17 4 59
                    -18 108 -18 153 -1 25 10 55 15 66 12 11 -3 20 -1 20 4 0 18 -52 21 -93 5 -52
                    -20 -94 -20 -127 -1 -28 16 -76 20 -84 6z"/>
                    <path d="M2065 1330 c-4 -6 7 -10 25 -10 18 0 29 4 25 10 -3 6 -15 10 -25 10
                    -10 0 -22 -4 -25 -10z"/>
                    <path d="M1092 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                    <path d="M2822 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                    </g>
                    </svg>
                    <div class="bread-journey-heading">
                        <h4>0 to 2 Months</h4>
                        <p class="pro_desc">During the initial 0 to 2-month period, you may struggle to observe any significant changes in your scalp. However, rest assured that your hair regrowth treatment is effectively at work. Shedding, if noticed, is a natural part of the process and an indication that regrowth is in progress.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 ques-col-margin">
                <div class="bread-journey-box">
                <div class="to-buttons text-center">
                <a class="btn-visit" href="#">Stabilisation</a>
                 </div>
             <?xml version="1.0" standalone="no"?>
                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="392.000000pt" height="314.000000pt" viewBox="0 0 392.000000 314.000000"
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,314.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M1805 3017 c-259 -47 -479 -220 -569 -448 -61 -153 -81 -362 -52
                -548 21 -134 21 -131 -11 -132 l-28 -1 30 -7 c24 -5 32 -14 41 -46 7 -22 13
                -49 13 -59 1 -18 0 -18 -22 2 -36 34 -42 26 -9 -12 25 -29 31 -46 37 -107 4
                -40 14 -88 22 -107 l14 -35 -33 7 c-44 8 -74 44 -94 113 -19 65 -15 160 7 174
                10 6 11 9 1 9 -31 0 -42 -104 -21 -202 14 -62 50 -102 106 -115 35 -8 39 -12
                47 -56 8 -39 7 -51 -7 -64 -14 -15 -18 -15 -40 0 -13 8 -34 41 -47 72 -12 30
                -25 54 -27 51 -6 -6 37 -107 55 -128 8 -10 27 -18 42 -18 30 0 30 5 10 -110
                -27 -150 -29 -207 -15 -338 13 -125 44 -249 70 -282 7 -8 20 -32 30 -53 10
                -20 30 -45 46 -54 15 -9 58 -57 95 -105 37 -49 81 -99 98 -111 17 -12 49 -39
                71 -61 22 -21 49 -42 60 -47 11 -5 27 -13 35 -18 101 -62 172 -75 220 -39 27
                20 31 20 47 6 22 -20 71 -18 104 3 13 9 38 20 54 26 45 15 131 106 199 209 33
                49 84 115 113 146 74 79 140 218 159 336 18 111 18 252 0 339 -8 37 -16 86
                -18 107 -3 38 -1 40 30 47 43 9 44 10 81 98 42 99 38 101 -12 7 -45 -86 -68
                -109 -89 -88 -12 12 -13 69 -2 103 2 9 25 22 50 29 56 16 80 45 94 117 14 68
                9 168 -10 186 -11 10 -12 8 -5 -8 23 -62 12 -179 -22 -233 -14 -23 -78 -60
                -88 -50 -3 3 1 31 10 64 8 32 15 78 15 103 0 39 6 51 38 84 25 27 30 36 15 28
                -12 -6 -25 -16 -28 -21 -3 -6 -10 -10 -14 -10 -14 0 8 94 25 106 10 9 11 13 3
                16 -9 3 -9 34 1 137 22 230 -4 392 -87 555 -113 217 -286 373 -468 420 -84 21
                -283 28 -370 13z m11 -152 c4 -8 10 -15 15 -15 5 0 9 7 9 15 0 21 26 19 34 -2
                5 -11 10 -13 14 -7 12 18 72 26 72 10 0 -13 20 -26 40 -26 5 0 12 9 15 20 3
                11 11 20 16 20 6 0 7 -9 4 -20 -4 -14 -2 -20 8 -20 8 0 17 9 20 21 4 14 10 18
                19 13 7 -5 20 -9 28 -9 10 0 14 -8 13 -22 -2 -15 3 -23 12 -23 8 0 15 4 15 9
                0 5 9 11 20 14 13 3 20 0 20 -8 0 -7 12 -18 28 -23 l27 -10 -32 -1 c-28 -1
                -33 -5 -33 -26 0 -14 -4 -25 -10 -25 -5 0 -10 -7 -10 -15 0 -17 -16 -20 -25
                -5 -11 18 -23 11 -30 -17 l-7 -28 -10 28 c-14 41 -32 34 -25 -10 5 -32 4 -35
                -5 -15 -13 26 -28 29 -28 5 0 -9 -3 -13 -7 -10 -3 4 -12 2 -19 -4 -16 -13 -34
                -4 -34 17 0 8 -4 14 -10 14 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0
                -10 5 -10 11 0 6 -7 8 -16 5 -11 -4 -18 1 -21 14 -5 20 -33 29 -33 10 0 -5 -4
                -10 -10 -10 -5 0 -10 9 -10 20 0 27 -19 26 -29 -2 -7 -19 -8 -19 -14 -4 -4 10
                -11 14 -17 11 -5 -3 -10 -1 -10 4 0 19 -22 12 -27 -9 -3 -11 -9 -20 -14 -20
                -5 0 -6 7 -2 16 3 9 0 20 -8 24 -11 7 -10 10 4 16 26 9 21 27 -7 22 -29 -6
                -31 23 -1 35 l20 8 -20 15 c-19 15 -19 15 8 9 17 -5 27 -3 27 4 0 6 10 10 23
                8 13 -1 21 3 20 11 -4 17 16 15 23 -3z m524 -453 c63 -16 144 -41 180 -54 l65
                -25 3 -133 c1 -74 7 -139 13 -146 15 -18 69 -318 69 -384 0 -36 -12 -91 -35
                -160 -19 -58 -44 -148 -56 -200 -31 -135 -57 -183 -108 -198 -22 -7 -54 -24
                -71 -39 -17 -14 -32 -24 -34 -22 -2 2 -13 22 -25 44 -41 75 -220 184 -302 185
                -25 0 -50 -5 -57 -12 -15 -15 -16 -74 -2 -83 20 -12 11 -37 -12 -33 -15 2 -22
                9 -19 18 22 83 8 110 -58 110 -82 0 -255 -104 -304 -182 -25 -40 -32 -46 -44
                -35 -8 6 -42 26 -76 42 -84 41 -104 80 -142 280 -8 39 -28 108 -44 155 -35 98
                -36 111 -16 245 34 226 33 222 82 268 l44 41 -7 132 -7 132 34 10 c55 17 227
                53 329 67 64 10 160 13 290 11 178 -3 205 -6 310 -34z m-210 -1319 l85 -44
                -60 7 c-33 4 -80 6 -105 5 -74 -4 -123 -4 -165 -1 -22 2 -69 0 -105 -4 l-65
                -7 85 45 c80 42 89 44 165 44 74 -1 86 -4 165 -45z m-162 -54 c76 2 156 3 225
                1 56 -2 70 -5 82 -23 20 -29 19 -56 -4 -94 -11 -17 -25 -49 -30 -70 -6 -22
                -23 -51 -39 -66 l-28 -27 -34 22 c-18 13 -48 50 -66 83 l-33 60 39 11 c36 11
                135 74 116 74 -5 0 -33 -14 -62 -31 -50 -28 -60 -30 -163 -31 -108 -1 -112 -1
                -183 35 -63 30 -69 32 -43 10 35 -29 103 -62 128 -63 9 0 17 -2 17 -5 0 -14
                -50 -102 -66 -117 -57 -51 -123 -34 -124 32 0 14 -11 41 -24 61 -54 79 -31
                145 48 134 22 -3 57 -1 76 4 19 6 55 7 80 4 25 -3 64 -5 88 -4z"/>
                <path d="M1475 2008 c-32 -17 -85 -71 -101 -100 -22 -42 -16 -46 12 -10 54 68
                141 89 215 52 22 -12 65 -26 97 -31 90 -17 136 -50 161 -114 l11 -30 -5 33
                c-3 19 -14 46 -25 61 -11 16 -17 31 -14 34 13 13 -7 54 -31 65 -36 17 -216 52
                -262 52 -21 0 -47 -6 -58 -12z"/>
                <path d="M2260 2004 c-46 -8 -100 -22 -120 -32 -30 -14 -35 -22 -36 -52 0 -19
                -10 -55 -22 -80 -23 -49 -42 -152 -41 -215 1 -23 7 3 14 58 16 112 44 181 87
                207 16 10 56 23 89 29 32 7 83 23 114 37 54 25 56 25 103 10 47 -16 81 -44
                115 -96 30 -44 18 2 -13 50 -62 96 -122 113 -290 84z"/>
                <path d="M1582 1879 c-65 -8 -109 -28 -119 -55 -9 -25 7 -30 38 -11 41 23 48
                22 60 -9 12 -33 7 -39 -23 -24 -22 11 -22 10 -4 -4 30 -24 78 -29 142 -16 63
                13 113 35 59 26 -16 -2 -38 -8 -48 -12 -17 -6 -17 -5 -1 30 10 20 23 36 30 36
                20 0 65 -42 60 -56 -3 -8 -1 -14 4 -14 25 0 0 54 -33 72 -12 7 -58 15 -102 18
                l-80 7 67 1 c37 1 79 -3 94 -8 31 -12 44 -6 17 8 -30 16 -94 20 -161 11z m-57
                -39 c-21 -11 -40 -18 -43 -16 -5 6 50 35 68 36 8 0 -3 -9 -25 -20z"/>
                <path d="M2245 1884 c-5 -1 -22 -5 -37 -8 -16 -4 -28 -10 -28 -15 0 -5 10 -7
                23 -4 19 4 18 2 -5 -12 -24 -14 -48 -43 -48 -59 0 -3 10 -6 23 -6 12 0 44 -7
                71 -15 61 -18 92 -18 131 0 l30 15 -35 -6 c-29 -5 -33 -4 -22 7 6 7 12 23 12
                36 0 28 2 28 56 1 24 -12 47 -19 50 -15 14 14 -8 39 -48 56 -38 17 -147 33
                -173 25z m78 -21 c-18 -2 -48 -2 -65 0 -18 2 -4 4 32 4 36 0 50 -2 33 -4z
                m111 -28 c11 -8 16 -15 10 -15 -5 0 -18 7 -28 15 -11 8 -16 15 -10 15 5 0 18
                -7 28 -15z m-198 -52 c-1 -1 -19 0 -41 4 l-38 6 29 25 28 25 12 -29 c7 -16 11
                -30 10 -31z"/>
                <path d="M2255 1736 c33 -14 102 -30 93 -20 -4 3 -21 9 -40 13 -18 5 -44 11
                -58 14 -19 5 -18 4 5 -7z"/>
                <path d="M1608 1723 c12 -2 30 -2 40 0 9 3 -1 5 -23 4 -22 0 -30 -2 -17 -4z"/>
                <path d="M1805 1478 c-31 -24 -55 -74 -55 -113 0 -32 41 -75 72 -75 21 1 21 2
                -7 17 -39 21 -45 30 -45 75 0 30 8 47 36 78 41 45 40 51 -1 18z"/>
                <path d="M2151 1465 c0 -5 6 -21 14 -35 31 -55 14 -105 -45 -129 l-25 -10 23
                0 c55 -2 88 50 71 112 -9 33 -38 81 -38 62z"/>
                <path d="M1826 1361 c-11 -18 6 -41 31 -41 16 0 22 4 17 12 -5 8 0 9 17 4 59
                -18 108 -18 153 -1 25 10 55 15 66 12 11 -3 20 -1 20 4 0 18 -52 21 -93 5 -52
                -20 -94 -20 -127 -1 -28 16 -76 20 -84 6z"/>
                <path d="M2065 1330 c-4 -6 7 -10 25 -10 18 0 29 4 25 10 -3 6 -15 10 -25 10
                -10 0 -22 -4 -25 -10z"/>
                <path d="M1092 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                <path d="M2822 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                </g>
                </svg>
                    <div class="bread-journey-heading">
                        <h4>3 to 6 Months</h4>
                        <p class="pro_desc">Congratulations! Your Patience Is Paying Off. At this point, you should see a considerable slowing or even a complete stop to hair loss. You'll also notice your hair beginning to thicken, and new hairs may appear. Continue taking pictures to document your journey towards reclaiming your hair.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 ques-col-margin">
                <div class="bread-journey-box">
                <div class="to-buttons  text-center">
                <a class="btn-visit" href="#">Regrowth</a>
                </div>
             <?xml version="1.0" standalone="no"?>
                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="392.000000pt" height="314.000000pt" viewBox="0 0 392.000000 314.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,314.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M1800 3016 c-162 -30 -285 -93 -396 -204 -156 -153 -219 -308 -230
                -562 -4 -90 -1 -154 10 -229 21 -134 21 -131 -11 -132 l-28 -1 30 -7 c24 -5
                32 -14 41 -46 7 -22 13 -49 13 -59 1 -18 0 -18 -22 2 -36 34 -42 26 -9 -12 25
                -29 31 -46 37 -107 4 -40 14 -88 22 -107 l14 -35 -33 7 c-44 8 -74 44 -94 113
                -19 65 -15 160 7 174 10 6 11 9 1 9 -31 0 -42 -104 -21 -202 14 -62 50 -102
                106 -115 35 -8 39 -12 47 -56 8 -39 7 -51 -7 -64 -14 -15 -18 -15 -40 0 -13 8
                -34 41 -47 72 -12 30 -25 54 -27 51 -6 -6 37 -107 55 -128 8 -10 27 -18 42
                -18 30 0 30 5 10 -110 -27 -150 -29 -207 -15 -338 13 -125 44 -249 70 -282 7
                -8 20 -32 30 -53 10 -20 30 -45 46 -54 15 -9 58 -57 95 -105 37 -49 81 -99 98
                -111 17 -12 49 -39 71 -61 22 -21 49 -42 60 -47 11 -5 27 -13 35 -18 101 -62
                172 -75 220 -39 27 20 31 20 47 6 22 -20 71 -18 104 3 13 9 38 20 54 26 45 15
                131 106 199 209 33 49 84 115 113 146 74 79 140 218 159 336 18 111 18 252 0
                339 -8 37 -16 86 -18 107 -3 38 -1 40 30 47 43 9 44 10 81 98 42 99 38 101
                -12 7 -45 -86 -68 -109 -89 -88 -12 12 -13 69 -2 103 2 9 25 22 50 29 56 16
                80 45 94 117 14 68 9 168 -10 186 -11 10 -12 8 -5 -8 23 -62 12 -179 -22 -233
                -14 -23 -78 -60 -88 -50 -3 3 1 31 10 64 8 32 15 78 15 103 0 39 6 51 38 84
                25 27 30 36 15 28 -12 -6 -25 -16 -28 -21 -3 -6 -10 -10 -14 -10 -14 0 8 94
                25 106 10 9 11 13 3 16 -9 3 -9 34 1 137 22 230 -4 392 -87 555 -113 217 -286
                373 -468 420 -87 22 -284 28 -375 12z m540 -604 c63 -16 144 -41 180 -54 l65
                -25 3 -133 c1 -74 7 -139 13 -146 15 -18 69 -318 69 -384 0 -36 -12 -91 -35
                -160 -19 -58 -44 -148 -56 -200 -31 -135 -57 -183 -108 -198 -22 -7 -54 -24
                -71 -39 -17 -14 -32 -24 -34 -22 -2 2 -13 22 -25 44 -41 75 -220 184 -302 185
                -25 0 -50 -5 -57 -12 -15 -15 -16 -74 -2 -83 20 -12 11 -37 -12 -33 -15 2 -22
                9 -19 18 22 83 8 110 -58 110 -82 0 -255 -104 -304 -182 -25 -40 -32 -46 -44
                -35 -8 6 -42 26 -76 42 -84 41 -104 80 -142 280 -8 39 -28 108 -44 155 -35 98
                -36 111 -16 245 34 226 33 222 82 268 l44 41 -7 132 -7 132 34 10 c55 17 227
                53 329 67 64 10 160 13 290 11 178 -3 205 -6 310 -34z m-210 -1319 l85 -44
                -60 7 c-33 4 -80 6 -105 5 -74 -4 -123 -4 -165 -1 -22 2 -69 0 -105 -4 l-65
                -7 85 45 c80 42 89 44 165 44 74 -1 86 -4 165 -45z m-162 -54 c76 2 156 3 225
                1 56 -2 70 -5 82 -23 20 -29 19 -56 -4 -94 -11 -17 -25 -49 -30 -70 -6 -22
                -23 -51 -39 -66 l-28 -27 -34 22 c-18 13 -48 50 -66 83 l-33 60 39 11 c36 11
                135 74 116 74 -5 0 -33 -14 -62 -31 -50 -28 -60 -30 -163 -31 -108 -1 -112 -1
                -183 35 -63 30 -69 32 -43 10 35 -29 103 -62 128 -63 9 0 17 -2 17 -5 0 -14
                -50 -102 -66 -117 -57 -51 -123 -34 -124 32 0 14 -11 41 -24 61 -54 79 -31
                145 48 134 22 -3 57 -1 76 4 19 6 55 7 80 4 25 -3 64 -5 88 -4z"/>
                <path d="M1475 2008 c-32 -17 -85 -71 -101 -100 -22 -42 -16 -46 12 -10 54 68
                141 89 215 52 22 -12 65 -26 97 -31 90 -17 136 -50 161 -114 l11 -30 -5 33
                c-3 19 -14 46 -25 61 -11 16 -17 31 -14 34 13 13 -7 54 -31 65 -36 17 -216 52
                -262 52 -21 0 -47 -6 -58 -12z"/>
                <path d="M2260 2004 c-46 -8 -100 -22 -120 -32 -30 -14 -35 -22 -36 -52 0 -19
                -10 -55 -22 -80 -23 -49 -42 -152 -41 -215 1 -23 7 3 14 58 16 112 44 181 87
                207 16 10 56 23 89 29 32 7 83 23 114 37 54 25 56 25 103 10 47 -16 81 -44
                115 -96 30 -44 18 2 -13 50 -62 96 -122 113 -290 84z"/>
                <path d="M1582 1879 c-65 -8 -109 -28 -119 -55 -9 -25 7 -30 38 -11 41 23 48
                22 60 -9 12 -33 7 -39 -23 -24 -22 11 -22 10 -4 -4 30 -24 78 -29 142 -16 63
                13 113 35 59 26 -16 -2 -38 -8 -48 -12 -17 -6 -17 -5 -1 30 10 20 23 36 30 36
                20 0 65 -42 60 -56 -3 -8 -1 -14 4 -14 25 0 0 54 -33 72 -12 7 -58 15 -102 18
                l-80 7 67 1 c37 1 79 -3 94 -8 31 -12 44 -6 17 8 -30 16 -94 20 -161 11z m-57
                -39 c-21 -11 -40 -18 -43 -16 -5 6 50 35 68 36 8 0 -3 -9 -25 -20z"/>
                <path d="M2245 1884 c-5 -1 -22 -5 -37 -8 -16 -4 -28 -10 -28 -15 0 -5 10 -7
                23 -4 19 4 18 2 -5 -12 -24 -14 -48 -43 -48 -59 0 -3 10 -6 23 -6 12 0 44 -7
                71 -15 61 -18 92 -18 131 0 l30 15 -35 -6 c-29 -5 -33 -4 -22 7 6 7 12 23 12
                36 0 28 2 28 56 1 24 -12 47 -19 50 -15 14 14 -8 39 -48 56 -38 17 -147 33
                -173 25z m78 -21 c-18 -2 -48 -2 -65 0 -18 2 -4 4 32 4 36 0 50 -2 33 -4z
                m111 -28 c11 -8 16 -15 10 -15 -5 0 -18 7 -28 15 -11 8 -16 15 -10 15 5 0 18
                -7 28 -15z m-198 -52 c-1 -1 -19 0 -41 4 l-38 6 29 25 28 25 12 -29 c7 -16 11
                -30 10 -31z"/>
                <path d="M2255 1736 c33 -14 102 -30 93 -20 -4 3 -21 9 -40 13 -18 5 -44 11
                -58 14 -19 5 -18 4 5 -7z"/>
                <path d="M1608 1723 c12 -2 30 -2 40 0 9 3 -1 5 -23 4 -22 0 -30 -2 -17 -4z"/>
                <path d="M1805 1478 c-31 -24 -55 -74 -55 -113 0 -32 41 -75 72 -75 21 1 21 2
                -7 17 -39 21 -45 30 -45 75 0 30 8 47 36 78 41 45 40 51 -1 18z"/>
                <path d="M2151 1465 c0 -5 6 -21 14 -35 31 -55 14 -105 -45 -129 l-25 -10 23
                0 c55 -2 88 50 71 112 -9 33 -38 81 -38 62z"/>
                <path d="M1826 1361 c-11 -18 6 -41 31 -41 16 0 22 4 17 12 -5 8 0 9 17 4 59
                -18 108 -18 153 -1 25 10 55 15 66 12 11 -3 20 -1 20 4 0 18 -52 21 -93 5 -52
                -20 -94 -20 -127 -1 -28 16 -76 20 -84 6z"/>
                <path d="M2065 1330 c-4 -6 7 -10 25 -10 18 0 29 4 25 10 -3 6 -15 10 -25 10
                -10 0 -22 -4 -25 -10z"/>
                <path d="M1092 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                <path d="M2822 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                </g>
                </svg>
                    <div class="bread-journey-heading">
                        <h4>6 Months Onwards</h4>
                        <p class="pro_desc">At the 6-month mark, continue applying or taking your hair regrowth treatment as directed, as this is where the magic should begin. You'll observe a significant improvement in overall scalp coverage, and your hairline will be denser. Fuller, thicker hairs will have replaced the old, weakened follicles. Maintain consistency to not only win the battle but also the war! </p>
                    </div>
                </div>
            </div>
            <div class="col-12 pt-40">
                <div class="bread-start-button">
                    <a href="https://agenthealth.co.uk/questionnaire/30" class="trans-btn black-btn learn-more-card-btn">Start your journey</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hair regrow the journey html end-->
<!-- How you get started  html start -->
<section class="product-get-start-sec">
    <div class="container-xxl container">
        <div class="pb-20">
            <h2 class="big-heading">How to Start Your <span>Hair Regrowth</span> Journey</h2>
        </div>
        <div class="product-get-main">
            <ul class="product-get-start">
                <li class="ques-text">
                    <span></span>
                    <h4 class="big-heading">Complete Our Online Questionnaire</h4>
                </li>
                <li class="ques-image margin-box-ques">
                    <div class="ques-svg-img">
                        <?xml version="1.0" standalone="no"?>
                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="1280.000000pt" height="1149.000000pt" viewBox="0 0 1280.000000 1149.000000"
                                preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,1149.000000) scale(0.100000,-0.100000)"
                                fill="#000000" stroke="none">
                                <path d="M8775 10954 c-276 -17 -417 -27 -585 -44 -107 -11 -280 -27 -385 -35
                                -317 -26 -804 -98 -1225 -180 -238 -47 -685 -115 -820 -125 -74 -5 -206 -10
                                -294 -10 l-158 0 6 -22 c3 -13 6 -26 6 -30 0 -4 64 -9 143 -10 l142 -3 -70
                                -47 c-69 -48 -114 -59 -160 -42 -14 6 -13 9 6 30 33 35 17 39 -35 9 -42 -24
                                -50 -26 -118 -19 -40 3 -85 13 -99 20 -23 12 -29 11 -40 -2 -17 -20 -6 -27 68
                                -44 62 -14 56 -31 -8 -23 -34 5 -38 3 -33 -11 3 -9 12 -16 20 -16 27 0 14 -30
                                -20 -47 -32 -15 -38 -15 -88 3 -40 15 -54 25 -56 42 -4 23 -16 29 -27 12 -10
                                -17 19 -50 63 -71 23 -12 42 -22 42 -24 0 -2 -80 -58 -177 -124 -209 -142
                                -230 -158 -221 -166 3 -4 82 43 175 102 226 147 255 163 289 163 29 0 63 -15
                                54 -23 -3 -2 -88 -59 -189 -126 -197 -131 -240 -161 -240 -174 -1 -11 35 10
                                263 153 149 93 217 130 235 128 62 -7 41 -23 -321 -247 -65 -40 -118 -77 -118
                                -83 0 -15 9 -10 232 118 279 162 301 174 316 174 8 0 34 18 59 40 25 22 61 42
                                80 46 35 7 110 0 121 -10 8 -9 -26 -32 -124 -86 -130 -71 -424 -253 -424 -262
                                0 -4 5 -8 12 -8 6 0 186 95 399 211 214 116 396 209 405 207 33 -6 23 -23 -38
                                -66 -119 -85 -45 -52 156 69 289 175 296 179 339 179 32 0 37 3 33 18 -5 15
                                15 31 101 82 60 35 111 65 114 67 28 14 624 109 829 132 112 13 797 72 1120
                                97 239 19 806 25 893 11 44 -8 48 -11 43 -30 -53 -177 -105 -412 -131 -585
                                -22 -146 -81 -747 -105 -1072 -11 -151 -27 -360 -34 -465 -8 -104 -18 -260
                                -22 -345 -6 -156 -6 -156 18 -185 40 -46 58 -30 58 53 0 38 -5 82 -10 98 -8
                                23 -7 41 5 74 10 28 20 104 25 200 9 159 68 825 94 1055 73 653 119 932 180
                                1101 41 113 36 137 -34 154 -44 10 -613 21 -735 14z m-2285 -329 c0 -9 -216
                                -125 -232 -125 -80 0 130 126 215 129 9 1 17 -1 17 -4z m-285 -64 c-6 -5 -56
                                -35 -113 -66 -105 -58 -143 -68 -204 -52 -38 10 -35 22 12 53 45 30 114 41
                                159 26 28 -10 30 -9 28 11 -2 18 5 23 33 28 56 10 95 10 85 0z m-360 -56 c-43
                                -33 -110 -38 -144 -11 -14 10 29 18 139 24 24 1 24 1 5 -13z m366 -38 c-34
                                -37 -116 -72 -141 -61 -18 8 -13 13 47 46 37 21 79 38 92 38 l24 0 -22 -23z
                                m-503 -15 c16 -11 -6 -31 -65 -61 -44 -22 -79 -26 -101 -12 -10 6 -2 17 28 44
                                33 31 48 37 83 37 23 0 48 -4 55 -8z m167 -32 c35 -13 28 -29 -26 -58 -33 -18
                                -55 -22 -87 -19 -59 6 -75 24 -43 45 54 38 110 49 156 32z m164 -56 c-7 -8
                                -25 -22 -40 -30 -33 -17 -83 -19 -73 -3 12 20 69 49 98 49 25 0 27 -2 15 -16z
                                m-680 -3 c11 -7 10 -11 -7 -20 -23 -12 -72 1 -72 19 0 12 60 13 79 1z m165
                                -26 c-1 -5 -14 -16 -29 -24 -22 -10 -33 -11 -54 -1 -25 12 -25 12 -6 26 22 16
                                91 15 89 -1z m180 -15 c34 -13 33 -26 -4 -45 -36 -19 -90 -19 -114 -2 -18 13
                                -17 15 9 35 30 24 68 28 109 12z m-420 -9 c3 -5 -4 -20 -15 -35 -23 -29 -72
                                -35 -103 -13 -18 13 -17 15 9 35 28 22 98 31 109 13z m127 -49 c-5 -10 -17
                                -24 -25 -31 -20 -17 -78 -24 -96 -11 -13 9 -11 14 13 35 21 19 39 25 73 25 40
                                0 44 -2 35 -18z"/>
                                <path d="M3127 10680 c-37 -3 -72 -11 -78 -17 -21 -21 -26 -137 -18 -443 4
                                -173 11 -460 14 -637 9 -393 23 -419 59 -113 36 301 39 754 6 1060 -5 52 -10
                                98 -10 102 0 4 33 5 73 3 39 -3 227 -17 417 -30 190 -14 446 -32 570 -40 124
                                -9 302 -23 395 -31 94 -8 255 -17 359 -21 l189 -6 -6 24 c-4 13 -7 27 -7 30 0
                                4 -66 9 -147 13 -82 4 -265 16 -408 26 -143 10 -309 21 -370 25 -60 3 -270 17
                                -465 30 -481 33 -495 34 -573 25z"/>
                                <path d="M3584 10481 c-36 -16 -66 -41 -50 -41 12 0 122 43 131 51 17 16 -39
                                9 -81 -10z"/>
                                <path d="M4070 10486 c-79 -17 -193 -76 -177 -92 8 -9 240 80 245 94 4 14 4
                                14 -68 -2z"/>
                                <path d="M3794 10469 c-28 -11 -60 -29 -70 -40 l-19 -21 40 17 c22 9 63 26 90
                                37 28 11 52 22 54 24 12 11 -50 1 -95 -17z"/>
                                <path d="M4390 10473 c-134 -48 -318 -142 -293 -150 14 -5 333 138 333 149 0
                                9 -17 9 -40 1z"/>
                                <path d="M4617 10446 c-20 -8 -44 -20 -53 -27 -9 -8 -79 -45 -157 -84 -77 -38
                                -143 -76 -145 -84 -3 -10 2 -11 19 -6 39 12 158 64 244 108 60 30 93 40 130
                                41 48 1 115 -19 115 -33 0 -4 -57 -42 -127 -84 -143 -85 -181 -112 -171 -123
                                7 -6 189 95 263 147 22 16 64 33 93 40 41 8 52 15 52 30 0 13 7 19 24 19 13 0
                                29 7 36 15 10 12 7 17 -16 26 -16 6 -51 13 -79 15 l-50 5 38 -17 c51 -22 49
                                -44 -5 -44 -57 1 -130 33 -122 54 8 20 -35 21 -89 2z"/>
                                <path d="M5008 10413 c-39 -10 -3 -43 48 -43 25 0 26 1 12 23 -16 23 -31 28
                                -60 20z"/>
                                <path d="M6305 9684 c-217 -4 -863 -20 -1568 -39 -501 -14 -520 -15 -553 -36
                                -34 -21 -36 -21 -67 -4 -33 17 -83 18 -81 0 0 -5 12 -17 25 -27 23 -18 50 -18
                                559 -8 294 6 699 15 900 22 201 6 949 13 1663 15 713 3 1297 9 1297 13 0 19
                                -35 25 -255 42 -185 15 -379 19 -985 21 -415 2 -836 3 -935 1z"/>
                                <path d="M3820 9615 c-8 -2 -32 -6 -52 -10 -49 -8 -48 -19 2 -39 51 -20 83
                                -20 127 0 29 15 39 15 74 4 53 -18 74 0 33 26 -26 18 -142 29 -184 19z"/>
                                <path d="M2602 9451 c-119 -44 -200 -124 -232 -230 -50 -163 -51 -190 -61
                                -1316 -8 -962 -11 -1066 -27 -1125 -15 -58 -20 -65 -44 -68 -30 -4 -28 -6 -51
                                108 -17 83 -22 235 -37 1240 -11 656 -16 743 -53 870 -27 94 -84 158 -160 179
                                -108 31 -257 -12 -340 -97 -33 -34 -40 -50 -57 -133 -18 -84 -20 -138 -20
                                -524 0 -251 7 -563 16 -750 20 -421 24 -941 6 -972 -7 -13 -17 -23 -23 -23
                                -20 0 -67 57 -79 96 -9 27 -15 196 -21 534 -8 502 -12 565 -49 783 -31 178
                                -43 209 -100 260 -109 98 -265 96 -375 -4 -67 -62 -85 -104 -129 -310 -61
                                -282 -59 -258 -47 -936 12 -652 14 -683 60 -968 17 -99 44 -270 61 -380 42
                                -267 174 -999 199 -1105 42 -176 183 -531 226 -565 14 -12 25 -30 25 -42 0
                                -35 18 -73 83 -173 81 -126 152 -266 183 -364 48 -153 54 -207 54 -527 l0
                                -299 -22 -5 c-13 -3 -54 -10 -92 -15 -78 -12 -92 -18 -122 -52 -43 -47 -45
                                -71 -23 -350 16 -199 18 -262 9 -268 -7 -4 -39 -10 -72 -14 -73 -7 -215 -71
                                -245 -110 -37 -47 -48 -149 -34 -326 7 -85 18 -186 25 -225 12 -69 12 -70 41
                                -68 76 6 78 8 71 76 -14 139 -26 318 -26 415 0 123 11 141 87 143 27 0 154 4
                                284 7 l236 7 31 33 c16 17 37 32 46 32 22 0 20 -13 -4 -28 -11 -7 -20 -19 -20
                                -27 0 -15 54 -15 941 5 474 11 956 13 1012 3 26 -4 42 -13 48 -27 5 -12 15
                                -205 24 -431 14 -378 24 -522 56 -772 31 -248 59 -77 66 412 6 338 -9 738 -28
                                810 -16 57 -55 90 -123 106 -31 7 -59 16 -62 20 -4 8 89 394 128 524 15 51 29
                                77 55 101 42 38 39 67 -9 83 -17 6 -104 11 -197 11 -91 0 -172 4 -178 8 -10 6
                                -10 22 -3 67 5 33 10 110 10 171 0 103 -2 112 -23 132 -32 30 -37 28 -37 -14
                                0 -41 -15 -74 -34 -74 -10 0 -62 -34 -115 -77 -2 -2 -2 -5 1 -8 10 -10 63 16
                                96 48 23 22 35 28 43 20 18 -18 1 -48 -39 -71 -49 -28 -109 -78 -101 -86 3 -4
                                35 7 70 23 34 17 65 28 68 25 4 -3 -15 -25 -42 -47 -26 -23 -47 -45 -47 -50 0
                                -4 16 0 36 8 55 23 69 19 37 -10 l-28 -25 23 -6 c18 -5 20 -9 11 -20 -9 -11
                                -42 -14 -133 -14 -145 0 -162 -4 -181 -41 -33 -62 -31 -62 140 -57 85 3 155 2
                                155 -3 0 -4 -7 -15 -16 -23 -12 -13 -39 -16 -124 -16 -60 0 -111 -4 -115 -9
                                -5 -10 12 -14 108 -26 47 -6 48 -7 32 -25 -11 -12 -38 -21 -78 -25 -80 -10
                                -117 -23 -67 -25 19 -1 43 -5 53 -9 18 -6 18 -7 0 -23 -10 -8 -30 -18 -45 -22
                                -19 -4 -28 -13 -30 -32 -2 -21 -17 -35 -65 -63 -45 -26 -61 -41 -57 -53 7 -23
                                -54 -69 -118 -90 l-53 -16 90 -1 c80 -1 88 -3 74 -16 -10 -10 -65 -22 -160
                                -35 -80 -10 -156 -24 -170 -30 -25 -11 -1 -10 294 6 77 5 117 3 117 -3 0 -16
                                -22 -30 -57 -38 -18 -3 -35 -10 -37 -13 -5 -9 230 5 310 18 115 19 137 10 39
                                -16 -103 -27 -128 -28 -705 -50 -320 -12 -433 -20 -456 -30 -23 -11 -38 -12
                                -58 -4 -40 15 -137 12 -169 -5 -26 -13 -31 -13 -50 0 -18 12 -64 15 -253 15
                                l-232 0 -7 279 c-4 153 -4 288 -1 299 5 14 18 23 39 26 100 15 496 38 788 46
                                187 5 357 14 383 21 33 8 54 8 77 0 40 -14 79 -14 79 -1 0 18 -29 67 -42 72
                                -7 3 -148 1 -313 -3 -589 -18 -594 -17 -645 11 -29 16 -46 33 -48 48 -4 26 5
                                27 44 7 30 -16 64 -20 64 -8 0 4 -12 20 -27 36 l-28 30 28 -5 c40 -8 33 6 -23
                                42 -37 24 -50 38 -50 56 0 29 5 30 65 3 25 -11 49 -18 52 -15 4 3 -21 32 -55
                                64 -34 31 -62 63 -62 70 0 16 -2 16 59 -14 38 -18 57 -22 64 -15 6 6 9 12 6
                                14 -2 1 -32 27 -67 56 -50 43 -62 59 -62 82 l0 29 48 -24 c26 -13 63 -27 82
                                -31 l35 -7 -20 22 c-11 12 -46 42 -78 67 -47 37 -87 85 -87 107 0 3 35 -15 78
                                -38 159 -89 166 -68 12 38 -107 74 -134 103 -128 131 2 10 18 2 55 -26 97 -76
                                86 -40 -25 82 -91 100 -123 145 -217 305 -205 351 -323 613 -374 829 -22 96
                                -77 403 -135 755 -31 187 -51 304 -130 755 -33 190 -47 451 -53 1015 -5 534
                                -5 560 16 676 23 131 63 280 86 323 14 24 15 18 9 -70 -11 -159 20 -210 129
                                -217 72 -4 124 17 144 58 8 15 13 69 14 135 l0 110 24 -66 c19 -56 22 -83 20
                                -170 -1 -57 -5 -121 -10 -141 -11 -54 9 -48 40 11 51 102 61 65 15 -59 -38
                                -104 -38 -128 1 -67 17 26 36 47 41 47 14 0 2 -59 -22 -112 -28 -61 -26 -77 5
                                -48 l25 23 0 -26 c0 -15 -11 -55 -25 -89 -32 -78 -33 -98 -4 -72 20 18 20 18
                                13 -11 -4 -17 -18 -52 -31 -80 -32 -71 -29 -85 12 -39 28 32 34 35 34 19 0
                                -11 -11 -47 -25 -80 -51 -119 -64 -155 -55 -155 5 0 24 24 42 53 44 70 49 42
                                9 -52 -32 -74 -33 -94 -5 -71 12 10 11 1 -5 -45 -30 -88 -26 -110 10 -50 36
                                60 40 38 10 -50 -25 -73 -25 -87 0 -55 26 34 25 24 -9 -64 -16 -42 -26 -78
                                -21 -81 4 -2 20 13 35 36 16 22 32 36 36 32 5 -5 -1 -37 -12 -73 -22 -72 -20
                                -86 16 -100 33 -13 191 14 216 36 9 8 25 48 35 87 21 85 21 129 -3 727 -13
                                301 -17 585 -16 973 l2 549 25 53 c29 64 84 108 157 125 63 15 108 8 166 -25
                                59 -35 83 -86 82 -175 0 -54 -15 -128 -19 -95 0 6 -5 54 -9 107 -8 103 -24
                                138 -63 138 -21 0 -23 -16 -3 -50 10 -18 14 -61 14 -155 1 -154 -9 -202 -44
                                -232 -23 -20 -37 -23 -110 -23 -117 0 -115 -3 -115 217 0 97 -4 174 -9 178
                                -19 11 -31 -73 -31 -222 l0 -153 28 -31 c24 -27 37 -33 85 -37 66 -5 139 11
                                180 40 18 13 45 54 72 112 52 110 58 87 14 -55 -35 -114 -34 -146 4 -74 31 60
                                35 41 7 -33 -11 -29 -20 -62 -20 -75 0 -18 4 -15 25 18 34 56 31 30 -10 -76
                                -41 -105 -41 -134 0 -69 44 69 41 31 -4 -59 -28 -55 -41 -94 -41 -121 0 -23
                                -7 -55 -16 -71 -24 -47 -9 -46 26 3 48 65 62 102 50 134 -8 21 -8 31 4 42 12
                                12 15 10 21 -17 12 -55 -5 -133 -52 -234 -45 -98 -50 -134 -11 -87 22 28 22
                                28 -18 -79 -35 -91 -24 -97 25 -13 81 136 84 98 5 -59 -30 -61 -53 -114 -50
                                -117 8 -8 9 -6 60 83 66 115 71 74 6 -55 -60 -119 -64 -167 -7 -72 21 34 43
                                62 48 62 18 0 8 -37 -36 -130 -25 -52 -45 -101 -45 -107 0 -25 19 -12 47 32
                                40 63 58 65 27 3 -43 -85 -78 -184 -60 -168 22 17 20 6 -9 -80 -30 -89 -30
                                -94 -5 -80 24 13 24 13 7 -36 -8 -22 -17 -52 -21 -69 l-8 -30 26 24 c31 29 31
                                29 6 -44 -25 -73 -25 -83 1 -59 45 41 80 143 59 169 -8 10 -10 27 -4 52 11 53
                                11 58 -4 55 -18 -3 -15 17 11 68 l22 45 3 -148 c2 -122 0 -155 -14 -180 -17
                                -35 -54 -135 -54 -149 0 -19 17 -5 38 33 13 22 26 39 28 36 2 -2 -12 -46 -31
                                -98 -19 -52 -35 -98 -35 -102 0 -17 21 6 55 59 19 30 37 54 39 54 3 0 -9 -36
                                -25 -81 -19 -52 -25 -79 -17 -77 12 4 23 19 65 84 10 16 11 11 6 -26 -8 -71 3
                                -75 134 -50 166 31 203 52 117 65 -44 6 -46 8 -40 33 16 67 57 1421 56 1853 0
                                221 13 431 33 519 l13 55 7 -119 c5 -78 12 -128 22 -143 19 -28 62 -36 164
                                -32 122 6 148 32 177 175 9 44 20 86 24 94 18 33 23 -25 9 -97 -8 -40 -13 -73
                                -11 -73 3 0 11 8 18 18 27 36 14 -11 -21 -74 -34 -61 -34 -100 0 -48 25 39 26
                                25 4 -46 -30 -98 -20 -119 20 -40 l33 65 -5 -42 c-3 -24 -20 -73 -38 -110 -54
                                -111 -53 -107 -18 -83 16 12 32 20 35 17 3 -3 -7 -33 -22 -68 -14 -35 -30 -74
                                -35 -87 l-9 -23 30 21 c34 24 36 19 15 -40 -19 -53 1 -51 28 3 22 43 37 40 37
                                -8 0 -24 -9 -43 -33 -69 -42 -44 -62 -102 -40 -114 13 -8 11 -16 -11 -60 -14
                                -28 -26 -54 -26 -57 0 -16 42 21 75 66 62 87 54 44 -15 -80 -17 -30 -27 -57
                                -24 -60 3 -3 21 12 40 34 18 22 34 36 34 31 0 -5 -20 -51 -45 -104 -25 -52
                                -45 -97 -45 -100 0 -2 9 -2 20 1 23 6 24 1 5 -33 -20 -34 -18 -42 5 -35 26 8
                                25 -2 -5 -66 -28 -61 -24 -78 8 -34 12 16 32 41 45 55 l23 25 -7 -24 c-3 -13
                                -24 -51 -45 -84 -22 -33 -39 -64 -39 -69 0 -17 16 -6 45 32 17 21 33 39 38 40
                                4 0 7 -54 7 -121 0 -111 -2 -123 -24 -152 -32 -43 -98 -177 -87 -177 5 0 24
                                20 42 45 19 25 42 56 51 68 l17 22 1 -31 c0 -18 -7 -38 -17 -45 -17 -15 -104
                                -191 -97 -198 7 -8 44 32 76 83 l33 51 3 -32 c2 -21 -8 -54 -32 -101 -45 -86
                                -45 -109 -1 -57 30 34 35 37 35 19 0 -12 -21 -58 -46 -102 -52 -93 -55 -132
                                -4 -59 60 84 60 56 0 -63 -41 -82 -34 -96 16 -29 l39 54 7 -45 c3 -25 7 -64 7
                                -88 1 -36 5 -44 27 -52 89 -34 150 19 205 177 48 140 74 504 64 903 -5 200 -2
                                351 10 555 22 404 53 566 116 619 28 24 39 26 118 26 110 0 141 -18 188 -105
                                51 -98 62 -177 62 -450 l-1 -240 -29 -69 c-16 -38 -28 -71 -25 -73 2 -2 13 8
                                25 23 18 23 21 24 21 7 0 -11 -11 -52 -24 -91 -26 -77 -21 -93 13 -39 25 39
                                29 12 5 -35 -9 -17 -31 -67 -50 -111 -30 -68 -32 -78 -14 -62 11 10 34 43 51
                                72 17 29 33 53 36 53 16 0 -8 -125 -36 -187 -34 -79 -35 -83 -21 -83 5 0 16
                                14 25 30 41 79 46 -19 6 -112 -22 -51 -21 -54 11 -37 21 11 21 10 15 -48 -3
                                -32 -18 -89 -32 -127 -27 -73 -27 -99 0 -47 9 18 21 29 27 25 18 -11 2 -113
                                -32 -197 -38 -96 -37 -130 3 -72 l27 40 0 -43 c0 -24 -4 -51 -9 -60 -4 -9 -11
                                -29 -15 -44 -5 -22 -3 -28 9 -28 24 0 29 -26 15 -76 -11 -37 -11 -47 -1 -54
                                10 -5 6 -20 -13 -58 -30 -60 -32 -72 -10 -72 10 0 14 -5 10 -15 -3 -8 -9 -22
                                -13 -31 -5 -14 -2 -16 20 -10 25 6 27 4 27 -23 0 -17 -9 -53 -20 -81 -24 -60
                                -26 -81 -5 -54 19 25 19 7 1 -61 -8 -27 -12 -51 -11 -53 2 -2 13 2 25 8 20 11
                                21 10 12 -7 -8 -14 -5 -26 11 -53 l22 -35 -27 18 c-38 24 -41 22 -35 -23 4
                                -34 2 -40 -13 -40 -11 0 -22 -11 -28 -27 -5 -16 -13 -36 -17 -47 -7 -16 -6
                                -17 13 -7 27 15 27 15 -4 -53 -28 -62 -26 -80 6 -51 26 24 25 18 -10 -56 -44
                                -94 -23 -97 29 -5 39 68 74 101 43 41 -11 -22 -35 -67 -54 -100 -41 -73 -50
                                -95 -38 -95 5 0 28 29 51 65 23 36 46 65 50 65 20 0 6 -39 -52 -147 -71 -133
                                -76 -182 -9 -78 26 41 46 63 48 53 2 -8 -15 -64 -38 -124 -50 -132 -51 -176
                                -2 -92 33 58 63 90 48 52 -31 -76 -76 -223 -76 -248 l1 -31 29 34 c26 31 30
                                32 36 15 19 -59 29 -75 62 -98 73 -50 125 -57 205 -30 72 24 128 85 218 234
                                192 320 411 578 580 683 248 154 557 168 690 31 38 -39 30 -45 -12 -9 -46 38
                                -90 46 -162 28 -63 -16 -189 -71 -217 -95 -72 -61 -63 -151 21 -229 66 -61 30
                                -78 -75 -34 -33 13 -62 22 -65 19 -3 -2 14 -24 37 -47 23 -24 42 -46 42 -50 0
                                -4 -29 4 -65 17 -36 13 -65 20 -65 17 0 -14 50 -54 87 -72 l38 -17 -82 -1
                                c-113 -1 -111 -12 11 -60 47 -19 17 -34 -58 -29 -46 3 -66 0 -66 -8 0 -17 20
                                -31 55 -40 43 -10 47 -14 35 -29 -7 -8 -33 -17 -58 -20 -79 -11 -102 -16 -102
                                -26 0 -5 9 -9 20 -9 25 0 26 -18 3 -27 -10 -3 -35 -12 -55 -21 -35 -14 -36
                                -17 -22 -33 14 -15 12 -19 -20 -39 -51 -31 -45 -42 17 -35 49 6 51 5 32 -10
                                -11 -9 -42 -28 -70 -42 -147 -76 -172 -121 -41 -77 26 9 49 14 52 11 3 -3 -36
                                -31 -85 -62 -109 -69 -122 -97 -28 -61 34 13 71 27 82 32 27 10 24 7 -79 -75
                                -91 -73 -93 -87 -6 -56 52 18 51 18 43 0 -3 -9 -35 -37 -72 -62 -36 -26 -76
                                -55 -88 -66 -47 -42 -19 -49 58 -16 27 12 52 19 55 16 10 -9 -19 -44 -73 -87
                                -66 -52 -78 -78 -23 -50 22 11 40 17 40 12 0 -5 -27 -40 -61 -78 -33 -38 -65
                                -77 -70 -87 -9 -16 -8 -18 11 -12 19 6 20 4 12 -12 -6 -10 -34 -45 -64 -77
                                -35 -39 -48 -61 -39 -64 8 -3 -2 -19 -30 -48 -24 -24 -40 -44 -36 -44 4 0 30
                                12 58 26 28 14 53 23 56 21 2 -3 -29 -31 -71 -62 -42 -32 -76 -61 -76 -66 0
                                -4 25 1 57 12 31 10 58 17 61 15 2 -3 -32 -29 -77 -58 -44 -29 -81 -57 -81
                                -61 0 -4 17 -5 38 -1 36 6 35 5 -40 -52 -42 -33 -75 -61 -73 -63 2 -2 25 4 51
                                13 106 36 88 3 -38 -70 -84 -48 -94 -62 -32 -45 21 6 40 9 42 7 2 -3 -38 -27
                                -90 -55 -51 -27 -100 -54 -108 -59 -30 -19 -1 -23 60 -7 60 16 84 14 64 -4 -5
                                -5 -61 -28 -124 -51 -63 -24 -119 -47 -124 -51 -19 -17 1 -18 54 -4 54 14 55
                                14 32 -5 -12 -10 -61 -40 -107 -65 -47 -25 -85 -51 -85 -56 0 -6 8 -8 18 -5
                                44 13 72 18 72 12 0 -4 -18 -31 -40 -60 -42 -56 -48 -77 -27 -94 10 -8 48 18
                                157 109 180 150 235 203 314 304 81 103 123 171 202 319 97 185 180 382 244
                                576 100 306 136 380 289 605 300 442 389 548 558 663 51 34 99 72 108 85 71
                                102 -104 235 -333 253 -151 11 -344 -45 -500 -146 -175 -113 -286 -238 -598
                                -674 -146 -205 -211 -238 -302 -155 -37 35 -45 49 -48 83 -1 23 -8 94 -15 158
                                -11 99 -10 184 5 535 9 230 24 544 33 698 31 536 16 1853 -23 2002 -27 102
                                -113 226 -181 259 -45 21 -215 25 -274 5 -52 -17 -94 -67 -117 -141 -70 -220
                                -73 -262 -82 -1120 -8 -829 -10 -848 -70 -979 -31 -67 -67 -100 -92 -85 -8 5
                                -8 188 -2 628 16 1142 7 1598 -35 1759 -66 254 -214 385 -369 328z m116 -106
                                c31 -39 46 -152 38 -285 -3 -63 -11 -119 -16 -124 -5 -5 -52 -14 -104 -19
                                -133 -15 -127 -24 -124 187 l3 171 70 47 c80 54 105 58 133 23z m201 -778 c1
                                -25 -4 -40 -14 -44 -24 -9 -27 1 -10 42 13 29 14 44 6 67 -6 17 -8 35 -4 42 9
                                13 22 -50 22 -107z m-1780 -320 c15 -18 26 -317 12 -337 -13 -19 -135 -20
                                -168 -2 -22 12 -23 18 -23 161 0 155 3 167 50 184 31 11 118 7 129 -6z m4332
                                -2149 c22 -12 39 -24 39 -27 0 -3 -28 -22 -62 -41 -33 -19 -101 -73 -150 -119
                                l-90 -85 -38 41 c-46 49 -65 105 -47 141 7 14 36 39 66 56 105 59 215 72 282
                                34z m-1661 -3516 c0 -4 -18 -60 -40 -122 -24 -70 -49 -173 -64 -264 -14 -82
                                -31 -154 -37 -160 -9 -8 -10 -3 -5 23 l6 33 -25 -16 c-32 -21 -31 -14 1 41 14
                                25 23 47 20 50 -3 3 -26 -13 -51 -36 -76 -70 -71 -53 24 78 34 46 59 86 56 89
                                -2 2 -22 -3 -45 -12 -22 -9 -40 -13 -40 -9 0 4 18 33 41 65 40 58 37 71 -11
                                43 -37 -21 -61 -19 -35 3 37 31 85 100 85 120 0 23 -25 32 -87 32 -48 0 -54
                                11 -21 34 17 12 48 16 125 16 57 0 103 -4 103 -8z m-426 -237 c-6 -15 -42 -30
                                -51 -21 -10 9 18 36 38 36 12 0 16 -5 13 -15z m190 -37 c-17 -31 -39 -48 -61
                                -48 -30 0 -29 14 3 39 30 23 70 29 58 9z m-133 -36 c-17 -31 -38 -43 -72 -40
                                l-32 3 28 28 c33 33 93 40 76 9z m-151 -10 c0 -16 -41 -52 -65 -58 -41 -10
                                -51 0 -24 25 35 33 89 53 89 33z m-160 -42 c-6 -12 -27 -28 -45 -36 -71 -29
                                -69 -9 3 37 50 32 59 32 42 -1z m432 -57 c-48 -70 -68 -89 -104 -98 -41 -10
                                -34 6 22 57 28 25 50 53 50 62 0 15 59 50 68 41 2 -2 -14 -30 -36 -62z m-98
                                13 c-7 -19 -30 -27 -50 -19 -15 6 -15 8 2 20 24 18 55 17 48 -1z m-143 -26
                                c-20 -17 -81 -29 -81 -15 0 10 56 34 80 34 l25 0 -24 -19z m-173 -22 c-3 -7
                                -20 -14 -39 -16 -32 -2 -33 -1 -15 13 24 18 59 20 54 3z m242 -29 c0 -29 -22
                                -49 -55 -49 -44 0 -45 14 -2 40 36 22 57 26 57 9z m-110 -29 c0 -15 -33 -29
                                -104 -44 -63 -13 -65 -13 -55 5 5 10 22 25 37 33 30 17 122 21 122 6z"/>
                                <path d="M3888 9303 c-52 -3 -70 -8 -77 -21 -22 -41 -3 -46 216 -55 294 -12
                                3687 1 4353 17 305 7 557 14 560 15 2 0 -2 7 -8 14 -10 9 -94 14 -310 19 -310
                                8 -4617 18 -4734 11z"/>
                                <path d="M3357 8873 c-12 -11 -8 -261 4 -309 7 -26 21 -51 33 -59 31 -20 185
                                -35 216 -21 46 21 62 89 40 166 -12 40 -37 77 -46 67 -4 -3 -9 -41 -13 -84
                                l-6 -78 -79 -3 c-116 -4 -116 -5 -116 180 0 117 -3 148 -13 148 -8 0 -17 -3
                                -20 -7z"/>
                                <path d="M7016 8747 c-100 -106 -102 -108 -120 -88 -17 19 -18 19 -53 -5 -30
                                -20 -45 -23 -82 -19 -25 3 -99 10 -164 15 -65 5 -121 12 -126 15 -5 2 -21 35
                                -36 72 -34 85 -54 102 -75 63 -7 -14 -7 -33 1 -65 15 -58 2 -75 -55 -75 -22
                                -1 -52 -7 -65 -14 l-24 -13 22 -13 c13 -6 50 -16 83 -20 33 -5 62 -11 65 -14
                                3 -3 32 -99 64 -213 37 -127 66 -213 76 -220 36 -27 57 -14 171 103 61 64 113
                                115 113 113 3 -8 46 -334 45 -336 -2 -2 -581 39 -584 42 -2 1 -10 67 -17 145
                                -8 79 -17 145 -19 148 -10 9 -56 -9 -56 -22 0 -30 51 -360 56 -365 3 -3 14 4
                                24 17 17 21 21 22 87 12 37 -6 178 -14 312 -17 l243 -6 -3 256 -4 255 42 59
                                c118 165 196 284 189 290 -4 4 -53 -41 -110 -100z m-196 -171 c0 -8 -4 -26 -9
                                -40 -12 -30 -229 -268 -235 -258 -5 9 -86 295 -86 305 0 4 74 7 165 7 137 0
                                165 -2 165 -14z"/>
                                <path d="M4143 8691 c-77 -6 -120 -13 -137 -25 -39 -25 -33 -44 17 -51 47 -6
                                1414 -22 1465 -16 17 2 32 7 32 11 0 9 -47 25 -100 34 -219 36 -1013 65 -1277
                                47z"/>
                                <path d="M2551 8641 c-20 -13 0 -22 62 -28 55 -5 113 10 102 27 -8 12 -145 13
                                -164 1z"/>
                                <path d="M2618 8559 c-10 -5 -18 -14 -18 -19 0 -14 67 -12 93 2 l22 12 -25 7
                                c-36 10 -53 10 -72 -2z"/>
                                <path d="M6177 8559 c-15 -9 -17 -19 -11 -72 7 -72 27 -103 48 -75 9 12 10 35
                                5 79 -8 69 -16 82 -42 68z"/>
                                <path d="M4165 8379 c-136 -14 -193 -27 -210 -51 -8 -12 -11 -26 -8 -31 7 -11
                                1389 0 1523 12 l75 7 -40 12 c-116 35 -1119 74 -1340 51z"/>
                                <path d="M9165 8148 c-2 -7 -9 -123 -15 -258 -10 -252 -1 -590 20 -698 14 -74
                                44 -138 71 -152 l22 -12 -8 178 c-5 99 -9 344 -10 546 -2 202 -5 374 -8 383
                                -4 8 -13 12 -21 9 -8 -3 -17 -1 -21 5 -9 15 -25 14 -30 -1z"/>
                                <path d="M3407 8113 c-49 -8 -24 -28 38 -31 57 -3 115 12 115 29 0 9 -99 10
                                -153 2z"/>
                                <path d="M4063 8089 c-124 -8 -178 -23 -178 -49 0 -8 11 -19 25 -25 31 -13
                                1717 -8 1704 5 -13 12 -168 37 -309 50 -280 24 -993 35 -1242 19z"/>
                                <path d="M3424 8045 c-16 -13 -17 -16 -4 -25 29 -19 77 -22 106 -7 l29 16 -37
                                15 c-47 20 -69 20 -94 1z"/>
                                <path d="M2590 8029 c-24 -10 -24 -11 -5 -19 29 -11 185 -33 191 -27 3 2 -11
                                15 -32 27 -41 26 -117 35 -154 19z"/>
                                <path d="M4001 7753 l-24 -19 27 -21 c38 -30 214 -38 816 -37 595 2 870 18
                                820 49 -19 12 -656 35 -1165 42 -436 5 -451 5 -474 -14z"/>
                                <path d="M6204 7735 c-7 -18 32 -375 51 -469 24 -113 39 -108 32 9 -4 55 -9
                                166 -13 248 -8 169 -17 157 96 131 37 -9 141 -18 243 -21 118 -4 180 -10 182
                                -17 6 -17 35 -372 35 -427 l0 -49 -265 0 c-233 0 -266 -2 -272 -16 -9 -24 18
                                -44 73 -52 53 -8 453 2 510 12 33 7 34 8 19 29 -12 17 -15 60 -16 217 -1 107
                                -4 226 -8 264 -6 67 -7 70 -36 77 -16 5 -145 17 -286 28 -183 14 -265 24 -287
                                35 -38 20 -51 20 -58 1z"/>
                                <path d="M2887 7638 c-45 -74 -68 -121 -65 -134 2 -8 21 12 45 48 44 68 61
                                108 44 108 -6 0 -17 -10 -24 -22z"/>
                                <path d="M2850 7459 c-32 -61 -34 -83 -5 -59 19 16 40 55 49 93 11 46 -10 30
                                -44 -34z"/>
                                <path d="M3526 7465 c6 -24 5 -24 -63 -27 l-68 -3 40 -20 40 -20 -47 -3 c-58
                                -4 -62 -17 -10 -33 50 -15 114 2 141 38 26 32 27 55 3 76 -27 25 -43 21 -36
                                -8z"/>
                                <path d="M4006 7467 c-50 -16 -67 -40 -43 -64 20 -20 61 -22 1076 -48 396 -10
                                618 -12 624 -6 14 14 -2 17 -368 56 -631 67 -1184 93 -1289 62z"/>
                                <path d="M9860 6964 c-83 -16 -809 -131 -1039 -165 -174 -25 -291 -47 -319
                                -59 -39 -17 -67 -20 -222 -20 -168 0 -179 -1 -211 -23 -46 -31 -89 -118 -96
                                -194 -16 -176 98 -366 268 -448 40 -19 80 -35 88 -35 10 0 12 -3 5 -10 -11
                                -11 -247 -51 -674 -116 -135 -20 -262 -41 -282 -46 -39 -9 -50 -31 -22 -42 26
                                -10 290 20 604 69 1048 162 1268 191 1295 171 9 -6 20 -40 27 -79 6 -37 14
                                -67 19 -67 9 0 24 48 34 103 5 35 8 37 41 37 50 0 84 -21 149 -92 83 -92 158
                                -211 240 -382 48 -99 94 -178 135 -231 34 -44 63 -82 65 -83 8 -8 92 38 118
                                64 34 33 61 83 52 92 -4 4 -34 -8 -67 -26 -57 -32 -60 -33 -74 -15 -7 10 -21
                                37 -30 61 -17 42 -17 44 9 108 15 35 27 69 27 74 0 21 -16 8 -45 -35 -16 -25
                                -33 -45 -37 -45 -7 0 -3 64 7 113 4 24 -22 22 -35 -3 -6 -11 -15 -18 -21 -15
                                -15 10 -11 49 11 96 20 44 27 99 13 99 -5 0 -21 -18 -37 -40 -17 -22 -33 -40
                                -38 -40 -4 0 -8 24 -8 54 0 30 -3 62 -6 71 -6 14 -10 13 -32 -7 l-25 -23 6 30
                                c4 17 13 51 21 78 8 26 11 47 7 47 -5 0 -23 -16 -39 -35 l-31 -35 -3 50 c-3
                                49 -19 69 -26 33 -7 -36 -19 -32 -77 25 -107 104 -192 125 -405 103 -100 -10
                                -106 -10 -122 9 -21 26 -28 25 -28 -4 0 -25 -21 -36 -73 -36 -22 0 -30 6 -38
                                30 -16 45 -39 39 -39 -11 0 -39 -1 -40 -32 -37 -30 3 -33 7 -41 47 -10 52 -26
                                44 -34 -18 -6 -46 -13 -54 -37 -45 -12 5 -16 20 -16 59 0 30 -4 56 -10 60 -15
                                9 -40 -50 -40 -95 0 -33 -3 -40 -19 -40 -24 0 -31 19 -31 81 0 84 -33 55 -46
                                -40 -7 -52 -28 -77 -43 -52 -4 6 -15 54 -25 106 -13 68 -21 92 -31 89 -33 -13
                                -42 -95 -19 -171 4 -17 2 -23 -8 -23 -26 0 -46 33 -73 125 -38 129 -35 125
                                -52 85 -11 -25 -14 -53 -9 -98 5 -58 4 -63 -11 -50 -30 24 -63 110 -63 163 0
                                73 8 80 87 80 105 1 170 42 212 135 22 47 28 106 11 95 -6 -3 -28 -33 -51 -66
                                -49 -72 -89 -99 -147 -99 -42 0 -118 32 -187 79 -72 50 -73 11 -2 -65 l53 -57
                                -15 -64 c-8 -35 -18 -63 -23 -63 -7 0 -16 28 -38 118 -14 54 -25 47 -34 -20
                                -9 -66 -25 -47 -27 32 0 30 -4 63 -8 73 -6 17 -8 16 -21 -7 -18 -35 -26 -33
                                -33 12 -13 82 29 174 96 208 25 13 49 11 255 -25 125 -22 331 -59 459 -81 223
                                -39 263 -47 263 -56 0 -9 -105 -144 -112 -144 -4 0 1 23 12 50 36 92 22 104
                                -45 37 -57 -57 -84 -149 -51 -176 34 -28 134 55 197 162 27 46 46 67 59 67 11
                                0 104 -14 207 -30 375 -60 647 -163 743 -279 17 -20 56 -85 87 -146 75 -148
                                149 -258 222 -330 53 -52 61 -64 61 -97 0 -32 4 -40 26 -49 20 -7 32 -6 50 6
                                13 8 37 15 54 15 26 0 30 4 30 28 0 49 -11 70 -38 75 -34 7 -173 155 -225 240
                                -33 55 -36 63 -22 73 14 10 12 15 -15 34 -38 27 -38 44 0 60 37 15 30 30 -14
                                30 -40 0 -68 26 -45 41 8 5 21 9 30 9 15 0 39 19 39 30 0 4 -28 6 -62 6 -79
                                -1 -91 20 -26 50 63 29 60 43 -8 32 -76 -12 -87 -6 -31 16 26 10 47 22 47 27
                                0 11 -5 11 -68 -1 -58 -11 -99 -2 -151 34 -20 13 -73 39 -118 56 -46 17 -83
                                33 -83 35 0 1 37 14 83 29 92 29 143 60 115 71 -14 6 -13 11 8 48 13 23 24 53
                                24 66 0 23 -1 24 -20 6 -11 -10 -36 -47 -55 -81 -32 -56 -40 -65 -78 -74 -23
                                -6 -58 -15 -77 -21 -19 -5 -46 -9 -60 -9 -20 0 -13 7 33 32 67 36 135 93 125
                                103 -4 4 -61 -15 -127 -44 -66 -28 -127 -51 -137 -51 -11 0 3 19 42 54 32 30
                                56 57 53 60 -4 4 -41 -9 -83 -28 -78 -36 -92 -38 -53 -6 43 36 9 30 -79 -13
                                -107 -53 -60 -55 -589 27 -363 56 -426 68 -395 79 8 3 197 30 420 61 223 31
                                524 75 670 97 355 53 415 48 545 -50 54 -41 122 -134 435 -596 89 -132 169
                                -248 178 -257 26 -30 124 -15 159 25 18 19 17 20 -49 13 -77 -9 -88 -2 -25 15
                                91 24 89 49 -5 49 l-73 1 72 35 c40 19 77 43 83 53 9 18 6 18 -66 4 -83 -15
                                -125 -14 -131 4 -3 6 17 16 48 22 62 13 119 39 119 54 0 6 -24 8 -67 4 l-68
                                -6 63 26 c34 14 67 34 73 44 12 23 9 23 -61 4 -62 -17 -166 -20 -175 -6 -3 6
                                26 19 64 31 38 11 80 29 93 40 l23 20 -75 -5 -75 -6 30 26 30 27 -81 -6 c-45
                                -4 -89 -3 -99 0 -9 4 -57 67 -106 140 -84 126 -88 134 -64 134 46 0 519 -141
                                579 -173 63 -34 211 -183 278 -282 77 -114 84 -152 118 -630 11 -159 29 -405
                                39 -545 12 -156 22 -416 25 -670 4 -228 11 -498 16 -600 5 -102 16 -338 25
                                -525 9 -194 31 -488 51 -685 19 -190 41 -460 48 -601 9 -171 18 -266 27 -285
                                19 -40 62 -45 84 -10 15 23 16 41 6 188 -25 352 -63 790 -81 938 -25 199 -47
                                609 -60 1120 -26 983 -39 1273 -79 1730 -48 534 -48 534 -185 697 -102 122
                                -192 206 -254 237 -58 30 -404 125 -587 162 -123 25 -131 29 -257 117 -85 59
                                -156 80 -278 83 -58 1 -116 0 -130 -2z"/>
                                <path d="M4187 6860 c-65 -4 -121 -10 -123 -13 -12 -12 153 -16 746 -21 344
                                -3 616 -1 605 4 -66 26 -966 49 -1228 30z"/>
                                <path d="M6325 6750 c-21 -33 -23 -84 -10 -238 30 -348 26 -319 41 -297 12 16
                                14 54 8 222 l-7 203 145 0 c80 0 200 -3 266 -7 l122 -6 0 -141 c0 -138 16
                                -250 40 -297 24 -44 34 -2 38 168 4 171 -7 300 -29 314 -22 13 -184 28 -382
                                35 -196 7 -197 7 -203 30 -7 25 -19 31 -29 14z"/>
                                <path d="M4070 6652 c0 -27 153 -48 556 -77 691 -49 899 -54 911 -19 6 19
                                -576 74 -982 94 -255 12 -485 13 -485 2z"/>
                                <path d="M10100 6487 c-41 -13 -84 -28 -95 -35 -18 -10 -16 -11 17 -12 43 0
                                140 34 158 55 16 19 10 18 -80 -8z"/>
                                <path d="M10153 6427 c-73 -31 -82 -53 -14 -35 49 14 111 46 111 58 0 15 -18
                                11 -97 -23z"/>
                                <path d="M4116 6367 c-19 -14 -19 -15 9 -33 27 -17 55 -19 350 -22 269 -3 323
                                -1 340 12 11 8 18 17 15 19 -15 15 -186 29 -425 33 -228 5 -273 4 -289 -9z"/>
                                <path d="M6653 6149 c-220 -8 -288 -18 -267 -39 16 -16 323 -29 454 -20 69 5
                                131 10 138 10 16 0 16 25 -1 38 -21 18 -81 20 -324 11z"/>
                                <path d="M6514 6042 c-6 -4 -13 -20 -16 -36 -5 -26 1 -37 51 -86 49 -48 61
                                -68 91 -150 48 -136 116 -263 172 -323 26 -28 48 -61 48 -72 0 -12 10 -31 23
                                -42 23 -21 466 -333 595 -418 68 -45 72 -50 72 -85 0 -36 -4 -41 -92 -104 -99
                                -69 -238 -191 -238 -207 0 -13 35 11 191 133 70 54 130 98 133 98 16 0 -4
                                -275 -22 -305 -4 -7 -68 -65 -142 -130 -260 -228 -370 -330 -370 -342 0 -7 2
                                -13 5 -13 3 0 116 95 252 211 l248 210 3 -57 c2 -32 1 -68 -2 -79 -3 -12 -123
                                -142 -266 -289 -229 -235 -284 -297 -251 -284 5 2 120 105 257 231 241 220
                                285 251 255 180 -6 -16 -138 -155 -291 -308 -154 -154 -280 -283 -280 -286 0
                                -3 10 -11 23 -16 21 -10 26 -7 51 33 15 24 33 44 40 44 7 0 111 96 232 213
                                158 153 219 207 222 195 5 -25 -28 -68 -103 -134 -37 -32 -65 -65 -65 -75 0
                                -11 3 -19 8 -19 4 0 41 34 82 75 48 48 82 75 97 75 12 0 29 7 37 16 15 14 16
                                12 16 -21 0 -52 33 -95 72 -95 37 0 34 -24 -4 -28 -20 -2 -36 9 -76 53 -62 71
                                -84 52 -30 -27 24 -35 23 -45 -12 -85 -19 -21 -30 -45 -30 -64 0 -48 -26 -97
                                -87 -163 -31 -33 -172 -185 -312 -336 -141 -152 -265 -286 -276 -299 l-20 -24
                                25 13 c14 6 166 154 338 327 l312 316 0 -72 c0 -40 -5 -81 -10 -91 -6 -11
                                -173 -165 -372 -342 -236 -211 -355 -324 -345 -326 11 -2 79 51 174 135 481
                                425 558 492 564 485 4 -4 28 -58 54 -120 81 -194 150 -281 338 -429 59 -47
                                107 -88 107 -92 0 -3 -79 -100 -174 -216 -96 -115 -172 -214 -169 -218 8 -13
                                25 6 205 215 l170 198 36 -22 c103 -62 327 -201 331 -204 2 -2 -20 -35 -49
                                -75 -54 -74 -87 -139 -71 -139 13 0 63 59 112 132 23 35 43 65 45 66 7 9 64
                                -34 64 -47 0 -29 -65 -181 -80 -187 -8 -4 -84 -9 -167 -12 -153 -5 -173 -1
                                -138 28 24 20 135 189 135 206 0 32 -22 8 -106 -111 -60 -86 -96 -128 -112
                                -132 -24 -6 -682 1 -1273 13 -325 7 -808 -7 -1084 -31 -454 -40 -1460 -166
                                -1499 -188 -19 -10 -18 -12 23 -21 62 -13 409 15 1016 84 143 17 319 35 390
                                40 72 6 177 15 235 20 140 13 1240 13 1610 -1 311 -11 850 1 980 22 36 6 111
                                14 168 18 116 9 139 20 96 48 -21 14 -52 19 -126 21 -54 2 -98 7 -98 12 0 12
                                69 160 75 160 3 0 23 -11 45 -25 l39 -25 -14 -35 c-22 -50 -19 -53 20 -15 l35
                                34 36 -17 c29 -14 35 -22 34 -45 -3 -45 -1 -47 25 -22 l26 24 104 -52 c77 -38
                                105 -48 105 -37 0 26 21 16 79 -37 72 -67 220 -132 342 -151 l84 -13 20 -77
                                c18 -72 18 -78 3 -94 -16 -15 -16 -17 5 -28 12 -6 27 -25 33 -43 5 -18 14 -36
                                20 -42 14 -14 291 9 332 27 56 26 39 36 -50 29 -46 -3 -120 -9 -165 -12 l-83
                                -7 0 25 c0 23 6 26 63 38 78 16 162 47 176 64 9 11 -3 11 -71 0 -46 -8 -106
                                -17 -134 -20 l-51 -6 -10 41 c-6 23 -8 43 -4 45 4 3 47 12 96 21 89 17 183 50
                                172 61 -3 3 -64 0 -137 -7 -99 -9 -134 -9 -142 -1 -17 17 -3 27 92 61 88 32
                                173 82 153 88 -6 2 -71 -14 -143 -36 -132 -41 -170 -48 -170 -33 0 5 27 21 60
                                37 33 16 70 40 82 53 27 29 36 30 -107 -13 -86 -26 -217 -45 -203 -31 3 4 52
                                33 109 65 91 50 152 101 138 116 -3 2 -76 -27 -163 -65 -109 -49 -170 -70
                                -198 -70 -23 0 -38 4 -36 10 2 6 42 28 89 49 47 21 107 52 132 70 43 30 74 67
                                64 77 -2 3 -53 -18 -113 -44 -80 -36 -112 -56 -122 -75 -14 -29 -54 -41 -113
                                -35 -32 3 -34 5 -31 36 3 28 0 32 -22 32 -37 0 -76 -18 -76 -35 0 -23 -28 -18
                                -55 11 -14 15 -25 30 -25 33 0 4 21 14 48 23 114 39 152 54 163 65 21 21 3 24
                                -42 7 -44 -16 -155 -35 -219 -38 -52 -2 -44 22 13 44 56 21 77 37 77 56 0 20
                                -35 17 -125 -11 -44 -14 -88 -25 -97 -25 -22 0 -88 31 -88 41 0 5 19 13 43 19
                                179 48 237 70 237 90 0 15 -27 12 -167 -15 -71 -13 -150 -27 -178 -30 -49 -7
                                -105 6 -105 23 0 4 34 14 75 21 124 20 284 82 321 122 17 19 16 19 -17 13 -19
                                -4 -95 -22 -169 -42 -74 -19 -155 -39 -179 -45 -24 -6 -48 -19 -54 -28 -10
                                -16 -13 -16 -51 4 l-41 21 71 12 c99 17 197 48 282 89 74 35 146 84 138 92 -3
                                3 -65 -15 -138 -40 -180 -61 -226 -69 -133 -22 39 20 81 47 95 60 l24 25 -69
                                -20 c-39 -11 -139 -39 -222 -62 -84 -23 -153 -46 -153 -50 0 -5 14 -14 30 -19
                                17 -6 30 -17 30 -25 0 -18 -37 -4 -96 37 -42 29 -50 49 -18 49 64 0 362 128
                                349 150 -3 4 -96 -21 -207 -56 -112 -35 -213 -64 -224 -64 -22 0 -174 116
                                -174 132 0 4 22 8 49 8 110 0 345 83 397 141 24 27 6 24 -88 -15 -125 -51
                                -210 -75 -315 -87 -133 -16 -141 0 -21 41 109 37 220 90 226 107 2 9 -8 9 -40
                                -2 -176 -59 -303 -95 -317 -90 -10 3 -32 20 -50 39 l-32 33 77 7 c93 7 180 30
                                214 56 14 10 23 20 20 23 -3 2 -45 -3 -95 -11 -114 -19 -190 -19 -239 -1 -33
                                12 -43 23 -67 74 -51 107 -72 216 -66 330 8 149 19 169 84 144 l28 -11 -45
                                -23 -45 -23 28 -11 c46 -18 84 -13 150 20 93 47 132 88 65 68 -58 -17 -118
                                -27 -118 -18 0 4 23 20 52 36 72 39 73 53 3 53 -48 0 -56 3 -53 17 2 9 29 30
                                61 46 73 37 74 51 2 42 -30 -3 -55 -3 -55 2 0 5 30 24 68 43 l67 35 -70 3
                                c-65 3 -73 6 -106 38 -24 23 -41 33 -52 28 -12 -4 -20 1 -26 19 -8 20 -15 24
                                -33 19 -21 -5 -22 -4 -9 14 36 47 66 74 83 74 22 0 23 -8 3 -30 -13 -14 -9
                                -22 31 -73 25 -31 52 -57 60 -57 24 0 78 26 93 44 17 21 7 33 -14 16 -23 -19
                                -95 4 -95 29 0 10 -3 32 -6 49 -6 28 -3 33 30 48 38 19 53 60 19 50 -21 -6
                                -133 -26 -145 -26 -16 0 -4 436 18 633 6 57 6 57 39 57 42 0 85 -16 101 -38 9
                                -11 13 -51 13 -122 1 -122 -11 -156 -85 -251 -26 -32 -45 -62 -42 -65 10 -9
                                82 26 111 54 43 41 76 103 87 165 14 74 -3 253 -26 279 -10 10 -50 25 -96 35
                                -44 9 -87 23 -96 30 -16 12 -15 14 6 32 13 11 43 23 68 27 208 31 377 -105
                                490 -393 18 -45 45 -98 60 -118 26 -34 27 -39 14 -68 -7 -18 -17 -93 -21 -167
                                -4 -74 -10 -185 -14 -246 -9 -128 -5 -151 30 -187 30 -29 273 -179 330 -203
                                45 -19 87 -13 160 21 65 31 114 82 166 175 23 41 43 76 44 78 2 2 14 -2 27 -9
                                20 -10 854 -544 994 -636 60 -39 85 -43 76 -11 -5 21 -5 21 21 2 15 -10 27
                                -22 27 -26 0 -16 62 -76 88 -87 38 -16 79 0 88 34 8 31 26 28 34 -6 4 -16 14
                                -25 31 -27 14 -2 48 -21 74 -43 90 -75 187 -109 307 -109 132 0 233 61 283
                                171 26 60 28 68 22 170 -6 124 -17 149 -83 208 -56 49 -134 80 -230 91 -49 5
                                -81 15 -102 30 -24 18 -39 22 -67 17 -102 -17 -253 -131 -277 -209 -11 -36
                                -10 -41 14 -65 l26 -26 34 68 c28 58 42 74 91 106 59 38 124 65 134 56 2 -3
                                -9 -13 -26 -22 -17 -8 -56 -40 -86 -70 -63 -63 -85 -121 -85 -224 0 -51 -3
                                -62 -12 -53 -7 7 -19 12 -28 12 -10 0 -20 16 -29 48 -11 43 -44 92 -62 92 -3
                                0 -10 -24 -13 -53 -10 -77 -16 -83 -62 -58 -21 12 -51 21 -66 21 -21 0 -28 5
                                -28 19 0 11 -15 30 -32 42 -69 47 -74 80 -28 178 42 88 141 184 241 234 98 48
                                148 50 209 6 103 -75 200 -80 123 -7 -16 15 -233 154 -483 310 -250 157 -583
                                366 -740 465 -157 99 -382 240 -500 313 -118 73 -235 146 -258 162 l-44 30 39
                                40 c21 22 84 83 141 134 123 111 140 116 196 54 l37 -41 -76 -81 c-100 -109
                                -97 -134 5 -33 50 50 83 76 89 70 5 -6 24 -48 41 -94 23 -59 31 -93 27 -117
                                -5 -27 -2 -34 11 -34 9 0 29 -20 45 -44 39 -63 100 -129 133 -146 16 -8 44
                                -25 62 -39 18 -13 34 -22 36 -20 9 13 95 274 91 278 -11 10 -67 -56 -91 -106
                                -28 -59 -40 -66 -51 -25 -11 41 -6 60 64 250 3 6 -2 12 -10 12 -21 0 -75 -65
                                -98 -116 -19 -46 -33 -55 -43 -28 -12 32 -5 74 29 168 19 53 35 101 35 107 0
                                22 -44 -21 -83 -81 l-42 -65 -3 50 c-3 42 4 68 44 158 26 59 44 110 40 114
                                -12 13 -61 -34 -96 -92 -47 -80 -52 -47 -10 76 17 50 28 94 25 97 -12 12 -60
                                -47 -87 -106 -44 -96 -63 -62 -33 62 14 59 14 59 -5 40 -11 -10 -28 -44 -39
                                -74 l-19 -55 -11 29 c-7 16 -15 65 -18 109 l-6 78 -21 -21 c-17 -16 -21 -33
                                -21 -79 0 -33 -2 -57 -5 -55 -3 3 -19 39 -35 81 -17 42 -36 78 -43 81 -17 5
                                -16 -65 3 -118 20 -56 19 -70 -3 -70 -13 0 -39 29 -76 85 -31 47 -60 85 -65
                                85 -5 0 -13 -10 -16 -21 -7 -21 5 -43 78 -141 44 -60 5 -34 -96 62 -109 104
                                -144 124 -126 71 15 -43 72 -104 131 -142 29 -18 55 -34 58 -36 9 -7 -25 -22
                                -72 -32 -26 -6 -98 -15 -160 -21 -192 -18 -210 -25 -138 -54 53 -21 218 -21
                                310 0 125 28 126 20 3 -83 -61 -51 -114 -93 -118 -93 -3 0 -120 71 -258 157
                                -139 86 -439 271 -667 411 l-415 254 -45 -16 c-25 -9 -54 -16 -66 -16 -11 0
                                -49 -18 -83 -40 -34 -22 -65 -40 -70 -40 -4 0 -16 8 -25 19 -16 18 -14 20 51
                                46 86 36 101 48 83 69 -16 21 -118 52 -255 78 -88 17 -117 27 -143 50 -62 53
                                -130 79 -158 60z m317 -179 c54 -14 99 -30 99 -34 0 -4 -33 -37 -72 -74 l-73
                                -66 -14 57 c-9 39 -24 66 -48 90 -34 34 -36 54 -7 54 9 0 60 -12 115 -27z
                                m550 -193 c74 -46 339 -212 589 -370 250 -158 672 -422 936 -587 265 -166 505
                                -317 533 -336 l51 -34 -67 -17 c-128 -31 -201 -81 -265 -180 -21 -33 -49 -93
                                -61 -134 -16 -54 -26 -72 -37 -69 -21 5 -587 356 -617 381 -18 16 -27 40 -37
                                99 -14 81 -44 131 -72 120 -22 -8 -16 -37 16 -78 17 -21 28 -40 25 -43 -6 -7
                                -51 34 -77 71 l-20 28 23 25 c29 31 59 31 89 -1 13 -14 31 -25 39 -25 13 0 15
                                -9 13 -43 -3 -39 -1 -43 27 -54 21 -8 31 -18 31 -32 0 -24 4 -25 29 -11 14 7
                                25 2 50 -22 18 -17 35 -44 38 -60 5 -26 23 -40 23 -18 0 6 5 10 10 10 6 0 10
                                -10 10 -23 0 -12 7 -33 17 -46 l16 -24 20 38 c21 41 37 34 37 -17 0 -37 15
                                -43 35 -12 22 34 54 28 74 -13 11 -21 25 -33 41 -35 17 -2 26 -10 28 -26 5
                                -30 28 -39 51 -18 24 22 28 21 36 -15 9 -40 25 -33 53 21 30 59 26 94 -10 98
                                -25 3 -28 7 -28 42 0 43 -18 56 -47 35 -25 -20 -30 -19 -37 11 -7 26 -19 28
                                -70 8 -12 -5 -20 2 -29 25 -8 23 -16 29 -29 25 -11 -3 -27 4 -43 20 -14 14
                                -34 26 -44 26 -11 0 -21 9 -24 21 -5 17 -11 20 -31 15 -24 -6 -26 -4 -26 24 0
                                33 -16 38 -52 19 -20 -11 -21 -9 -15 25 6 40 -1 44 -38 20 -23 -15 -27 -15
                                -51 1 -14 9 -35 32 -46 51 -23 39 -33 41 -61 17 -20 -18 -20 -17 -13 39 6 57
                                6 58 -18 48 -26 -9 -24 -12 -119 130 -55 81 -133 153 -211 192 -57 29 -216 68
                                -277 68 -24 0 -29 4 -29 25 0 23 -2 24 -21 15 -11 -7 -25 -25 -31 -41 -9 -28
                                -48 -60 -48 -41 0 5 9 35 20 67 20 57 20 57 0 52 -16 -4 -20 0 -20 19 0 27 -3
                                28 -31 14 -16 -9 -19 -7 -19 10 0 25 -11 25 -43 0 -37 -29 -39 -25 -17 30 15
                                39 17 50 6 50 -7 0 -19 -7 -26 -15 -21 -25 -31 -17 -24 20 6 35 6 36 -20 29
                                -22 -5 -26 -3 -26 15 0 14 -6 21 -20 21 -13 0 -20 7 -20 19 0 30 -13 32 -49
                                10 l-33 -20 7 31 c8 35 -7 40 -43 15 -21 -16 -22 -15 -15 15 5 30 4 31 -21 24
                                -23 -5 -26 -3 -26 19 0 14 -7 27 -15 31 -8 3 -15 15 -15 26 0 24 -9 25 -36 5
                                -30 -22 -36 -18 -19 15 20 39 19 43 -10 36 -18 -5 -25 -2 -25 9 0 24 -19 18
                                -50 -15 -18 -19 -33 -51 -41 -85 -13 -59 -8 -75 16 -55 13 11 15 9 15 -14 0
                                -22 3 -25 18 -17 19 10 53 -11 65 -41 3 -10 15 -18 26 -18 10 0 21 -6 24 -14
                                3 -7 21 -16 40 -20 19 -3 42 -15 53 -27 10 -11 39 -31 65 -45 26 -14 52 -37
                                60 -50 7 -13 20 -24 29 -24 20 0 65 -47 75 -78 6 -22 8 -23 26 -6 18 17 19 16
                                19 -21 l0 -38 23 21 c30 28 37 28 37 -3 0 -32 -20 -75 -35 -75 -7 0 -35 15
                                -61 33 -393 267 -526 361 -535 378 -8 16 -4 46 16 132 30 127 59 186 110 217
                                98 60 139 53 306 -50z m-529 -157 c10 -9 18 -25 18 -36 0 -19 -3 -18 -30 8
                                -16 16 -30 32 -30 37 0 13 22 9 42 -9z m3116 -1464 c213 -133 393 -246 400
                                -252 9 -7 -4 -17 -50 -37 -35 -14 -83 -39 -108 -55 -62 -39 -154 -135 -190
                                -198 l-30 -52 0 50 c0 70 27 105 159 205 122 93 134 124 29 72 -40 -20 -91
                                -58 -141 -107 -62 -61 -77 -72 -77 -54 0 21 0 21 -47 2 -9 -4 -9 2 0 27 10 27
                                10 33 -6 41 -9 6 -17 18 -17 28 0 14 -6 17 -30 13 -28 -4 -30 -2 -30 28 0 22
                                -4 30 -12 27 -50 -20 -48 -21 -38 15 6 18 10 34 10 35 0 9 -25 0 -50 -19 -38
                                -28 -60 -14 -42 27 23 50 14 61 -21 27 -18 -18 -37 -32 -41 -32 -5 0 -5 20 -2
                                45 8 51 1 55 -38 24 -35 -28 -44 -17 -22 27 21 44 14 54 -23 33 l-28 -17 7 34
                                c10 41 -6 45 -52 13 -33 -24 -32 -28 -13 39 10 33 -13 28 -57 -15 -32 -31 -38
                                -34 -38 -18 1 11 7 31 15 45 8 14 14 28 15 33 0 14 -27 7 -54 -14 -21 -16 -26
                                -17 -26 -5 0 8 4 17 9 20 5 3 32 33 61 66 51 59 52 60 25 60 -20 0 -43 -16
                                -87 -62 -69 -72 -111 -140 -134 -217 -22 -75 -40 -55 -24 25 16 77 48 138 105
                                201 57 64 101 92 179 114 113 32 90 42 514 -222z m-1425 99 c48 -32 87 -62 87
                                -67 0 -5 -20 -35 -45 -67 -43 -55 -53 -74 -38 -74 3 0 31 27 60 60 30 33 58
                                60 63 60 4 0 18 -8 30 -18 l23 -19 -63 -92 c-73 -110 -60 -116 22 -10 32 41
                                65 76 74 77 9 2 54 -22 100 -52 l85 -57 -36 -42 c-65 -76 -174 -167 -201 -167
                                -33 0 -121 45 -136 70 -7 11 -20 20 -30 20 -21 0 -135 67 -141 83 -2 7 4 89
                                14 182 10 94 18 174 19 178 0 10 2 9 113 -65z m780 -236 c10 -2 17 3 17 12 0
                                9 5 16 10 16 6 0 10 -8 10 -18 0 -21 119 -122 144 -122 9 0 21 -11 28 -24 8
                                -20 16 -24 37 -20 20 4 33 -2 55 -25 17 -17 34 -31 39 -31 6 0 16 -8 23 -17 7
                                -10 21 -18 31 -18 14 0 19 -9 21 -37 4 -42 15 -48 34 -18 17 27 28 25 28 -6 0
                                -14 7 -42 17 -61 13 -28 21 -34 39 -30 27 5 57 -23 74 -67 14 -37 1 -52 -31
                                -36 -85 44 -590 368 -616 396 -28 28 -33 41 -33 81 0 32 7 59 22 83 l23 35 5
                                -45 c4 -32 10 -46 23 -48z m-1633 -42 c0 -10 -32 -30 -49 -30 -6 0 -11 9 -11
                                20 0 16 7 20 30 20 17 0 30 -4 30 -10z m10 -190 c0 -13 -10 -22 -32 -28 -39
                                -11 -48 -7 -48 17 0 25 9 31 47 31 26 0 33 -4 33 -20z m3156 -233 c53 -30 84
                                -66 84 -96 0 -22 4 -29 14 -25 9 3 19 -9 30 -36 18 -44 22 -75 7 -51 -7 11
                                -33 0 -125 -53 -63 -36 -119 -66 -123 -66 -5 0 -15 10 -22 23 l-14 22 -13 -30
                                -13 -30 -11 33 c-8 21 -19 32 -31 32 -12 0 -19 7 -19 18 0 10 -11 29 -24 41
                                -17 16 -25 38 -30 82 -9 74 6 102 67 130 49 22 189 26 223 6z m-311 -309 c-10
                                -34 -23 -44 -37 -30 -9 9 -7 16 7 32 24 27 38 25 30 -2z"/>
                                <path d="M8335 5813 c-8 -27 -22 -59 -30 -73 l-13 -25 -6 25 c-3 14 -7 39 -9
                                55 l-3 30 -17 -37 c-21 -47 -22 -87 -1 -116 25 -36 43 -26 73 40 l28 61 18
                                -54 18 -54 13 35 c19 54 17 104 -7 134 -30 38 -45 32 -64 -21z"/>
                                <path d="M7916 5828 c-3 -7 -7 -38 -9 -68 -3 -31 -17 -84 -31 -118 l-25 -63
                                22 7 c82 25 128 127 96 211 -15 39 -45 57 -53 31z"/>
                                <path d="M3180 5651 c0 -22 -14 -28 -25 -11 -3 6 -10 10 -16 10 -14 0 -11 -54
                                4 -74 29 -39 207 -6 211 39 2 16 -68 45 -123 52 -47 5 -51 4 -51 -16z"/>
                                <path d="M2232 5645 c-29 -21 -26 -55 8 -73 18 -9 53 -12 120 -9 146 7 165 22
                                76 63 -72 33 -172 42 -204 19z"/>
                                <path d="M1413 5570 c-87 -6 -113 -24 -95 -65 14 -31 41 -32 138 -6 102 27
                                129 40 116 53 -16 16 -80 24 -159 18z"/>
                                <path d="M8240 5487 c0 -43 96 -149 169 -187 35 -17 121 -42 121 -35 0 2 -65
                                55 -145 119 -80 64 -145 110 -145 103z"/>
                                <path d="M8000 5475 c0 -21 46 -88 81 -119 41 -34 99 -61 119 -54 6 2 -27 35
                                -72 73 -108 92 -128 108 -128 100z"/>
                                <path d="M8425 5460 c25 -83 137 -185 184 -168 5 1 -36 46 -91 98 -72 67 -99
                                87 -93 70z"/>
                                <path d="M8135 5443 c42 -66 100 -111 190 -148 l40 -17 -35 37 c-41 43 -187
                                155 -202 155 -6 0 -2 -12 7 -27z"/>
                                <path d="M6385 5444 c-14 -14 -14 -19 -3 -31 26 -25 357 -23 399 3 6 4 3 14
                                -7 25 -16 17 -33 19 -195 19 -151 0 -180 -2 -194 -16z"/>
                                <path d="M6334 5253 c-16 -110 13 -424 42 -453 5 -5 105 -5 229 0 121 5 255 9
                                298 10 67 0 77 2 77 18 -1 39 -17 47 -107 51 -91 3 -331 -14 -417 -30 -27 -5
                                -50 -8 -52 -7 -1 2 -5 98 -9 213 -4 116 -12 218 -17 228 -17 32 -36 19 -44
                                -30z"/>
                                <path d="M8834 5095 c-49 -46 -82 -84 -74 -84 20 0 132 90 159 128 42 58 3 39
                                -85 -44z"/>
                                <path d="M7021 5107 c-22 -27 -41 -88 -41 -131 0 -46 26 -126 40 -126 10 0 35
                                65 44 113 7 39 -9 143 -24 152 -4 3 -13 -1 -19 -8z"/>
                                <path d="M4884 4826 c-22 -17 -14 -48 16 -63 26 -14 144 -11 343 8 100 9 174
                                34 146 49 -26 14 -486 19 -505 6z"/>
                                <path d="M7415 4821 c-58 -26 -158 -103 -186 -142 -16 -23 -18 -31 -7 -27 25
                                10 238 170 238 180 0 10 2 11 -45 -11z"/>
                                <path d="M4942 4629 c-63 -11 -92 -25 -92 -43 0 -19 121 -28 320 -24 l155 3
                                -25 26 c-18 18 -41 28 -75 32 -103 13 -232 15 -283 6z"/>
                                <path d="M7396 4505 c-82 -54 -141 -101 -219 -175 -58 -54 -95 -102 -65 -84
                                30 18 287 217 333 259 65 58 39 58 -49 0z"/>
                                <path d="M7796 4314 c-32 -8 -75 -24 -95 -37 l-36 -22 29 -3 c36 -4 152 32
                                186 58 l25 20 -25 -1 c-14 0 -52 -7 -84 -15z"/>
                                <path d="M5033 4270 c-368 -5 -404 -7 -420 -23 -17 -17 -17 -19 1 -32 32 -24
                                101 -28 341 -22 289 8 690 48 713 71 15 15 6 16 -108 14 -69 -1 -306 -4 -527
                                -8z"/>
                                <path d="M7760 4201 c-30 -9 -64 -23 -75 -29 -19 -11 -19 -11 4 -12 31 0 139
                                28 171 45 l25 14 -35 0 c-19 0 -60 -8 -90 -18z"/>
                                <path d="M4695 4009 c-165 -10 -175 -12 -175 -33 0 -23 125 -31 460 -29 377 2
                                613 20 618 46 3 16 -11 17 -181 17 -101 0 -271 2 -378 4 -107 3 -261 0 -344
                                -5z"/>
                                <path d="M7232 3651 c-39 -37 -69 -71 -65 -74 17 -18 43 -4 60 31 10 21 31 43
                                48 51 32 15 45 29 45 49 0 21 -13 13 -88 -57z"/>
                                <path d="M7277 3498 c-36 -33 -504 -564 -523 -593 -19 -29 -11 -47 10 -24 63
                                68 498 564 524 597 36 45 29 57 -11 20z"/>
                                <path d="M6646 3196 c-146 -151 -266 -278 -266 -282 0 -4 15 6 33 22 17 17 97
                                89 177 161 80 71 194 177 255 235 97 93 108 107 96 122 -7 9 -17 16 -21 16 -4
                                0 -127 -123 -274 -274z"/>
                                <path d="M7688 3444 c-78 -25 -92 -36 -62 -48 45 -17 135 4 176 41 45 40 -2
                                43 -114 7z"/>
                                <path d="M3655 3428 c-27 -15 -33 -27 -28 -49 4 -15 -5 -23 -43 -40 -42 -18
                                -47 -23 -32 -32 15 -10 15 -14 2 -37 -9 -14 -33 -37 -54 -53 l-39 -28 22 -41
                                c12 -23 27 -43 34 -45 7 -3 21 13 31 34 11 21 38 59 61 85 23 26 41 56 41 70
                                0 14 8 27 22 33 28 12 43 53 34 89 -7 28 -20 32 -51 14z"/>
                                <path d="M6794 3187 c-218 -242 -270 -304 -262 -312 9 -10 488 486 488 505 0
                                4 -6 12 -13 18 -10 9 -58 -38 -213 -211z"/>
                                <path d="M7285 2941 c-125 -114 -315 -313 -266 -279 90 63 431 398 405 398 -5
                                0 -68 -53 -139 -119z"/>
                                <path d="M3321 2994 c-37 -19 -49 -30 -42 -37 18 -18 131 29 131 53 0 17 -34
                                11 -89 -16z"/>
                                <path d="M7302 2749 c-178 -167 -227 -226 -99 -120 87 72 283 268 276 276 -3
                                2 -83 -68 -177 -156z"/>
                                <path d="M7412 2650 c-130 -128 -241 -238 -245 -246 -5 -9 -3 -14 6 -14 16 0
                                454 414 480 454 10 15 13 27 7 31 -6 3 -117 -98 -248 -225z"/>
                                <path d="M8255 2788 c-88 -28 -162 -52 -165 -55 -9 -8 25 -23 53 -23 37 0 209
                                65 266 101 65 40 34 36 -154 -23z"/>
                                <path d="M2807 2638 c3 -18 10 -37 15 -43 5 -5 53 -10 108 -10 85 0 103 3 127
                                21 15 12 29 31 31 43 3 21 1 21 -142 21 l-145 0 6 -32z"/>
                                <path d="M7845 2652 c-10 -7 -196 -232 -264 -319 -18 -24 -28 -43 -23 -43 20
                                0 254 270 295 339 17 30 14 39 -8 23z"/>
                                <path d="M7969 2419 c-44 -45 -112 -137 -133 -179 -4 -8 19 13 51 47 58 60
                                150 183 138 183 -3 0 -29 -23 -56 -51z"/>
                                <path d="M8025 2293 c-35 -53 -62 -99 -60 -102 8 -7 45 30 77 76 27 40 63 123
                                53 123 -3 0 -34 -44 -70 -97z"/>
                                <path d="M9175 2237 c-16 -7 -39 -17 -50 -24 -19 -11 -19 -13 -4 -29 14 -14
                                22 -14 50 -5 46 15 83 46 75 60 -9 14 -32 13 -71 -2z"/>
                                <path d="M11960 1684 c-197 -64 -312 -72 -1289 -95 -476 -11 -902 -24 -946
                                -29 -44 -6 -129 -24 -190 -41 -146 -41 -182 -64 -136 -88 13 -7 60 -2 167 18
                                210 41 443 51 1309 61 730 8 865 15 994 50 49 13 52 3 8 -35 -26 -23 -55 -36
                                -95 -43 -78 -15 -338 -48 -571 -71 -106 -11 -195 -22 -198 -25 -15 -14 91 -18
                                247 -7 192 12 236 13 228 6 -2 -3 -125 -32 -273 -64 -265 -59 -332 -81 -248
                                -81 60 0 249 26 452 61 189 32 222 34 181 7 -29 -19 -375 -104 -588 -144 -78
                                -15 -150 -33 -160 -41 -21 -17 2 -14 268 28 102 16 218 33 258 37 l72 8 -31
                                -32 c-43 -45 -97 -66 -281 -110 -87 -21 -158 -42 -158 -47 0 -13 113 -1 280
                                29 74 13 147 26 163 29 26 4 27 4 12 -19 -25 -39 -69 -53 -330 -112 -235 -53
                                -293 -69 -282 -80 5 -5 251 28 346 46 29 5 72 10 95 10 l41 -1 -22 -18 c-13
                                -11 -74 -31 -137 -46 -63 -14 -120 -33 -126 -41 -15 -18 -22 -18 150 6 112 16
                                145 18 151 8 6 -9 20 -5 57 15 80 43 119 33 67 -18 -19 -20 -34 -25 -73 -25
                                -27 0 -76 -9 -110 -19 -33 -11 -80 -22 -104 -26 -50 -8 -76 -20 -65 -31 6 -6
                                80 1 335 32 48 6 52 1 18 -21 -18 -12 -294 -63 -348 -65 -5 0 -8 -4 -8 -10 0
                                -17 175 -11 375 14 105 13 192 22 194 20 2 -2 -4 -15 -13 -29 -26 -39 -81 -61
                                -213 -83 -153 -26 -194 -45 -78 -38 44 3 98 8 120 12 l40 7 -25 -21 -25 -21
                                60 0 c74 -1 183 14 252 34 55 16 123 67 123 91 0 18 -13 17 -129 -1 -52 -9
                                -96 -13 -99 -10 -3 3 10 21 28 40 30 29 48 37 115 50 44 8 92 15 108 15 l27 0
                                0 -82 c0 -73 2 -81 15 -67 15 15 36 115 60 289 19 145 67 788 60 811 -8 23
                                -59 25 -125 3z m-60 -295 c-13 -23 -31 -32 -57 -27 -14 3 -11 9 17 26 44 27
                                54 28 40 1z m15 -110 c-34 -35 -88 -69 -110 -69 -3 0 1 13 9 29 16 30 54 59
                                95 71 45 14 46 11 6 -31z m-207 -65 c-37 -33 -58 -43 -58 -26 0 11 38 46 65
                                60 35 18 31 2 -7 -34z m-108 -4 c-17 -32 -84 -71 -132 -77 l-43 -6 19 22 c20
                                23 130 81 153 81 11 0 11 -4 3 -20z m284 -51 c-16 -17 -42 -38 -59 -46 l-29
                                -16 15 24 c17 26 75 69 92 69 6 0 -2 -14 -19 -31z m-134 -39 c-13 -24 -60 -50
                                -91 -50 -22 0 -22 0 -3 21 19 22 68 48 92 49 10 0 10 -5 2 -20z m-180 -38 c0
                                -13 -32 -39 -58 -47 -21 -6 -23 -5 -13 14 17 31 71 56 71 33z m298 -57 c-40
                                -37 -58 -44 -58 -22 0 24 40 57 68 57 l27 -1 -37 -34z m-138 -12 c0 -14 -34
                                -43 -52 -43 -26 0 -22 13 10 32 29 19 42 22 42 11z m-144 -52 c-9 -10 -35 -23
                                -56 -29 -37 -9 -39 -8 -30 9 14 25 39 38 74 39 28 0 28 -1 12 -19z m327 -12
                                c-10 -17 -30 -39 -44 -49 -30 -22 -79 -36 -79 -23 0 16 63 75 95 89 44 19 48
                                17 28 -17z m-508 -29 c-18 -20 -55 -28 -55 -12 0 16 24 32 49 32 23 0 24 -1 6
                                -20z m334 -36 c-24 -23 -48 -36 -74 -40 l-40 -6 31 31 c28 30 103 65 114 55 2
                                -3 -12 -20 -31 -40z m-149 -24 c-13 -24 -45 -42 -66 -38 -26 5 22 58 52 58 22
                                0 23 -3 14 -20z m350 -49 c0 -24 -5 -29 -31 -35 -45 -9 -99 -7 -99 3 0 15 27
                                32 72 46 59 19 58 19 58 -14z m-196 -42 c-14 -13 -31 -19 -49 -17 -27 3 -28 4
                                -11 21 10 9 32 17 49 17 l31 0 -20 -21z m-114 2 c0 -16 -48 -40 -92 -47 l-43
                                -7 19 22 c26 29 116 54 116 32z"/>
                                <path d="M9285 1441 c-3 -10 3 -55 15 -99 30 -121 57 -294 81 -522 11 -113 23
                                -207 25 -210 11 -10 23 27 31 90 4 36 8 151 7 255 -1 178 -3 197 -31 305 -40
                                152 -60 194 -95 198 -19 2 -28 -2 -33 -17z"/>
                                <path d="M1096 1134 c-31 -30 -29 -95 9 -339 50 -324 63 -397 74 -408 17 -17
                                24 41 17 147 -18 283 -29 392 -43 414 -10 16 -11 27 -3 41 13 25 13 107 0 130
                                -13 26 -37 33 -54 15z"/>
                                </g>
                                </svg>
                    </div>
                    <p class="pro_desc">Answer a set of carefully curated questions so our clinicians can assess the nature of your hair loss and recommend the most appropriate hair growth treatments. Then, all you need to do is relax whilst we ship your medications directly to your door!</p>
                </li>
            </ul>
            <ul class="product-get-start">
                <li class="ques-text">
                    <span></span>
                    <h4 class="big-heading">Accept the Delivery</h4>
                </li>
                <li class="ques-image  margin-box-ques">
                    <div class="ques-svg-img">
                     <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="1280.000000pt" height="1149.000000pt" viewBox="0 0 1280.000000 1149.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,1149.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M3366 11024 c-64 -23 -66 -27 -66 -129 0 -158 57 -326 152 -447 61
                    -78 239 -280 335 -380 46 -48 83 -92 83 -97 0 -5 -33 -28 -72 -51 l-73 -41 50
                    5 c28 3 77 8 111 12 l61 6 158 -153 158 -154 -47 -13 c-44 -13 -51 -12 -144
                    21 -207 74 -428 160 -439 170 -6 7 -15 24 -18 40 -7 26 -5 27 30 27 40 0 75
                    15 75 32 0 17 -91 3 -102 -16 -21 -37 -238 -12 -316 36 -49 30 -162 36 -232
                    13 -63 -21 -130 -79 -155 -134 l-17 -39 -87 -7 c-47 -3 -131 -15 -186 -25
                    -211 -41 -333 -52 -602 -59 -149 -3 -273 -8 -275 -11 -3 -3 -14 -27 -25 -55
                    -21 -49 -22 -49 -62 -46 -23 1 -56 7 -74 12 -50 14 -139 11 -192 -8 -69 -23
                    -136 -92 -158 -163 -47 -150 -82 -617 -97 -1275 -6 -307 -12 -408 -30 -525
                    -17 -113 -21 -174 -17 -275 l5 -130 -71 -125 c-94 -166 -121 -195 -206 -220
                    -87 -26 -135 -72 -162 -159 -10 -35 -19 -68 -19 -74 0 -17 147 -110 159 -102
                    6 3 31 35 57 71 77 107 153 140 359 154 72 5 175 16 230 25 152 25 435 16 570
                    -18 155 -39 404 -138 412 -163 2 -5 -93 -34 -210 -65 l-212 -56 -220 14 c-121
                    8 -389 15 -595 16 l-375 2 -50 -25 c-31 -16 -57 -38 -70 -60 -20 -34 -20 -51
                    -20 -860 0 -456 6 -988 12 -1190 7 -201 16 -445 19 -543 l6 -177 -56 -26 c-54
                    -25 -56 -27 -56 -65 0 -34 7 -48 48 -92 26 -29 54 -60 61 -69 13 -18 40 -543
                    41 -803 l0 -109 57 -54 c32 -30 59 -50 60 -45 2 5 -4 68 -12 139 -30 239 -38
                    845 -12 871 8 8 177 -60 177 -72 0 -6 -18 -40 -40 -76 -60 -95 -73 -128 -67
                    -172 3 -21 8 -41 10 -44 12 -11 59 38 135 143 122 167 155 192 208 164 32 -18
                    31 -28 -12 -91 -49 -72 -66 -114 -58 -144 3 -14 8 -25 11 -25 8 0 133 137 164
                    180 16 22 48 50 71 62 39 21 56 23 168 22 116 -2 267 -22 325 -44 l25 -10 0
                    -320 c0 -265 -3 -326 -15 -350 -31 -61 -27 -60 -397 -60 l-338 0 -38 -35 -37
                    -36 415 4 c326 3 445 7 555 22 l140 18 155 -28 c268 -49 393 -45 561 16 l57
                    21 0 236 c0 198 -3 250 -19 317 -21 91 -23 125 -9 176 l10 36 293 -2 c255 -1
                    300 -4 357 -21 l65 -19 6 -100 c6 -111 11 -128 46 -166 23 -25 24 -29 12 -69
                    -10 -34 -21 -46 -58 -65 -25 -12 -54 -32 -64 -43 -10 -10 -35 -27 -57 -37 -21
                    -10 -42 -25 -45 -33 -5 -14 -4 -14 12 0 10 9 34 23 53 33 19 10 39 24 43 32
                    19 31 225 108 243 90 10 -10 -143 -140 -193 -165 -49 -24 -67 -42 -43 -42 6 0
                    10 4 10 8 0 18 193 92 206 79 3 -2 -51 -50 -120 -105 -103 -85 -166 -150 -166
                    -174 0 -3 24 -3 53 0 l52 5 -25 -28 c-44 -47 -140 -104 -213 -126 -326 -97
                    -616 -138 -848 -119 -63 5 -172 14 -244 20 -71 6 -319 17 -550 25 -231 8 -449
                    20 -485 26 -88 16 -465 18 -481 2 -8 -8 -4 -24 17 -64 25 -45 39 -58 94 -86
                    135 -69 92 -66 946 -67 631 -1 774 -3 787 -14 9 -8 28 -51 41 -96 26 -85 49
                    -116 99 -135 15 -6 96 -22 178 -36 272 -45 426 -101 530 -191 74 -64 173 -108
                    309 -138 184 -41 249 -47 550 -55 l285 -8 124 -42 c194 -65 255 -69 603 -42
                    437 34 473 42 1333 327 658 218 598 209 815 121 259 -104 481 -167 870 -246
                    135 -27 308 -59 385 -71 248 -37 369 -59 713 -130 570 -118 673 -141 802 -180
                    109 -32 627 -226 1515 -568 307 -118 344 -122 345 -37 0 72 -1 72 -703 314
                    -1402 482 -1541 529 -1678 556 -151 30 -314 74 -546 146 -418 131 -516 160
                    -798 234 -562 148 -1152 295 -1183 295 -43 0 -132 -20 -132 -30 0 -4 15 -11
                    33 -14 60 -13 2 -28 -137 -36 -96 -6 -151 -15 -206 -33 -41 -13 -300 -125
                    -575 -247 -661 -294 -608 -275 -780 -274 -140 0 -140 0 -300 51 -316 100 -491
                    129 -706 119 l-135 -7 -78 37 c-103 49 -157 54 -229 21 -30 -13 -72 -40 -93
                    -60 l-39 -35 -74 44 c-41 24 -78 47 -83 52 -4 4 195 71 444 147 249 76 460
                    142 468 146 12 6 9 10 -13 18 -39 15 -95 14 -300 -9 -165 -17 -184 -22 -245
                    -53 -97 -50 -207 -82 -393 -113 -156 -27 -169 -27 -254 -15 -128 19 -156 27
                    -195 61 l-35 29 50 1 c27 0 93 -10 145 -21 68 -16 109 -20 143 -15 26 4 47 10
                    47 14 0 4 -91 29 -201 56 -199 48 -203 49 -318 43 -136 -8 -193 -1 -189 21 7
                    35 51 52 163 62 261 24 439 77 735 219 113 54 261 122 330 152 223 95 609 294
                    860 444 287 172 341 210 374 268 39 67 41 89 13 151 -55 120 -124 124 -402 23
                    -99 -36 -265 -96 -370 -135 -307 -112 -479 -158 -538 -141 -19 5 -43 20 -56
                    32 l-22 24 48 25 c76 38 113 109 113 214 l0 51 138 66 c75 36 277 127 447 202
                    171 75 392 174 491 220 100 47 215 95 255 109 96 32 227 49 309 41 161 -16
                    504 -69 705 -110 312 -63 364 -83 487 -186 92 -78 180 -120 355 -170 231 -66
                    432 -106 798 -159 553 -80 681 -97 990 -130 356 -38 524 -61 1055 -150 658
                    -110 1274 -207 1412 -224 124 -15 173 -11 201 14 18 16 -101 41 -603 130 -467
                    82 -796 145 -1017 195 -14 3 -26 17 -33 39 -6 19 -17 39 -23 45 -11 9 -133 37
                    -262 61 -27 5 -192 19 -365 30 -275 18 -612 58 -641 75 -20 13 5 24 151 71
                    132 42 150 50 150 69 0 12 -2 24 -5 27 -3 3 -48 -4 -101 -15 -90 -18 -184 -18
                    -184 1 0 4 45 22 100 41 55 18 100 36 100 41 0 16 -44 40 -73 40 -15 0 -48 -5
                    -72 -11 -46 -12 -95 -6 -95 11 0 15 66 45 180 80 93 28 190 79 190 98 0 4 -54
                    39 -119 79 l-120 72 -344 -88 -345 -89 -6 30 c-10 53 -7 67 17 73 314 71 374
                    87 403 107 19 13 29 27 25 31 -7 7 -360 -57 -434 -79 -15 -5 -17 -1 -11 23 12
                    54 15 61 30 67 49 19 564 80 899 106 322 26 635 60 910 99 116 17 359 46 540
                    66 427 47 522 60 685 96 176 40 171 37 137 55 -26 14 -64 11 -440 -35 -527
                    -65 -651 -76 -1031 -96 -171 -9 -482 -30 -691 -48 -332 -28 -424 -32 -722 -32
                    -188 0 -345 3 -349 7 -4 4 -9 126 -12 270 -3 198 0 302 12 422 11 111 16 253
                    15 465 0 284 -2 311 -22 381 -19 65 -27 78 -67 108 l-45 34 -6 -23 c-12 -40
                    -10 -1821 1 -1969 27 -342 28 -383 13 -422 -9 -21 -18 -38 -22 -38 -23 0 -486
                    74 -571 91 -222 44 -300 78 -405 179 -157 150 -201 162 -705 200 -151 11 -295
                    25 -320 30 -25 5 -74 9 -110 10 -36 0 -94 7 -130 15 -98 22 -191 18 -305 -11
                    -190 -48 -371 -117 -575 -219 -90 -45 -254 -115 -270 -115 -14 0 -30 68 -30
                    130 0 104 45 142 220 186 187 46 270 89 392 203 91 85 92 93 18 156 -34 29
                    -34 29 -11 2 25 -27 25 -27 5 -53 -12 -16 -126 -80 -306 -172 -237 -122 -290
                    -145 -305 -136 -27 16 -27 47 -1 71 13 12 109 65 213 118 105 53 198 106 207
                    118 18 22 25 111 11 120 -5 3 -54 -30 -111 -73 -89 -67 -298 -188 -306 -179
                    -5 6 -10 271 -8 399 l2 116 90 44 90 44 61 -59 c33 -33 71 -81 85 -107 13 -26
                    28 -49 33 -52 5 -3 -4 18 -19 47 -16 28 -39 93 -51 142 -12 50 -25 93 -28 97
                    -4 4 -62 -8 -130 -27 -69 -19 -126 -33 -128 -31 -2 2 5 23 15 47 l19 43 -32
                    31 -32 30 -7 345 c-3 190 -11 363 -16 385 -20 83 -30 176 -23 235 10 103 -26
                    93 723 195 19 2 116 -9 215 -25 212 -35 326 -47 530 -55 83 -4 201 -13 263
                    -21 129 -16 344 -17 477 -3 50 6 325 13 612 17 382 5 525 10 534 19 18 18 -99
                    88 -200 120 l-84 26 -456 -18 c-423 -17 -458 -17 -488 -2 -33 18 -67 65 -78
                    110 l-7 27 236 0 c225 0 236 1 246 20 9 18 6 22 -27 35 -21 9 -56 24 -78 35
                    l-40 20 195 -4 c107 -3 215 -10 240 -16 104 -27 212 -11 277 40 34 26 94 26
                    178 -2 76 -24 79 -29 120 -163 31 -102 73 -199 101 -233 l20 -24 23 70 c20 63
                    21 75 11 133 -32 180 -110 337 -279 566 -24 32 -24 33 -8 90 18 65 23 128 72
                    1013 22 384 41 651 50 691 22 99 27 241 17 445 -8 166 -11 186 -35 235 -14 30
                    -40 67 -56 83 l-29 28 -12 -58 c-9 -43 -10 -96 -4 -194 14 -218 8 -449 -25
                    -870 -39 -501 -38 -487 -61 -915 -15 -274 -24 -377 -39 -433 -28 -108 -24
                    -106 -166 -97 -155 10 -192 8 -357 -16 -186 -26 -309 -60 -462 -125 -120 -51
                    -230 -84 -242 -72 -2 3 5 30 16 60 19 51 109 169 169 222 21 19 21 19 1 33
                    -28 20 -25 57 6 82 38 30 44 27 44 -21 l1 -43 55 59 c36 37 52 61 44 66 -8 5
                    -6 11 5 20 12 10 15 10 15 -4 0 -23 36 -20 60 4 11 11 20 29 20 39 0 11 5 23
                    10 26 6 3 10 10 10 16 0 5 -4 9 -10 9 -5 0 -10 -7 -10 -15 0 -8 -7 -15 -15
                    -15 -12 0 -11 7 7 33 38 54 126 147 188 199 60 50 73 74 86 156 4 24 17 57 30
                    75 41 56 46 76 33 128 l-12 47 76 90 c43 50 77 94 77 99 0 5 -13 17 -30 26
                    -16 10 -30 22 -30 26 0 12 93 132 124 160 14 14 26 28 26 33 0 4 -15 -8 -32
                    -27 -19 -19 -60 -45 -94 -58 l-61 -24 24 51 c15 30 52 77 92 116 158 152 230
                    244 208 267 -3 3 -45 -25 -93 -63 -72 -56 -85 -63 -79 -43 9 33 32 64 151 206
                    119 141 142 178 125 205 -18 29 -13 69 15 105 14 18 39 61 55 94 l31 62 -29
                    24 c-57 47 -80 55 -112 39 -94 -49 -255 -329 -471 -816 -273 -619 -642 -1406
                    -675 -1439 -21 -22 -23 -22 -28 -5 -9 27 -54 347 -71 495 -31 265 -29 719 3
                    1039 11 104 -2 230 -31 307 -28 75 -96 147 -174 185 -56 27 -114 72 -103 82 4
                    3 760 155 1170 235 175 35 257 38 323 16 40 -14 49 -14 74 -1 16 8 39 36 53
                    61 23 44 23 47 6 60 -49 36 -194 78 -852 245 -390 100 -728 190 -751 201 -22
                    10 -46 30 -52 44 -6 14 -30 45 -52 69 -91 98 -235 119 -385 56 -140 -58 -254
                    -53 -431 21 -74 31 -75 32 -68 63 3 17 19 61 35 98 42 97 38 145 -21 271 -24
                    52 -60 77 -109 77 -40 0 -168 -44 -193 -67 -24 -22 -69 -108 -107 -208 -61
                    -157 -89 -173 -338 -186 -166 -10 -178 -9 -191 8 -7 10 -48 83 -89 163 -112
                    212 -219 397 -268 460 -109 141 -258 242 -422 284 -73 19 -96 19 -147 0z m232
                    -130 c75 -36 110 -61 166 -117 120 -121 278 -375 381 -618 19 -44 35 -84 35
                    -89 0 -11 -111 -40 -157 -40 -53 0 -98 33 -193 144 -41 48 -117 124 -169 168
                    -155 130 -236 250 -294 433 -38 120 -38 125 3 153 49 34 107 25 228 -34z
                    m1535 -376 c27 -14 37 -51 37 -141 0 -101 -11 -142 -54 -204 -31 -45 -36 -48
                    -92 -56 -63 -9 -145 3 -177 27 -16 13 -14 22 33 147 50 133 61 155 107 217 24
                    33 27 33 77 27 28 -4 59 -12 69 -17z m-492 -485 c8 -8 -14 -54 -81 -172 -51
                    -89 -96 -161 -99 -161 -3 0 -16 24 -28 53 -11 28 -37 89 -57 135 l-36 83 83
                    40 c74 36 88 40 144 37 35 -2 68 -9 74 -15z m253 -3 c32 -5 61 -12 64 -15 8
                    -7 -42 -58 -113 -115 -58 -46 -222 -150 -238 -150 -13 0 110 234 134 256 40
                    36 61 39 153 24z m428 -67 c65 -21 118 -40 118 -43 0 -8 -269 -174 -371 -229
                    -51 -27 -141 -66 -199 -85 -102 -34 -248 -62 -286 -54 -12 2 51 57 202 176
                    120 95 235 187 254 204 41 36 105 67 140 68 14 0 78 -17 142 -37z m-1023 -136
                    c28 -67 51 -126 51 -130 0 -14 -41 14 -99 67 -31 28 -84 73 -119 99 -54 42
                    -61 51 -52 68 9 16 22 19 89 19 l78 0 52 -123z m1686 -17 c288 -78 491 -131
                    955 -250 239 -61 447 -115 463 -121 27 -11 33 -25 19 -45 -4 -6 -212 -57 -462
                    -113 -250 -57 -538 -123 -640 -148 -258 -64 -283 -63 -610 16 -342 82 -489
                    128 -688 213 -92 39 -171 74 -175 78 -14 13 71 57 171 89 125 41 264 115 392
                    207 211 153 261 159 575 74z m-2795 -15 l23 -25 -91 0 c-51 0 -92 2 -92 5 0 2
                    17 13 38 24 52 28 93 27 122 -4z m350 -105 c80 -31 196 -76 258 -100 l113 -43
                    -28 -24 c-30 -25 -143 -63 -263 -89 -41 -8 -154 -19 -250 -24 -233 -11 -291
                    -31 -420 -145 -42 -37 -57 -45 -91 -45 -43 0 -188 35 -664 160 -406 107 -375
                    97 -375 123 0 21 10 23 223 55 122 18 339 46 482 62 301 34 512 69 675 110 79
                    20 128 27 155 23 22 -3 105 -31 185 -63z m721 -245 c15 -9 45 -26 65 -40 52
                    -35 92 -40 178 -19 l76 18 137 -43 c76 -23 339 -106 586 -183 508 -161 509
                    -161 360 -196 -115 -28 -121 -29 -308 -52 -427 -54 -547 -79 -584 -124 -12
                    -14 -5 -16 63 -16 79 0 692 93 991 151 243 47 336 34 440 -62 57 -52 90 -115
                    105 -197 15 -82 -2 -395 -35 -660 -26 -208 -32 -407 -15 -522 5 -36 16 -110
                    25 -165 8 -55 18 -170 22 -255 5 -128 3 -170 -12 -240 -10 -47 -21 -90 -24
                    -97 -4 -7 -42 40 -89 107 -108 156 -172 236 -636 795 -554 667 -704 840 -878
                    1011 l-153 151 -83 12 c-58 7 -126 28 -224 66 -189 74 -347 113 -843 205 -104
                    19 -402 93 -411 103 -8 8 68 78 109 98 35 18 69 23 202 30 173 9 279 26 565
                    94 102 24 196 46 210 49 40 7 129 -3 161 -19z m-2366 -100 c426 -117 898 -256
                    927 -273 20 -12 28 -24 28 -44 0 -38 -31 -258 -90 -638 -85 -548 -158 -1113
                    -170 -1311 -9 -156 -22 -204 -67 -251 -33 -34 -42 -34 -156 -2 -192 56 -401
                    150 -846 382 -206 108 -231 130 -252 230 -9 46 -8 83 5 197 23 200 24 229 41
                    650 22 538 32 714 56 925 11 102 22 186 23 188 12 11 106 20 176 17 65 -3 144
                    -20 325 -70z m1275 -370 c249 -73 622 -154 1050 -230 113 -20 220 -41 239 -47
                    70 -22 341 -294 438 -439 36 -55 42 -70 35 -90 -5 -13 -19 -57 -30 -97 l-21
                    -73 37 22 c20 13 49 31 64 41 37 25 48 23 48 -11 0 -20 -13 -44 -39 -75 -55
                    -64 -75 -121 -68 -199 3 -34 10 -74 15 -89 10 -25 13 -26 53 -17 23 5 43 8 45
                    6 2 -1 -4 -22 -12 -46 -18 -52 -13 -72 28 -106 31 -26 31 -27 21 -81 -5 -30
                    -7 -56 -5 -59 10 -9 67 -4 88 8 24 14 108 105 144 156 20 29 85 69 96 59 2 -2
                    -1 -21 -7 -41 -9 -32 -117 -180 -275 -375 -50 -61 -59 -84 -45 -111 21 -38 13
                    -86 -20 -127 -17 -22 -56 -77 -87 -124 -109 -169 -351 -516 -375 -538 l-25
                    -24 -7 44 c-13 73 -8 240 9 323 18 86 96 1295 96 1477 0 143 -12 151 -39 26
                    -72 -337 -103 -623 -161 -1458 -11 -162 -23 -307 -26 -322 -4 -21 -13 -29 -37
                    -33 -51 -10 -165 13 -257 52 -194 81 -261 106 -383 143 -144 45 -661 187 -894
                    246 l-153 39 0 163 c0 131 5 186 24 285 13 67 27 156 31 197 4 41 31 253 60
                    470 60 438 89 685 105 895 6 77 13 154 16 172 l5 32 52 -6 c29 -3 104 -20 167
                    -38z m2438 -1694 c-56 -111 -48 -233 23 -358 29 -50 30 -51 62 -42 50 14 53
                    12 66 -47 l13 -56 46 53 c26 30 63 72 83 93 l36 39 36 -22 c43 -26 87 -75 121
                    -134 26 -43 116 -269 119 -297 3 -24 -137 -88 -233 -106 -47 -9 -179 -35 -295
                    -59 -361 -75 -717 -138 -783 -137 -67 1 -152 32 -152 57 0 29 123 256 207 385
                    143 217 433 589 566 728 l41 42 38 -37 37 -38 -31 -64z m97 -71 c-6 -9 -9 -9
                    -16 1 -10 17 0 34 13 21 6 -6 7 -16 3 -22z m-4415 -146 c36 -18 128 -55 205
                    -84 178 -67 243 -99 224 -110 -49 -31 -422 -48 -591 -27 l-67 9 5 31 c11 59
                    24 94 52 130 27 36 91 90 102 85 3 -2 34 -17 70 -34z m5560 16 c0 -5 -4 -10
                    -10 -10 -5 0 -10 5 -10 10 0 6 5 10 10 10 6 0 10 -4 10 -10z m-3913 -665 c27
                    -7 62 -18 78 -25 l30 -13 -35 -9 c-53 -15 -221 -4 -342 22 -60 13 -106 26
                    -103 29 11 10 161 19 242 14 46 -3 104 -11 130 -18z m-1492 -80 c66 -8 298
                    -24 515 -35 217 -11 663 -38 990 -60 327 -22 667 -44 755 -50 311 -19 411 -35
                    610 -98 l90 -28 41 -194 c99 -476 92 -427 95 -660 1 -118 -1 -266 -6 -328 l-8
                    -113 -236 -119 c-160 -82 -252 -134 -286 -165 l-50 -45 180 81 c99 44 231 105
                    293 134 l112 54 0 -304 0 -303 -242 -127 c-134 -70 -257 -136 -275 -147 l-31
                    -19 -144 231 c-150 242 -172 262 -128 117 44 -144 145 -326 236 -424 l39 -42
                    265 174 c146 96 268 175 271 175 13 0 -9 -91 -27 -111 -31 -35 -95 -79 -116
                    -79 -35 0 -108 -42 -139 -81 l-30 -38 53 15 c73 22 101 38 133 76 21 25 41 36
                    81 44 l54 11 0 -98 0 -99 -43 -31 c-23 -17 -96 -58 -162 -90 -66 -32 -160 -81
                    -209 -108 -104 -58 -235 -103 -362 -126 -71 -13 -153 -16 -397 -16 -169 1
                    -318 6 -331 11 -48 18 -49 29 -56 475 -5 335 -9 426 -20 450 -14 28 -15 16
                    -20 -151 -7 -241 -15 -252 -162 -199 -96 35 -196 50 -459 71 l-226 18 -12 135
                    c-6 75 -14 152 -17 172 -5 35 -4 37 38 53 26 11 91 21 168 26 211 14 211 28 0
                    29 -161 0 -190 -2 -227 -18 -79 -36 -77 -27 -83 -531 l-5 -445 -57 -8 c-45 -6
                    -106 0 -290 28 -291 45 -691 113 -739 125 -77 21 -70 -50 -80 897 -5 466 -15
                    1008 -23 1203 -9 195 -16 420 -16 501 l0 145 48 24 c26 13 72 27 102 31 77 10
                    402 0 545 -16z m720 -2664 l16 -48 202 -6 c258 -8 384 4 500 49 20 7 40 14 42
                    14 3 0 5 -79 5 -175 0 -158 -2 -176 -17 -183 -10 -4 -85 -7 -168 -6 -135 0
                    -170 5 -350 42 -110 22 -222 44 -248 48 -48 6 -49 7 -43 38 2 17 8 85 12 151
                    3 66 8 123 11 128 8 14 22 -3 38 -52z m6417 -153 c-9 -9 -15 -9 -24 0 -9 9 -7
                    12 12 12 19 0 21 -3 12 -12z m-5646 -274 c17 -66 -15 -569 -41 -654 -4 -13
                    -58 -15 -394 -18 l-388 -3 -13 48 c-7 26 -16 152 -21 278 -5 143 -14 253 -23
                    290 -9 33 -15 63 -16 67 0 13 63 15 477 16 l413 2 6 -26z m1124 -7 c0 -41 -25
                    -67 -101 -102 -59 -27 -90 -25 -117 8 -11 13 -4 20 40 48 48 29 152 78 171 79
                    4 0 7 -15 7 -33z m744 -222 c0 -5 -20 -25 -44 -43 -36 -28 -50 -33 -78 -28
                    -19 3 -41 11 -49 17 -12 11 -6 17 39 41 53 27 134 36 132 13z m-304 -77 c0
                    -30 -42 -77 -99 -111 -58 -34 -62 -35 -56 -14 16 50 52 100 85 118 41 21 70
                    24 70 7z m-220 -73 c-13 -16 -40 -21 -40 -7 0 10 42 32 49 26 2 -2 -2 -10 -9
                    -19z"/>
                    <path d="M6553 9441 c-51 -5 -68 -11 -90 -35 l-28 -28 30 7 c54 12 198 25 310
                    26 114 1 183 11 155 22 -23 9 -308 15 -377 8z"/>
                    <path d="M6324 9363 c-12 -2 -36 -18 -55 -34 l-34 -30 45 6 c39 5 130 48 130
                    60 0 6 -55 4 -86 -2z"/>
                    <path d="M4615 9057 c-22 -8 -53 -21 -70 -29 l-29 -16 39 -17 c77 -33 153 -31
                    303 6 l136 34 -74 12 c-128 20 -260 25 -305 10z"/>
                    <path d="M5000 8695 c0 -9 275 -368 360 -470 37 -44 106 -120 153 -170 74 -77
                    85 -86 78 -59 -19 69 -319 492 -443 626 -53 57 -70 68 -105 74 -24 4 -43 3
                    -43 -1z"/>
                    <path d="M5638 7919 c23 -25 42 -51 42 -58 0 -31 36 -84 76 -113 24 -17 44
                    -39 44 -47 0 -36 200 -381 220 -381 7 0 30 84 30 108 0 17 -42 70 -175 217
                    -44 49 -78 99 -89 128 -11 30 -31 58 -54 75 -19 15 -58 47 -86 72 l-51 44 43
                    -45z"/>
                    <path d="M6237 7124 c-10 -11 -8 -44 2 -44 6 0 13 4 16 10 8 12 -9 43 -18 34z"/>
                    <path d="M1651 8843 c-144 -339 -249 -733 -277 -1045 l-7 -76 40 -26 40 -27 7
                    -86 c6 -76 34 -173 51 -173 14 0 134 301 203 510 100 302 132 427 132 509 0
                    46 -4 71 -9 66 -5 -6 -48 -79 -96 -163 -48 -84 -89 -151 -91 -149 -7 7 15 178
                    46 363 32 187 48 385 33 422 -8 20 -18 2 -72 -125z"/>
                    <path d="M1752 7853 c-59 -116 -142 -355 -142 -410 0 -7 19 -11 53 -12 28 0
                    61 -1 71 -3 16 -2 25 10 48 63 54 130 61 283 16 389 l-15 35 -31 -62z"/>
                    <path d="M4289 8058 c-22 -84 -39 -175 -50 -278 -13 -114 -7 -330 9 -370 6
                    -14 11 -18 12 -10 0 8 10 74 21 145 19 126 40 555 26 555 -4 0 -11 -19 -18
                    -42z"/>
                    <path d="M4205 7199 c-4 -5 -4 -28 0 -50 6 -35 9 -39 28 -33 30 9 30 9 18 47
                    -12 36 -35 54 -46 36z"/>
                    <path d="M3430 6771 c0 -18 179 -129 241 -150 75 -24 179 -38 179 -24 0 15
                    -121 109 -176 137 -27 14 -70 30 -94 35 -57 13 -150 14 -150 2z"/>
                    <path d="M4187 6652 c-31 -34 -40 -79 -27 -128 7 -24 15 -44 19 -44 18 0 81
                    64 81 82 0 18 -45 108 -54 108 -2 0 -10 -8 -19 -18z"/>
                    <path d="M1018 6158 c-29 -17 -44 -37 -73 -100 -82 -180 -95 -332 -52 -608 46
                    -291 51 -359 51 -742 0 -340 1 -368 17 -368 15 0 17 23 24 233 12 375 1 914
                    -20 1022 -18 96 -17 137 9 313 11 71 27 128 51 184 20 44 34 82 33 84 -2 1
                    -20 -7 -40 -18z"/>
                    <path d="M4013 5951 c-157 -62 -284 -136 -497 -290 -66 -48 -202 -141 -301
                    -206 -146 -95 -199 -137 -282 -221 -57 -56 -103 -107 -103 -113 0 -6 16 -11
                    35 -11 30 0 97 42 433 274 692 477 795 550 803 574 11 29 1 28 -88 -7z"/>
                    <path d="M3014 5882 c-291 -175 -600 -402 -770 -567 l-79 -77 50 27 c146 79
                    582 387 780 550 93 77 165 145 154 145 -3 0 -63 -35 -135 -78z"/>
                    <path d="M3606 5941 c-3 -4 -20 -11 -38 -15 -34 -7 -78 -41 -78 -62 0 -7 -29
                    -22 -64 -34 -69 -22 -66 -21 -641 -433 -309 -222 -385 -281 -385 -300 0 -17
                    66 5 120 40 200 130 823 577 890 638 52 48 90 75 104 75 29 0 72 33 91 71 14
                    26 14 42 1 20z"/>
                    <path d="M1361 5840 c-41 -6 -76 -11 -78 -13 -8 -8 414 -17 505 -11 75 5 112
                    3 161 -10 36 -9 67 -19 69 -21 3 -2 -2 -46 -9 -97 l-14 -93 -342 -29 c-370
                    -32 -389 -31 -411 19 -6 14 -17 55 -23 92 -16 96 -23 103 -44 52 -30 -72 -31
                    -207 -3 -304 l23 -80 350 0 c387 0 386 0 420 65 13 25 21 29 62 32 l48 3 0
                    165 c0 208 -2 216 -57 224 -80 10 -583 15 -657 6z"/>
                    <path d="M4058 5741 c-191 -104 -264 -167 -283 -243 l-7 -27 63 25 c70 29 66
                    30 110 -35 l15 -24 115 93 c62 50 118 96 123 100 10 10 -12 157 -24 165 -3 2
                    -54 -22 -112 -54z"/>
                    <path d="M4424 4815 c-19 -14 -18 -14 4 -15 13 0 22 6 22 15 0 19 -1 19 -26 0z"/>
                    <path d="M4340 4775 c-25 -13 -40 -24 -35 -24 6 0 30 11 55 24 25 13 41 24 35
                    24 -5 0 -30 -11 -55 -24z"/>
                    <path d="M4240 4740 c0 -13 20 -13 40 0 12 8 9 10 -12 10 -16 0 -28 -4 -28
                    -10z"/>
                    <path d="M4065 4654 c-20 -15 -20 -16 4 -12 14 2 26 9 29 16 5 16 -9 15 -33
                    -4z"/>
                    <path d="M4000 4620 c-29 -16 -31 -19 -13 -20 19 0 53 23 53 36 0 6 -1 5 -40
                    -16z"/>
                    <path d="M3890 4570 c-30 -16 -50 -29 -45 -29 6 0 35 13 65 29 30 16 51 29 45
                    29 -5 0 -35 -13 -65 -29z"/>
                    <path d="M3705 4506 c-50 -16 -93 -38 -168 -85 -52 -32 -57 -39 -53 -64 9 -44
                    91 -249 140 -347 42 -83 123 -220 131 -220 16 0 -75 249 -169 465 l-35 79 126
                    93 c107 79 122 93 97 92 -16 0 -47 -6 -69 -13z"/>
                    <path d="M3900 4431 c-41 -13 -111 -51 -174 -95 -56 -38 -58 -41 -33 -44 69
                    -8 215 68 247 128 12 22 4 24 -40 11z"/>
                    <path d="M993 3758 c-28 -30 -29 -40 -3 -63 27 -24 32 -17 28 40 l-3 47 -22
                    -24z"/>
                    <path d="M3760 3753 c0 -22 7 -37 20 -45 14 -9 20 -24 20 -49 0 -22 8 -46 20
                    -60 l19 -24 1 42 c0 30 -7 50 -25 71 -14 17 -32 45 -40 64 l-14 33 -1 -32z"/>
                    <path d="M4094 3690 c-12 -4 -32 -22 -45 -38 -34 -42 -99 -72 -156 -72 l-47 0
                    21 -22 c24 -24 25 -23 108 27 22 14 63 32 92 40 46 14 83 43 83 67 0 10 -29 9
                    -56 -2z"/>
                    <path d="M7675 8600 c-3 -5 -2 -10 4 -10 5 0 13 5 16 10 3 6 2 10 -4 10 -5 0
                    -13 -4 -16 -10z"/>
                    <path d="M7487 5806 c-373 -360 -501 -511 -742 -883 -95 -144 -116 -185 -129
                    -240 -8 -37 -14 -68 -13 -69 2 -2 1158 1301 1172 1321 13 19 -31 65 -62 65
                    -17 0 -80 -54 -226 -194z"/>
                    <path d="M7730 5698 c-144 -108 -343 -312 -504 -514 -78 -99 -160 -223 -151
                    -232 2 -2 39 20 82 49 96 66 241 209 353 349 46 58 119 147 163 199 72 86 138
                    191 120 191 -5 0 -33 -19 -63 -42z"/>
                    <path d="M7684 5466 c-61 -61 -103 -131 -120 -199 -6 -27 -5 -28 22 -22 124
                    28 259 90 300 137 42 51 34 69 -51 111 -42 20 -78 37 -81 37 -3 0 -35 -29 -70
                    -64z"/>
                    <path d="M4912 5057 c-18 -7 -49 -26 -69 -42 -20 -17 -51 -38 -67 -47 -28 -15
                    -29 -17 -9 -18 12 0 31 9 41 20 17 18 29 21 97 18 l78 -3 129 -225 c132 -230
                    139 -235 92 -72 -32 110 -76 221 -122 307 l-37 70 -50 2 c-27 1 -65 -3 -83
                    -10z"/>
                    <path d="M5261 4495 c23 -38 35 -41 24 -6 -3 12 -15 26 -25 31 -19 10 -18 8 1
                    -25z"/>
                    <path d="M4493 3388 c-11 -13 -28 -36 -38 -51 -17 -27 -17 -29 2 -55 11 -15
                    26 -27 33 -27 22 0 51 67 44 100 -11 52 -18 58 -41 33z"/>
                    <path d="M7170 2254 c-47 -19 -117 -48 -157 -64 -39 -17 -106 -35 -150 -41
                    -43 -6 -104 -19 -137 -30 -67 -23 -272 -124 -299 -147 -12 -11 -39 -16 -85
                    -16 -58 -1 -74 -6 -120 -34 -29 -18 -93 -47 -142 -66 -85 -32 -89 -32 -104
                    -15 -20 24 -50 24 -106 -2 -25 -11 -103 -36 -173 -55 -71 -19 -161 -48 -201
                    -64 -76 -32 -208 -113 -239 -148 -18 -20 -18 -21 45 -50 82 -39 159 -56 217
                    -49 25 3 110 33 188 66 78 34 185 75 237 92 64 20 133 53 204 96 130 80 203
                    111 279 119 55 6 347 124 772 313 104 46 161 82 161 102 0 9 -57 29 -84 29
                    -12 0 -59 -16 -106 -36z"/>
                    <path d="M7930 2148 c-63 -22 -117 -42 -119 -44 -10 -9 9 -14 66 -20 52 -6 67
                    -3 95 14 32 21 96 93 81 91 -4 0 -60 -18 -123 -41z"/>
                    <path d="M8370 2065 c-66 -15 -205 -79 -250 -116 -14 -12 -18 -19 -10 -16 8 2
                    119 33 247 68 131 36 227 67 220 71 -19 12 -136 8 -207 -7z"/>
                    <path d="M8575 1998 c-121 -12 -159 -23 -200 -59 -72 -63 -40 -81 104 -59
                    l108 16 37 -57 37 -57 72 20 c226 62 235 66 257 108 11 22 20 43 20 48 0 13
                    -220 52 -286 51 -32 -1 -99 -6 -149 -11z"/>
                    <path d="M9155 1871 c-113 -34 -159 -56 -172 -81 -15 -30 -17 -80 -2 -80 17 0
                    292 69 317 80 36 16 29 53 -17 78 -46 26 -48 26 -126 3z"/>
                    <path d="M9495 1775 c-5 -2 -52 -16 -103 -31 -80 -24 -95 -32 -109 -57 -20
                    -40 -8 -47 82 -47 80 0 188 21 237 45 41 21 99 75 92 87 -5 7 -177 10 -199 3z"/>
                    <path d="M9815 1631 c-79 -20 -140 -44 -149 -59 -9 -16 94 -26 193 -19 89 6
                    160 24 245 60 40 17 46 22 30 28 -38 15 -246 8 -319 -10z"/>
                    <path d="M10153 1536 c-42 -14 -113 -53 -113 -63 0 -3 83 -4 185 -1 184 5 184
                    5 226 34 l42 29 -44 7 c-74 11 -251 7 -296 -6z"/>
                    <path d="M10490 1439 c-35 -14 -100 -60 -100 -70 0 -14 136 -10 235 6 49 8 91
                    12 93 10 2 -2 -1 -12 -7 -23 -6 -12 -11 -28 -11 -36 0 -20 57 -56 87 -56 21 0
                    83 44 83 60 0 14 -65 50 -101 56 -19 3 -58 17 -88 32 -59 28 -149 39 -191 21z"/>
                    </g>
                    </svg>
                    </div>
                    <p class="pro_desc">Whilst our hair growth treatments might be considered magical by some, you’ll still need to have them delivered to receive your treatments.</p>
                </li>
            </ul>
            <ul class="product-get-start">
                <li class="ques-text">
                    <span></span>
                    <h4 class="big-heading">Follow the Directions</h4>
                </li>
                <li class="ques-image ">
                    <div class="ques-svg-img">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" preserveAspectRatio="xMidYMid meet" viewBox="109.2 11.5 173.65 290.29">
                    <g transform="translate(0.000000,314.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                        <path d="M1800 3016 c-162 -30 -285 -93 -396 -204 -156 -153 -219 -308 -230                     -562 -4 -90 -1 -154 10 -229 21 -134 21 -131 -11 -132 l-28 -1 30 -7 c24 -5                     32 -14 41 -46 7 -22 13 -49 13 -59 1 -18 0 -18 -22 2 -36 34 -42 26 -9 -12 25                     -29 31 -46 37 -107 4 -40 14 -88 22 -107 l14 -35 -33 7 c-44 8 -74 44 -94 113                     -19 65 -15 160 7 174 10 6 11 9 1 9 -31 0 -42 -104 -21 -202 14 -62 50 -102                     106 -115 35 -8 39 -12 47 -56 8 -39 7 -51 -7 -64 -14 -15 -18 -15 -40 0 -13 8                     -34 41 -47 72 -12 30 -25 54 -27 51 -6 -6 37 -107 55 -128 8 -10 27 -18 42                     -18 30 0 30 5 10 -110 -27 -150 -29 -207 -15 -338 13 -125 44 -249 70 -282 7                     -8 20 -32 30 -53 10 -20 30 -45 46 -54 15 -9 58 -57 95 -105 37 -49 81 -99 98                     -111 17 -12 49 -39 71 -61 22 -21 49 -42 60 -47 11 -5 27 -13 35 -18 101 -62                     172 -75 220 -39 27 20 31 20 47 6 22 -20 71 -18 104 3 13 9 38 20 54 26 45 15                     131 106 199 209 33 49 84 115 113 146 74 79 140 218 159 336 18 111 18 252 0                     339 -8 37 -16 86 -18 107 -3 38 -1 40 30 47 43 9 44 10 81 98 42 99 38 101                     -12 7 -45 -86 -68 -109 -89 -88 -12 12 -13 69 -2 103 2 9 25 22 50 29 56 16                     80 45 94 117 14 68 9 168 -10 186 -11 10 -12 8 -5 -8 23 -62 12 -179 -22 -233                     -14 -23 -78 -60 -88 -50 -3 3 1 31 10 64 8 32 15 78 15 103 0 39 6 51 38 84                     25 27 30 36 15 28 -12 -6 -25 -16 -28 -21 -3 -6 -10 -10 -14 -10 -14 0 8 94                     25 106 10 9 11 13 3 16 -9 3 -9 34 1 137 22 230 -4 392 -87 555 -113 217 -286                     373 -468 420 -87 22 -284 28 -375 12z m540 -604 c63 -16 144 -41 180 -54 l65                     -25 3 -133 c1 -74 7 -139 13 -146 15 -18 69 -318 69 -384 0 -36 -12 -91 -35                     -160 -19 -58 -44 -148 -56 -200 -31 -135 -57 -183 -108 -198 -22 -7 -54 -24                     -71 -39 -17 -14 -32 -24 -34 -22 -2 2 -13 22 -25 44 -41 75 -220 184 -302 185                     -25 0 -50 -5 -57 -12 -15 -15 -16 -74 -2 -83 20 -12 11 -37 -12 -33 -15 2 -22                     9 -19 18 22 83 8 110 -58 110 -82 0 -255 -104 -304 -182 -25 -40 -32 -46 -44                     -35 -8 6 -42 26 -76 42 -84 41 -104 80 -142 280 -8 39 -28 108 -44 155 -35 98                     -36 111 -16 245 34 226 33 222 82 268 l44 41 -7 132 -7 132 34 10 c55 17 227                     53 329 67 64 10 160 13 290 11 178 -3 205 -6 310 -34z m-210 -1319 l85 -44                     -60 7 c-33 4 -80 6 -105 5 -74 -4 -123 -4 -165 -1 -22 2 -69 0 -105 -4 l-65                     -7 85 45 c80 42 89 44 165 44 74 -1 86 -4 165 -45z m-162 -54 c76 2 156 3 225                     1 56 -2 70 -5 82 -23 20 -29 19 -56 -4 -94 -11 -17 -25 -49 -30 -70 -6 -22                     -23 -51 -39 -66 l-28 -27 -34 22 c-18 13 -48 50 -66 83 l-33 60 39 11 c36 11                     135 74 116 74 -5 0 -33 -14 -62 -31 -50 -28 -60 -30 -163 -31 -108 -1 -112 -1                     -183 35 -63 30 -69 32 -43 10 35 -29 103 -62 128 -63 9 0 17 -2 17 -5 0 -14                     -50 -102 -66 -117 -57 -51 -123 -34 -124 32 0 14 -11 41 -24 61 -54 79 -31                     145 48 134 22 -3 57 -1 76 4 19 6 55 7 80 4 25 -3 64 -5 88 -4z"/>
                        <path d="M1475 2008 c-32 -17 -85 -71 -101 -100 -22 -42 -16 -46 12 -10 54 68                     141 89 215 52 22 -12 65 -26 97 -31 90 -17 136 -50 161 -114 l11 -30 -5 33                     c-3 19 -14 46 -25 61 -11 16 -17 31 -14 34 13 13 -7 54 -31 65 -36 17 -216 52                     -262 52 -21 0 -47 -6 -58 -12z"/>
                        <path d="M2260 2004 c-46 -8 -100 -22 -120 -32 -30 -14 -35 -22 -36 -52 0 -19                     -10 -55 -22 -80 -23 -49 -42 -152 -41 -215 1 -23 7 3 14 58 16 112 44 181 87                     207 16 10 56 23 89 29 32 7 83 23 114 37 54 25 56 25 103 10 47 -16 81 -44                     115 -96 30 -44 18 2 -13 50 -62 96 -122 113 -290 84z"/>
                        <path d="M1582 1879 c-65 -8 -109 -28 -119 -55 -9 -25 7 -30 38 -11 41 23 48                     22 60 -9 12 -33 7 -39 -23 -24 -22 11 -22 10 -4 -4 30 -24 78 -29 142 -16 63                     13 113 35 59 26 -16 -2 -38 -8 -48 -12 -17 -6 -17 -5 -1 30 10 20 23 36 30 36                     20 0 65 -42 60 -56 -3 -8 -1 -14 4 -14 25 0 0 54 -33 72 -12 7 -58 15 -102 18                     l-80 7 67 1 c37 1 79 -3 94 -8 31 -12 44 -6 17 8 -30 16 -94 20 -161 11z m-57                     -39 c-21 -11 -40 -18 -43 -16 -5 6 50 35 68 36 8 0 -3 -9 -25 -20z"/>
                        <path d="M2245 1884 c-5 -1 -22 -5 -37 -8 -16 -4 -28 -10 -28 -15 0 -5 10 -7                     23 -4 19 4 18 2 -5 -12 -24 -14 -48 -43 -48 -59 0 -3 10 -6 23 -6 12 0 44 -7                     71 -15 61 -18 92 -18 131 0 l30 15 -35 -6 c-29 -5 -33 -4 -22 7 6 7 12 23 12                     36 0 28 2 28 56 1 24 -12 47 -19 50 -15 14 14 -8 39 -48 56 -38 17 -147 33                     -173 25z m78 -21 c-18 -2 -48 -2 -65 0 -18 2 -4 4 32 4 36 0 50 -2 33 -4z                     m111 -28 c11 -8 16 -15 10 -15 -5 0 -18 7 -28 15 -11 8 -16 15 -10 15 5 0 18                     -7 28 -15z m-198 -52 c-1 -1 -19 0 -41 4 l-38 6 29 25 28 25 12 -29 c7 -16 11                     -30 10 -31z"/>
                        <path d="M2255 1736 c33 -14 102 -30 93 -20 -4 3 -21 9 -40 13 -18 5 -44 11                     -58 14 -19 5 -18 4 5 -7z"/>
                        <path d="M1608 1723 c12 -2 30 -2 40 0 9 3 -1 5 -23 4 -22 0 -30 -2 -17 -4z"/>
                        <path d="M1805 1478 c-31 -24 -55 -74 -55 -113 0 -32 41 -75 72 -75 21 1 21 2                     -7 17 -39 21 -45 30 -45 75 0 30 8 47 36 78 41 45 40 51 -1 18z"/>
                        <path d="M2151 1465 c0 -5 6 -21 14 -35 31 -55 14 -105 -45 -129 l-25 -10 23                     0 c55 -2 88 50 71 112 -9 33 -38 81 -38 62z"/>
                        <path d="M1826 1361 c-11 -18 6 -41 31 -41 16 0 22 4 17 12 -5 8 0 9 17 4 59                     -18 108 -18 153 -1 25 10 55 15 66 12 11 -3 20 -1 20 4 0 18 -52 21 -93 5 -52                     -20 -94 -20 -127 -1 -28 16 -76 20 -84 6z"/>
                        <path d="M2065 1330 c-4 -6 7 -10 25 -10 18 0 29 4 25 10 -3 6 -15 10 -25 10                     -10 0 -22 -4 -25 -10z"/>
                        <path d="M1092 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                        <path d="M2822 1755 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                    </g>
                     </svg>
                     </div>
                    <p class="pro_desc">Consistency is the key to success! Ensure you apply or take your hair loss medication as directed. If you have questions, need advice, or want to talk about side effects, drop us an email and one of our men’s health experts will address your query.</p>
                </li>
            </ul>
        </div>
        <div class="product-get-button">
            <a href="{{ route('questionnaire.index', $products[0]->category_id) }}">Get Started</a>
        </div>
    </div>
</section>
<!-- How you get started  html  -->
<!-- start section -->
<section class="other-sec premature-sec-4 pt-120 pb-120 premature-other-sec swiper-design">
    <div class="container-xxl container">
        <div class=" text-center pb-5">
            <h2 class="big-heading">Browse <span>Hair Growth Treatment</span> Options </h2>
            <p>Agent, the men’s health pharmacy that makes finding the perfect medications quick and easy.</p>
        </div>
    </div>
    <div class="container-xxl container slider_container">
        <div class="swiper-slider3 premature-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="cards other-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/Agents_Combination_2_In_1_Solution.PNG') }}" alt="treatment" />
                        </figure>
                        <figcaption>
                            <div class="fig-outer">
                                <div class="fig-inner">
                                    <h3 class="pre-crou-head">Agent's combination 2 in 1 solution</h3>
                                    <p class="price-text">from £25/Month</p>
                                    <!-- <p class="pre-crou-para">Has you covered for both receding hairlines and if your
                                        thinning on your crown– finasteride
                                        and minoxidil spray combined , this is a no pill option.....</p> -->
                                        <p class="pre-crou-para">Has you covered for both receding hairlines and if you’re
                                        thinning on your crown– finasteride and minoxidil spray combined, this is a no pill option</p>
                                        <!-- <details class="readmore">
                                            <summary data-more="Read more" data-less="Read less">Has you covered for both receding hairlines and if your
                                        thinning on your crown– finasteride and minoxidil spray combined , this is a no pill option Has you covered for both receding hairlines and if your
                                        thinning on your crown– finasteride and minoxidil spray combined , this is a no pill option</summary>
                                        </details> -->
                                </div>
                                <div class="premature-btns-crousel">
                                    <a href="{{ url('/questionnaire/30')}}" class="trans-btn black-btn learn-more-card-btn">Start
                                        Visit</a>
                                    {{-- <a href="{{ route('product.show',['slug'=>$products[0]->slug, 'index'=>1]) }}" class="trans-btn see-detailbtn">Learn More</a> --}}
                                    <!-- <a href="{{ route('product.detail','2-in-1-solution') }}" class="trans-btn see-detailbtn">Learn More</a> -->
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="cards other-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/Agent_combination_kit.PNG') }}" alt="treatment" />
                        </figure>
                        <figcaption>
                            <div class="fig-outer">
                                <div class="fig-inner">
                                    <h3 class="pre-crou-head">Agent's Combination kit</h3>
                                    <p class="price-text">from £25/Month</p>
                                    <p class="pre-crou-para">Unlock a 94% effective solution to hair loss with our Minoxidil and Finasteride combo.
                                         This powerhouse duo is tailored for both receding hairlines and crown thinning.</p>
                                </div>
                                <div class="premature-btns-crousel">
                                    <a href="{{ url('/questionnaire/30')}}" class="trans-btn black-btn learn-more-card-btn">Start
                                        Visit</a>
                                    <!-- <a href="{{ url('/product/combination-pack-finasteride-tablet-with-minoxidil-solution')}}" class="trans-btn see-detailbtn">Learn More</a> -->
                                    <!-- <a href="{{ route('product.detail','Combination-spray-and-tablet') }}" class="trans-btn see-detailbtn">Learn More</a>  -->
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="cards other-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/Finasteride_tablets.PNG') }}" alt="treatment" />
                        </figure>
                        <figcaption>
                            <div class="fig-outer">
                                <div class="fig-inner">
                                    <h3 class="pre-crou-head">Finasteride tablet</h3>
                                    <p class="price-text">from £11.67/month</p>
                                        <p class="pre-crou-para">Easy, once-a-day pill. It has been clinically proven to be an
                                        effective treatment for male-pattern hair loss in 9 out of 10 men</p>
                                </div>
                                <div class="premature-btns-crousel">
                                    <a href="{{ url('/questionnaire/30')}}" class="trans-btn black-btn learn-more-card-btn">Start
                                        Visit</a>
                                    <!-- <a href="{{ url('/product/finasteride-oral-tablet')}}" class="trans-btn see-detailbtn">Learn More</a> -->
                                    <!-- <a href="{{ route('product.detail','Finasteride') }}" class="trans-btn see-detailbtn">Learn More</a> -->
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="cards other-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/Minoxidil-solution.PNG') }}" alt="treatment" />
                        </figure>
                        <figcaption>
                            <div class="fig-outer">
                                <div class="fig-inner">
                                    <h3 class="pre-crou-head">Minoxidil solution</h3>
                                    <p class="price-text"> from £16.67/month</p>
                                         <p class="pre-crou-para">This unique formula is free from alcohol and propylene glycol,
                                         which means it’s kinder to your scalp. Available in a spray or dropper for your preference</p>
                                </div>
                                <div class="premature-btns-crousel">
                                    <a href="{{ url('/questionnaire/30')}}" class="trans-btn black-btn learn-more-card-btn">Start
                                        Visit</a>
                                    <!-- <a href="{{ url('/product/minoxidil-solution-hair')}}{{ url('/questionnaire/30')}}" class="trans-btn see-detailbtn">Learn More</a> -->
                                    <!-- <a href="{{ route('product.detail','Minoxidil-solution') }}" class="trans-btn see-detailbtn">Learn More</a> -->
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </div>


            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- AGENT-OFFER START  -->
<section class="agent-offer agent-offer-sec">
    <div class="container-xxl container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="agent-div">
                    <h2 class="big-heading">“Agent Offer treatments that are clinically proven and backed by doctors and pharmacists.”
                    </h2>
                    <p><b>Vikesh Patel</b>, Medical Advisor and Pharmacist</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <figure>
                    <img src="{{asset('frontend_new/images/agent-offer-img.png')}}" alt="agent-offer-img">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- AGENT-OFFER START  end-->
<!-- erectile-black -->
<section class="black-sec erectile-black">
    <div class="container-xxl container">
        <div class="unsure-div d-flex justify-content-between align-items-center flex-wrap-wrap">
            <div class="d-flex align-items-center">
                <div class="qcc-icon">
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#fff" stroke="none">
                    <path d="M2415 4794 c-322 -34 -575 -105 -840 -234 -376 -185 -667 -439 -897
                    -785 -432 -648 -475 -1522 -111 -2233 265 -518 725 -914 1278 -1101 812 -273
                    1685 -73 2280 524 277 278 477 622 588 1010 152 527 102 1079 -139 1565 -78
                    157 -188 329 -258 405 -41 43 -48 47 -78 41 -18 -3 -41 -16 -50 -27 -32 -38
                    -23 -75 38 -156 311 -412 454 -915 404 -1414 -74 -734 -519 -1385 -1160 -1701
                    -529 -259 -1161 -275 -1715 -43 -264 110 -491 268 -700 486 -598 623 -745
                    1566 -366 2344 311 635 966 1081 1700 1155 540 54 1097 -123 1511 -481 44 -38
                    92 -74 106 -79 34 -13 74 6 92 43 21 43 2 75 -90 154 -322 275 -683 442 -1098
                    508 -101 16 -411 28 -495 19z"/>
                    <path d="M2275 4074 c-11 -2 -45 -9 -75 -15 -30 -6 -93 -29 -139 -51 -140 -67
                    -262 -209 -310 -360 -10 -30 -9 -42 3 -66 17 -33 34 -42 75 -42 32 0 62 29 81
                    80 52 136 179 247 325 285 239 62 492 -80 567 -318 60 -189 -19 -483 -188
                    -697 -49 -62 -92 -99 -156 -132 -60 -32 -155 -31 -217 1 -131 68 -262 256
                    -326 466 -16 50 -34 97 -42 107 -22 25 -59 30 -92 14 -51 -27 -54 -70 -11
                    -197 100 -300 294 -521 499 -569 221 -52 454 114 606 432 189 395 125 760
                    -166 954 -125 83 -318 131 -434 108z"/>
                    <path d="M1742 2510 c-24 -11 -80 -44 -125 -73 -252 -164 -442 -409 -538 -696
                    -49 -144 -37 -220 50 -313 160 -173 444 -323 701 -369 104 -19 888 -20 1010
                    -1 108 16 223 45 285 72 l48 21 76 -40 c97 -50 211 -75 305 -66 297 28 515
                    265 516 560 0 148 -56 281 -165 390 -117 117 -247 168 -411 163 l-91 -3 -100
                    101 c-140 142 -360 285 -410 267 -10 -3 -45 -32 -78 -63 -79 -75 -159 -125
                    -259 -163 -74 -28 -92 -31 -201 -32 -130 0 -176 11 -290 67 -68 34 -118 71
                    -190 139 -62 58 -79 63 -133 39z m201 -299 c142 -84 268 -115 442 -108 93 4
                    138 11 200 31 106 34 211 94 283 161 l59 54 78 -52 c44 -29 114 -86 158 -127
                    l78 -75 -64 -47 c-110 -80 -183 -196 -212 -335 -27 -127 -11 -242 49 -363 20
                    -39 36 -73 36 -75 0 -5 -106 -36 -185 -56 -69 -16 -837 -25 -950 -10 -247 33
                    -485 146 -649 308 -57 57 -58 59 -53 103 7 55 55 182 103 268 87 156 231 311
                    378 407 l81 53 56 -52 c31 -28 81 -66 112 -85z m1739 -250 c297 -141 303 -567
                    10 -715 -150 -76 -336 -48 -455 68 -217 210 -137 564 149 666 88 31 207 24
                    296 -19z"/>
                    <path d="M3472 1873 c-25 -10 -42 -62 -42 -128 l0 -65 -69 0 c-38 0 -77 -3
                    -86 -6 -24 -10 -46 -60 -39 -89 11 -46 49 -65 125 -65 l69 0 0 -71 c0 -65 2
                    -73 30 -101 26 -25 36 -29 63 -24 52 10 67 37 67 121 l0 73 81 4 c70 3 83 6
                    100 27 27 32 24 77 -6 106 -21 22 -33 25 -100 25 l-75 0 0 75 c0 67 -3 79 -25
                    100 -23 24 -61 31 -93 18z"/>
                    </g>
                    </svg>
                </div>
                <div class="text-white">
                    <h2 class="cta-h2">Question, Concern, Comments?</h2>
                    <p>Drop us a message and a Pharmacist will be in contact to discuss</p>
                </div>
            </div>
            <a class="white-btn" href="{{ url('/contact-us') }}">Speak to pharmacist</a>
        </div>
    </div>
</section>
<!-- erectile-black end -->
<!-- FAQ START  -->
<section class="faq pt-100 pb-100">
    <div class="container-xxl container">
        <div class="main-heading text-center faq-head">
            <h2 class="big-heading">Frequently Asked Questions</h2>
            <p>Got a question related to hair growth treatments? Get the answers you’re looking for right here.</p>
        </div>
        <form action="" method="get">
            <div class="input-group">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="search" name="" class="form-control" placeholder="Search">
            </div>
        </form>
        <div class="accordion" id="questionaccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    What are the most common causes of hair loss?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    The most common cause of male pattern baldness is hereditary hair loss. However, a range of health conditions,
                    ailments and hormonal issues can also trigger the premature loss of hair.
                    </br>
                    Around 90% of cases in men are caused by a condition called androgenic alopecia.
                     At the heart of the problem is the follicles’ sensitivity to the male hormone dihydrotestosterone
                      (DHT). the hormone responsible for giving men their male characteristics when younger, DHT binds to
                       hair follicles and weakens them over time. Hair can become thinner and looser over time — eventually falling out.
                        </br>
                       Some causes of premature hair loss can’t be treated by Minoxidil or Finasteride. For example, alopecia areata
                       is an autoimmune condition that doesn’t respond to these medications. Physical issues can also cause hair loss,
                       including traction alopecia — caused by objects such as helmets and hairbands pulling the hair too tightly.
                        The rare condition trichotillomania involves a powerful urge to pull the hair from the scalp and is treated as a mental health issue.
                        </br>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Can you treat my form of hair loss?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    The good news for men is that 90% of patients respond to hair growth treatments. If you have MPB, you’ll first notice thinning
                     above your temples or on your crown, the hairline will recede and leave you with a broad “v” shaped line, whilst the crown
                      thinning manifests with thin withering strands of hair. This type of hair loss is very responsive to treatments such as Finasteride
                       and Minoxidil. A consultation with an Agent clinician will lead to a treatment plan to solve your problem at the root cause (no pun intended).
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    What should I expect during my hair growth treatment?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    While our hair regrowth treatments are very effective (helping around 90% of men), they take time to deliver results. After three months of treatment, you should start
                    noticing a difference in the thickness of your hair. After six months, scalp coverage should be generally improved. Achieving greatness takes time, so stay the course
                     and follow the dosage or application instructions to the letter.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    What is the best type of treatment for my particular type of hair loss?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Every head of hair is different, and treatment differs depending on the cause or type of hair loss. For mild to moderate hair
                    loss, Minoxidil — applied directly to the scalp — stimulates follicles and promotes regrowth, this stimulates hair growth and
                    can help men with thinning hair achieve greater density. Finasteride blocks the hormone DHT responsible for shrinking your
                    follicles and making them fall out- is available as a pill or a topical treatment.
                    It prevents progressive balding and works extra well for those with the receding hairlines and those who have not responded
                     with just minoxidil, complete a consultation and we will suggest the best option or combination.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Do hair growth treatments involve any side effects?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Like all medications, Minoxidil and Finasteride may have some side effects, although they are typically uncommon and tend to be mild in most cases. Minoxidil side effects, for instance, are often associated with excessive application and can include dizziness, drowsiness, abnormal hair growth (hypertrichosis), headaches, palpitations, and low blood pressure. On the other hand, oral Finasteride may, in extremely rare cases, lead to issues like erectile dysfunction, reduced ejaculation volume, and decreased libido.
                        <br>
                        It's important to note that both Minoxidil and Finasteride are fully licensed in the UK, which indicates that they have undergone comprehensive testing and rigorous safety assessments. To ensure safe usage, please refer to the packaging for application or dosage instructions and a complete list of potential side effects.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Should I just get a hair transplant?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    There are no guarantees of success with hair transplants. In many cases, hair loss continues after the procedure, which
                     often leads to additional procedures. Even if a hair transplant is considered successful, you’d still need to take
                     Finasteride and Minoxidil in order to tackle the root causes of hair loss as the transplant only addresses the obvious
                     symptom. Whether you’ve already had a hair transplant or you’re tackling hair loss for the first time, resolving the
                      underlying cause of the problem is the best way to go.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    What will happen if I stop my hair regrowth treatment?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Continuous use is the only way to deliver long-term, long-lasting results. If you stop taking Minoxidil or Finasteride,
                     any regrown hair is likely to be lost. Securing a regular supply from Agent means you’ll never have to worry about
                     getting caught short. Make these proven treatments part of your life and watch your hair flourish!

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ end  -->


    @include('partials.frontend.above-footer')



    <!-- BLACK-SEC2 START  -->
<section class="black-sec home-free-cnslt">
    <div class="container-xxl container">
        <div class="unsure-div d-flex justify-content-between align-items-center flex-wrap-wrap">
            <div class="text-white">
                <h2 class="footer-h2">Start Your Free Consultation Now</h2>
                <p class="mb-20">Complete a quick online questionnaire to get expert advice and the men’s health prescriptions you need to live a happier, healthier life.</p>
            </div>
            <a class="pure-white-btn" href="{{ url('/questionnaire/30') }}">Get Started </a>
        </div>
    </div>
</section>
<!-- BLACK-SEC2 END  -->

<!-- GENT-SEC START  -->
<!-- <section class="gent-sec pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading">
            <h2>Gent hub</h2>
        </div>
        <div class="row gent-hub-upper">
        @php
              $blog = DB::table('blogs')->orderBy('id','DESC')->take(4)->get();
           @endphp
           @foreach($blog as $blogs)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cards">
                    <figure>
                        <img src="{{ asset('images/') }}{{ '/'. $blogs->image}}" alt="gent-img2"
                            class="hideonhover" />
                        <img src="{{ asset('frontend_new/images/gent-img1.png') }}" class="showonhover"
                            alt="gent-img1" />
                        <span class="date-time">{{$blogs->updated_at}} PM</span>
                    </figure>
                    <div class="card-heading">
                        <p>{{$blogs->title}}</p>
                        <div class="read-more d-flex justify-content-between align-items-center">
                            <a href="{{route('blog_detail',$blogs->id)}}" class="trans-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> -->
<!-- GENT-SEC END  -->

<script>
function myFunction(numb) {
//   var dots = document.getElementById("dots_"+numb);
//   var moreText = document.getElementById("more_"+numb);
//   var btnText = document.getElementById("myBtn_"+numb);

  var dots = $(".dots_"+numb);
  var moreText = $(".more_"+numb);
  var btnText = $(".myBtn_"+numb);


  if (dots.css('display') === "none") {
    // dots.style.display = "inline";
    // btnText.innerHTML = "Read more";
    // moreText.style.display = "none";
    dots.css('display','inline');
    btnText.html('Read more');
    moreText.css('display','none');
  } else {
    dots.css('display','none');
    btnText.html('Read less');
    moreText.css('display','inline');

    // dots.style.display = "none";
    // btnText.innerHTML = "Read less";
    // moreText.style.display = "inline";
  }
}
</script>

@endsection
