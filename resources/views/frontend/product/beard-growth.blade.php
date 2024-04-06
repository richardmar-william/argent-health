@extends('layouts.app')
@section('title', 'Beard Growth Solution - Grow a thicker and fuller beard')
@section('meta-desc', 'Unlock the secret to a fuller, more confident beard with our premium beard growth products. Delivery at your door step. ')
@section('content')


    <div class="main-div Save-hair-banner" style=" background-image: url({{ asset('frontend_new/images/beard.jpg') }}); background-position: right center;">
        <div class="container-xxl container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="top-div text-white">
                                <h1 class="heading54"><span class="sans-heading">You deserve an</span><br> Impeccable<br> <span class="sans-heading">Beard</span> </h1>
                                <p class="text54 pro_desc poppins">Grow a thicker and fuller beard with Agent solutions.</p>
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

                                <p class="pro_desc">UK-registered online pharmacy</p>
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <div class="hair-banner-inr text-color">
                                <div class="svg-round">

                                    <img src="{{asset('frontend_new/images/b2.jpeg')}}" alt=""/>

                                </div>
                                <p class="pro_desc">See results in as little as eight weeks</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="hair-banner-inr text-color">
                                <div class="svg-round">

                                    <img src="{{asset('frontend_new/images/b4.jpeg')}}" alt=""/>

                                </div>

                                <p class="pro_desc">Free online consultations</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="hair-banner-inr text-color">
                                <div class="svg-round">

                                    <img src="{{asset('frontend_new/images/b3.png')}}" alt=""/>

                                </div>
                                <p class="pro_desc">Beard Growth Agents, Direct to your Door</p>
                            </div>
                        </div>
                    </div>

                    <div class="align-self-sm-center text-center text-md-start" style="margin: 50px 0;">

                        <a href="{{ route('questionnaire.index', $products[0]->category_id) }}" class="pure-white-btn" style="font-size: 1.3rem !important; box-shadow: 0px 0px 9px yellow;">Start Now</a>

                    </div>

                    <img src="{{asset('frontend_new/images/beard-mb-new.png')}}" class="head-img img-fluid d-block d-sm-none" alt=""/>
                </div>

            </div>

            <div class="arrow">
                <a class="arrow-down scrollDown" href="#Sildenafil"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>






{{--<div class="main-div electile-main beard-hero-banner" style="background-image: url('{{ asset('frontend_new/images/beard.jpg') }}')">--}}
{{--    <div class="container-xxl container">--}}
{{--        <div class="top-div erectile-top-div text-white">--}}
{{--            <h1 class="heading54"><span class="sans-heading">You deserve an</span><br> Impeccable<br> <span class="sans-heading">Beard</span> </h1>--}}
{{--            <p class="desc text54">Grow a thicker and fuller beard with Agent solutions.</p>--}}
{{--            <ul>--}}
{{--                <li>--}}
{{--                    <p>--}}
{{--                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">--}}
{{--                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">--}}
{{--                    <path d="M1686 5104 c-172 -42 -333 -194 -382 -361 l-15 -53 -182 0 c-153 0--}}
{{--                    -186 -3 -206 -16 -32 -23 -51 -74 -51 -139 l0 -55 -187 0 c-213 0 -280 -11--}}
{{--                    -377 -62 -78 -41 -183 -146 -224 -224 -65 -124 -62 -42 -62 -1634 0 -1592 -3--}}
{{--                    -1510 62 -1634 41 -78 146 -183 224 -224 120 -62 109 -62 977 -62 718 0 791 1--}}
{{--                    817 17 55 32 67 112 26 160 l-24 28 -809 5 -808 5 -67 33 c-76 37 -120 82--}}
{{--                    -157 162 l-26 55 0 1455 0 1455 33 67 c37 76 82 120 162 157 52 25 65 26 248--}}
{{--                    29 l192 4 0 -61 c0 -129 34 -215 112 -288 89 -82 51 -78 858 -78 l715 0 57 28--}}
{{--                    c62 31 116 84 149 149 17 33 24 67 28 143 l6 100 195 0 c190 0 196 -1 251 -26--}}
{{--                    69 -33 127 -89 160 -155 l24 -49 5 -700 c4 -543 8 -705 18 -722 15 -26 61 -53--}}
{{--                    92 -53 37 0 81 30 96 65 12 29 14 145 14 682 0 375 -5 677 -10 718 -13 86 -71--}}
{{--                    211 -128 276 -55 61 -134 115 -218 147 -65 24 -82 26 -286 30 l-218 4 0 73 c0--}}
{{--                    64 -3 78 -24 102 l-24 28 -193 5 -192 5 -12 41 c-79 269 -366 434 -639 368z--}}
{{--                    m260 -228 c102 -47 169 -142 184 -260 16 -128 31 -136 260 -136 l170 0 0 -170--}}
{{--                    c0 -193 -8 -222 -65 -246 -50 -21 -1309 -21 -1359 0 -62 26 -66 40 -66 238 l0--}}
{{--                    178 171 0 c223 0 238 8 254 135 13 102 72 195 153 242 98 58 199 64 298 19z"></path>--}}
{{--                    <path d="M693 3398 c-57 -28 -67 -122 -17 -169 l26 -24 1099 -3 c1223 -3 1145--}}
{{--                    -7 1175 65 19 43 5 93 -33 123 -25 20 -37 20 -1127 19 -741 0 -1108 -4 -1123--}}
{{--                    -11z"></path>--}}
{{--                    <path d="M693 2758 c-57 -28 -67 -122 -17 -169 l26 -24 1099 -3 c1223 -3 1145--}}
{{--                    -7 1175 65 19 43 5 93 -33 123 -25 20 -37 20 -1127 19 -741 0 -1108 -4 -1123--}}
{{--                    -11z"></path>--}}
{{--                    <path d="M4425 2681 c-86 -22 -114 -48 -967 -900 -472 -470 -862 -866 -867--}}
{{--                    -880 -22 -57 -162 -794 -156 -820 9 -36 42 -69 76 -76 27 -6 766 134 820 156--}}
{{--                    14 5 410 395 881 867 684 686 860 867 879 907 19 39 24 67 24 125 0 131 -10--}}
{{--                    148 -238 377 -159 161 -211 206 -251 224 -55 23 -152 33 -201 20z m108 -211--}}
{{--                    c6 0 90 -79 188 -176 189 -188 201 -207 175 -267 -8 -18 -363 -380 -837 -853--}}
{{--                    l-824 -820 -273 -54 c-150 -29 -275 -50 -279 -47 -3 4 18 129 47 279 l54 273--}}
{{--                    830 832 c563 563 839 833 856 836 14 2 31 3 38 1 8 -2 19 -4 25 -4z"></path>--}}
{{--                    <path d="M693 2118 c-57 -28 -67 -122 -17 -169 l26 -24 1099 -3 c1223 -3 1145--}}
{{--                    -7 1175 65 19 43 5 93 -33 123 -25 20 -37 20 -1127 19 -741 0 -1108 -4 -1123--}}
{{--                    -11z"></path>--}}
{{--                    </g>--}}
{{--                    </svg>--}}
{{--                        <span>UK-registered online pharmacy </span>--}}
{{--                    </p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <p>--}}
{{--                    <?xml version="1.0" standalone="no"?>--}}
{{--                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"--}}
{{--                        "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">--}}
{{--                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"--}}
{{--                        width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"--}}
{{--                        preserveAspectRatio="xMidYMid meet">--}}

{{--                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"--}}
{{--                        fill="#fff" stroke="none">--}}
{{--                        <path d="M205 5102 c-99 -34 -174 -117 -195 -215 -8 -37 -10 -701 -8 -2357 l3--}}
{{--                        -2305 21 -46 c28 -60 93 -125 153 -153 l46 -21 1012 0 1013 0 27 27 c38 39 38--}}
{{--                        97 0 136 l-27 27 -995 5 -995 5 -27 28 -28 27 0 2300 0 2300 28 27 27 28 1345--}}
{{--                        3 1344 2 3 -332 c3 -378 5 -385 88 -468 83 -83 90 -85 468 -88 l332 -3 0 -906--}}
{{--                        0 -905 35 -35 c31 -31 40 -35 72 -30 20 4 48 18 62 32 l26 25 3 953 c1 523 0--}}
{{--                        968 -3 987 -6 30 -75 103 -458 487 -248 249 -466 460 -483 468 -28 13 -203 15--}}
{{--                        -1436 15 -1304 -1 -1407 -2 -1453 -18z m3220 -602 l270 -270 -239 0 -238 0--}}
{{--                        -34 34 -34 34 0 236 c0 130 1 236 3 236 1 0 124 -121 272 -270z"/>--}}
{{--                        <path d="M1845 4360 c-339 -73 -594 -321 -681 -660 -26 -102 -26 -306 0 -404--}}
{{--                        87 -329 323 -565 652 -652 51 -13 105 -18 204 -18 99 0 153 5 204 18 330 88--}}
{{--                        568 327 652 656 26 103 26 296 0 400 -68 271 -256 495 -503 603 -161 71 -364--}}
{{--                        93 -528 57z m370 -210 c497 -154 647 -773 274 -1137 -357 -350 -963 -197--}}
{{--                        -1115 282 -122 382 111 780 510 871 85 19 241 12 331 -16z"/>--}}
{{--                        <path d="M1953 3936 l-28 -24 -3 -156 -3 -156 -140 0 c-148 0 -187 -9 -209--}}
{{--                        -49 -18 -35 -12 -88 14 -118 l24 -28 155 -3 156 -3 3 -156 3 -155 28 -24 c19--}}
{{--                        -16 40 -24 67 -24 27 0 48 8 67 24 l28 24 3 155 3 156 156 3 155 3 24 28 c26--}}
{{--                        30 32 83 14 118 -22 40 -61 49 -210 49 l-140 0 0 140 c0 149 -9 188 -49 210--}}
{{--                        -35 18 -88 12 -118 -14z"/>--}}
{{--                        <path d="M705 2311 c-64 -27 -81 -110 -32 -158 l27 -28 206 0 206 0 24 28 c33--}}
{{--                        38 33 96 0 134 l-24 28 -194 2 c-106 1 -202 -1 -213 -6z"/>--}}
{{--                        <path d="M1520 2307 c-14 -7 -33 -29 -43 -50 -18 -36 -18 -38 0 -74 10 -21 29--}}
{{--                        -43 43 -50 20 -10 220 -12 922 -10 l898 2 27 27 c21 21 28 38 28 68 0 30 -7--}}
{{--                        47 -28 68 l-27 27 -898 2 c-702 2 -902 0 -922 -10z"/>--}}
{{--                        <path d="M3662 2010 c-153 -40 -156 -43 -663 -548 -349 -347 -476 -480 -503--}}
{{--                        -526 -137 -231 -107 -531 74 -729 78 -84 164 -141 265 -173 165 -52 317 -40--}}
{{--                        475 37 80 39 100 57 326 281 l241 239 16 -83 c66 -334 386 -557 713 -497 242--}}
{{--                        44 432 223 494 465 65 254 -47 526 -275 671 -88 56 -196 86 -308 87 l-99 1 6--}}
{{--                        35 c41 246 -24 449 -194 603 -152 137 -367 189 -568 137z m263 -194 c77 -20--}}
{{--                        135 -54 191 -112 130 -132 157 -319 72 -488 -24 -47 -72 -102 -212 -244 l-181--}}
{{--                        -183 -298 298 -298 299 188 185 c189 187 231 219 323 245 60 16 154 17 215 0z--}}
{{--                        m-457 -1352 c-142 -140 -197 -188 -244 -212 -169 -85 -356 -58 -488 72 -134--}}
{{--                        130 -164 324 -76 496 14 27 95 118 209 233 l185 188 299 -298 298 -298 -183--}}
{{--                        -181z m932 156 l0 -409 -40 14 c-107 38 -205 134 -251 245 -32 78 -32 222 -1--}}
{{--                        299 33 78 76 136 137 182 41 31 122 73 153 79 1 0 2 -184 2 -410z m355 331--}}
{{--                        c61 -46 104 -104 137 -182 31 -77 31 -221 -1 -299 -46 -111 -144 -207 -251--}}
{{--                        -245 l-40 -14 0 409 0 410 51 -19 c27 -11 75 -38 104 -60z"/>--}}
{{--                        <path d="M705 1751 c-64 -27 -81 -110 -32 -158 l27 -28 206 0 206 0 24 28 c33--}}
{{--                        38 33 96 0 134 l-24 28 -194 2 c-106 1 -202 -1 -213 -6z"/>--}}
{{--                        <path d="M1520 1747 c-14 -7 -33 -29 -43 -50 -18 -36 -18 -38 0 -74 10 -21 29--}}
{{--                        -43 43 -50 19 -10 145 -12 552 -10 l528 2 27 27 c21 21 28 38 28 68 0 30 -7--}}
{{--                        47 -28 68 l-27 27 -528 2 c-407 2 -533 0 -552 -10z"/>--}}
{{--                        <path d="M705 1191 c-64 -27 -81 -110 -32 -158 l27 -28 187 -3 c196 -3 231 2--}}
{{--                        258 42 23 32 19 90 -9 123 l-24 28 -194 2 c-106 1 -202 -1 -213 -6z"/>--}}
{{--                        <path d="M1520 1187 c-38 -18 -63 -77 -50 -113 16 -42 39 -63 75 -70 111 -21--}}
{{--                        159 133 58 185 -28 14 -52 14 -83 -2z"/>--}}
{{--                        </g>--}}
{{--                        </svg>--}}
{{--                        <span>See results in as little as eight weeks</span>--}}
{{--                    </p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <p>--}}
{{--                    <?xml version="1.0" standalone="no"?>--}}
{{--                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"--}}
{{--                        "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">--}}
{{--                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"--}}
{{--                        width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"--}}
{{--                        preserveAspectRatio="xMidYMid meet">--}}

{{--                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"--}}
{{--                        fill="#fff" stroke="none">--}}
{{--                        <path d="M1450 5029 c-128 -14 -283 -55 -376 -98 -143 -67 -233 -150 -294--}}
{{--                        -270 -50 -99 -53 -121 -57 -411 -5 -291 -2 -319 41 -382 l24 -36 -32 -63 c-29--}}
{{--                        -58 -31 -71 -31 -164 1 -84 4 -108 24 -148 31 -64 109 -132 174 -153 51 -16--}}
{{--                        53 -17 81 -86 15 -39 48 -99 72 -135 24 -36 44 -68 44 -71 0 -3 -70 -76 -155--}}
{{--                        -163 -168 -171 -174 -182 -139 -250 l15 -31 -183 -186 c-101 -103 -212 -223--}}
{{--                        -247 -267 -147 -182 -235 -351 -247 -473 l-6 -57 202 -405 c111 -223 211 -415--}}
{{--                        222 -427 20 -22 64 -34 171 -48 l49 -7 -4 -245 -3 -245 24 -19 c32 -26 82 -25--}}
{{--                        109 4 20 21 22 34 22 153 l0 129 36 -42 c88 -106 260 -215 389 -248 197 -50--}}
{{--                        478 15 1239 286 137 49 250 89 252 89 1 0 4 -81 6 -181 3 -176 4 -181 27 -200--}}
{{--                        32 -26 77 -24 106 6 25 24 25 25 25 219 l0 195 58 11 c31 6 64 14 72 17 8 4--}}
{{--                        227 10 485 13 449 6 473 8 530 28 124 46 199 130 212 242 l6 50 294 0 294 0--}}
{{--                        24 25 25 24 0 1120 0 1120 -22 15 c-20 14 -148 16 -1171 16 l-1148 0 -24 -25--}}
{{--                        -25 -24 0 -281 c0 -245 -2 -280 -15 -280 -9 0 -53 9 -99 21 l-83 21 -108 108--}}
{{--                        -107 108 45 56 c113 137 184 373 203 664 l7 109 95 7 c253 18 435 106 492 238--}}
{{--                        65 150 -36 355 -217 441 l-68 32 -196 3 -197 4 -16 66 c-44 177 -167 333 -326--}}
{{--                        411 -47 23 -116 48 -155 57 -87 19 -331 26 -445 13z m415 -174 c99 -25 176--}}
{{--                        -69 239 -134 53 -57 106 -148 121 -213 l7 -26 -204 -4 c-179 -4 -210 -7 -266--}}
{{--                        -27 -132 -48 -275 -168 -394 -331 -66 -90 -134 -155 -191 -181 -32 -14 -65--}}
{{--                        -19 -145 -19 -97 0 -104 1 -128 25 l-25 26 3 267 3 268 38 77 c58 116 145 182--}}
{{--                        315 237 132 43 141 41 95 -17 -74 -97 -133 -268 -133 -388 0 -35 6 -52 25 -70--}}
{{--                        52 -53 135 -15 135 62 0 64 27 167 60 232 56 111 129 174 248 212 71 22 121--}}
{{--                        23 197 4z m334 -612 c-41 -43 -96 -105 -121 -138 -59 -78 -129 -142 -181 -166--}}
{{--                        -37 -16 -67 -19 -259 -19 l-217 0 74 98 c86 114 158 186 235 235 97 61 123 66--}}
{{--                        344 67 l199 0 -74 -77z m554 66 c78 -21 177 -140 177 -210 0 -49 -51 -100--}}
{{--                        -127 -129 -66 -24 -207 -50 -277 -50 l-52 0 -22 128 c-12 70 -25 139 -28 154--}}
{{--                        -6 25 -1 29 65 63 107 53 185 66 264 44z m-456 -286 c20 -99 28 -390 14 -495--}}
{{--                        -28 -211 -100 -384 -201 -487 -140 -142 -385 -197 -579 -130 -82 28 -198 106--}}
{{--                        -256 172 -51 59 -105 155 -141 254 -27 75 -53 102 -99 103 -48 0 -116 40 -137--}}
{{--                        80 -32 62 -19 177 25 218 22 21 28 21 502 24 l480 3 67 33 c86 42 162 112 240--}}
{{--                        219 33 46 63 81 66 78 3 -2 11 -35 19 -72z m1143 -1188 c0 -232 3 -291 15--}}
{{--                        -314 30 -60 55 -56 239 35 l153 76 151 -76 c84 -42 161 -76 172 -76 12 0 32--}}
{{--                        11 45 25 l25 24 0 296 0 295 320 0 320 0 0 -1000 0 -1000 -453 0 -454 0 -16--}}
{{--                        60 c-21 75 -69 130 -138 159 -49 22 -59 22 -397 19 l-347 -4 -117 -31 c-65--}}
{{--                        -17 -127 -34 -138 -38 -20 -6 -20 -5 -20 914 l0 921 320 0 320 0 0 -285z m640--}}
{{--                        70 l0 -215 -110 55 c-60 30 -119 55 -130 55 -11 0 -70 -25 -130 -55 l-110 -55--}}
{{--                        0 215 0 215 240 0 240 0 0 -215z m-2690 -168 l170 -113 -108 -136 -108 -136--}}
{{--                        -164 135 c-91 74 -169 139 -175 144 -6 6 28 47 95 114 58 58 108 105 112 105--}}
{{--                        5 0 85 -51 178 -113z m876 -185 c-20 -40 -40 -72 -44 -72 -4 0 -24 24 -44 53--}}
{{--                        -20 28 -49 68 -63 88 l-26 36 23 67 23 66 83 -83 84 -84 -36 -71z m-321 186--}}
{{--                        c-4 -13 -25 -70 -47 -128 -22 -58 -42 -113 -45 -122 -3 -10 -9 -18 -12 -18 -4--}}
{{--                        0 -25 44 -46 98 -21 53 -51 109 -65 123 l-26 27 70 7 c39 4 91 13 116 20 63--}}
{{--                        17 62 17 55 -7z m583 -219 l92 -21 0 -638 0 -637 -402 -134 c-370 -123 -409--}}
{{--                        -134 -473 -133 -79 1 -140 24 -199 77 -22 20 -98 139 -204 322 -93 159 -181--}}
{{--                        298 -195 308 -29 23 -66 18 -97 -13 -38 -38 -27 -71 96 -273 l117 -191 -16--}}
{{--                        -43 c-71 -190 -255 -304 -471 -290 -43 3 -82 9 -86 14 -5 4 -90 176 -191 381--}}
{{--                        l-182 374 18 56 c48 155 135 273 404 545 124 125 227 227 231 227 3 0 84 -65--}}
{{--                        180 -145 169 -140 193 -155 235 -139 8 4 70 76 137 161 66 85 124 151 128 146--}}
{{--                        5 -4 32 -66 61 -138 30 -71 62 -138 71 -147 27 -27 82 -23 105 6 11 13 41 81--}}
{{--                        68 150 26 70 51 125 56 124 4 -2 43 -50 86 -108 127 -170 152 -166 257 43 39--}}
{{--                        75 72 137 75 137 3 0 48 -9 99 -21z m1244 -1339 c14 -11 28 -29 31 -40 5 -19--}}
{{--                        1 -20 -114 -20 -114 0 -121 -1 -144 -25 -16 -15 -25 -36 -25 -55 0 -19 9 -40--}}
{{--                        25 -55 23 -24 28 -25 178 -25 273 0 517 -12 517 -25 0 -28 -48 -82 -95 -105--}}
{{--                        l-50 -25 -460 -6 c-449 -6 -463 -7 -580 -32 -66 -15 -219 -61 -340 -103 -1061--}}
{{--                        -367 -1193 -394 -1403 -288 -42 22 -103 65 -144 103 -78 72 -194 220 -181 231--}}
{{--                        4 4 26 13 48 20 114 36 207 102 288 203 27 34 51 64 53 66 2 2 14 -9 26 -25--}}
{{--                        95 -121 265 -195 413 -179 42 4 206 54 477 146 776 263 752 257 1144 258 295--}}
{{--                        1 313 0 336 -19z"/>--}}
{{--                        <path d="M3065 1895 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 23 -24 31--}}
{{--                        -25 135 -25 104 0 112 1 135 25 16 15 25 36 25 55 0 19 -9 40 -25 55 -23 24--}}
{{--                        -31 25 -135 25 -104 0 -112 -1 -135 -25z"/>--}}
{{--                        <path d="M3065 1655 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 24 -25 26--}}
{{--                        -25 215 -25 189 0 191 0 215 25 16 15 25 36 25 55 0 19 -9 40 -25 55 -24 25--}}
{{--                        -26 25 -215 25 -189 0 -191 0 -215 -25z"/>--}}
{{--                        </g>--}}
{{--                        </svg>--}}
{{--                        <span>Free online consultations </span>--}}
{{--                    </p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <p>--}}
{{--                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">--}}
{{--                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">--}}
{{--                    <path d="M2546 4949 c-62 -15 -153 -68 -197 -116 -22 -24 -55 -74 -72 -111--}}
{{--                    l-32 -67 -3 -247 -4 -246 -247 -4 -247 -3 -76 -37 c-91 -45 -147 -103 -191--}}
{{--                    -196 l-32 -67 -3 -1269 c-2 -1159 -4 -1271 -19 -1288 -15 -16 -37 -18 -240--}}
{{--                    -18 l-223 0 0 55 c0 46 -4 60 -25 80 l-24 25 -351 0 -351 0 -24 -25 -25 -24 0--}}
{{--                    -591 0 -591 25 -24 24 -25 351 0 351 0 24 25 c14 13 25 31 25 40 0 13 137 15--}}
{{--                    1331 15 l1331 0 592 332 c397 224 607 347 638 377 26 24 60 69 75 100 24 47--}}
{{--                    28 69 28 136 0 71 -4 89 -33 147 -20 41 -49 81 -75 103 l-42 36 -5 1193 -5--}}
{{--                    1192 -37 76 c-45 91 -103 147 -196 191 l-67 32 -247 3 -246 4 -4 247 -3 247--}}
{{--                    -37 76 c-45 91 -103 147 -196 191 l-67 32 -555 2 c-315 1 -572 -3 -594 -8z--}}
{{--                    m1128 -161 c55 -16 138 -99 154 -154 8 -27 12 -117 12 -258 l0 -216 -80 0 -80--}}
{{--                    0 0 215 c0 216 0 216 -25 240 l-24 25 -511 0 -511 0 -24 -25 c-25 -24 -25 -24--}}
{{--                    -25 -240 l0 -215 -80 0 -80 0 0 216 c0 141 4 231 12 258 15 51 99 137 148 153--}}
{{--                    52 16 1059 17 1114 1z m-154 -468 l0 -160 -400 0 -400 0 0 160 0 160 400 0--}}
{{--                    400 0 0 -160z m954 -332 c55 -16 138 -99 154 -154 9 -31 12 -315 12 -1178 l0--}}
{{--                    -1136 -32 0 c-60 0 -110 -21 -610 -251 l-497 -229 -180 0 -180 0 27 58 c23 48--}}
{{--                    27 71 27 142 0 72 -4 94 -28 145 -47 100 -126 169 -227 199 -46 14 -133 16--}}
{{--                    -633 16 l-579 0 -64 -62 -64 -61 0 1158 c0 880 3 1168 12 1199 15 51 99 137--}}
{{--                    148 153 53 17 2658 17 2714 1z m-1531 -2577 c21 -13 50 -42 65 -64 23 -34 27--}}
{{--                    -52 27 -107 0 -55 -4 -73 -27 -107 -15 -22 -44 -51 -65 -64 -38 -24 -38 -24--}}
{{--                    -410 -27 l-373 -3 0 -79 0 -80 689 0 689 0 520 240 c416 192 527 240 561 240--}}
{{--                    113 0 197 -97 177 -204 -15 -79 -18 -81 -631 -427 l-580 -328 -1312 0 -1313--}}
{{--                    -1 0 360 0 360 257 0 257 0 160 160 161 160 555 -2 555 -3 38 -24z m-2143--}}
{{--                    -611 l0 -480 -240 0 -240 0 0 480 0 480 240 0 240 0 0 -480z"></path>--}}
{{--                    <path d="M2953 3665 c-201 -36 -365 -124 -513 -274 -129 -130 -212 -278 -257--}}
{{--                    -457 -24 -95 -24 -333 0 -428 45 -179 128 -327 257 -457 177 -180 385 -273--}}
{{--                    635 -286 277 -14 519 81 720 282 137 137 216 276 262 461 24 95 24 333 0 428--}}
{{--                    -25 99 -72 210 -125 296 -62 102 -206 243 -311 308 -196 120 -445 168 -668--}}
{{--                    127z m357 -168 c209 -57 367 -171 481 -345 88 -134 124 -258 124 -432 0 -226--}}
{{--                    -75 -408 -231 -564 -310 -310 -812 -312 -1123 -5 -161 159 -236 340 -236 569--}}
{{--                    0 174 36 297 125 434 118 180 303 306 520 352 80 17 262 12 340 -9z"></path>--}}
{{--                    <path d="M2905 3255 c-24 -23 -25 -29 -25 -160 l0 -135 -135 0 c-131 0 -137--}}
{{--                    -1 -160 -25 -25 -24 -25 -26 -25 -215 0 -189 0 -191 25 -215 23 -24 29 -25--}}
{{--                    160 -25 l135 0 0 -135 c0 -131 1 -137 25 -160 24 -25 26 -25 215 -25 189 0--}}
{{--                    191 0 215 25 24 23 25 29 25 160 l0 135 135 0 c131 0 137 1 160 25 25 24 25--}}
{{--                    26 25 215 0 189 0 191 -25 215 -23 24 -29 25 -160 25 l-135 0 0 135 c0 131 -1--}}
{{--                    137 -25 160 -24 25 -26 25 -215 25 -189 0 -191 0 -215 -25z m295 -270 c0 -131--}}
{{--                    1 -137 25 -160 23 -24 29 -25 160 -25 l135 0 0 -80 0 -80 -135 0 c-131 0 -137--}}
{{--                    -1 -160 -25 -24 -23 -25 -29 -25 -160 l0 -135 -80 0 -80 0 0 135 c0 131 -1--}}
{{--                    137 -25 160 -23 24 -29 25 -160 25 l-135 0 0 80 0 80 135 0 c131 0 137 1 160--}}
{{--                    25 24 23 25 29 25 160 l0 135 80 0 80 0 0 -135z"></path>--}}
{{--                    </g>--}}
{{--                    </svg>--}}
{{--                        <span>UK based clinicians providing beard growth solutions, direct to your door</span>--}}
{{--                    </p>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <a href="{{ route('questionnaire.index', $products[0]->category_id) }}" class="white-trans-btn">Start Now</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="arrow">--}}
{{--        <a class="arrow-down scrollDown" href="#Sildenafil"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- SILDENAFIL-BANNER START  -->
<section id="Sildenafil" class="beard-problem-sec">
    <div class="container-xxl container">
        <div class="">
            <h2 class="text-center big-heading">Beard Growth:<br>The <span>honest</span> truth</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 pe-lg-4">
                <div class="bread-pro-box">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1364.000000pt" height="1091.000000pt" viewBox="0 0 1364.000000 1091.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,1091.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M5195 10574 c-223 -32 -365 -73 -475 -138 -124 -73 -173 -131 -332
                    -395 -103 -170 -190 -299 -244 -359 -26 -30 -116 -105 -200 -167 -168 -125
                    -217 -178 -273 -295 -35 -74 -36 -77 -36 -200 0 -96 5 -147 23 -219 l23 -95
                    -82 -82 -82 -82 21 -34 c25 -41 57 -60 145 -87 118 -36 116 -33 52 -104 -88
                    -97 -145 -205 -179 -342 -65 -258 -86 -482 -86 -905 0 -362 16 -530 81 -869
                    17 -84 28 -156 25 -158 -3 -3 -34 2 -70 11 -88 22 -133 20 -186 -6 -51 -26
                    -79 -64 -111 -146 -20 -54 -21 -69 -16 -277 5 -173 11 -254 33 -380 21 -125
                    27 -200 29 -345 3 -236 14 -284 111 -481 106 -215 139 -302 184 -476 50 -194
                    76 -250 143 -318 58 -58 105 -77 219 -91 32 -3 63 -13 69 -20 13 -16 14 -28
                    59 -549 17 -192 37 -384 46 -425 24 -120 146 -353 278 -531 53 -71 355 -372
                    546 -544 36 -32 135 -124 220 -205 85 -80 183 -167 217 -193 34 -26 88 -78
                    120 -115 119 -137 221 -236 333 -321 241 -183 332 -232 500 -269 112 -24 123
                    -25 490 -23 388 2 460 7 570 43 191 61 440 242 643 465 65 71 125 139 133 151
                    8 12 42 40 74 62 33 22 122 100 197 173 76 72 219 208 318 302 442 416 533
                    523 654 760 92 178 108 251 150 695 11 113 25 274 31 359 5 85 12 156 14 159
                    3 2 44 15 93 29 102 28 153 56 205 110 50 52 79 115 128 278 54 176 105 302
                    174 424 89 158 92 163 119 233 40 99 54 184 66 391 6 104 23 254 37 335 14 81
                    31 185 39 231 46 263 -25 461 -183 507 -61 18 -111 14 -199 -17 -31 -10 -58
                    -19 -60 -19 -8 0 -1 53 17 136 40 176 51 794 19 1109 -18 190 -156 992 -193
                    1125 -119 432 -289 747 -551 1019 -116 121 -356 338 -464 420 -421 321 -1084
                    566 -1821 675 -281 42 -440 44 -618 10 -79 -15 -103 -16 -161 -6 -37 6 -89 21
                    -115 32 -67 28 -140 26 -212 -7 -65 -29 -55 -30 -244 22 -81 23 -119 27 -260
                    30 -91 2 -178 1 -195 -1z m628 -531 c3 -5 -15 -42 -39 -83 -92 -156 -147 -359
                    -142 -516 l3 -84 124 90 c119 85 200 126 238 118 12 -2 -3 -16 -47 -43 -79
                    -48 -215 -183 -252 -252 -41 -75 -46 -136 -26 -287 32 -229 133 -423 307 -588
                    111 -106 270 -194 412 -228 30 -7 72 -21 94 -32 l40 -18 -75 4 c-41 2 -124 18
                    -185 36 -60 17 -156 37 -213 45 -82 10 -118 21 -173 49 -184 95 -246 158 -393
                    405 -120 202 -163 294 -197 427 -31 122 -31 283 1 409 28 114 97 292 121 316
                    35 35 38 20 9 -43 -111 -246 -132 -580 -49 -791 44 -110 263 -491 310 -538 66
                    -66 177 -136 265 -168 47 -17 92 -31 102 -31 9 0 -8 21 -44 52 -104 91 -435
                    447 -475 512 -29 47 -42 152 -36 278 7 136 92 578 132 683 36 95 100 213 138
                    253 31 33 42 38 50 25z m2096 -490 c-82 -120 -227 -232 -379 -292 -154 -61
                    -259 -83 -422 -88 l-147 -5 72 -53 c42 -31 99 -61 137 -73 36 -12 108 -38 160
                    -58 52 -20 209 -65 350 -101 140 -36 257 -67 260 -70 3 -3 -51 -3 -120 0 -139
                    7 -235 27 -420 86 -68 22 -126 38 -128 36 -2 -2 12 -18 32 -36 177 -154 404
                    -272 646 -334 143 -37 139 -36 115 -45 -44 -18 -107 -8 -294 51 -196 61 -196
                    61 -301 138 -58 43 -154 113 -214 157 -377 275 -580 436 -635 503 l-36 44 34
                    -6 c18 -4 74 -30 124 -58 116 -66 233 -116 290 -124 56 -9 238 17 355 51 98
                    27 239 93 324 151 54 37 75 54 176 146 24 21 46 36 49 34 3 -3 -10 -27 -28
                    -54z m-1645 -50 c34 -37 95 -104 137 -148 136 -144 219 -273 219 -341 0 -27 4
                    -32 29 -37 19 -4 43 -23 68 -54 73 -93 179 -188 254 -230 40 -22 138 -62 217
                    -88 78 -26 142 -52 142 -58 0 -16 -104 1 -203 34 -268 90 -401 201 -644 540
                    -176 244 -313 439 -313 445 0 2 7 4 16 4 10 0 44 -30 78 -67z m-1378 -69 c-24
                    -97 -56 -272 -56 -312 0 -66 28 -153 86 -269 67 -135 153 -253 240 -330 35
                    -31 64 -61 64 -65 0 -16 -93 41 -141 85 -104 97 -191 228 -250 377 -31 79 -33
                    93 -33 205 -1 96 4 136 22 200 22 74 70 180 79 171 2 -2 -3 -30 -11 -62z
                    m-256 -293 c0 -138 39 -326 83 -401 33 -56 128 -172 172 -210 103 -88 175
                    -170 148 -170 -12 0 -137 111 -235 208 -101 99 -165 207 -199 339 -27 106 -30
                    247 -6 291 10 18 22 30 27 27 6 -4 10 -41 10 -84z m339 -58 c65 -193 154 -378
                    234 -486 14 -18 33 -45 42 -62 16 -25 11 -23 -29 15 -105 100 -229 332 -276
                    516 -18 68 -27 155 -16 143 2 -2 23 -59 45 -126z m-749 -243 c6 -52 13 -106
                    15 -120 3 -14 -6 7 -20 47 -30 89 -49 229 -41 297 16 123 20 122 28 -4 4 -69
                    12 -168 18 -220z m120 195 c14 -116 37 -196 74 -259 15 -25 83 -105 151 -178
                    69 -73 121 -134 116 -136 -32 -11 -170 107 -259 220 -73 92 -112 233 -112 403
                    0 96 15 71 30 -50z m-235 -62 c-26 -203 -24 -322 4 -406 23 -68 100 -195 140
                    -231 29 -26 26 -38 -4 -24 -39 18 -174 186 -186 233 -15 55 -16 368 -1 427 18
                    71 55 165 59 151 3 -7 -3 -75 -12 -150z m2829 -101 c34 -21 172 -83 308 -138
                    178 -71 239 -100 220 -102 -122 -16 -559 181 -653 294 -12 15 -10 15 26 0 21
                    -9 66 -34 99 -54z m-776 -189 c11 -10 28 -31 38 -47 23 -36 8 -29 -56 27 -36
                    30 -40 37 -23 37 11 0 30 -8 41 -17z m-81 -214 c167 -69 228 -88 330 -105 77
                    -13 104 -14 127 -5 l29 12 -28 29 c-16 17 -23 30 -17 30 17 0 109 -47 117 -60
                    4 -6 -14 -19 -41 -31 -40 -18 -61 -21 -153 -17 -98 4 -116 9 -239 56 -161 62
                    -242 102 -242 119 0 19 8 17 117 -28z m-1224 -263 c302 -61 692 -131 862 -155
                    260 -37 398 -41 1353 -41 1023 0 1077 2 1362 60 80 17 249 59 375 95 126 36
                    230 63 232 62 8 -9 163 -359 178 -402 11 -34 19 -110 26 -240 5 -104 16 -320
                    24 -480 21 -409 46 -518 152 -676 107 -158 118 -197 148 -524 13 -143 35 -370
                    49 -505 37 -366 38 -385 26 -515 -13 -145 -62 -491 -96 -674 -13 -75 -24 -175
                    -25 -225 0 -50 -4 -113 -9 -141 -22 -121 -41 -277 -45 -365 -2 -52 -11 -151
                    -20 -220 -9 -69 -15 -147 -12 -175 3 -27 1 -77 -4 -110 -8 -62 -12 -94 -24
                    -202 -4 -35 -11 -63 -17 -63 -5 0 -7 -9 -3 -20 9 -29 -12 -98 -49 -160 -19
                    -30 -36 -72 -40 -92 -7 -37 -19 -48 -31 -28 -3 6 -14 10 -23 10 -13 -1 -10 -6
                    11 -25 32 -28 31 -37 -10 -118 -28 -55 -110 -166 -128 -174 -7 -2 -16 -15 -19
                    -28 -3 -13 -21 -34 -39 -46 -66 -45 -129 -107 -122 -119 3 -6 -4 -14 -17 -19
                    -13 -5 -41 -28 -62 -52 -72 -83 -93 -104 -154 -162 -34 -32 -62 -63 -62 -69 0
                    -14 -122 -130 -176 -168 -23 -16 -44 -36 -47 -45 -4 -8 -14 -15 -24 -15 -23 0
                    -192 -148 -228 -200 -15 -21 -52 -62 -82 -91 -30 -28 -66 -69 -80 -90 -14 -22
                    -29 -39 -34 -39 -4 0 -40 -32 -80 -70 -39 -39 -75 -70 -79 -70 -4 0 -11 -12
                    -14 -26 -5 -20 -10 -24 -18 -16 -15 15 -38 -3 -38 -29 0 -25 -87 -82 -116 -76
                    -17 3 -20 0 -16 -15 2 -10 0 -18 -6 -18 -5 0 -27 -18 -48 -40 -22 -22 -44 -40
                    -50 -40 -6 0 -17 -6 -23 -14 -7 -8 -20 -12 -31 -9 -10 3 -33 -2 -51 -11 -18
                    -9 -41 -16 -52 -16 -12 0 -38 -12 -60 -27 -31 -22 -42 -25 -57 -16 -13 9 -30
                    8 -69 -2 -28 -7 -74 -16 -103 -20 -29 -4 -71 -14 -93 -22 -28 -10 -60 -12
                    -107 -8 -58 6 -68 5 -68 -9 0 -21 -10 -20 -26 2 -11 14 -16 15 -33 5 -13 -8
                    -22 -9 -26 -3 -3 6 -34 10 -69 10 -34 0 -66 3 -70 7 -13 13 -118 32 -236 42
                    -63 5 -132 16 -152 23 -47 17 -89 53 -82 72 3 8 -3 19 -14 25 -13 7 -18 18
                    -15 30 6 23 -16 39 -27 20 -5 -7 -4 -21 1 -32 17 -30 5 -44 -17 -19 -10 13
                    -52 44 -91 69 -40 25 -73 49 -73 54 0 4 -15 15 -33 24 -41 19 -177 142 -177
                    159 0 25 -205 222 -335 322 -140 109 -162 128 -243 220 -103 114 -227 234
                    -249 240 -13 4 -23 11 -23 16 0 11 -144 177 -252 290 -43 44 -78 84 -78 89 0
                    5 -4 9 -9 9 -5 0 -30 28 -56 63 -26 34 -53 66 -61 70 -8 4 -14 16 -14 26 0 9
                    -9 27 -20 39 -11 12 -20 30 -20 40 0 11 -6 25 -14 31 -7 6 -16 32 -19 57 -2
                    24 -19 73 -36 108 -17 35 -31 71 -31 80 0 9 -12 39 -26 67 -14 28 -30 76 -35
                    108 -27 152 -38 247 -44 361 -11 221 -25 393 -40 475 -7 44 -16 188 -20 320
                    -3 134 -13 275 -21 320 -36 201 -45 257 -59 361 -42 323 -41 591 5 1109 45
                    498 51 531 144 707 100 189 110 239 131 683 34 701 31 665 58 745 38 114 101
                    215 196 313 73 76 88 87 118 87 18 0 133 -20 256 -44z m-1328 -2209 c53 -26
                    125 -97 164 -160 33 -53 78 -191 101 -310 11 -56 38 -266 60 -467 22 -201 54
                    -459 70 -575 42 -298 50 -402 50 -636 0 -218 -4 -262 -26 -280 -19 -16 -72 -6
                    -142 26 -107 49 -143 100 -197 285 -70 242 -87 287 -176 470 -140 286 -143
                    297 -145 525 -1 156 -7 227 -32 401 -43 286 -54 423 -42 502 20 119 71 220
                    124 243 37 16 138 4 191 -24z m6741 -6 c23 -10 53 -34 67 -53 48 -62 57 -107
                    57 -277 -1 -154 -7 -205 -49 -401 -24 -113 -41 -270 -41 -386 0 -167 -27 -249
                    -170 -509 -67 -123 -144 -312 -190 -467 -53 -178 -93 -238 -192 -287 -46 -23
                    -75 -31 -116 -31 l-55 0 9 123 c5 67 6 147 4 177 -14 157 -3 307 43 625 26
                    176 58 433 72 570 35 343 43 406 67 515 46 213 138 340 293 403 55 22 150 21
                    201 -2z"></path>
                    <path d="M5540 9036 c0 -144 7 -173 53 -223 25 -27 37 -29 31 -5 -2 9 -20 93
                    -39 187 -20 93 -38 172 -41 174 -2 2 -4 -57 -4 -133z"></path>
                    <path d="M5025 6214 c-11 -2 -45 -9 -75 -15 -142 -28 -305 -120 -380 -214 -44
                    -54 -92 -157 -98 -211 -4 -43 -4 -44 23 -44 20 0 37 11 59 37 100 118 186 177
                    296 204 34 9 105 14 185 13 113 -1 154 -7 315 -42 102 -23 244 -52 315 -66 72
                    -14 224 -43 338 -66 115 -22 211 -40 213 -40 26 0 -57 160 -107 205 -72 64
                    -118 78 -614 187 -178 38 -255 51 -340 53 -60 2 -119 2 -130 -1z"></path>
                    <path d="M8150 6186 c-85 -19 -229 -52 -320 -74 -91 -22 -208 -50 -260 -62
                    -126 -29 -210 -71 -265 -132 -40 -45 -95 -141 -95 -167 0 -34 178 0 875 170
                    200 49 271 62 360 66 209 11 373 -44 482 -161 55 -58 113 -106 128 -106 16 0
                    -8 119 -36 176 -52 109 -205 233 -354 288 -72 26 -94 29 -220 32 -128 3 -153
                    1 -295 -30z"></path>
                    <path d="M5282 5670 c-73 -19 -197 -74 -209 -93 -3 -5 0 -7 8 -4 72 30 222 68
                    302 77 166 19 251 -1 480 -116 60 -31 111 -53 113 -51 9 9 -95 87 -168 126
                    -41 23 -110 50 -153 61 -104 27 -271 27 -373 0z"></path>
                    <path d="M7908 5666 c-158 -28 -266 -79 -328 -154 -34 -41 -37 -52 -15 -52 22
                    0 19 -16 -20 -81 -19 -32 -31 -59 -27 -59 4 0 35 23 67 51 76 65 152 115 188
                    123 24 6 27 4 27 -19 0 -60 23 -116 63 -156 36 -34 38 -39 18 -39 -12 0 -46 9
                    -76 19 -77 27 -127 34 -159 21 -16 -6 -26 -13 -23 -16 9 -10 157 -45 272 -65
                    206 -37 439 -35 567 3 38 11 39 12 17 24 -22 11 -21 12 22 31 42 19 77 49 67
                    58 -2 2 -82 -16 -177 -41 -94 -26 -174 -44 -177 -42 -7 8 97 218 108 218 6 0
                    37 -13 70 -30 104 -53 177 -80 238 -88 33 -5 60 -6 60 -3 0 6 -166 105 -230
                    136 -60 31 -196 73 -274 85 -106 18 -294 8 -377 -19 -36 -11 -96 -41 -135 -65
                    -73 -48 -102 -44 -43 6 40 34 175 101 239 119 26 8 98 13 170 13 138 0 220
                    -18 354 -75 39 -17 86 -37 104 -45 17 -8 32 -12 32 -10 0 7 -134 85 -183 105
                    -124 53 -299 71 -439 47z m290 -148 c19 -19 14 -56 -9 -68 -28 -15 -45 -7 -53
                    25 -11 44 31 74 62 43z"></path>
                    <path d="M5278 5590 c-84 -14 -175 -50 -260 -102 -46 -28 -109 -65 -141 -83
                    -31 -17 -54 -34 -50 -38 3 -4 27 -7 52 -7 50 0 117 26 140 54 18 22 84 56 109
                    56 14 0 21 -13 30 -58 8 -37 23 -71 43 -95 49 -60 28 -68 -73 -28 -115 46
                    -156 50 -187 17 -18 -20 -21 -27 -10 -31 253 -93 292 -95 764 -40 243 29 265
                    33 265 47 0 6 -66 7 -186 3 l-185 -8 16 39 c9 22 30 74 47 116 l29 77 52 -20
                    c70 -28 171 -97 235 -160 45 -45 52 -49 52 -30 0 48 -159 185 -275 236 -130
                    58 -319 80 -467 55z m36 -93 c23 -17 7 -63 -29 -79 -53 -24 -99 28 -57 64 32
                    29 60 34 86 15z"></path>
                    <path d="M6167 3868 c-58 -58 -77 -104 -77 -185 0 -127 94 -241 192 -231 l32
                    3 -59 35 c-32 19 -72 52 -89 73 -60 75 -42 220 40 315 51 60 23 52 -39 -10z"></path>
                    <path d="M7430 3845 c35 -67 40 -84 40 -143 0 -75 -20 -118 -73 -162 -17 -14
                    -45 -37 -61 -52 l-31 -27 30 -1 c91 0 165 99 173 230 5 84 -7 124 -53 178 -57
                    67 -67 58 -25 -23z"></path>
                    <path d="M7181 3595 c-29 -14 -91 -55 -137 -90 -113 -89 -171 -115 -256 -115
                    -68 0 -102 10 -220 64 -31 14 -60 26 -63 26 -3 0 4 -18 16 -39 29 -52 90 -79
                    201 -87 142 -11 227 20 363 131 73 60 154 105 192 105 27 0 38 16 17 24 -29
                    11 -59 6 -113 -19z"></path>
                    <path d="M6290 3595 c0 -9 202 -106 208 -101 11 12 -75 82 -115 94 -41 12 -93
                    16 -93 7z"></path>
                    <path d="M7170 3161 c0 -13 26 -32 33 -24 8 7 -11 33 -24 33 -5 0 -9 -4 -9 -9z"></path>
                    <path d="M6470 3150 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M7110 3132 c0 -12 7 -25 15 -29 25 -9 27 2 6 28 l-20 24 -1 -23z"></path>
                    <path d="M6600 3130 c0 -5 6 -10 14 -10 8 0 18 5 21 10 3 6 -3 10 -14 10 -12
                    0 -21 -4 -21 -10z"></path>
                    <path d="M6374 3105 c-19 -14 -19 -14 2 -15 11 0 29 7 40 15 19 14 19 14 -2
                    15 -11 0 -29 -7 -40 -15z"></path>
                    <path d="M7380 3084 c22 -20 43 -34 46 -31 12 11 -7 44 -32 55 -48 22 -54 12
                    -14 -24z"></path>
                    <path d="M6265 3099 c-12 -19 5 -23 22 -6 16 16 16 17 1 17 -9 0 -20 -5 -23
                    -11z"></path>
                    <path d="M7250 3075 c24 -25 50 -33 50 -16 0 13 -41 41 -59 41 -10 0 -8 -7 9
                    -25z"></path>
                    <path d="M7022 3078 c3 -7 13 -15 24 -17 16 -3 17 -1 5 13 -16 19 -34 21 -29
                    4z"></path>
                    <path d="M6451 3067 c-13 -6 -31 -22 -39 -34 -13 -21 -13 -23 1 -23 17 0 67
                    45 67 60 0 12 0 12 -29 -3z"></path>
                    <path d="M6554 3053 c-18 -16 -24 -28 -17 -30 15 -5 73 34 73 48 0 17 -27 9
                    -56 -18z"></path>
                    <path d="M6810 3035 c0 -19 11 -19 36 0 18 14 18 14 -8 15 -18 0 -28 -5 -28
                    -15z"></path>
                    <path d="M7191 3028 c15 -28 39 -47 58 -48 8 0 -2 16 -23 35 -45 41 -51 43
                    -35 13z"></path>
                    <path d="M6950 3032 c0 -10 41 -35 47 -28 9 8 -17 36 -33 36 -8 0 -14 -3 -14
                    -8z"></path>
                    <path d="M7527 3024 c-11 -11 6 -35 35 -50 37 -19 47 -11 22 17 -23 25 -49 40
                    -57 33z"></path>
                    <path d="M6632 2997 c-24 -25 -28 -37 -12 -37 13 0 50 37 50 50 0 17 -15 11
                    -38 -13z"></path>
                    <path d="M6265 2984 c-9 -14 -14 -28 -12 -31 11 -10 47 19 47 37 0 28 -14 25
                    -35 -6z"></path>
                    <path d="M5950 2964 c-12 -31 -9 -37 14 -28 18 7 22 39 6 49 -6 3 -15 -6 -20
                    -21z"></path>
                    <path d="M6180 2970 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0
                    -15 -4 -15 -10z"></path>
                    <path d="M7115 2951 c17 -16 41 -32 55 -36 23 -6 21 -3 -12 29 -21 20 -46 36
                    -55 36 -14 0 -11 -6 12 -29z"></path>
                    <path d="M7360 2945 c39 -40 50 -43 50 -16 0 23 -36 51 -64 51 -17 0 -15 -5
                    14 -35z"></path>
                    <path d="M6072 2954 c-12 -8 -22 -19 -22 -25 0 -15 26 -10 43 9 30 33 17 43
                    -21 16z"></path>
                    <path d="M6719 2954 c-11 -14 -10 -15 11 -12 13 1 25 9 28 16 5 17 -23 15 -39
                    -4z"></path>
                    <path d="M7650 2960 c0 -13 37 -50 50 -50 16 0 12 14 -10 38 -22 23 -40 29
                    -40 12z"></path>
                    <path d="M6825 2949 c-11 -17 1 -21 15 -4 8 9 8 15 2 15 -6 0 -14 -5 -17 -11z"></path>
                    <path d="M7040 2935 c23 -24 70 -55 85 -55 3 0 1 9 -5 20 -12 23 -44 45 -80
                    55 l-25 7 25 -27z"></path>
                    <path d="M7485 2940 c3 -5 19 -19 35 -30 24 -17 30 -18 30 -6 0 21 -28 46 -51
                    46 -11 0 -18 -4 -14 -10z"></path>
                    <path d="M7272 2918 c18 -27 45 -45 54 -35 12 12 -26 57 -47 57 -20 0 -20 -2
                    -7 -22z"></path>
                    <path d="M7743 2917 c5 -17 56 -52 63 -44 4 4 -1 15 -10 26 -20 22 -59 35 -53
                    18z"></path>
                    <path d="M6340 2900 c-20 -20 -26 -40 -12 -40 16 0 52 32 52 46 0 20 -16 18
                    -40 -6z"></path>
                    <path d="M6483 2913 c-18 -6 -16 -33 1 -33 19 0 31 19 20 30 -5 4 -15 5 -21 3z"></path>
                    <path d="M7607 2914 c-9 -9 44 -85 55 -78 13 9 0 56 -19 72 -19 13 -27 15 -36
                    6z"></path>
                    <path d="M6960 2896 c0 -9 7 -16 16 -16 17 0 14 22 -4 28 -7 2 -12 -3 -12 -12z"></path>
                    <path d="M7840 2903 c0 -10 52 -63 62 -63 14 0 8 27 -9 42 -21 18 -53 30 -53
                    21z"></path>
                    <path d="M6604 2876 c-10 -8 -15 -18 -11 -22 4 -4 17 2 30 14 24 25 12 30 -19
                    8z"></path>
                    <path d="M6180 2855 c-13 -14 -21 -28 -18 -31 12 -11 48 17 48 36 0 25 -2 25
                    -30 -5z"></path>
                    <path d="M5847 2863 c-12 -11 -8 -23 8 -23 8 0 15 7 15 15 0 16 -12 20 -23 8z"></path>
                    <path d="M6742 2858 c-7 -7 -12 -18 -12 -25 0 -11 5 -11 20 -3 11 6 20 17 20
                    25 0 18 -12 19 -28 3z"></path>
                    <path d="M6816 2851 c-11 -12 -17 -23 -14 -26 8 -9 41 21 37 34 -3 9 -11 6
                    -23 -8z"></path>
                    <path d="M7190 2852 c0 -19 18 -42 32 -42 12 0 9 35 -4 48 -17 17 -28 15 -28
                    -6z"></path>
                    <path d="M7460 2862 c0 -5 11 -19 25 -32 25 -23 25 -23 25 -2 0 12 -9 26 -19
                    32 -24 12 -31 13 -31 2z"></path>
                    <path d="M6014 2847 c-3 -9 -4 -24 -2 -34 3 -16 5 -15 17 6 9 16 10 26 2 34
                    -7 7 -12 6 -17 -6z"></path>
                    <path d="M6402 2844 c-22 -15 -30 -44 -12 -44 13 0 50 37 50 50 0 14 -12 12
                    -38 -6z"></path>
                    <path d="M5912 2843 c-15 -6 -46 -63 -34 -63 5 0 19 11 31 24 24 25 26 46 3
                    39z"></path>
                    <path d="M7730 2827 c0 -16 32 -47 48 -47 18 0 14 18 -8 40 -23 23 -40 26 -40
                    7z"></path>
                    <path d="M7840 2830 c0 -18 30 -70 40 -70 17 0 11 46 -8 63 -21 19 -32 22 -32
                    7z"></path>
                    <path d="M7080 2817 c0 -18 29 -43 60 -52 24 -7 23 -5 -9 29 -37 38 -51 44
                    -51 23z"></path>
                    <path d="M6962 2801 c4 -13 18 -16 19 -4 0 4 -5 9 -11 12 -7 2 -11 -2 -8 -8z"></path>
                    <path d="M7565 2780 c17 -33 35 -40 35 -12 0 21 -18 42 -37 42 -11 0 -10 -6 2
                    -30z"></path>
                    <path d="M7982 2782 c15 -20 24 -24 26 -15 5 18 -16 43 -35 43 -11 0 -8 -8 9
                    -28z"></path>
                    <path d="M4220 2790 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
                    -4 -4 -4 -10z"></path>
                    <path d="M5660 2779 c-7 -11 -9 -23 -6 -26 8 -9 36 17 36 33 0 21 -18 17 -30
                    -7z"></path>
                    <path d="M6675 2789 c-4 -6 -5 -13 -2 -16 7 -7 27 6 27 18 0 12 -17 12 -25 -2z"></path>
                    <path d="M7340 2791 c0 -15 30 -41 46 -41 21 0 17 17 -8 34 -25 18 -38 20 -38
                    7z"></path>
                    <path d="M8057 2794 c-8 -9 11 -44 23 -44 6 0 10 6 10 14 0 16 -24 38 -33 30z"></path>
                    <path d="M5766 2761 c-15 -16 -23 -31 -18 -35 13 -8 62 32 62 50 0 21 -13 17
                    -44 -15z"></path>
                    <path d="M6484 2759 l-29 -19 26 0 c15 0 32 6 38 14 19 23 -3 26 -35 5z"></path>
                    <path d="M7270 2746 c0 -24 26 -54 36 -43 11 10 -5 54 -21 61 -11 4 -15 -1
                    -15 -18z"></path>
                    <path d="M7480 2740 c11 -37 19 -50 30 -50 12 0 0 63 -14 72 -20 14 -25 8 -16
                    -22z"></path>
                    <path d="M7680 2751 c0 -20 37 -53 55 -49 19 3 18 5 -7 31 -27 27 -48 35 -48
                    18z"></path>
                    <path d="M5905 2730 c-10 -11 -15 -26 -11 -36 6 -15 8 -15 26 1 20 18 28 55
                    12 55 -5 0 -17 -9 -27 -20z"></path>
                    <path d="M6277 2736 c-6 -16 2 -28 14 -20 12 7 11 34 0 34 -5 0 -11 -6 -14
                    -14z"></path>
                    <path d="M6120 2730 c0 -5 4 -10 9 -10 6 0 13 5 16 10 3 6 -1 10 -9 10 -9 0
                    -16 -4 -16 -10z"></path>
                    <path d="M6379 2708 c-10 -18 -9 -20 6 -15 9 4 19 7 21 7 2 0 4 7 4 15 0 22
                    -18 18 -31 -7z"></path>
                    <path d="M7930 2708 c0 -7 7 -21 14 -31 12 -15 14 -15 19 -3 4 9 -1 22 -9 31
                    -19 18 -24 19 -24 3z"></path>
                    <path d="M5465 2690 c-18 -20 -11 -25 19 -14 17 6 23 34 8 34 -5 0 -17 -9 -27
                    -20z"></path>
                    <path d="M6004 2695 c-3 -8 -3 -19 0 -24 10 -16 36 -1 36 20 0 22 -28 26 -36
                    4z"></path>
                    <path d="M7810 2698 c1 -7 7 -24 15 -38 l15 -25 -2 34 c-3 32 -28 59 -28 29z"></path>
                    <path d="M5531 2677 c-11 -13 -21 -32 -21 -42 0 -17 1 -17 21 1 27 24 41 51
                    30 58 -4 3 -18 -5 -30 -17z"></path>
                    <path d="M6146 2674 c-12 -17 -15 -29 -8 -36 7 -7 16 -1 28 16 11 18 14 30 7
                    37 -7 7 -16 1 -27 -17z"></path>
                    <path d="M8060 2681 c0 -10 9 -29 20 -42 l19 -24 0 25 c0 24 -19 60 -33 60 -3
                    0 -6 -9 -6 -19z"></path>
                    <path d="M7430 2672 c0 -11 7 -25 16 -33 14 -11 15 -9 12 16 -3 32 -28 47 -28
                    17z"></path>
                    <path d="M4370 2670 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M7530 2668 c0 -16 19 -38 33 -38 4 0 7 10 5 22 -3 25 -38 39 -38 16z"></path>
                    <path d="M7642 2669 c2 -7 10 -15 17 -17 8 -3 12 1 9 9 -2 7 -10 15 -17 17 -8
                    3 -12 -1 -9 -9z"></path>
                    <path d="M7740 2647 c0 -8 9 -22 20 -32 22 -20 27 -7 10 26 -12 22 -30 25 -30
                    6z"></path>
                    <path d="M9266 2645 c4 -8 13 -15 21 -15 13 0 13 3 3 15 -7 8 -16 15 -21 15
                    -5 0 -6 -7 -3 -15z"></path>
                    <path d="M4456 2628 c-9 -12 -14 -23 -12 -25 8 -9 56 18 56 32 0 22 -27 18
                    -44 -7z"></path>
                    <path d="M5854 2619 c-19 -21 -19 -21 6 -18 14 2 26 12 28 22 5 23 -11 22 -34
                    -4z"></path>
                    <path d="M4375 2580 c-3 -5 -1 -10 4 -10 6 0 11 5 11 10 0 6 -2 10 -4 10 -3 0
                    -8 -4 -11 -10z"></path>
                    <path d="M4530 2559 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10
                    -5 -10 -11z"></path>
                    <path d="M5342 2533 c-16 -16 -22 -28 -15 -30 20 -7 53 17 53 37 0 26 -6 25
                    -38 -7z"></path>
                    <path d="M9256 2535 c4 -8 13 -15 21 -15 13 0 13 3 3 15 -7 8 -16 15 -21 15
                    -5 0 -6 -7 -3 -15z"></path>
                    <path d="M7030 2529 c-41 -4 -100 -15 -130 -23 -71 -20 -209 -20 -302 0 -111
                    24 -244 22 -368 -6 -87 -19 -146 -24 -340 -29 l-235 -6 80 -20 c124 -30 281
                    -26 473 14 172 35 250 38 349 15 92 -23 271 -22 392 1 125 23 311 16 531 -20
                    149 -25 173 -27 243 -17 83 12 187 41 187 52 0 4 -44 1 -97 -7 -128 -19 -283
                    -11 -443 20 -146 30 -236 36 -340 26z"></path>
                    <path d="M8170 2513 c0 -18 28 -53 43 -53 16 0 5 28 -18 50 -24 23 -25 23 -25
                    3z"></path>
                    <path d="M8240 2457 c0 -23 17 -47 32 -47 12 0 9 45 -4 58 -18 18 -28 14 -28
                    -11z"></path>
                    <path d="M9060 2471 c0 -13 29 -35 37 -28 7 8 -15 37 -28 37 -5 0 -9 -4 -9 -9z"></path>
                    <path d="M5420 2445 c0 -17 5 -25 13 -22 6 2 12 12 12 22 0 10 -6 20 -12 23
                    -8 2 -13 -6 -13 -23z"></path>
                    <path d="M8070 2451 c0 -12 29 -35 36 -28 11 10 -5 37 -21 37 -8 0 -15 -4 -15
                    -9z"></path>
                    <path d="M4540 2430 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M4715 2430 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
                    -7 -4 -4 -10z"></path>
                    <path d="M5366 2433 c-12 -12 -5 -23 14 -23 11 0 20 4 20 9 0 11 -26 22 -34
                    14z"></path>
                    <path d="M4470 2400 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M5426 2381 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z"></path>
                    <path d="M4810 2360 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
                    -4 -4 -4 -10z"></path>
                    <path d="M8160 2358 c0 -7 5 -20 10 -28 7 -12 12 -12 21 -3 9 9 9 16 -1 28
                    -15 18 -30 20 -30 3z"></path>
                    <path d="M4640 2344 c0 -9 5 -14 12 -12 18 6 21 28 4 28 -9 0 -16 -7 -16 -16z"></path>
                    <path d="M8030 2350 c0 -19 28 -60 41 -60 16 0 10 18 -16 47 -16 19 -24 23
                    -25 13z"></path>
                    <path d="M9190 2311 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0
                    -10 -4 -10 -9z"></path>
                    <path d="M4540 2299 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10
                    -5 -10 -11z"></path>
                    <path d="M8805 2300 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
                    -7 -4 -4 -10z"></path>
                    <path d="M8365 2290 c3 -5 10 -10 16 -10 5 0 9 5 9 10 0 6 -7 10 -16 10 -8 0
                    -12 -4 -9 -10z"></path>
                    <path d="M8560 2280 c14 -27 50 -46 50 -27 0 17 -32 47 -49 47 -9 0 -9 -5 -1
                    -20z"></path>
                    <path d="M4880 2261 c-12 -24 -6 -56 9 -47 13 8 20 42 11 56 -6 9 -11 7 -20
                    -9z"></path>
                    <path d="M8307 2244 c9 -15 19 -21 21 -15 6 19 -6 41 -23 41 -14 0 -13 -3 2
                    -26z"></path>
                    <path d="M9090 2256 c0 -9 5 -16 10 -16 6 0 10 4 10 9 0 6 -4 13 -10 16 -5 3
                    -10 -1 -10 -9z"></path>
                    <path d="M8137 2240 c6 -21 31 -46 39 -38 2 3 -1 17 -7 32 -14 31 -40 36 -32
                    6z"></path>
                    <path d="M8986 2246 c3 -9 11 -16 16 -16 13 0 5 23 -10 28 -7 2 -10 -2 -6 -12z"></path>
                    <path d="M4770 2240 c0 -5 4 -10 9 -10 6 0 13 5 16 10 3 6 -1 10 -9 10 -9 0
                    -16 -4 -16 -10z"></path>
                    <path d="M7180 2219 c-110 -24 -337 -49 -440 -49 -94 0 -239 15 -360 36 -47 9
                    -105 18 -130 20 l-45 5 50 -27 c57 -31 233 -69 375 -83 137 -13 365 3 482 33
                    116 31 208 64 208 77 0 13 -41 9 -140 -12z"></path>
                    <path d="M5521 2212 c-14 -25 -14 -42 -1 -42 15 0 29 35 20 49 -6 11 -10 9
                    -19 -7z"></path>
                    <path d="M5405 2211 c-6 -11 9 -23 19 -14 9 9 7 23 -3 23 -6 0 -12 -4 -16 -9z"></path>
                    <path d="M8740 2197 c0 -17 20 -37 37 -37 10 0 11 5 4 19 -13 23 -41 35 -41
                    18z"></path>
                    <path d="M8563 2163 c9 -9 19 -14 23 -11 10 10 -6 28 -24 28 -15 0 -15 -1 1
                    -17z"></path>
                    <path d="M8130 2150 c0 -12 8 -32 17 -47 15 -23 17 -24 24 -7 7 21 -15 74 -31
                    74 -6 0 -10 -9 -10 -20z"></path>
                    <path d="M8960 2153 c0 -5 4 -15 10 -23 11 -18 25 -7 17 15 -6 15 -27 21 -27
                    8z"></path>
                    <path d="M4715 2140 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
                    -7 -4 -4 -10z"></path>
                    <path d="M8260 2102 c0 -11 9 -27 20 -37 22 -20 26 -9 8 30 -13 29 -28 33 -28
                    7z"></path>
                    <path d="M5395 2090 c3 -5 10 -10 16 -10 5 0 9 5 9 10 0 6 -7 10 -16 10 -8 0
                    -12 -4 -9 -10z"></path>
                    <path d="M4895 2081 c-3 -5 -1 -12 5 -16 5 -3 10 1 10 9 0 18 -6 21 -15 7z"></path>
                    <path d="M5486 2045 c-3 -8 -1 -15 4 -15 13 0 22 18 11 24 -5 3 -11 -1 -15 -9z"></path>
                    <path d="M8907 2030 c-7 -29 1 -50 20 -50 12 0 14 7 8 28 -9 38 -21 47 -28 22z"></path>
                    <path d="M5447 2013 c-10 -9 -9 -43 1 -43 12 0 32 23 32 37 0 14 -22 18 -33 6z"></path>
                    <path d="M8220 2003 c0 -25 38 -85 49 -78 11 6 -2 60 -20 81 -16 19 -29 18
                    -29 -3z"></path>
                    <path d="M8340 1970 c0 -18 20 -50 30 -50 18 0 10 39 -10 50 -14 8 -20 8 -20
                    0z"></path>
                    <path d="M8590 1952 c0 -5 7 -13 16 -16 10 -4 14 -1 12 6 -5 15 -28 23 -28 10z"></path>
                    <path d="M4848 1943 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"></path>
                    <path d="M8155 1940 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
                    -7 -4 -4 -10z"></path>
                    <path d="M8460 1902 c0 -10 6 -26 13 -37 21 -28 32 0 13 30 -20 30 -26 31 -26
                    7z"></path>
                    <path d="M6290 1894 c0 -8 5 -12 10 -9 6 3 10 10 10 16 0 5 -4 9 -10 9 -5 0
                    -10 -7 -10 -16z"></path>
                    <path d="M6437 1873 c-4 -3 -7 -20 -7 -36 0 -29 0 -30 20 -12 23 20 27 55 7
                    55 -8 0 -17 -3 -20 -7z"></path>
                    <path d="M6523 1847 c-25 -36 -28 -53 -13 -62 12 -8 42 51 38 76 -3 16 -7 14
                    -25 -14z"></path>
                    <path d="M6824 1836 c-6 -27 12 -70 27 -61 17 11 8 85 -12 85 -5 0 -11 -11
                    -15 -24z"></path>
                    <path d="M6932 1848 c-8 -8 -9 -15 -1 -25 18 -20 38 -16 32 7 -7 26 -17 32
                    -31 18z"></path>
                    <path d="M7290 1845 c0 -8 5 -15 10 -15 6 0 10 7 10 15 0 8 -4 15 -10 15 -5 0
                    -10 -7 -10 -15z"></path>
                    <path d="M6340 1839 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10
                    -5 -10 -11z"></path>
                    <path d="M8280 1842 c0 -4 9 -13 20 -20 16 -10 20 -10 20 2 0 8 -7 17 -16 20
                    -20 8 -24 8 -24 -2z"></path>
                    <path d="M6580 1820 c-24 -24 -26 -58 -3 -67 21 -8 53 30 53 63 0 30 -23 31
                    -50 4z"></path>
                    <path d="M7140 1821 c0 -10 7 -21 15 -25 16 -6 19 3 9 28 -8 22 -24 20 -24 -3z"></path>
                    <path d="M8086 1826 c21 -15 30 -14 19 3 -3 6 -14 11 -23 11 -13 0 -13 -2 4
                    -14z"></path>
                    <path d="M6715 1809 c-9 -14 3 -59 15 -59 6 0 10 16 10 35 0 34 -12 46 -25 24z"></path>
                    <path d="M8182 1786 c2 -22 9 -41 16 -44 17 -5 15 40 -3 64 -14 18 -15 17 -13
                    -20z"></path>
                    <path d="M7986 1792 c-7 -12 22 -38 31 -28 4 3 0 14 -9 22 -9 10 -18 12 -22 6z"></path>
                    <path d="M6900 1770 c0 -13 5 -20 13 -17 6 2 12 10 12 17 0 7 -6 15 -12 18 -8
                    2 -13 -5 -13 -18z"></path>
                    <path d="M7030 1781 c0 -14 18 -23 31 -15 8 4 7 9 -2 15 -18 11 -29 11 -29 0z"></path>
                    <path d="M7285 1780 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
                    -7 -4 -4 -10z"></path>
                    <path d="M8600 1786 c0 -8 31 -36 41 -36 5 0 4 9 -3 20 -11 17 -38 28 -38 16z"></path>
                    <path d="M8336 1772 c-3 -6 -1 -14 5 -17 15 -10 25 3 12 16 -7 7 -13 7 -17 1z"></path>
                    <path d="M8725 1770 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
                    -7 -4 -4 -10z"></path>
                    <path d="M8114 1744 c3 -9 6 -18 6 -20 0 -2 10 -4 22 -4 20 0 21 1 3 20 -22
                    24 -40 26 -31 4z"></path>
                    <path d="M8492 1739 c2 -7 10 -15 17 -17 8 -3 12 1 9 9 -2 7 -10 15 -17 17 -8
                    3 -12 -1 -9 -9z"></path>
                    <path d="M6618 1728 c-7 -19 2 -38 19 -38 9 0 13 8 11 22 -3 25 -23 35 -30 16z"></path>
                    <path d="M8260 1728 c0 -19 18 -43 25 -36 9 9 -4 48 -16 48 -5 0 -9 -6 -9 -12z"></path>
                    <path d="M5415 1709 c-10 -15 3 -25 16 -12 7 7 7 13 1 17 -6 3 -14 1 -17 -5z"></path>
                    <path d="M6467 1707 c-3 -8 -1 -20 4 -28 11 -19 34 3 26 25 -8 20 -23 21 -30
                    3z"></path>
                    <path d="M6797 1714 c-8 -8 3 -34 14 -34 11 0 12 27 0 34 -4 3 -11 3 -14 0z"></path>
                    <path d="M7956 1693 c10 -41 16 -47 26 -29 5 10 5 23 -2 36 -16 30 -31 25 -24
                    -7z"></path>
                    <path d="M6730 1685 c0 -15 6 -25 14 -25 19 0 27 25 13 39 -18 18 -27 13 -27
                    -14z"></path>
                    <path d="M6963 1694 c-7 -20 9 -49 28 -49 22 0 18 59 -4 63 -9 2 -20 -4 -24
                    -14z"></path>
                    <path d="M6862 1658 c-7 -24 -15 -49 -19 -56 -9 -22 34 4 47 28 8 15 7 27 -3
                    45 l-13 25 -12 -42z"></path>
                    <path d="M6551 1681 c-8 -5 -11 -16 -8 -25 10 -25 27 -19 27 9 0 28 0 28 -19
                    16z"></path>
                    <path d="M8400 1680 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
                    -4 -4 -4 -10z"></path>
                    <path d="M5237 1673 c-10 -9 -9 -23 1 -23 5 0 17 7 28 15 19 14 19 14 -2 15
                    -11 0 -24 -3 -27 -7z"></path>
                    <path d="M8050 1662 c0 -19 18 -42 32 -42 12 0 9 35 -4 48 -17 17 -28 15 -28
                    -6z"></path>
                    <path d="M8346 1672 c-3 -6 -1 -14 5 -17 15 -10 25 3 12 16 -7 7 -13 7 -17 1z"></path>
                    <path d="M6656 1655 c-9 -24 -7 -45 3 -45 5 0 13 9 16 21 8 26 -9 48 -19 24z"></path>
                    <path d="M8470 1627 c0 -13 7 -32 15 -43 14 -18 14 -18 15 8 0 32 -9 58 -21
                    58 -5 0 -9 -10 -9 -23z"></path>
                    <path d="M8160 1610 c0 -23 4 -30 20 -30 23 0 27 29 8 48 -19 19 -28 14 -28
                    -18z"></path>
                    <path d="M5150 1610 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M8580 1610 c0 -5 7 -10 16 -10 8 0 12 5 9 10 -3 6 -10 10 -16 10 -5
                    0 -9 -4 -9 -10z"></path>
                    <path d="M5280 1600 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M5404 1596 c-8 -22 3 -33 18 -18 9 9 9 15 0 24 -9 9 -13 7 -18 -6z"></path>
                    <path d="M7850 1594 c0 -9 32 -33 44 -34 5 0 1 9 -9 20 -18 20 -35 26 -35 14z"></path>
                    <path d="M7965 1590 c3 -5 11 -10 16 -10 6 0 7 5 4 10 -3 6 -11 10 -16 10 -6
                    0 -7 -4 -4 -10z"></path>
                    <path d="M8291 1587 c-38 -19 -37 -35 3 -35 19 0 39 -3 45 -7 17 -10 13 11 -6
                    34 -16 18 -21 19 -42 8z"></path>
                    <path d="M5164 1565 c-7 -30 2 -59 16 -50 13 8 13 75 0 75 -5 0 -12 -11 -16
                    -25z"></path>
                    <path d="M8414 1569 c-3 -6 3 -21 15 -32 17 -18 21 -19 21 -5 0 39 -21 61 -36
                    37z"></path>
                    <path d="M6657 1554 c-8 -8 1 -24 14 -24 5 0 9 7 9 15 0 15 -12 20 -23 9z"></path>
                    <path d="M5530 1538 c-26 -10 -40 -25 -40 -46 0 -17 59 13 67 34 8 21 2 23
                    -27 12z"></path>
                    <path d="M5316 1518 c-18 -25 -16 -31 8 -22 9 3 16 15 16 25 0 25 -5 24 -24
                    -3z"></path>
                    <path d="M6773 1519 c-8 -8 -7 -19 4 -40 15 -30 43 -40 43 -14 0 8 -7 15 -15
                    15 -11 0 -14 7 -9 25 6 26 -4 33 -23 14z"></path>
                    <path d="M8480 1520 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M6474 1506 c-6 -17 2 -36 17 -36 12 0 12 37 -1 45 -6 3 -13 -1 -16
                    -9z"></path>
                    <path d="M8080 1509 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10
                    -5 -10 -11z"></path>
                    <path d="M7843 1483 c9 -9 19 -14 23 -11 10 10 -6 28 -24 28 -15 0 -15 -1 1
                    -17z"></path>
                    <path d="M8195 1480 c10 -11 24 -20 32 -20 11 0 11 4 3 20 -6 11 -20 20 -32
                    20 -20 0 -21 -1 -3 -20z"></path>
                    <path d="M7192 1468 c2 -6 10 -14 16 -16 7 -2 10 2 6 12 -7 18 -28 22 -22 4z"></path>
                    <path d="M7932 1468 c2 -6 10 -14 16 -16 7 -2 10 2 6 12 -7 18 -28 22 -22 4z"></path>
                    <path d="M8340 1470 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M5625 1459 c-10 -15 3 -25 16 -12 7 7 7 13 1 17 -6 3 -14 1 -17 -5z"></path>
                    <path d="M5337 1453 c-10 -9 -9 -23 2 -23 5 0 11 7 15 15 5 15 -5 20 -17 8z"></path>
                    <path d="M6041 1446 c-14 -17 -1 -28 19 -16 11 7 12 12 4 20 -8 8 -14 7 -23
                    -4z"></path>
                    <path d="M6610 1440 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M6860 1431 c0 -12 5 -21 10 -21 6 0 10 6 10 14 0 8 -4 18 -10 21 -5
                    3 -10 -3 -10 -14z"></path>
                    <path d="M5403 1424 c-9 -23 11 -38 26 -20 13 16 7 36 -10 36 -5 0 -12 -7 -16
                    -16z"></path>
                    <path d="M5880 1430 c0 -5 7 -10 16 -10 8 0 12 5 9 10 -3 6 -10 10 -16 10 -5
                    0 -9 -4 -9 -10z"></path>
                    <path d="M8120 1430 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
                    -4 -4 -4 -10z"></path>
                    <path d="M7270 1416 c0 -8 5 -18 10 -21 6 -3 10 1 10 9 0 8 -4 18 -10 21 -5 3
                    -10 -1 -10 -9z"></path>
                    <path d="M7770 1411 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0
                    -10 -4 -10 -9z"></path>
                    <path d="M8002 1395 c8 -17 15 -22 21 -16 7 7 6 15 -3 26 -20 24 -31 18 -18
                    -10z"></path>
                    <path d="M5635 1390 c-28 -31 -8 -37 23 -7 19 20 22 27 11 27 -9 0 -24 -9 -34
                    -20z"></path>
                    <path d="M6505 1400 c-4 -6 -3 -16 3 -22 6 -6 12 -6 17 2 4 6 3 16 -3 22 -6 6
                    -12 6 -17 -2z"></path>
                    <path d="M7420 1398 c0 -18 18 -34 28 -24 3 4 -2 14 -11 23 -16 16 -17 16 -17
                    1z"></path>
                    <path d="M8306 1401 c-8 -12 21 -34 34 -26 8 5 8 11 -1 21 -13 16 -25 18 -33
                    5z"></path>
                    <path d="M6700 1385 c0 -9 6 -12 15 -9 8 4 12 10 9 15 -8 14 -24 10 -24 -6z"></path>
                    <path d="M5973 1383 c-14 -5 -18 -43 -5 -43 10 0 42 33 42 43 0 8 -19 8 -37 0z"></path>
                    <path d="M7055 1381 c-7 -12 12 -24 25 -16 11 7 4 25 -10 25 -5 0 -11 -4 -15
                    -9z"></path>
                    <path d="M7152 1379 c2 -7 10 -15 17 -17 8 -3 12 1 9 9 -2 7 -10 15 -17 17 -8
                    3 -12 -1 -9 -9z"></path>
                    <path d="M7626 1372 c-3 -5 1 -15 9 -22 16 -14 20 -3 6 19 -5 8 -11 9 -15 3z"></path>
                    <path d="M5273 1343 c9 -9 19 -14 23 -11 10 10 -6 28 -24 28 -15 0 -15 -1 1
                    -17z"></path>
                    <path d="M6900 1345 c0 -8 4 -15 9 -15 5 0 11 7 15 15 3 9 0 15 -9 15 -8 0
                    -15 -7 -15 -15z"></path>
                    <path d="M8162 1343 c2 -12 14 -19 33 -21 l30 -4 -27 21 c-32 26 -40 26 -36 4z"></path>
                    <path d="M5525 1340 c-3 -5 1 -10 10 -10 9 0 13 5 10 10 -3 6 -8 10 -10 10 -2
                    0 -7 -4 -10 -10z"></path>
                    <path d="M6090 1340 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M6586 1342 c-3 -6 -1 -14 5 -17 15 -10 25 3 12 16 -7 7 -13 7 -17 1z"></path>
                    <path d="M8020 1340 c0 -13 28 -25 38 -16 3 4 0 11 -8 16 -20 13 -30 12 -30 0z"></path>
                    <path d="M5383 1333 c-17 -6 -16 -33 1 -33 20 0 40 26 24 32 -7 3 -19 3 -25 1z"></path>
                    <path d="M5758 1323 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"></path>
                    <path d="M7505 1320 c3 -5 11 -10 16 -10 6 0 7 5 4 10 -3 6 -11 10 -16 10 -6
                    0 -7 -4 -4 -10z"></path>
                    <path d="M6340 1305 c0 -9 5 -15 11 -13 6 2 11 8 11 13 0 5 -5 11 -11 13 -6 2
                    -11 -4 -11 -13z"></path>
                    <path d="M6418 1313 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"></path>
                    <path d="M7350 1312 c0 -16 38 -44 50 -37 7 4 2 14 -14 26 -26 21 -36 24 -36
                    11z"></path>
                    <path d="M5526 1294 c-4 -9 -4 -19 -1 -23 8 -7 38 12 43 27 6 19 -35 14 -42
                    -4z"></path>
                    <path d="M7860 1295 c0 -16 27 -32 37 -21 7 7 -16 36 -28 36 -5 0 -9 -7 -9
                    -15z"></path>
                    <path d="M6136 1281 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z"></path>
                    <path d="M6990 1276 c0 -9 5 -16 10 -16 6 0 10 4 10 9 0 6 -4 13 -10 16 -5 3
                    -10 -1 -10 -9z"></path>
                    <path d="M5458 1263 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"></path>
                    <path d="M7550 1251 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0
                    -10 -4 -10 -9z"></path>
                    <path d="M7176 1241 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z"></path>
                    <path d="M8022 1238 c3 -7 13 -15 22 -16 12 -3 17 1 14 10 -3 7 -13 15 -22 16
                    -12 3 -17 -1 -14 -10z"></path>
                    <path d="M5586 1224 c-17 -16 -22 -44 -8 -44 14 0 53 46 45 53 -10 11 -20 8
                    -37 -9z"></path>
                    <path d="M6796 1205 c-3 -9 0 -15 9 -15 16 0 20 16 6 24 -5 3 -11 -1 -15 -9z"></path>
                    <path d="M8137 1206 c-6 -15 1 -26 15 -26 4 0 8 9 8 20 0 23 -15 27 -23 6z"></path>
                    <path d="M5807 1203 c-8 -7 21 -63 32 -63 5 0 14 7 22 16 10 13 10 17 -2 25
                    -32 22 -47 28 -52 22z"></path>
                    <path d="M7640 1196 c0 -9 5 -16 10 -16 6 0 10 4 10 9 0 6 -4 13 -10 16 -5 3
                    -10 -1 -10 -9z"></path>
                    <path d="M6880 1191 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0
                    -10 -4 -10 -9z"></path>
                    <path d="M7290 1171 c0 -35 24 -60 34 -35 6 15 -17 64 -29 64 -3 0 -5 -13 -5
                    -29z"></path>
                    <path d="M5465 1179 c-10 -15 1 -23 20 -15 9 3 13 10 10 16 -8 13 -22 13 -30
                    -1z"></path>
                    <path d="M5925 1180 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
                    -7 -4 -4 -10z"></path>
                    <path d="M6378 1183 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"></path>
                    <path d="M7075 1181 c-7 -12 12 -24 25 -16 11 7 4 25 -10 25 -5 0 -11 -4 -15
                    -9z"></path>
                    <path d="M6510 1170 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
                    -4 -4 -4 -10z"></path>
                    <path d="M7515 1172 c-28 -20 -37 -42 -25 -57 18 -22 32 -18 29 8 -2 12 0 28
                    5 35 10 16 4 24 -9 14z"></path>
                    <path d="M7787 1173 c-4 -6 0 -16 8 -23 21 -17 28 -8 11 15 -8 11 -15 14 -19
                    8z"></path>
                    <path d="M7900 1161 c13 -25 33 -28 28 -4 -2 10 -11 19 -21 21 -16 3 -17 1 -7
                    -17z"></path>
                    <path d="M6045 1140 c-8 -13 5 -13 25 0 13 8 13 10 -2 10 -9 0 -20 -4 -23 -10z"></path>
                    <path d="M5687 1113 c-24 -23 9 -31 39 -8 18 14 18 14 -7 15 -14 0 -29 -3 -32
                    -7z"></path>
                    <path d="M7660 1100 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M7934 1095 c-7 -18 3 -35 22 -35 15 0 17 9 8 34 -8 20 -23 21 -30 1z"></path>
                    <path d="M7097 1074 c-8 -8 1 -24 14 -24 5 0 9 7 9 15 0 15 -12 20 -23 9z"></path>
                    <path d="M6285 1050 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
                    -7 -4 -4 -10z"></path>
                    <path d="M6676 1053 c-11 -11 -6 -23 9 -23 8 0 15 4 15 9 0 13 -16 22 -24 14z"></path>
                    <path d="M6960 1050 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M7266 1053 c-11 -11 -6 -23 9 -23 8 0 15 4 15 9 0 13 -16 22 -24 14z"></path>
                    <path d="M7805 1030 c-11 -33 16 -57 29 -25 6 17 -2 45 -14 45 -5 0 -11 -9
                    -15 -20z"></path>
                    <path d="M5910 1020 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0
                    -15 -4 -15 -10z"></path>
                    <path d="M7695 1021 c-7 -12 12 -24 25 -16 11 7 4 25 -10 25 -5 0 -11 -4 -15
                    -9z"></path>
                    <path d="M5741 1011 c-7 -5 -11 -14 -7 -19 9 -15 36 -4 36 14 0 16 -9 18 -29
                    5z"></path>
                    <path d="M7380 1010 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M7507 1004 c-8 -8 1 -24 14 -24 5 0 9 7 9 15 0 15 -12 20 -23 9z"></path>
                    <path d="M7755 980 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0 -7
                    -4 -4 -10z"></path>
                    <path d="M6095 970 c-3 -5 1 -10 10 -10 9 0 13 5 10 10 -3 6 -8 10 -10 10 -2
                    0 -7 -4 -10 -10z"></path>
                    <path d="M6280 944 c0 -17 22 -14 28 4 2 7 -3 12 -12 12 -9 0 -16 -7 -16 -16z"></path>
                    <path d="M5960 939 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10
                    -5 -10 -11z"></path>
                    <path d="M6795 940 c-8 -13 4 -50 16 -50 5 0 9 14 9 30 0 30 -13 40 -25 20z"></path>
                    <path d="M6487 922 c-13 -15 -16 -25 -10 -37 8 -14 11 -15 22 -1 7 8 11 25 9
                    37 l-3 21 -18 -20z"></path>
                    <path d="M5850 915 c0 -10 7 -15 18 -13 21 4 19 22 -2 26 -10 2 -16 -3 -16
                    -13z"></path>
                    <path d="M7142 918 c2 -6 10 -14 16 -16 7 -2 10 2 6 12 -7 18 -28 22 -22 4z"></path>
                    <path d="M7000 885 c0 -14 5 -25 10 -25 6 0 10 11 10 25 0 14 -4 25 -10 25 -5
                    0 -10 -11 -10 -25z"></path>
                    <path d="M7680 895 c-9 -10 -10 -19 -3 -26 14 -14 45 0 41 19 -4 22 -23 25
                    -38 7z"></path>
                    <path d="M6600 890 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M7490 885 c0 -8 4 -15 9 -15 5 0 14 7 21 15 10 13 9 15 -9 15 -12 0
                    -21 -6 -21 -15z"></path>
                    <path d="M6900 878 c0 -7 5 -20 10 -28 9 -13 11 -13 19 0 6 9 6 19 -1 27 -13
                    17 -28 17 -28 1z"></path>
                    <path d="M7227 884 c-8 -8 1 -24 14 -24 5 0 9 7 9 15 0 15 -12 20 -23 9z"></path>
                    <path d="M7340 854 c0 -22 2 -24 14 -14 8 6 12 18 9 26 -9 23 -23 16 -23 -12z"></path>
                    <path d="M5985 859 c-4 -6 -5 -13 -2 -16 7 -7 27 6 27 18 0 12 -17 12 -25 -2z"></path>
                    <path d="M6324 849 c-3 -6 -2 -15 3 -20 13 -13 43 -1 43 17 0 16 -36 19 -46 3z"></path>
                    <path d="M6050 840 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M7520 830 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0
                    -15 -4 -15 -10z"></path>
                    <path d="M6194 789 c-9 -16 2 -22 21 -11 15 8 16 10 1 15 -8 3 -18 2 -22 -4z"></path>
                    <path d="M6491 782 c-42 -21 -56 -48 -20 -37 55 17 69 25 69 40 0 19 -7 19
                    -49 -3z"></path>
                    <path d="M7090 760 c0 -5 4 -10 9 -10 6 0 13 5 16 10 3 6 -1 10 -9 10 -9 0
                    -16 -4 -16 -10z"></path>
                    <path d="M7350 760 c-12 -8 -12 -10 3 -16 21 -8 35 2 21 16 -5 5 -15 6 -24 0z"></path>
                    <path d="M6690 749 c-12 -8 -12 -12 -2 -16 7 -3 17 -16 22 -29 5 -13 14 -24
                    20 -24 16 0 12 37 -5 44 -8 3 -12 12 -9 21 7 17 -4 19 -26 4z"></path>
                    <path d="M6800 746 c0 -10 9 -16 21 -16 24 0 21 23 -4 28 -10 2 -17 -3 -17
                    -12z"></path>
                    <path d="M7175 739 c-8 -23 -1 -34 14 -24 13 8 15 45 2 45 -5 0 -13 -9 -16
                    -21z"></path>
                    <path d="M6383 735 c-3 -9 -3 -18 0 -21 9 -9 27 6 27 22 0 19 -19 18 -27 -1z"></path>
                    <path d="M6957 722 c-3 -15 -4 -29 -2 -31 8 -8 25 12 25 29 0 30 -17 32 -23 2z"></path>
                    <path d="M6530 715 c-23 -25 -23 -25 -2 -25 18 0 42 25 42 44 0 13 -18 4 -40
                    -19z"></path>
                    <path d="M7476 651 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4
                    -12 2 -15 -3z"></path>
                    <path d="M6316 592 c-3 -6 -2 -20 2 -32 7 -20 9 -20 22 -5 11 14 11 18 -2 31
                    -10 10 -18 12 -22 6z"></path>
                    <path d="M6540 540 c0 -15 5 -20 18 -18 9 2 17 10 17 18 0 8 -8 16 -17 18 -13
                    2 -18 -3 -18 -18z"></path>
                    <path d="M7320 550 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                    -10 -4 -10 -10z"></path>
                    <path d="M6190 530 c0 -5 9 -10 21 -10 11 0 17 5 14 10 -3 6 -13 10 -21 10 -8
                    0 -14 -4 -14 -10z"></path>
                    <path d="M7005 529 c-11 -17 1 -21 15 -4 8 9 8 15 2 15 -6 0 -14 -5 -17 -11z"></path>
                    <path d="M6757 513 c-12 -11 -8 -23 8 -23 8 0 15 7 15 15 0 16 -12 20 -23 8z"></path>
                    <path d="M3367 5813 c-18 -17 -5 -33 26 -33 25 0 44 -12 89 -55 89 -85 118
                    -146 159 -328 29 -130 48 -269 49 -357 0 -84 8 -123 22 -114 18 11 -16 454
                    -43 554 -21 78 -73 183 -116 235 -59 70 -161 124 -186 98z"></path>
                    <path d="M3333 5734 c-8 -21 4 -169 23 -285 35 -218 46 -325 50 -508 6 -266
                    23 -329 124 -450 58 -70 209 -191 238 -191 15 0 24 12 36 47 18 53 16 59 -12
                    44 -39 -21 -82 -13 -133 25 -94 68 -175 181 -197 274 -6 25 -13 135 -16 245
                    -3 130 -12 247 -26 335 -27 171 -46 315 -55 408 -7 69 -19 90 -32 56z"></path>
                    <path d="M10130 5770 c-64 -35 -132 -104 -165 -170 -51 -100 -85 -305 -84
                    -505 1 -170 14 -205 23 -60 22 348 35 425 96 546 29 57 78 108 143 148 31 19
                    48 23 93 19 30 -3 54 -2 54 2 0 9 -75 50 -91 50 -8 0 -39 -14 -69 -30z"></path>
                    <path d="M10182 5338 c-7 -95 -14 -256 -17 -357 -6 -191 -21 -298 -56 -378
                    -22 -52 -110 -158 -152 -184 -26 -15 -33 -16 -64 -3 -27 12 -42 13 -69 4 -42
                    -14 -94 -62 -94 -87 0 -17 47 -73 61 -73 3 0 5 23 4 51 0 60 20 83 55 61 11
                    -6 33 -12 49 -12 42 0 141 77 176 136 16 27 41 66 56 87 49 67 60 129 69 386
                    12 302 12 541 2 541 -5 0 -14 -78 -20 -172z"></path>
                    <path d="M7850 640 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
                    -4 -4 -4 -10z"></path>
                    </g>
                    </svg>
                    <div class="bread-pro-heading">
                        <h4>Why Is My Beard Lacklustre?</h4>
                        <p class="pro_desc text-center">A lacklustre beard can the result of a number of things, including genetics, poor nutrition, inadequate grooming, stress, and other factors. Swing the odds in your favour, with help from the men’s health experts at Agent.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 ps-lg-4">
                <div class="bread-pro-box">
                <?xml version="1.0" standalone="no"?>
                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="2871.000000pt" height="2298.000000pt" viewBox="0 0 2871.000000 2298.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,2298.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M11230 22314 c-80 -5 -280 -34 -316 -45 -17 -5 -47 -9 -67 -9 -20 0
                -37 -4 -37 -10 0 -5 -25 -10 -55 -10 -30 0 -55 -4 -55 -10 0 -5 -12 -10 -27
                -10 -16 0 -59 -12 -98 -25 -38 -14 -78 -25 -87 -25 -10 0 -18 -4 -18 -10 0 -5
                -13 -10 -30 -10 -16 0 -30 -4 -30 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4 -25
                -9 0 -5 -13 -12 -30 -16 -16 -4 -32 -11 -35 -16 -4 -5 -15 -9 -26 -9 -10 0
                -19 -4 -19 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -7 -10 -16 -10
                -8 0 -22 -6 -29 -12 -33 -30 -45 -38 -55 -38 -5 0 -10 -4 -10 -10 0 -5 -7 -10
                -16 -10 -9 0 -40 -25 -69 -55 -30 -30 -58 -55 -63 -55 -10 0 -52 -43 -52 -54
                0 -4 -25 -31 -55 -61 -30 -29 -55 -60 -55 -69 0 -9 -4 -16 -10 -16 -5 0 -10
                -5 -10 -11 0 -6 -6 -17 -12 -24 -32 -35 -38 -45 -38 -60 0 -8 -4 -15 -10 -15
                -5 0 -10 -7 -10 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -8
                -20 -5 0 -17 -16 -28 -35 -10 -19 -22 -35 -26 -35 -5 0 -8 -9 -8 -20 0 -11 -4
                -20 -10 -20 -5 0 -10 -7 -10 -15 0 -8 -4 -15 -8 -15 -5 0 -17 -18 -28 -40 -10
                -22 -22 -40 -26 -40 -5 0 -8 -7 -8 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -9 -10
                -20 0 -11 -4 -20 -8 -20 -5 0 -17 -16 -28 -35 -10 -19 -22 -35 -26 -35 -5 0
                -8 -9 -8 -20 0 -12 -11 -32 -25 -46 -14 -14 -25 -31 -25 -39 0 -8 -4 -15 -10
                -15 -5 0 -10 -8 -10 -18 0 -10 -9 -24 -20 -32 -11 -8 -20 -22 -20 -30 0 -9 -8
                -25 -18 -36 -10 -10 -27 -34 -37 -51 -11 -18 -23 -33 -27 -33 -4 0 -8 -7 -8
                -15 0 -9 -11 -28 -25 -43 -14 -15 -25 -30 -25 -35 0 -4 -10 -18 -22 -31 -13
                -12 -32 -35 -43 -50 -11 -16 -30 -39 -42 -52 -13 -13 -23 -26 -23 -29 0 -8
                -27 -35 -35 -35 -8 0 -55 -47 -55 -55 0 -8 -27 -35 -35 -35 -3 0 -21 -15 -40
                -32 -44 -43 -63 -58 -70 -58 -3 0 -17 -11 -31 -25 -14 -14 -29 -25 -33 -25 -4
                0 -22 -13 -39 -30 -18 -16 -39 -30 -47 -30 -8 0 -15 -4 -15 -10 0 -5 -5 -10
                -11 -10 -6 0 -17 -6 -24 -12 -32 -29 -45 -38 -52 -38 -5 0 -15 -9 -23 -20 -8
                -11 -20 -20 -26 -20 -7 0 -33 -20 -57 -45 -25 -25 -49 -45 -54 -45 -11 0 -93
                -79 -118 -114 -11 -15 -35 -44 -52 -64 -18 -20 -33 -39 -33 -43 0 -5 -11 -19
                -25 -33 -14 -14 -25 -34 -25 -46 0 -11 -4 -20 -10 -20 -5 0 -10 -9 -10 -19 0
                -11 -3 -21 -7 -23 -16 -6 -63 -119 -63 -148 0 -17 -4 -30 -10 -30 -5 0 -10
                -20 -10 -44 0 -25 -4 -48 -10 -51 -6 -4 -10 -75 -10 -181 0 -109 4 -174 10
                -174 6 0 10 -25 10 -55 0 -30 5 -55 10 -55 6 0 10 -20 10 -45 0 -25 5 -45 10
                -45 6 0 10 -13 10 -28 0 -16 6 -51 14 -78 21 -73 24 -144 6 -144 -12 0 -60
                -45 -60 -55 0 -8 -27 -35 -35 -35 -8 0 -35 -27 -35 -35 0 -3 -36 -42 -80 -86
                -44 -44 -80 -87 -80 -95 0 -19 31 -74 42 -74 4 0 8 -5 8 -10 0 -13 45 -60 57
                -60 5 0 15 -9 23 -20 8 -11 22 -20 30 -20 9 0 40 -11 68 -25 29 -14 65 -25 82
                -25 16 0 30 -4 30 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 11 -10 24
                -10 30 0 86 -31 86 -47 0 -7 -34 -47 -75 -88 -41 -42 -75 -80 -75 -85 0 -5
                -11 -20 -25 -34 -14 -14 -25 -28 -25 -31 0 -4 -6 -13 -12 -20 -28 -31 -35 -41
                -48 -72 -8 -18 -18 -33 -22 -33 -5 0 -8 -9 -8 -20 0 -11 -4 -20 -10 -20 -5 0
                -10 -6 -10 -14 0 -7 -7 -19 -15 -26 -8 -7 -15 -21 -15 -31 0 -11 -4 -19 -10
                -19 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -9 -10 -20 0 -11 -4
                -20 -10 -20 -5 0 -10 -11 -10 -24 0 -13 -6 -37 -14 -53 -20 -41 -36 -96 -36
                -126 0 -15 -4 -27 -10 -27 -5 0 -10 -20 -10 -45 0 -25 -4 -45 -9 -45 -5 0 -11
                -21 -14 -47 -3 -27 -13 -79 -22 -118 -9 -38 -19 -94 -22 -122 -3 -29 -9 -53
                -14 -53 -5 0 -9 -34 -9 -75 0 -43 -4 -75 -10 -75 -6 0 -10 -40 -10 -100 0 -55
                -4 -100 -8 -100 -5 0 -12 -71 -16 -157 -3 -87 -11 -219 -16 -293 -12 -180 -12
                -898 0 -1080 6 -80 15 -197 21 -260 6 -63 13 -154 16 -202 2 -49 9 -88 14 -88
                5 0 9 -36 9 -80 0 -44 4 -80 9 -80 5 0 12 -28 14 -62 8 -89 31 -225 40 -234 4
                -4 7 -29 7 -56 0 -26 5 -48 10 -48 6 0 10 -27 10 -60 0 -33 4 -60 10 -60 6 0
                10 -12 10 -27 0 -15 4 -40 9 -57 16 -53 41 -170 41 -188 0 -10 -7 -18 -15 -18
                -8 0 -15 5 -15 10 0 6 -20 10 -45 10 -25 0 -45 4 -45 9 0 5 -17 11 -37 14 -21
                3 -63 11 -93 17 -64 14 -205 9 -222 -8 -7 -7 -20 -12 -30 -12 -10 0 -18 -4
                -18 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -8 0 -5 -11 -15 -25 -22 -14 -7
                -25 -17 -25 -22 0 -4 -16 -25 -35 -45 -19 -20 -35 -43 -35 -50 0 -7 -4 -13
                -10 -13 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -11 -10 -25 0 -14
                -3 -25 -8 -25 -9 0 -32 -63 -39 -108 -3 -18 -9 -35 -14 -38 -20 -12 5 -871 27
                -906 6 -9 23 -138 31 -230 3 -32 9 -58 14 -58 5 0 9 -23 9 -52 0 -28 4 -65 9
                -82 18 -61 41 -242 41 -323 0 -53 4 -83 11 -83 7 0 9 -25 4 -77 -13 -163 -16
                -393 -5 -393 6 0 10 -26 10 -65 0 -37 4 -65 10 -65 6 0 10 -16 10 -35 0 -19 4
                -43 9 -53 5 -9 17 -45 27 -79 11 -35 22 -63 26 -63 5 0 8 -11 8 -25 0 -14 5
                -25 10 -25 6 0 10 -13 10 -29 0 -16 3 -31 8 -33 9 -4 62 -110 62 -126 0 -6 5
                -12 10 -12 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -6 10 -14 0 -7 7 -19
                15 -26 8 -7 15 -21 15 -31 0 -11 5 -19 10 -19 6 0 10 -9 10 -20 0 -11 5 -20
                10 -20 6 0 10 -11 10 -25 0 -14 3 -25 8 -25 4 0 15 -20 25 -45 11 -25 23 -45
                28 -45 5 0 9 -11 9 -25 0 -14 5 -25 10 -25 6 0 10 -11 10 -25 0 -14 3 -25 8
                -25 4 0 12 -15 18 -32 26 -77 50 -133 57 -136 4 -2 7 -19 7 -38 0 -19 5 -34
                10 -34 6 0 10 -13 10 -29 0 -17 4 -32 9 -35 5 -4 12 -24 16 -46 4 -22 11 -42
                16 -46 5 -3 9 -21 9 -40 0 -19 5 -34 10 -34 6 0 10 -22 10 -50 0 -27 5 -50 10
                -50 6 0 10 -12 10 -27 0 -28 4 -42 45 -164 14 -41 25 -83 25 -92 0 -9 5 -17
                10 -17 6 0 10 -9 10 -19 0 -11 16 -50 35 -88 19 -37 35 -71 35 -76 0 -4 14
                -21 30 -39 17 -17 30 -35 30 -40 0 -12 91 -98 105 -98 6 0 17 -9 25 -20 8 -11
                19 -20 25 -20 5 0 32 -11 60 -24 72 -35 115 -46 173 -46 29 0 52 -4 52 -10 0
                -6 28 -10 65 -10 37 0 65 -4 65 -10 0 -5 9 -10 20 -10 17 0 20 -7 20 -40 0
                -22 -4 -40 -10 -40 -6 0 -10 -55 -10 -145 0 -90 -4 -145 -10 -145 -5 0 -10 -7
                -10 -15 0 -8 5 -15 10 -15 6 0 10 -6 10 -12 0 -7 16 -23 35 -36 29 -18 35 -28
                35 -57 0 -19 -4 -35 -9 -35 -5 0 -12 -11 -15 -25 -4 -14 -11 -25 -16 -25 -6 0
                -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -20 -10 -45 0 -25 -4 -45 -10
                -45 -6 0 -10 -56 -10 -149 0 -168 -3 -161 81 -161 48 0 49 -1 49 -30 0 -16 -4
                -30 -10 -30 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -11 -10 -25
                0 -14 -4 -25 -10 -25 -5 0 -10 -8 -10 -17 0 -10 -7 -31 -15 -47 -8 -15 -15
                -37 -15 -47 0 -11 -4 -19 -10 -19 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35
                -5 0 -10 -9 -10 -20 0 -17 -18 -66 -41 -112 -5 -10 -9 -43 -9 -74 0 -50 3 -58
                35 -88 31 -30 35 -39 35 -85 0 -28 -4 -51 -10 -51 -5 0 -10 -13 -10 -29 0 -17
                -4 -32 -9 -35 -5 -3 -12 -30 -16 -61 -3 -30 -11 -57 -16 -60 -5 -4 -9 -22 -9
                -41 0 -19 -4 -34 -10 -34 -5 0 -10 -20 -10 -45 0 -25 -4 -45 -9 -45 -11 0 -20
                -87 -27 -258 l-5 -123 30 -28 c29 -27 31 -34 31 -100 0 -65 21 -140 43 -149 4
                -2 7 -12 7 -23 0 -10 5 -19 10 -19 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0
                10 -9 10 -19 0 -11 5 -21 11 -23 5 -2 13 -38 16 -81 3 -42 10 -77 14 -77 5 0
                9 -9 9 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0 10
                -8 10 -18 0 -10 3 -22 7 -26 11 -11 43 -99 43 -118 0 -10 5 -18 10 -18 6 0 10
                -16 10 -35 0 -19 5 -35 10 -35 6 0 10 -18 10 -40 0 -22 5 -40 10 -40 6 0 10
                -13 10 -29 0 -16 7 -45 15 -64 8 -20 15 -48 15 -62 0 -14 5 -25 10 -25 6 0 10
                -16 10 -35 0 -19 5 -35 10 -35 6 0 10 -12 10 -27 0 -16 11 -59 25 -98 13 -38
                25 -87 25 -107 0 -21 5 -38 10 -38 6 0 10 -6 10 -14 0 -7 15 -20 33 -27 39
                -16 57 -33 57 -53 0 -9 3 -16 8 -16 4 0 13 -15 21 -32 8 -18 17 -35 20 -38 14
                -12 41 -60 41 -75 0 -8 4 -15 8 -15 4 0 16 -20 26 -45 11 -25 23 -45 28 -45 4
                0 8 -11 8 -24 0 -14 5 -28 10 -31 6 -3 10 -22 10 -41 0 -19 5 -34 10 -34 6 0
                10 -11 10 -25 0 -14 5 -25 10 -25 6 0 10 -6 10 -13 0 -7 11 -24 25 -39 14 -15
                25 -33 25 -40 0 -8 9 -20 20 -28 11 -8 20 -18 20 -23 0 -8 12 -24 47 -62 13
                -13 23 -27 23 -30 0 -7 14 -24 48 -60 12 -13 22 -27 22 -30 0 -10 49 -55 60
                -55 5 0 10 -4 10 -8 0 -4 15 -24 33 -44 17 -20 41 -49 52 -64 11 -15 30 -38
                43 -50 12 -13 22 -26 22 -28 0 -7 34 -48 68 -82 12 -13 22 -26 22 -29 0 -7 14
                -24 48 -60 12 -13 22 -27 22 -30 0 -7 14 -24 48 -60 12 -13 22 -28 22 -32 0
                -5 9 -15 20 -23 11 -8 20 -20 20 -27 0 -18 77 -93 95 -93 8 0 15 -4 15 -10 0
                -5 5 -10 10 -10 6 0 16 -5 23 -10 56 -47 74 -60 85 -60 6 0 12 -4 12 -10 0 -5
                4 -10 10 -10 12 0 110 -98 110 -111 0 -5 20 -29 45 -53 25 -25 45 -48 45 -51
                0 -8 47 -55 55 -55 8 0 35 -27 35 -35 0 -8 47 -55 55 -55 8 0 35 -27 35 -35 0
                -7 137 -145 145 -145 3 0 16 -10 29 -23 34 -33 75 -67 82 -67 2 0 16 -11 30
                -25 14 -14 28 -25 33 -25 4 0 23 -15 43 -33 19 -17 47 -41 62 -52 15 -11 100
                -92 188 -179 l159 -159 65 2 c38 1 64 -2 64 -9 0 -5 7 -10 15 -10 7 0 46 -32
                85 -70 39 -39 78 -70 85 -70 8 0 15 -4 15 -10 0 -5 9 -10 20 -10 11 0 20 -4
                20 -10 0 -5 5 -10 10 -10 10 0 22 -8 55 -37 7 -7 21 -13 29 -13 9 0 16 -4 16
                -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -9 0
                -5 11 -12 25 -15 14 -4 25 -11 25 -16 0 -6 7 -10 15 -10 8 0 15 -4 15 -10 0
                -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 9 -10 20 -10 11 0 20 -3 20 -8 0 -4
                16 -16 35 -26 19 -11 35 -23 35 -28 0 -4 11 -8 25 -8 14 0 25 -4 25 -10 0 -5
                9 -10 20 -10 11 0 20 -4 20 -9 0 -5 20 -17 45 -28 25 -10 45 -21 45 -25 0 -5
                14 -8 30 -8 17 0 30 -4 30 -10 0 -5 11 -10 25 -10 14 0 25 -3 25 -7 0 -5 29
                -17 65 -28 36 -10 65 -23 65 -27 0 -4 16 -8 35 -8 19 0 35 -4 35 -10 0 -5 12
                -10 26 -10 30 0 127 -31 132 -42 2 -5 19 -8 38 -8 19 0 34 -4 34 -10 0 -5 20
                -10 45 -10 25 0 45 -4 45 -9 0 -18 266 -39 283 -22 6 6 30 11 54 11 24 0 43 5
                43 10 0 6 80 10 220 10 140 0 220 4 220 10 0 6 14 10 30 10 22 0 40 10 64 35
                32 33 66 46 66 26 0 -11 62 -18 237 -29 80 -5 138 -13 145 -20 7 -7 31 -12 55
                -12 24 0 43 -4 43 -10 0 -6 37 -10 90 -10 53 0 90 -4 90 -10 0 -6 35 -10 84
                -10 47 0 88 -4 91 -10 3 -5 18 -10 33 -10 15 0 37 -6 48 -14 48 -34 223 -29
                354 10 30 9 70 19 88 21 17 3 32 9 32 14 0 5 16 9 35 9 19 0 35 5 35 10 0 6
                13 10 28 10 15 0 32 4 38 8 5 5 37 17 72 28 34 10 62 22 62 26 0 5 16 8 35 8
                19 0 35 5 35 10 0 6 12 10 28 10 15 0 36 7 46 15 11 8 30 15 43 15 13 0 23 5
                23 10 0 6 9 10 20 10 11 0 20 5 20 10 0 6 14 10 30 10 17 0 30 4 30 8 0 4 23
                16 50 27 28 11 50 23 50 27 0 4 14 8 30 8 17 0 30 5 30 10 0 6 23 10 50 10 28
                0 50 5 50 10 0 6 14 10 30 10 17 0 30 4 30 10 0 5 11 12 25 16 14 3 25 10 25
                15 0 5 9 9 20 9 11 0 20 5 20 10 0 6 7 10 15 10 8 0 15 5 15 10 0 6 7 10 16
                10 8 0 22 6 29 13 33 29 45 37 55 37 5 0 10 5 10 10 0 6 9 10 20 10 11 0 20 3
                20 8 0 4 15 14 33 21 17 8 37 20 44 25 35 31 44 36 63 36 11 0 20 4 20 8 0 5
                16 17 35 28 19 10 35 21 35 25 0 4 14 12 30 19 17 7 30 16 30 21 0 5 5 9 11 9
                6 0 17 6 24 13 35 31 45 37 60 37 8 0 15 5 15 10 0 6 7 10 15 10 8 0 15 5 15
                10 0 6 9 10 20 10 11 0 20 5 20 10 0 6 4 10 10 10 15 0 125 53 128 62 2 4 10
                8 18 8 7 0 79 65 158 145 80 80 149 145 153 145 5 0 26 16 46 35 20 19 39 35
                42 35 7 0 27 16 70 58 19 17 37 32 40 32 8 0 35 27 35 35 0 7 47 55 54 55 10
                0 166 160 166 170 0 6 5 10 10 10 11 0 60 45 60 55 0 8 47 55 55 55 8 0 35 27
                35 35 0 10 69 75 80 75 5 0 10 5 10 11 0 11 25 39 35 39 3 0 16 10 29 23 13
                12 36 31 51 42 38 27 85 71 85 80 0 8 27 35 35 35 10 0 35 28 35 39 0 6 5 11
                10 11 6 0 10 7 10 15 0 8 5 15 10 15 6 0 10 7 10 15 0 8 7 15 15 15 8 0 15 7
                15 15 0 8 5 15 10 15 6 0 10 7 10 15 0 8 5 15 10 15 6 0 10 7 10 15 0 8 3 15
                8 15 4 0 16 16 26 35 11 19 23 35 28 35 4 0 8 9 8 20 0 11 5 20 10 20 6 0 10
                7 10 15 0 8 3 15 8 15 4 0 16 18 26 40 11 22 23 40 28 40 4 0 8 7 8 15 0 8 5
                15 10 15 6 0 10 10 10 23 0 24 37 67 58 67 7 0 12 5 12 10 0 6 9 10 20 10 11
                0 20 4 20 8 0 5 11 15 25 22 14 7 25 19 25 27 0 7 5 13 10 13 6 0 10 9 10 20
                0 11 4 20 8 20 5 0 17 16 28 35 10 19 22 35 26 35 5 0 8 9 8 20 0 11 5 20 10
                20 6 0 10 5 10 10 0 6 10 22 23 35 37 40 47 54 47 65 0 5 5 10 10 10 6 0 10 9
                10 20 0 11 5 20 10 20 6 0 10 6 10 14 0 18 32 76 43 76 4 0 7 9 7 20 0 11 5
                20 10 20 6 0 10 9 10 20 0 12 9 30 20 42 10 11 22 34 25 49 4 16 11 29 16 29
                5 0 9 11 9 25 0 14 5 25 10 25 6 0 10 9 10 20 0 11 5 20 10 20 6 0 10 4 10 10
                0 5 16 34 35 64 19 30 35 62 35 71 0 8 5 15 10 15 6 0 10 9 10 19 0 11 3 21 8
                23 13 6 62 113 62 136 0 12 5 22 10 22 6 0 10 11 10 25 0 14 5 25 10 25 6 0
                10 13 10 29 0 16 4 31 10 33 12 4 30 82 37 156 3 28 9 52 14 52 5 0 9 27 9 59
                0 33 5 63 10 66 6 3 10 18 10 33 0 15 7 36 15 46 8 11 15 28 15 38 0 10 5 18
                10 18 6 0 10 7 10 15 0 8 5 15 10 15 6 0 10 9 10 20 0 11 3 20 8 20 4 0 16 29
                27 65 10 36 23 65 27 65 4 0 8 16 8 35 0 19 5 35 10 35 6 0 10 19 10 43 0 24
                4 47 9 52 5 6 11 28 14 50 3 22 12 67 22 100 9 33 19 72 22 87 3 16 9 28 14
                28 5 0 9 16 9 35 0 19 5 35 10 35 6 0 10 9 10 19 0 11 3 21 8 23 4 2 14 19 23
                38 24 54 23 221 -1 370 -12 69 -23 142 -26 163 -4 20 -10 37 -15 37 -5 0 -9
                15 -9 34 0 19 -5 36 -11 38 -17 6 -17 180 -1 186 7 2 12 23 12 53 0 27 5 49
                10 49 6 0 10 28 10 65 0 37 -4 65 -10 65 -5 0 -10 20 -10 45 0 25 -4 45 -10
                45 -5 0 -10 11 -10 24 0 13 -7 29 -15 36 -8 7 -15 18 -15 25 0 18 -42 95 -52
                95 -4 0 -8 5 -8 11 0 5 -11 27 -25 47 -25 37 -34 102 -15 102 10 0 20 8 85 68
                13 12 29 22 36 22 14 0 8 46 -21 160 -20 80 -21 104 -18 390 2 168 1 334 -1
                370 l-5 65 37 3 c20 2 37 7 37 13 0 5 20 9 45 9 25 0 45 5 45 10 0 6 12 10 28
                10 28 0 82 17 119 38 12 7 29 12 37 12 9 0 16 5 16 10 0 6 7 10 15 10 8 0 15
                5 15 10 0 6 9 10 20 10 11 0 20 4 20 8 0 4 13 15 28 24 43 26 152 135 152 153
                0 8 4 15 8 15 5 0 17 16 28 35 10 19 22 35 26 35 5 0 8 9 8 20 0 11 5 20 10
                20 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 14 10 30 0 17 5 30 10 30 6 0 10
                10 10 23 0 13 7 32 15 43 8 10 15 31 15 47 0 15 5 27 10 27 6 0 10 16 10 35 0
                19 5 35 10 35 6 0 10 20 10 45 0 25 5 45 10 45 6 0 10 10 10 23 0 24 32 122
                43 134 4 3 7 19 7 35 0 15 5 28 10 28 6 0 10 9 10 20 0 11 11 45 25 76 14 31
                25 63 25 70 0 8 5 14 10 14 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 9 10 20 0
                11 5 20 10 20 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 8 10 19 0 10 7 24 15
                31 8 7 15 19 15 26 0 8 5 14 10 14 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 9
                10 20 0 11 4 20 9 20 5 0 17 20 28 45 10 25 21 45 26 45 4 0 7 9 7 20 0 11 5
                20 10 20 6 0 10 7 10 15 0 8 4 15 8 15 5 0 17 18 27 40 10 22 22 40 27 40 4 0
                8 9 8 19 0 11 3 21 8 23 9 4 51 76 59 101 3 9 9 17 14 17 5 0 9 11 9 25 0 14
                4 25 8 25 4 0 17 29 27 65 11 36 23 65 28 65 4 0 7 14 7 30 0 17 5 30 10 30 6
                0 10 18 10 40 0 22 5 40 10 40 6 0 10 20 10 45 0 25 5 45 10 45 6 0 10 20 10
                44 0 25 5 57 11 73 9 24 17 166 36 606 2 59 8 107 13 107 5 0 11 37 13 83 6
                90 21 193 37 247 5 19 10 49 10 67 0 17 5 35 10 38 6 3 10 28 10 56 0 27 5 49
                10 49 6 0 10 28 10 65 0 36 4 65 9 65 5 0 11 21 13 48 3 26 10 81 17 122 7 41
                17 104 23 140 15 91 -3 306 -30 373 -7 16 -12 39 -12 53 0 13 -4 24 -10 24 -5
                0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 7 -10 17 0 20 -47 103 -72 124
                -10 9 -18 19 -18 23 0 8 -47 56 -55 56 -3 0 -22 16 -42 35 -20 19 -43 35 -50
                35 -7 0 -13 5 -13 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -52 10 -135
                10 -83 0 -135 -4 -135 -10 0 -5 -13 -10 -30 -10 -16 0 -30 -4 -30 -10 0 -5
                -16 -10 -35 -10 -19 0 -35 -4 -35 -9 0 -5 -13 -12 -30 -16 -16 -4 -32 -11 -35
                -16 -4 -5 -15 -9 -26 -9 -17 0 -19 7 -19 70 0 40 4 70 10 70 6 0 10 25 10 55
                0 30 5 55 10 55 6 0 10 15 10 33 0 17 6 61 14 97 30 131 36 189 36 333 0 91 4
                147 10 147 7 0 10 218 10 635 0 417 -3 635 -10 635 -6 0 -10 44 -10 112 0 61
                -4 137 -10 167 -9 53 -26 209 -37 331 -3 30 -9 59 -14 65 -5 5 -9 42 -9 82 0
                40 -4 73 -9 73 -5 0 -12 28 -14 63 -7 88 -26 207 -37 241 -6 16 -10 51 -10 77
                0 27 -4 49 -10 49 -5 0 -10 25 -10 55 0 30 -4 55 -9 55 -5 0 -12 28 -14 63 -7
                78 -23 182 -37 227 -5 19 -10 52 -10 72 0 20 -4 40 -10 43 -5 3 -10 35 -10 71
                0 36 -4 64 -10 64 -6 0 -10 26 -10 59 0 33 -4 63 -10 66 -5 3 -10 21 -10 39 0
                18 -7 55 -15 82 -8 27 -15 64 -15 82 0 17 -4 32 -10 32 -5 0 -10 25 -10 55 0
                30 -4 55 -9 55 -5 0 -11 17 -14 38 -2 20 -16 80 -31 132 -16 52 -30 112 -33
                133 -3 20 -9 37 -14 37 -5 0 -9 16 -9 35 0 19 -4 35 -10 35 -5 0 -10 11 -10
                25 0 14 -4 33 -9 43 -23 46 -41 95 -41 112 0 11 -4 20 -10 20 -5 0 -10 15 -10
                34 0 19 -3 36 -7 38 -7 3 -31 59 -57 136 -6 17 -14 32 -18 32 -5 0 -8 11 -8
                25 0 14 -4 25 -10 25 -5 0 -10 9 -10 19 0 11 -11 41 -25 67 -14 26 -25 53 -25
                60 0 8 -4 14 -10 14 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 7 -10 16
                0 8 -7 22 -15 30 -8 9 -15 24 -15 35 0 10 -4 19 -10 19 -5 0 -10 11 -10 25 0
                14 -4 25 -10 25 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 7 -10 15 0 8
                -4 15 -9 15 -5 0 -17 20 -28 45 -10 25 -21 45 -25 45 -5 0 -8 9 -8 20 0 11 -3
                20 -8 20 -4 0 -14 15 -21 33 -8 17 -20 37 -25 44 -30 34 -36 43 -36 53 0 5 -4
                10 -9 10 -5 0 -12 8 -15 18 -4 10 -20 34 -36 52 -17 19 -30 39 -30 45 0 6 -9
                17 -20 25 -11 8 -20 18 -20 23 0 8 -12 24 -47 62 -13 13 -23 27 -23 30 0 7
                -14 24 -47 60 -13 13 -23 27 -23 30 0 4 -6 12 -12 20 -7 7 -22 25 -33 41 -11
                15 -50 59 -87 98 -38 38 -68 73 -68 76 0 10 -181 191 -226 225 -21 16 -87 78
                -146 137 -59 60 -110 108 -113 108 -8 0 -29 18 -106 93 -39 37 -73 67 -75 67
                -3 0 -16 10 -29 23 -62 56 -75 67 -80 67 -3 0 -16 10 -29 23 -34 33 -75 67
                -82 67 -2 0 -16 11 -30 25 -14 14 -29 25 -33 25 -4 0 -22 14 -39 30 -18 17
                -39 30 -47 30 -8 0 -15 5 -15 10 0 6 -5 10 -10 10 -6 0 -22 10 -35 23 -40 37
                -54 47 -65 47 -5 0 -10 5 -10 10 0 6 -7 10 -15 10 -9 0 -28 11 -43 25 -15 14
                -32 25 -39 25 -7 0 -13 5 -13 10 0 6 -7 10 -15 10 -8 0 -15 3 -15 8 0 4 -18
                16 -40 26 -22 11 -40 23 -40 28 0 4 -7 8 -15 8 -8 0 -15 5 -15 10 0 6 -9 10
                -20 10 -11 0 -20 5 -20 10 0 6 -5 10 -10 10 -12 0 -94 52 -98 63 -2 4 -15 7
                -28 7 -13 0 -24 5 -24 10 0 6 -9 10 -20 10 -11 0 -20 4 -20 10 0 5 -11 12 -25
                16 -14 3 -25 10 -25 15 0 5 -9 9 -20 9 -11 0 -20 5 -20 10 0 6 -9 10 -20 10
                -11 0 -20 5 -20 10 0 6 -11 10 -25 10 -14 0 -25 3 -25 8 0 4 -20 16 -45 27
                -25 11 -45 23 -45 27 0 5 -11 8 -25 8 -14 0 -25 5 -25 10 0 6 -13 10 -30 10
                -16 0 -30 5 -30 10 0 6 -5 10 -10 10 -6 0 -33 11 -62 25 -28 14 -60 25 -70 25
                -10 0 -18 5 -18 10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -7 10 -15 10 -8
                0 -38 11 -67 25 -28 14 -60 25 -70 25 -10 0 -18 5 -18 10 0 6 -8 10 -17 10
                -23 0 -110 32 -165 61 -10 5 -29 9 -43 9 -14 0 -25 5 -25 10 0 6 -16 10 -35
                10 -19 0 -35 4 -35 8 0 4 -29 17 -65 27 -36 11 -65 23 -65 28 0 4 -16 7 -35 7
                -19 0 -35 5 -35 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -13 10 -29 10
                -17 0 -32 4 -35 9 -4 5 -24 12 -46 16 -22 4 -42 11 -46 16 -3 5 -21 9 -40 9
                -19 0 -34 5 -34 10 0 6 -18 10 -40 10 -22 0 -40 5 -40 10 0 6 -16 10 -35 10
                -19 0 -35 5 -35 10 0 6 -11 10 -25 10 -14 0 -42 7 -62 15 -19 8 -48 15 -64 15
                -16 0 -29 5 -29 10 0 6 -20 10 -45 10 -25 0 -45 4 -45 9 0 5 -21 11 -47 14
                -27 2 -75 12 -108 22 -33 9 -84 19 -112 22 -29 3 -53 9 -53 14 0 5 -25 9 -55
                9 -30 0 -55 4 -55 9 0 5 -26 11 -57 14 -32 3 -92 13 -133 22 -41 9 -105 19
                -142 22 -38 3 -68 9 -68 14 0 5 -36 9 -80 9 -44 0 -80 4 -80 9 0 5 -35 12 -77
                14 -98 6 -268 24 -355 37 -97 15 -328 12 -438 -5 -52 -8 -114 -15 -137 -15
                -24 0 -43 -4 -43 -10 0 -5 -25 -10 -55 -10 -30 0 -55 -4 -55 -10 0 -6 -63 -10
                -170 -10 -107 0 -170 4 -170 10 0 6 -18 10 -39 10 -22 0 -42 4 -45 9 -3 5 -22
                12 -41 15 -19 4 -35 11 -35 16 0 6 -9 10 -20 10 -11 0 -20 5 -20 10 0 6 -16
                10 -35 10 -19 0 -35 5 -35 10 0 6 -43 10 -110 10 -67 0 -110 -4 -110 -10 0 -5
                -16 -10 -35 -10 -19 0 -35 -4 -35 -8 0 -5 -22 -21 -49 -35 -43 -24 -60 -27
                -140 -27 -75 0 -100 4 -147 25 -31 14 -65 25 -75 25 -11 0 -19 5 -19 10 0 6
                -20 10 -45 10 -25 0 -45 5 -45 10 0 6 -17 10 -38 10 -21 0 -42 4 -48 9 -5 5
                -29 11 -54 14 -25 3 -67 10 -95 16 -51 11 -473 22 -575 15z m1150 -1074 c0
                -16 -3 -30 -8 -30 -4 0 -14 -15 -21 -32 -8 -18 -21 -39 -28 -46 -7 -7 -13 -20
                -13 -28 0 -8 -4 -14 -10 -14 -5 0 -10 -9 -10 -20 0 -11 -3 -20 -8 -20 -4 0
                -16 -20 -27 -45 -11 -25 -23 -45 -27 -45 -5 0 -8 -9 -8 -20 0 -11 -4 -20 -10
                -20 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -11 -10 -25 0 -14 -3
                -25 -8 -25 -8 0 -30 -59 -39 -102 -3 -16 -9 -28 -14 -28 -5 0 -9 -16 -9 -35 0
                -19 -4 -35 -10 -35 -5 0 -10 -16 -10 -35 0 -19 -3 -35 -8 -35 -7 0 -23 -65
                -44 -180 -5 -30 -12 -92 -15 -137 -2 -46 -9 -83 -14 -83 -5 0 -9 -55 -9 -125
                0 -116 1 -125 19 -125 10 0 24 7 31 15 7 8 18 15 24 15 6 0 18 9 26 20 8 11
                19 20 25 20 6 0 28 16 48 35 20 19 44 35 52 35 8 0 15 5 15 10 0 6 5 10 10 10
                6 0 22 10 35 23 36 33 53 47 60 47 3 0 11 5 18 10 57 48 74 60 87 60 9 0 22 9
                30 20 8 11 25 20 37 20 13 0 23 4 23 8 0 11 66 42 90 42 11 0 20 5 20 10 0 6
                28 10 65 10 36 0 65 -3 65 -7 0 -10 -100 -63 -118 -63 -6 0 -12 -4 -12 -10 0
                -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -6 -10 -14 -10 -7 0 -22 -11 -32
                -25 -10 -14 -27 -25 -36 -25 -10 0 -18 -4 -18 -10 0 -5 -5 -10 -11 -10 -14 0
                -39 -25 -39 -39 0 -6 -4 -11 -9 -11 -10 0 -171 -156 -171 -165 0 -3 -15 -21
                -32 -40 -45 -47 -58 -63 -58 -72 0 -5 -9 -15 -20 -23 -11 -8 -20 -22 -20 -31
                0 -9 -7 -22 -15 -29 -8 -7 -15 -19 -15 -26 0 -8 -4 -14 -10 -14 -5 0 -10 -16
                -10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -6 0
                -10 -50 -10 -130 0 -80 4 -130 10 -130 6 0 10 -25 10 -55 0 -30 4 -55 9 -55 5
                0 12 -37 14 -82 3 -46 9 -101 14 -123 17 -74 37 -135 45 -135 4 0 8 -16 8 -35
                0 -19 5 -35 10 -35 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0
                -14 4 -25 9 -25 5 0 12 -13 16 -30 4 -16 11 -32 16 -35 5 -4 9 -15 9 -26 0
                -10 5 -19 10 -19 6 0 10 -9 10 -20 0 -11 4 -20 9 -20 5 0 12 -11 15 -25 4 -14
                11 -25 16 -25 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -9 10 -20 0 -11 5
                -20 10 -20 6 0 10 -9 10 -20 0 -11 4 -20 8 -20 4 0 16 -15 27 -32 10 -18 27
                -40 37 -49 10 -9 18 -19 18 -23 0 -7 13 -24 48 -61 12 -13 22 -27 22 -30 0 -6
                18 -27 78 -90 17 -19 32 -39 32 -45 0 -5 4 -10 9 -10 5 0 27 -16 48 -35 68
                -63 82 -75 88 -75 3 0 17 -10 30 -22 38 -36 54 -48 62 -48 5 0 15 -9 23 -20 8
                -11 22 -20 32 -20 10 0 18 -5 18 -10 0 -6 16 -18 35 -27 19 -9 35 -20 35 -25
                0 -4 11 -8 25 -8 14 0 25 -4 25 -9 0 -5 20 -17 45 -28 25 -10 45 -21 45 -25 0
                -5 9 -8 20 -8 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -3 25 -8 0 -8 59
                -30 103 -39 15 -3 27 -9 27 -14 0 -5 16 -9 35 -9 19 0 35 -4 35 -10 0 -5 16
                -10 35 -10 19 0 35 -4 35 -9 0 -5 17 -11 38 -14 20 -2 62 -14 92 -26 30 -11
                61 -21 68 -21 13 0 42 -23 42 -34 0 -3 -40 -6 -90 -6 -53 0 -90 4 -90 10 0 6
                -28 10 -65 10 -37 0 -65 4 -65 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6
                -13 10 -30 10 -16 0 -44 6 -62 14 -55 23 -103 36 -131 36 -15 0 -27 5 -27 10
                0 6 -17 10 -38 10 -21 0 -42 4 -48 9 -10 10 -48 16 -231 34 -67 7 -125 15
                -129 20 -4 4 -20 7 -36 7 -15 0 -28 5 -28 10 0 6 -11 10 -25 10 -14 0 -25 5
                -25 10 0 6 -6 10 -12 10 -16 0 -122 53 -126 63 -2 4 -12 7 -22 7 -10 0 -20 3
                -22 8 -4 10 -86 62 -98 62 -5 0 -10 4 -10 8 0 4 -15 16 -32 27 -18 10 -45 31
                -60 47 -14 15 -29 28 -32 28 -18 0 -166 150 -166 167 0 5 -11 17 -25 27 -14
                10 -25 25 -25 32 0 8 -4 14 -10 14 -5 0 -10 7 -10 15 0 8 -4 15 -10 15 -5 0
                -10 5 -10 10 0 12 -52 94 -62 98 -5 2 -8 12 -8 23 0 10 -4 19 -10 19 -5 0 -10
                7 -10 15 0 8 -3 15 -8 15 -4 0 -12 9 -17 19 -6 11 -18 35 -29 55 -10 20 -22
                36 -27 36 -5 0 -9 9 -9 20 0 11 -4 20 -10 20 -5 0 -10 6 -10 13 0 8 -11 27
                -25 43 -14 16 -25 37 -25 47 0 9 -4 17 -10 17 -5 0 -10 9 -10 20 0 11 -4 20
                -10 20 -5 0 -10 7 -10 15 0 8 -3 15 -7 15 -11 0 -43 58 -43 76 0 8 -4 14 -10
                14 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 6 -10 14 0 7 -7 19 -15 26
                -8 7 -15 21 -15 31 0 11 -4 19 -10 19 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5
                0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 8 -10 18 0 9 -7 26 -15 36 -8 11
                -15 28 -15 38 0 10 -4 18 -10 18 -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0
                -10 16 -10 35 0 19 -4 35 -9 35 -5 0 -11 17 -14 38 -6 43 -24 123 -38 168 -12
                40 -12 488 0 528 10 32 28 124 38 189 3 20 9 37 14 37 5 0 9 16 9 35 0 19 5
                35 10 35 6 0 10 14 10 30 0 17 11 53 25 82 14 28 25 60 25 70 0 10 5 18 10 18
                6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 14 10 30 0 17 4 30 8 30 4 0 16 23 27
                50 11 28 23 50 27 50 4 0 8 12 8 26 0 15 10 35 23 46 31 28 78 51 85 42 4 -4
                1 -9 -5 -11 -7 -3 -13 -13 -13 -24 0 -10 -4 -19 -10 -19 -5 0 -10 -8 -10 -18
                0 -10 -11 -42 -25 -70 -14 -29 -25 -61 -25 -72 0 -11 -4 -20 -10 -20 -5 0 -10
                -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -13 -10 -29 0 -16 -3 -31 -7 -33
                -12 -5 -43 -102 -43 -132 0 -14 -4 -26 -10 -26 -5 0 -10 -25 -10 -55 0 -30 -4
                -55 -9 -55 -5 0 -11 -21 -14 -47 -2 -27 -14 -111 -26 -188 -26 -174 -26 -315
                0 -470 11 -66 23 -141 26 -167 3 -27 9 -48 14 -48 5 0 9 -16 9 -35 0 -19 5
                -35 10 -35 6 0 10 -8 10 -18 0 -10 11 -42 25 -70 14 -29 25 -61 25 -72 0 -11
                5 -20 10 -20 6 0 10 -9 10 -20 0 -11 3 -20 8 -20 4 0 15 -20 25 -45 11 -25 23
                -45 28 -45 5 0 9 -7 9 -15 0 -8 5 -15 10 -15 6 0 10 -9 10 -20 0 -11 5 -20 10
                -20 6 0 10 -9 10 -20 0 -11 4 -20 10 -20 5 0 12 -11 16 -25 3 -14 10 -25 15
                -25 5 0 9 -9 9 -20 0 -11 5 -20 10 -20 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6
                0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -6 10 -14 0 -18 32 -76 43 -76 4 0 7
                -9 7 -19 0 -11 3 -21 8 -23 4 -1 20 -29 36 -60 16 -32 32 -58 37 -58 5 0 9 -9
                9 -20 0 -11 5 -20 10 -20 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10
                -15 0 -8 4 -15 10 -15 5 0 12 -11 16 -25 3 -14 10 -25 15 -25 5 0 9 -8 9 -18
                0 -10 9 -24 20 -32 11 -8 20 -19 20 -26 0 -13 144 -164 156 -164 5 0 30 -20
                56 -45 27 -25 55 -45 63 -45 8 0 15 -4 15 -10 0 -5 5 -10 10 -10 10 0 22 -8
                55 -37 7 -7 21 -13 29 -13 9 0 16 -4 16 -10 0 -5 7 -10 15 -10 8 0 15 -4 15
                -10 0 -5 8 -10 18 -10 9 0 26 -7 36 -15 11 -8 28 -15 38 -15 10 0 18 -4 18
                -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 14 -10 30 -10 17 0 30 -4 30
                -10 0 -5 9 -10 20 -10 10 0 34 -6 52 -14 91 -39 160 -45 110 -10 -13 9 -34 27
                -47 40 -13 13 -28 24 -32 24 -4 0 -21 16 -38 35 -16 19 -33 35 -38 35 -4 0
                -32 25 -62 55 -29 30 -57 55 -60 55 -8 0 -35 27 -35 35 0 8 -47 55 -55 55 -8
                0 -35 27 -35 35 0 3 -20 26 -45 51 -25 24 -45 46 -45 49 0 3 -20 25 -45 49
                -25 25 -45 47 -45 50 0 3 -30 37 -67 76 -88 90 -113 118 -113 125 0 3 -25 30
                -55 60 -30 29 -55 57 -55 62 0 5 -36 46 -80 92 -44 45 -80 89 -80 96 0 7 -4
                15 -8 17 -15 6 -62 119 -62 148 0 17 -4 30 -10 30 -6 0 -10 37 -10 90 0 53 -4
                90 -10 90 -6 0 -10 48 -10 125 0 77 4 125 10 125 6 0 10 37 10 90 0 53 4 90
                10 90 6 0 10 19 10 43 0 43 26 169 41 199 5 10 9 36 9 58 0 22 5 40 10 40 6 0
                10 25 10 55 0 30 5 55 10 55 6 0 10 17 10 38 0 20 5 53 11 72 13 44 29 137 36
                213 2 31 8 57 13 57 4 0 10 21 13 48 7 62 16 100 33 139 8 17 14 43 14 57 0
                14 5 26 10 26 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 14 10 30 0 17 3 30 8
                30 4 0 15 20 25 45 11 25 23 45 28 45 5 0 9 11 9 25 0 14 5 25 10 25 6 0 10 9
                10 20 0 11 5 20 10 20 6 0 10 6 10 14 0 7 7 19 15 26 8 7 15 21 15 31 0 11 5
                19 10 19 6 0 10 7 10 15 0 8 5 15 10 15 6 0 10 9 10 20 0 11 4 20 9 20 5 0 12
                8 16 19 8 27 90 111 108 111 9 0 19 5 22 10 12 20 25 9 25 -20z m4200 -873 c0
                -8 -9 -24 -20 -37 -11 -12 -22 -31 -25 -41 -4 -11 -11 -19 -16 -19 -5 0 -9 -5
                -9 -11 0 -6 -6 -16 -12 -24 -7 -7 -22 -25 -33 -41 -36 -51 -233 -244 -249
                -244 -9 0 -16 -4 -16 -8 0 -5 -11 -15 -25 -22 -14 -7 -25 -19 -25 -27 0 -7 -9
                -13 -20 -13 -11 0 -20 -4 -20 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0
                -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -6 -10 -14 -10 -7 0 -19 -7 -26
                -15 -7 -8 -21 -15 -31 -15 -11 0 -19 -4 -19 -10 0 -5 -9 -10 -20 -10 -11 0
                -20 -4 -20 -10 0 -5 -11 -10 -24 -10 -13 0 -26 -3 -28 -7 -4 -11 -75 -43 -93
                -43 -8 0 -15 -4 -15 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4 -25 -10 0 -5 -15
                -10 -34 -10 -19 0 -36 -3 -38 -7 -4 -11 -101 -43 -127 -43 -11 0 -21 -4 -21
                -10 0 -5 -20 -10 -45 -10 -25 0 -45 -4 -45 -9 0 -5 -21 -11 -47 -14 -27 -3
                -91 -13 -143 -23 -73 -14 -145 -18 -313 -19 -167 0 -217 -3 -217 -12 0 -7 7
                -13 15 -13 8 0 15 -4 15 -10 0 -5 5 -10 11 -10 7 0 26 -16 45 -35 18 -19 36
                -35 41 -35 5 0 15 -9 23 -20 8 -11 21 -20 29 -20 7 0 24 -11 37 -25 13 -14 30
                -25 39 -25 8 0 15 -4 15 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 13
                -10 29 -10 16 0 42 -7 57 -15 16 -8 37 -15 47 -15 9 0 17 -4 17 -10 0 -5 11
                -10 25 -10 14 0 25 -4 25 -10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 11
                -10 25 -10 14 0 25 -4 25 -9 0 -5 16 -12 35 -15 19 -4 35 -11 35 -16 0 -6 11
                -10 25 -10 14 0 25 -4 25 -10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 16
                -10 35 -10 19 0 35 -4 35 -9 0 -5 18 -12 40 -16 22 -4 42 -11 46 -16 3 -5 21
                -9 40 -9 19 0 34 -4 34 -10 0 -5 18 -10 40 -10 22 0 40 -4 40 -9 0 -5 17 -11
                38 -14 58 -8 136 -28 146 -38 6 -5 27 -9 48 -9 21 0 38 -4 38 -10 0 -5 20 -10
                45 -10 25 0 45 -4 45 -10 0 -5 20 -10 45 -10 25 0 45 -4 45 -9 0 -5 17 -11 38
                -13 46 -6 131 -27 154 -39 10 -5 31 -9 48 -9 16 0 30 -4 30 -10 0 -5 16 -10
                35 -10 19 0 35 -5 35 -11 0 -7 -52 -9 -172 -5 -227 8 -328 16 -328 26 0 4 -26
                10 -57 13 -74 6 -113 15 -259 58 -17 5 -42 9 -57 9 -15 0 -27 5 -27 10 0 6
                -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -13 10 -29 10 -17 0 -32 4 -35 9 -4 5
                -24 12 -46 16 -22 4 -40 11 -40 16 0 5 -16 9 -35 9 -19 0 -35 5 -35 10 0 6
                -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -11 10 -24 10 -14 0 -28 5 -31 10 -6 10
                -45 14 -45 4 0 -7 27 -34 35 -34 3 0 26 -20 49 -45 24 -25 49 -45 56 -45 6 0
                31 -20 56 -45 24 -25 48 -45 54 -45 6 0 17 -6 24 -12 7 -7 25 -22 40 -33 16
                -11 34 -26 41 -32 8 -7 18 -13 24 -13 6 0 11 -4 11 -10 0 -5 7 -10 15 -10 9 0
                28 -11 43 -25 15 -14 32 -25 39 -25 7 0 13 -4 13 -10 0 -5 9 -10 20 -10 11 0
                20 -4 20 -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 9 -10 20 -10 11 0 20
                -3 20 -7 0 -11 58 -43 76 -43 8 0 14 -4 14 -10 0 -5 9 -10 19 -10 11 0 21 -3
                23 -7 6 -14 113 -63 136 -63 12 0 22 -4 22 -10 0 -5 9 -10 19 -10 11 0 23 -4
                26 -10 3 -5 15 -10 25 -10 10 0 20 -3 22 -7 4 -10 100 -43 122 -43 9 0 16 -4
                16 -10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 16 -10 35 -10 19 0 35 -4
                35 -9 0 -6 20 -13 45 -17 25 -3 45 -10 45 -15 0 -5 16 -9 35 -9 19 0 35 -4 35
                -10 0 -5 25 -10 55 -10 30 0 55 -4 55 -10 0 -5 20 -10 45 -10 51 0 61 -19 20
                -38 -30 -14 -245 -16 -245 -3 0 5 -20 12 -45 15 -25 4 -45 11 -45 17 0 5 -16
                9 -35 9 -19 0 -35 5 -35 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -10 10
                -22 10 -24 1 -124 33 -135 44 -3 3 -19 6 -35 6 -15 0 -28 5 -28 10 0 6 -16 10
                -35 10 -19 0 -35 5 -35 10 0 6 -13 10 -29 10 -17 0 -32 4 -35 9 -4 5 -24 12
                -46 16 -22 4 -42 11 -46 16 -3 5 -14 9 -25 9 -10 0 -19 5 -19 10 0 6 -9 10
                -20 10 -11 0 -20 5 -20 10 0 6 -5 10 -10 10 -6 0 -22 10 -35 23 -40 37 -54 47
                -65 47 -5 0 -10 4 -10 9 0 5 -9 12 -20 16 -11 3 -33 19 -49 36 -16 16 -34 29
                -40 29 -6 0 -25 14 -43 30 -17 17 -35 30 -39 30 -4 0 -19 10 -31 23 -13 13
                -38 30 -56 38 -17 7 -32 20 -32 26 0 7 -7 13 -15 13 -8 0 -15 5 -15 10 0 6 -7
                10 -15 10 -8 0 -32 16 -52 35 -20 19 -42 35 -48 35 -6 0 -17 9 -25 20 -8 11
                -20 20 -28 20 -7 0 -19 6 -26 13 -7 6 -25 21 -40 32 -16 11 -34 26 -41 33 -8
                6 -16 12 -20 12 -3 0 -17 10 -30 23 -38 35 -54 47 -62 47 -5 0 -15 9 -23 20
                -8 11 -21 20 -29 20 -7 0 -24 11 -37 25 -13 14 -29 25 -36 25 -8 0 -20 9 -28
                20 -8 11 -18 20 -23 20 -8 0 -24 12 -62 48 -13 12 -27 22 -30 22 -4 0 -12 6
                -20 13 -7 6 -25 21 -41 32 -15 11 -33 26 -40 33 -7 6 -17 12 -23 12 -6 0 -28
                16 -48 35 -20 19 -41 35 -46 35 -4 0 -18 10 -31 23 -12 12 -35 31 -50 42 -16
                11 -39 30 -52 43 -13 12 -26 22 -29 22 -3 0 -17 10 -30 23 -36 33 -53 47 -60
                47 -3 0 -26 20 -51 45 -24 25 -48 45 -54 45 -18 0 -220 211 -220 230 0 16 6
                17 43 13 23 -4 44 -10 45 -14 2 -5 15 -9 28 -9 13 0 24 -4 24 -10 0 -5 9 -10
                20 -10 11 0 20 -4 20 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -9 0 -5 26 -21 58
                -37 31 -16 59 -32 60 -36 2 -5 12 -8 23 -8 10 0 19 -3 19 -7 0 -5 20 -17 45
                -28 25 -11 45 -23 45 -27 0 -5 11 -8 25 -8 14 0 25 -4 25 -10 0 -5 9 -10 19
                -10 11 0 21 -3 23 -7 5 -13 117 -63 138 -63 11 0 20 -4 20 -10 0 -5 14 -10 30
                -10 17 0 30 -4 30 -9 0 -15 145 -34 209 -27 34 3 89 9 124 12 34 3 66 10 72
                15 5 5 37 9 72 9 35 0 63 4 63 9 0 5 21 11 48 14 83 9 173 32 224 58 10 5 29
                9 43 9 14 0 25 5 25 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 8 10 18 10 10 0
                27 7 38 15 10 8 27 15 37 15 9 0 17 5 17 10 0 6 11 10 25 10 14 0 25 5 25 10
                0 6 7 10 17 10 18 0 146 69 151 82 2 4 12 8 23 8 11 0 25 5 32 10 57 48 74 60
                87 60 9 0 22 9 30 20 8 11 18 20 23 20 8 0 24 12 62 48 13 12 27 22 30 22 3 0
                17 10 30 23 62 57 75 67 80 67 8 0 35 27 35 35 0 8 47 55 55 55 3 0 21 16 41
                35 36 36 64 45 64 22z m-3395 -82 c14 -13 25 -27 25 -30 0 -4 20 -27 45 -52
                25 -24 45 -51 45 -59 0 -8 7 -14 15 -14 8 0 15 -4 15 -9 0 -5 65 -75 145 -156
                80 -81 145 -150 145 -155 0 -5 29 -38 65 -75 36 -36 65 -71 65 -76 0 -6 6 -16
                13 -23 6 -7 21 -25 32 -40 11 -16 26 -34 33 -41 6 -8 12 -18 12 -24 0 -6 5
                -11 10 -11 6 0 10 -9 10 -20 0 -11 4 -20 8 -20 5 0 17 -16 28 -35 10 -19 22
                -35 26 -35 5 0 8 -11 8 -25 0 -14 4 -25 9 -25 9 0 18 -41 27 -120 10 -89 10
                -89 64 -96 28 -4 50 -10 50 -15 0 -5 5 -9 10 -9 11 0 60 -45 60 -55 0 -3 10
                -17 23 -30 33 -36 47 -53 47 -60 0 -7 14 -24 48 -60 12 -13 22 -27 22 -30 0
                -7 138 -145 146 -145 2 0 16 -10 29 -22 40 -38 54 -48 65 -48 5 0 10 -4 10 -9
                0 -5 14 -14 30 -21 17 -7 30 -15 30 -19 0 -4 16 -15 35 -25 19 -11 35 -23 35
                -28 0 -4 11 -8 25 -8 14 0 25 -4 25 -10 0 -5 7 -10 16 -10 8 0 22 -7 30 -15 9
                -8 24 -15 35 -15 10 0 19 -4 19 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0
                -5 16 -10 35 -10 19 0 35 -3 35 -7 0 -5 30 -17 66 -28 36 -11 68 -23 70 -27 3
                -5 18 -8 35 -8 16 0 29 -4 29 -10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5
                9 -10 20 -10 11 0 45 -11 76 -25 31 -14 65 -25 75 -25 11 0 19 -4 19 -10 0 -6
                -45 -10 -115 -10 -70 0 -115 4 -115 10 0 6 -13 10 -29 10 -16 0 -42 7 -57 15
                -16 8 -37 15 -46 15 -9 0 -20 5 -23 10 -3 6 -19 10 -36 10 -16 0 -29 5 -29 10
                0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -7 10 -15 10 -15 0 -23 3 -83 33
                -19 9 -40 17 -48 17 -8 0 -14 5 -14 10 0 6 -9 10 -20 10 -11 0 -20 5 -20 10 0
                6 -9 10 -20 10 -12 0 -28 6 -36 13 -8 6 -20 17 -27 22 -7 6 -25 17 -42 25 -16
                8 -36 21 -43 28 -7 6 -17 12 -21 12 -7 0 -59 37 -98 70 -7 5 -15 10 -18 10 -3
                0 -17 10 -30 23 -62 57 -75 67 -80 67 -8 0 -35 27 -35 35 0 8 -27 35 -35 35
                -8 0 -55 47 -55 55 0 9 -48 55 -58 55 -5 0 -15 11 -22 25 -7 14 -17 25 -22 25
                -4 0 -8 7 -8 16 0 18 -23 44 -39 44 -6 0 -11 6 -11 13 0 7 -9 19 -20 27 -11 8
                -20 20 -20 28 0 7 -16 28 -35 46 -19 19 -35 40 -35 47 0 8 -9 21 -20 29 -11 8
                -20 18 -20 23 0 7 -9 20 -37 52 -7 7 -13 16 -13 19 0 6 -31 44 -57 72 -7 7
                -13 17 -13 23 0 6 -4 11 -10 11 -5 0 -10 8 -10 18 0 10 -9 24 -20 32 -11 8
                -20 19 -20 25 0 6 -16 28 -35 48 -19 20 -35 44 -35 52 0 8 -4 15 -10 15 -5 0
                -10 5 -10 11 0 6 -6 17 -12 24 -29 32 -38 45 -38 52 0 5 -9 15 -20 23 -11 8
                -20 20 -20 28 0 7 -11 23 -25 36 -14 13 -25 30 -25 37 0 8 -9 21 -20 29 -11 8
                -20 19 -20 25 0 6 -11 22 -25 37 -14 15 -25 32 -25 38 0 5 -4 10 -10 10 -5 0
                -10 7 -10 15 0 9 -10 27 -22 40 -36 38 -48 54 -48 62 0 5 -9 15 -20 23 -11 8
                -20 22 -20 32 0 10 -4 18 -10 18 -5 0 -17 15 -26 33 -9 17 -25 39 -35 48 -11
                9 -19 21 -19 28 0 6 -4 11 -10 11 -5 0 -10 5 -10 10 0 6 18 10 40 10 30 0 47
                -7 65 -25z m-2625 -165 c0 -22 -4 -40 -10 -40 -5 0 -10 -20 -10 -45 0 -25 -4
                -45 -9 -45 -5 0 -11 -21 -14 -47 -3 -27 -13 -79 -22 -118 -9 -38 -19 -91 -22
                -117 -3 -27 -9 -48 -14 -48 -5 0 -9 -27 -9 -60 0 -33 -4 -60 -10 -60 -6 0 -10
                -43 -10 -110 0 -67 4 -110 10 -110 6 0 10 -25 10 -55 0 -30 5 -55 10 -55 6 0
                10 -8 10 -18 0 -10 11 -42 25 -70 14 -29 25 -61 25 -72 0 -11 5 -20 10 -20 6
                0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 4 -25 8 -25 5 0
                17 -20 28 -45 10 -25 22 -45 26 -45 4 0 8 -9 8 -20 0 -11 5 -20 10 -20 6 0 10
                -6 10 -14 0 -18 32 -76 43 -76 4 0 7 -7 7 -15 0 -8 5 -15 10 -15 6 0 10 -9 10
                -20 0 -11 4 -20 8 -20 4 0 16 -15 27 -32 10 -18 27 -40 37 -49 10 -9 18 -24
                18 -33 0 -9 5 -16 10 -16 6 0 10 -5 10 -11 0 -6 16 -26 35 -45 19 -18 35 -38
                35 -44 0 -5 5 -10 10 -10 6 0 10 -5 10 -11 0 -11 25 -39 35 -39 8 0 35 -27 35
                -35 0 -8 47 -55 55 -55 8 0 35 -27 35 -35 0 -11 28 -35 40 -35 11 0 90 -74 90
                -85 0 -8 -58 -6 -62 3 -1 4 -19 15 -38 24 -49 25 -72 40 -91 61 -9 9 -21 17
                -27 17 -15 0 -232 218 -232 233 0 7 -9 19 -20 27 -11 8 -20 18 -20 23 0 5 -6
                14 -12 21 -37 38 -58 68 -58 81 0 8 -4 15 -10 15 -5 0 -10 7 -10 15 0 8 -3 15
                -8 15 -4 0 -12 9 -17 19 -6 11 -18 35 -29 55 -10 20 -22 36 -27 36 -5 0 -9 11
                -9 25 0 14 -4 25 -10 25 -5 0 -10 9 -10 20 0 11 -4 20 -8 20 -5 0 -17 20 -28
                45 -10 25 -22 45 -26 45 -4 0 -8 16 -8 35 0 19 -4 35 -10 35 -5 0 -10 7 -10
                15 0 8 -4 23 -9 33 -26 52 -41 96 -41 122 0 17 -4 30 -10 30 -6 0 -10 82 -10
                225 0 143 4 225 10 225 6 0 10 21 10 48 0 26 11 79 25 117 13 39 25 78 25 88
                0 9 5 17 10 17 6 0 10 14 10 30 0 17 5 30 10 30 6 0 10 11 10 25 0 14 4 25 10
                25 5 0 12 11 16 25 3 14 10 25 15 25 5 0 9 9 9 20 0 11 5 20 10 20 6 0 10 7
                10 15 0 8 5 15 10 15 6 0 10 -18 10 -40z m-536 -630 c3 -80 9 -163 15 -185 6
                -22 11 -61 11 -87 0 -27 5 -48 10 -48 6 0 10 -30 10 -70 0 -40 4 -70 10 -70 6
                0 10 -25 10 -55 0 -30 5 -55 10 -55 6 0 10 -14 10 -31 0 -17 7 -45 16 -62 31
                -60 34 -67 34 -87 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0
                10 -7 10 -15 0 -15 6 -25 38 -60 6 -7 12 -18 12 -24 0 -6 5 -11 10 -11 6 0 10
                -6 10 -14 0 -8 16 -31 35 -52 19 -20 35 -41 35 -45 0 -5 5 -9 10 -9 6 0 10 -5
                10 -11 0 -7 16 -26 35 -45 19 -18 35 -37 35 -43 0 -6 5 -11 10 -11 6 0 10 -5
                10 -10 0 -12 113 -120 125 -120 3 0 17 -11 31 -25 14 -14 28 -25 33 -25 11 0
                121 -109 121 -120 0 -6 5 -10 11 -10 16 0 39 -26 39 -44 0 -9 5 -16 10 -16 6
                0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -9 10 -20 0 -11 -4 -20 -8 -20 -4 0
                -14 9 -22 20 -8 11 -20 20 -27 20 -8 0 -29 16 -47 35 -19 19 -37 35 -40 35 -7
                0 -49 35 -92 78 -18 17 -36 32 -39 32 -10 0 -35 28 -35 39 0 6 -5 11 -10 11
                -11 0 -26 13 -95 78 -19 17 -37 32 -40 32 -8 0 -35 27 -35 35 0 10 -48 55 -60
                55 -5 0 -10 4 -10 8 0 5 -8 17 -17 28 -10 10 -24 31 -32 47 -8 15 -20 27 -28
                27 -7 0 -13 7 -13 15 0 8 -4 15 -10 15 -5 0 -10 7 -10 16 0 9 -8 24 -19 33
                -10 9 -21 26 -25 39 -4 12 -12 22 -17 22 -5 0 -9 9 -9 20 0 11 -4 20 -10 20
                -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5
                0 -10 8 -10 18 0 9 -7 26 -15 36 -8 11 -15 28 -15 38 0 10 -4 18 -10 18 -5 0
                -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 20 -10 44 0 24 -3 46 -8 48 -4 2
                -15 50 -25 108 -22 135 -24 367 -2 396 8 10 15 27 15 37 0 9 5 17 10 17 6 0
                10 5 10 10 0 14 23 40 32 37 4 -1 10 -67 12 -147z m606 95 c0 -19 5 -35 10
                -35 6 0 10 -15 10 -34 0 -19 3 -36 8 -38 9 -4 42 -100 42 -122 0 -9 5 -16 10
                -16 6 0 10 -13 10 -30 0 -16 5 -30 10 -30 6 0 10 -16 10 -35 0 -19 5 -35 10
                -35 6 0 10 -7 10 -16 0 -9 7 -30 16 -47 32 -60 34 -67 34 -92 0 -14 5 -25 10
                -25 6 0 10 -9 10 -19 0 -11 5 -23 10 -26 6 -3 10 -13 10 -21 0 -9 7 -22 15
                -30 8 -9 15 -24 15 -35 0 -10 5 -19 10 -19 6 0 10 -11 10 -25 0 -14 5 -25 10
                -25 6 0 10 -9 10 -20 0 -11 4 -20 9 -20 5 0 12 -11 15 -25 4 -14 11 -25 16
                -25 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 5 -15 10 -15
                6 0 10 -9 10 -20 0 -11 4 -20 9 -20 5 0 12 -11 15 -25 4 -14 11 -25 16 -25 6
                0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10
                -7 10 -15 0 -9 11 -28 25 -43 14 -15 25 -31 25 -37 0 -6 9 -17 20 -25 11 -8
                20 -20 20 -26 0 -7 16 -29 35 -48 19 -20 35 -43 35 -51 0 -8 5 -15 10 -15 6 0
                10 -6 10 -14 0 -8 6 -16 13 -19 6 -2 9 -8 5 -12 -7 -7 -218 199 -218 214 0 4
                -10 19 -22 33 -13 13 -29 36 -37 51 -8 15 -18 27 -23 27 -4 0 -8 7 -8 15 0 8
                -3 15 -8 15 -4 0 -12 9 -17 19 -6 11 -18 35 -29 55 -10 20 -22 36 -27 36 -5 0
                -9 11 -9 25 0 14 -4 25 -9 25 -5 0 -17 20 -28 45 -10 25 -21 45 -25 45 -5 0
                -8 9 -8 20 0 11 -4 20 -10 20 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10
                7 -10 16 0 8 -7 22 -15 30 -8 9 -15 26 -15 40 0 13 -4 24 -10 24 -5 0 -10 9
                -10 20 0 11 -4 20 -10 20 -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 9
                -10 20 0 10 -6 34 -14 52 -21 52 -36 102 -36 126 0 12 -4 22 -10 22 -6 0 -10
                28 -10 65 0 37 -4 65 -10 65 -6 0 -10 32 -10 75 0 43 4 75 10 75 6 0 10 -16
                10 -35z m-1439 -247 c0 -95 5 -213 10 -263 5 -49 12 -129 16 -177 3 -49 9 -88
                14 -88 5 0 9 -29 9 -65 0 -37 4 -65 10 -65 6 0 10 -18 10 -40 0 -22 -4 -40
                -10 -40 -5 0 -10 16 -10 35 0 19 -3 35 -7 35 -5 0 -16 28 -26 63 -10 34 -23
                70 -28 79 -5 10 -9 36 -9 58 0 22 -4 40 -9 40 -14 0 -23 115 -23 300 0 235 9
                299 45 300 4 0 7 -78 8 -172z m249 32 c0 -49 4 -90 9 -90 5 0 11 -30 14 -67 5
                -84 28 -203 39 -203 4 0 8 -16 8 -35 0 -19 5 -35 10 -35 6 0 10 -13 10 -30 0
                -16 5 -30 10 -30 6 0 10 -11 10 -25 0 -14 4 -25 10 -25 5 0 12 -11 16 -25 3
                -14 10 -25 15 -25 5 0 9 -9 9 -20 0 -11 5 -20 10 -20 6 0 10 -9 10 -20 0 -11
                5 -20 10 -20 6 0 10 -5 10 -10 0 -11 10 -25 48 -65 12 -13 22 -27 22 -30 0 -4
                65 -72 145 -152 80 -79 145 -150 145 -157 0 -7 11 -19 25 -26 14 -7 25 -17 25
                -21 0 -4 25 -33 55 -64 30 -31 55 -58 55 -60 0 -3 -11 -5 -25 -5 -14 0 -25 5
                -25 10 0 6 -6 10 -14 10 -18 0 -76 32 -76 43 0 4 -9 7 -20 7 -11 0 -20 5 -20
                10 0 6 -5 10 -10 10 -19 0 -240 216 -240 234 0 3 -20 27 -45 53 -25 25 -45 50
                -45 55 0 5 -10 19 -22 32 -13 12 -34 39 -48 59 -14 20 -28 37 -32 37 -5 0 -8
                11 -8 25 0 14 -4 25 -10 25 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -12 16
                -16 35 -3 19 -10 35 -15 35 -5 0 -9 16 -9 35 0 19 -4 35 -10 35 -5 0 -10 22
                -10 49 0 27 -4 51 -10 53 -6 2 -13 94 -17 231 -6 207 -5 227 10 227 15 0 17
                -13 17 -90z m-427 -55 c-8 -72 -17 -172 -20 -222 -3 -51 -9 -93 -14 -93 -5 0
                -9 -54 -9 -120 0 -73 -4 -120 -10 -120 -6 0 -10 -43 -10 -110 0 -67 4 -110 10
                -110 6 0 10 -28 10 -65 0 -37 4 -65 10 -65 6 0 10 -18 10 -40 0 -22 3 -40 8
                -40 8 0 30 -59 39 -102 3 -16 9 -28 14 -28 5 0 9 -9 9 -20 0 -11 4 -20 9 -20
                5 0 11 -10 15 -23 5 -21 14 -35 56 -84 5 -7 10 -17 10 -23 0 -5 5 -10 10 -10
                6 0 10 -4 10 -10 0 -12 28 -45 93 -112 53 -55 60 -78 22 -78 -14 0 -25 5 -25
                10 0 6 -7 10 -15 10 -15 0 -74 58 -75 73 0 4 -24 31 -53 60 -28 29 -65 70 -82
                92 -16 22 -36 47 -45 55 -8 8 -22 29 -30 45 -8 17 -18 32 -21 35 -17 14 -39
                78 -39 111 0 20 -5 39 -11 41 -15 5 -16 691 -1 696 7 2 12 25 12 57 0 30 5 57
                10 60 6 3 10 19 10 34 0 15 7 36 15 47 8 10 15 31 15 47 0 15 5 27 10 27 6 0
                10 11 10 25 0 14 5 25 10 25 6 0 10 9 10 20 0 11 4 20 9 20 5 0 13 9 16 21 14
                42 13 10 -2 -116z m5387 -275 c0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9
                -10 20 -10 11 0 20 -3 20 -8 0 -4 16 -16 35 -26 19 -11 35 -23 35 -28 0 -4 9
                -8 20 -8 11 0 20 -3 20 -8 0 -4 15 -14 33 -21 17 -8 38 -21 45 -28 7 -7 20
                -13 28 -13 8 0 14 -4 14 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 16 -10
                35 -10 19 0 35 -4 35 -10 0 -5 8 -10 18 -10 10 0 27 -7 38 -15 10 -8 27 -15
                37 -15 9 0 17 -4 17 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 14 -10 30
                -10 17 0 30 -4 30 -10 0 -5 8 -10 18 -10 9 0 26 -7 36 -15 11 -8 28 -15 38
                -15 10 0 18 -4 18 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 11 -10 25
                -10 14 0 25 -4 25 -10 0 -5 7 -10 15 -10 8 0 38 -11 67 -25 28 -14 60 -25 70
                -25 10 0 18 -4 18 -10 0 -5 11 -10 25 -10 14 0 25 -3 25 -8 0 -4 15 -12 33
                -18 76 -26 132 -50 135 -56 2 -5 15 -8 28 -8 13 0 24 -5 24 -11 0 -11 -20 -10
                -192 7 -32 3 -58 10 -58 15 0 5 -18 9 -39 9 -22 0 -43 5 -46 10 -3 6 -19 10
                -35 10 -16 0 -31 4 -34 9 -7 10 -97 41 -120 41 -9 0 -16 5 -16 10 0 6 -13 10
                -30 10 -16 0 -30 5 -30 10 0 6 -6 10 -14 10 -7 0 -34 11 -60 25 -26 14 -56 25
                -67 25 -10 0 -19 5 -19 10 0 6 -9 10 -20 10 -11 0 -20 4 -20 9 0 5 -11 12 -25
                15 -14 4 -25 11 -25 16 0 6 -8 10 -18 10 -10 0 -28 9 -40 20 -12 11 -30 20
                -42 20 -11 0 -20 3 -20 8 0 4 -18 16 -40 26 -22 11 -40 23 -40 28 0 4 -7 8
                -15 8 -8 0 -15 5 -15 10 0 6 -7 10 -15 10 -9 0 -28 11 -43 25 -15 14 -31 25
                -37 25 -6 0 -17 9 -25 20 -8 11 -22 20 -32 20 -10 0 -18 4 -18 8 0 5 -11 15
                -25 22 -14 7 -25 19 -25 27 0 7 -7 13 -15 13 -8 0 -15 5 -15 10 0 6 -7 10 -15
                10 -8 0 -15 5 -15 10 0 6 14 10 30 10 17 0 30 -4 30 -10z m-1390 -450 c0 -5 9
                -10 20 -10 11 0 20 -4 20 -10 0 -5 5 -10 11 -10 12 0 39 -25 39 -36 0 -3 8
                -14 18 -23 15 -14 24 -29 50 -83 8 -18 -17 -6 -46 22 -18 17 -34 30 -37 30 -3
                0 -17 10 -30 23 -62 57 -75 67 -80 67 -8 0 -35 27 -35 34 0 3 16 6 35 6 19 0
                35 -4 35 -10z m-300 -380 c0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 11 -10
                24 -10 13 0 39 -8 58 -17 60 -30 68 -33 83 -33 8 0 15 -4 15 -10 0 -5 16 -10
                35 -10 19 0 35 -4 35 -8 0 -4 20 -16 45 -26 25 -11 45 -23 45 -28 0 -4 9 -8
                20 -8 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 13 -10 28
                -10 15 0 32 -4 38 -9 12 -11 95 -32 157 -38 26 -3 47 -9 47 -14 0 -5 25 -9 55
                -9 30 0 55 -4 55 -10 0 -5 23 -10 50 -10 28 0 59 -6 70 -12 15 -10 22 -10 32
                0 6 6 29 12 50 12 21 0 38 5 38 10 0 6 11 10 25 10 31 0 35 35 5 45 -11 3 -20
                11 -20 16 0 5 -5 9 -10 9 -16 0 -63 50 -56 58 4 3 16 1 26 -6 11 -7 29 -12 40
                -12 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20
                -10 11 0 20 -3 20 -7 0 -11 58 -43 76 -43 8 0 14 -9 14 -20 0 -11 -6 -20 -14
                -20 -8 0 -34 -11 -57 -25 -24 -14 -54 -25 -66 -25 -13 0 -23 -5 -23 -10 0 -7
                -63 -10 -192 -7 -191 4 -262 12 -305 35 -12 7 -31 12 -42 12 -12 0 -21 5 -21
                10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -13 10 -30 10 -16 0 -30 5 -30
                10 0 6 -9 10 -20 10 -11 0 -43 11 -72 25 -28 14 -60 25 -70 25 -10 0 -18 5
                -18 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -9 10 -19 10 -11 0 -22 4
                -26 9 -3 5 -19 12 -35 16 -17 4 -30 11 -30 16 0 5 -9 9 -20 9 -11 0 -20 5 -20
                10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -9 10 -20 10 -11 0 -20 5 -20 10 0
                6 -6 10 -13 10 -8 0 -24 9 -36 19 -19 17 -21 22 -9 35 15 17 48 21 48 6z
                m-2620 -526 c47 -9 109 -18 138 -21 28 -3 52 -9 52 -14 0 -5 20 -9 45 -9 25 0
                53 -4 63 -9 18 -10 118 -29 195 -38 26 -3 47 -9 47 -14 0 -5 25 -9 55 -9 30 0
                55 -4 55 -10 0 -5 24 -10 54 -10 30 0 58 -4 61 -10 3 -5 18 -10 33 -10 26 0
                135 -22 198 -41 17 -5 49 -9 72 -9 23 0 42 -4 42 -10 0 -6 28 -10 65 -10 37 0
                65 -4 65 -10 0 -5 22 -10 48 -10 27 0 52 -3 56 -7 9 -9 127 -32 204 -40 28 -2
                52 -9 52 -14 0 -5 29 -9 65 -9 37 0 65 -4 65 -10 0 -5 20 -10 45 -10 25 0 64
                -4 87 -10 111 -24 208 -40 251 -40 26 0 47 -4 47 -10 0 -6 40 -10 100 -10 56
                0 100 -4 100 -9 0 -6 55 -12 123 -15 67 -2 201 -9 297 -14 479 -28 668 -30
                2120 -27 1313 3 1556 5 1745 20 121 9 259 19 308 22 48 2 87 9 87 14 0 5 36 9
                80 9 44 0 80 4 80 9 0 5 28 11 63 14 34 3 94 13 132 22 39 10 91 19 118 22 26
                3 47 9 47 14 0 5 25 9 55 9 30 0 55 4 55 9 0 5 17 11 38 14 45 6 121 26 144
                38 10 5 29 9 43 9 14 0 25 5 25 10 0 6 20 10 45 10 25 0 45 5 45 10 0 6 16 10
                35 10 19 0 35 4 35 9 0 4 19 11 42 14 24 3 44 11 46 16 2 6 19 11 38 11 19 0
                34 5 34 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 14 10 30 10 17 0 38 4 48 9
                32 16 117 41 140 41 12 0 22 5 22 10 0 6 20 10 45 10 25 0 45 5 45 10 0 6 11
                10 25 10 18 0 25 -5 25 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 5 -25
                10 -25 6 0 10 -9 10 -19 0 -11 5 -23 10 -26 6 -3 10 -15 10 -25 0 -10 7 -25
                15 -34 8 -8 15 -22 15 -30 0 -9 5 -16 10 -16 6 0 10 -11 10 -25 0 -14 5 -25
                10 -25 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -9 10 -21 0 -11 6 -27 14
                -34 7 -8 20 -34 27 -59 7 -26 17 -46 21 -46 4 0 8 -11 8 -25 0 -14 5 -25 10
                -25 6 0 10 -9 10 -20 0 -11 4 -20 10 -20 5 0 12 -16 16 -35 3 -19 10 -35 15
                -35 5 0 9 -9 9 -20 0 -11 5 -20 10 -20 6 0 10 -16 10 -35 0 -19 5 -35 10 -35
                6 0 10 -10 10 -23 0 -13 4 -27 9 -32 18 -19 34 -121 38 -242 2 -68 8 -123 14
                -123 5 0 9 -94 9 -235 0 -150 4 -235 10 -235 6 0 10 -73 10 -197 0 -109 7
                -279 15 -378 8 -99 15 -228 15 -287 0 -60 4 -110 10 -113 6 -3 10 -48 10 -101
                0 -56 4 -94 10 -94 6 0 10 -30 10 -70 0 -38 4 -70 9 -70 5 0 11 -21 14 -47 2
                -27 12 -75 21 -108 10 -33 20 -72 23 -87 3 -16 9 -28 14 -28 5 0 9 -16 9 -35
                0 -19 4 -35 8 -35 4 0 14 -20 21 -46 7 -25 20 -51 27 -59 8 -7 14 -21 14 -29
                0 -9 5 -16 10 -16 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -9 10 -20 0 -11
                3 -20 8 -20 4 0 18 -16 31 -35 13 -19 34 -47 47 -62 13 -16 27 -36 30 -45 3
                -10 10 -18 15 -18 5 0 9 -9 9 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 5
                -15 10 -15 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -8 10 -18 0 -10 7 -27
                15 -38 8 -10 15 -29 15 -41 0 -13 5 -23 10 -23 6 0 10 -13 10 -30 0 -16 5 -30
                10 -30 6 0 10 -20 10 -45 0 -25 5 -45 10 -45 6 0 10 -17 10 -37 1 -21 7 -65
                15 -98 8 -33 15 -97 15 -142 0 -49 4 -83 10 -83 6 0 10 -50 10 -130 0 -80 4
                -130 10 -130 6 0 10 -34 10 -82 0 -45 4 -107 10 -137 12 -71 30 -249 37 -369
                3 -51 10 -95 14 -98 5 -3 9 -52 9 -110 0 -63 4 -104 10 -104 6 0 10 -45 10
                -115 0 -63 4 -115 9 -115 5 0 11 -46 15 -102 3 -57 10 -134 15 -173 12 -88 12
                -472 0 -585 -5 -47 -12 -127 -15 -177 -4 -51 -10 -93 -15 -93 -5 0 -9 -34 -9
                -75 0 -43 -4 -75 -10 -75 -6 0 -10 -33 -10 -80 0 -47 -4 -80 -10 -80 -5 0 -10
                -19 -10 -42 0 -24 -7 -78 -15 -121 -8 -43 -15 -96 -15 -117 0 -21 -4 -42 -10
                -45 -5 -3 -10 -33 -10 -66 0 -32 -4 -59 -9 -59 -5 0 -12 -26 -14 -57 -9 -92
                -35 -236 -58 -309 -5 -17 -9 -47 -9 -67 0 -20 -4 -37 -10 -37 -5 0 -10 -18
                -10 -39 0 -22 -4 -43 -10 -46 -5 -3 -10 -18 -10 -33 0 -15 -7 -36 -15 -46 -8
                -11 -15 -32 -15 -48 0 -15 -4 -28 -10 -28 -5 0 -10 -16 -10 -35 0 -19 -4 -35
                -10 -35 -5 0 -10 -7 -10 -16 0 -23 -31 -113 -41 -120 -5 -3 -9 -18 -9 -35 0
                -16 -4 -29 -10 -29 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -11
                -10 -25 0 -14 -4 -33 -9 -43 -16 -32 -33 -87 -38 -119 -3 -18 -9 -33 -14 -33
                -5 0 -9 -16 -9 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -16 -10 -35 0 -19 -4 -35
                -10 -35 -5 0 -10 -13 -10 -30 0 -16 -6 -44 -14 -62 -23 -55 -36 -103 -36 -131
                0 -15 -4 -27 -10 -27 -5 0 -10 -20 -10 -45 0 -25 -4 -45 -10 -45 -5 0 -10 -17
                -10 -38 0 -21 -5 -43 -11 -49 -11 -11 -9 -70 7 -255 6 -69 -5 -99 -48 -139
                -10 -9 -18 -21 -18 -28 0 -6 -4 -11 -10 -11 -5 0 -10 -6 -10 -12 0 -7 -11 -26
                -25 -42 -14 -16 -25 -37 -25 -48 0 -10 -4 -18 -10 -18 -5 0 -10 -13 -10 -30 0
                -16 -4 -30 -9 -30 -5 0 -11 -15 -15 -32 -3 -18 -12 -71 -21 -118 -8 -47 -18
                -172 -22 -277 -3 -106 -10 -193 -14 -193 -5 0 -9 -16 -9 -35 0 -19 -4 -35 -10
                -35 -5 0 -10 -7 -10 -15 0 -33 -46 -88 -115 -140 -47 -35 -135 -124 -135 -136
                0 -15 -188 -199 -204 -199 -8 0 -16 -3 -18 -7 -5 -12 -76 -43 -98 -43 -11 0
                -20 -4 -20 -10 0 -5 -7 -10 -16 -10 -9 0 -44 -28 -78 -63 -65 -64 -79 -76
                -133 -104 -19 -9 -37 -29 -42 -46 -9 -25 -14 -28 -33 -22 -13 4 -40 9 -60 12
                -21 3 -38 9 -38 14 0 5 -16 9 -35 9 -19 0 -35 5 -35 10 0 6 -16 10 -35 10 -19
                0 -35 5 -35 10 0 6 -13 10 -30 10 -16 0 -30 4 -30 10 0 5 -16 12 -35 16 -19 3
                -35 10 -35 15 0 5 -9 9 -20 9 -11 0 -20 5 -20 10 0 6 -5 10 -10 10 -12 0 -60
                45 -60 55 0 10 -28 35 -39 35 -6 0 -11 4 -11 8 0 7 -32 47 -90 109 -11 12 -20
                25 -20 29 0 4 -8 14 -18 23 -10 9 -31 34 -47 56 -17 22 -38 47 -47 56 -10 9
                -18 21 -18 26 0 5 -16 26 -35 46 -19 20 -35 44 -35 53 0 9 -8 24 -18 33 -25
                23 -52 67 -52 86 0 8 -4 15 -10 15 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0
                -10 6 -10 13 0 8 -11 27 -25 43 -14 16 -25 35 -25 42 0 6 -4 12 -10 12 -5 0
                -10 5 -10 11 0 11 -295 309 -306 309 -7 0 -54 48 -54 55 0 3 -25 30 -55 60
                -30 29 -55 58 -55 65 0 6 -11 23 -25 38 -14 15 -25 31 -25 35 0 5 -13 22 -30
                37 -16 15 -30 33 -30 39 0 6 -4 11 -10 11 -5 0 -31 20 -57 45 -25 25 -52 45
                -58 45 -6 0 -17 9 -25 20 -8 11 -25 20 -37 20 -13 0 -23 5 -23 10 0 6 -9 10
                -19 10 -11 0 -26 7 -35 15 -8 8 -24 15 -35 15 -12 0 -21 5 -21 10 0 6 -13 10
                -30 10 -16 0 -30 5 -30 10 0 6 -7 10 -16 10 -22 0 -118 33 -122 43 -2 4 -19 7
                -38 7 -19 0 -34 5 -34 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -16 10
                -35 10 -19 0 -43 4 -53 9 -25 13 -146 41 -176 41 -13 0 -28 5 -31 10 -3 6 -28
                10 -56 10 -27 0 -49 4 -49 9 0 5 -26 12 -57 15 -32 3 -92 9 -133 15 -250 31
                -547 38 -572 13 -7 -7 -20 -12 -30 -12 -10 0 -18 -4 -18 -10 0 -5 -9 -10 -20
                -10 -11 0 -20 -4 -20 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -7
                -10 -15 -10 -8 0 -15 -5 -15 -10 0 -11 -45 -60 -55 -60 -8 0 -55 -47 -55 -55
                0 -8 -27 -35 -35 -35 -7 0 -55 -47 -55 -55 0 -6 -169 -175 -175 -175 -3 0 -5
                7 -5 15 0 8 -4 15 -10 15 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -12 16
                -16 35 -3 19 -10 35 -15 35 -5 0 -9 9 -9 20 0 11 -4 20 -10 20 -5 0 -10 10
                -10 21 0 29 -31 55 -110 92 -36 17 -66 35 -68 39 -2 4 -15 8 -28 8 -13 0 -24
                5 -24 10 0 6 -7 10 -16 10 -8 0 -22 7 -30 15 -9 8 -24 15 -34 15 -10 0 -22 4
                -25 10 -3 5 -15 10 -26 10 -10 0 -19 4 -19 9 0 5 -12 11 -27 14 -16 3 -59 14
                -98 26 -85 26 -241 28 -325 6 -30 -8 -72 -15 -92 -15 -21 0 -38 -4 -38 -10 0
                -5 -25 -10 -55 -10 -30 0 -55 -4 -55 -10 0 -5 -19 -10 -42 -10 -23 0 -55 -4
                -72 -9 -17 -6 -53 -15 -81 -21 -27 -6 -66 -16 -85 -21 -19 -6 -52 -13 -72 -16
                -21 -3 -38 -9 -38 -14 0 -5 -13 -9 -29 -9 -17 0 -32 -3 -35 -8 -2 -4 -34 -16
                -70 -27 -36 -11 -66 -23 -66 -27 0 -5 -9 -8 -20 -8 -11 0 -20 -4 -20 -10 0 -5
                -11 -10 -25 -10 -14 0 -25 -4 -25 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20
                -9 0 -5 -11 -12 -25 -15 -14 -4 -25 -11 -25 -16 0 -6 -9 -10 -20 -10 -11 0
                -20 -4 -20 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -3 -15 -8 0 -4 -16 -16 -35 -26
                -19 -11 -35 -23 -35 -28 0 -4 -8 -8 -18 -8 -10 0 -24 -9 -32 -20 -8 -11 -22
                -20 -32 -20 -10 0 -18 -5 -18 -10 0 -6 -16 -18 -35 -27 -19 -9 -35 -20 -35
                -25 0 -4 -5 -8 -10 -8 -28 0 -80 -79 -80 -122 0 -20 -124 -148 -143 -148 -4 0
                -31 -24 -60 -53 -29 -28 -69 -64 -89 -80 -61 -45 -228 -215 -228 -232 0 -8 -4
                -15 -10 -15 -5 0 -10 -13 -10 -30 0 -16 5 -30 10 -30 21 0 9 -42 -20 -73 -16
                -18 -30 -35 -30 -39 0 -4 -11 -18 -25 -32 -14 -14 -25 -28 -25 -31 0 -3 -10
                -17 -22 -30 -33 -35 -48 -53 -48 -59 0 -3 -20 -27 -45 -53 -25 -25 -45 -50
                -45 -55 0 -4 -20 -29 -45 -56 -25 -26 -45 -51 -45 -55 0 -5 -20 -29 -45 -54
                -25 -24 -45 -50 -45 -57 0 -6 -10 -18 -21 -26 -12 -8 -27 -21 -35 -28 -7 -6
                -16 -12 -21 -12 -5 0 -15 -9 -23 -20 -8 -11 -21 -20 -30 -20 -9 0 -24 -6 -35
                -14 -11 -7 -40 -16 -65 -19 -85 -11 -120 -19 -120 -28 0 -5 -11 -9 -25 -9 -14
                0 -25 -3 -25 -7 0 -5 -20 -16 -45 -26 -25 -11 -45 -23 -45 -28 0 -5 -20 -9
                -45 -9 -38 0 -45 3 -45 19 0 11 -4 23 -10 26 -5 3 -10 15 -10 25 0 11 -7 25
                -16 32 -68 57 -86 81 -80 110 8 39 -12 58 -63 58 -22 0 -43 5 -46 10 -3 6 -15
                10 -26 10 -10 0 -19 4 -19 10 0 5 -11 12 -25 16 -14 3 -25 10 -25 15 0 5 -7 9
                -16 9 -17 0 -164 146 -164 162 0 13 -61 72 -98 93 -18 11 -32 23 -32 27 0 4
                -7 8 -15 8 -8 0 -15 5 -15 10 0 6 -5 10 -11 10 -16 0 -119 107 -119 124 0 9
                -4 16 -10 16 -5 0 -10 9 -10 20 0 11 -4 20 -9 20 -5 0 -11 12 -14 28 -22 105
                -26 141 -26 259 -1 76 -5 134 -11 138 -5 3 -10 31 -10 61 0 30 -4 54 -10 54
                -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 12 -10 28 0 15 -7 36 -15 46
                -8 11 -15 28 -15 38 0 10 -4 18 -10 18 -5 0 -10 9 -10 20 0 11 -4 20 -10 20
                -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 5 -10 10 0 6 -5 16 -10 23 -48
                57 -60 74 -60 89 0 9 -5 18 -11 20 -6 2 -11 24 -12 50 -2 38 2 50 22 67 20 17
                24 30 22 69 -1 26 -6 49 -11 50 -6 2 -10 26 -10 53 0 27 -4 49 -10 49 -5 0
                -10 16 -10 35 0 19 -4 43 -9 53 -10 21 -31 95 -38 140 -3 18 -9 35 -14 38 -5
                3 -9 23 -9 45 0 21 -4 39 -10 39 -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0
                -10 15 -10 33 -1 17 -7 43 -15 57 -8 14 -14 35 -15 48 0 12 -4 22 -10 22 -5 0
                -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 13 -10 29 0 17 -4 33 -10 36 -5 3
                -10 19 -10 34 0 15 -7 36 -15 47 -8 10 -15 31 -15 47 0 15 -4 27 -10 27 -5 0
                -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 13 -10 29 0 17 -4 33 -10 36 -5 3
                -10 19 -10 34 0 15 -7 36 -15 47 -8 10 -15 31 -15 47 0 15 -4 27 -10 27 -5 0
                -10 20 -10 45 0 25 -4 45 -10 45 -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0
                -10 8 -10 18 0 11 -10 54 -22 98 -11 43 -23 100 -25 127 -3 26 -9 47 -14 47
                -5 0 -9 25 -9 55 0 30 -4 55 -9 55 -5 0 -12 26 -15 58 -7 83 -30 209 -38 218
                -5 4 -8 36 -8 71 0 35 -4 63 -10 63 -6 0 -10 35 -10 85 0 50 -4 85 -10 85 -6
                0 -10 28 -10 63 0 34 -5 79 -10 99 -17 59 -32 265 -36 501 -3 129 -9 217 -14
                217 -6 0 -10 68 -10 170 0 102 4 170 10 170 5 0 11 83 13 203 5 221 21 460 37
                546 5 30 10 97 10 148 0 55 4 93 10 93 6 0 10 48 10 125 0 77 4 125 10 125 6
                0 10 41 10 102 0 56 4 115 9 132 11 34 31 224 38 354 2 45 9 82 14 82 5 0 9
                25 9 55 0 30 5 55 10 55 6 0 10 13 10 30 0 26 15 70 41 122 5 10 9 25 9 33 0
                8 5 15 10 15 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 9 10 20 0 11 4 20 8 20
                4 0 21 25 37 55 17 30 33 55 38 55 4 0 7 11 7 25 0 14 5 25 10 25 6 0 10 9 10
                20 0 11 4 20 8 20 10 0 42 71 42 93 0 10 5 17 10 17 6 0 10 11 10 25 0 14 3
                25 8 25 4 0 15 28 25 63 10 34 23 70 28 79 5 10 9 34 9 53 0 19 5 35 10 35 6
                0 10 22 10 48 0 26 4 52 9 58 11 10 15 62 30 344 6 113 15 252 21 310 5 58 10
                172 10 253 0 91 4 147 10 147 6 0 10 76 10 209 0 129 4 212 10 216 6 4 10 83
                10 203 1 108 5 231 10 272 5 41 13 103 16 138 4 34 11 62 15 62 5 0 9 20 9 45
                0 25 5 45 10 45 6 0 10 14 10 30 0 17 5 30 10 30 6 0 10 11 10 25 0 14 5 25
                10 25 6 0 10 8 10 18 0 10 7 27 15 38 8 10 15 27 15 37 0 9 5 17 10 17 6 0 10
                7 10 15 0 8 5 15 10 15 6 0 10 9 10 20 0 11 3 20 8 20 4 0 16 16 26 35 11 19
                23 35 28 35 4 0 8 9 8 20 0 11 5 20 10 20 6 0 10 5 10 10 0 11 10 25 48 65 12
                13 22 27 22 30 0 3 15 21 33 40 64 69 77 84 77 95 0 5 5 10 10 10 11 0 60 45
                60 55 0 13 48 52 90 72 54 26 88 28 200 7z m-2426 -4383 c3 -5 26 -12 51 -15
                25 -4 45 -11 45 -17 0 -5 11 -9 25 -9 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11
                0 20 -4 20 -10 0 -5 7 -10 15 -10 19 0 63 -27 86 -52 9 -10 21 -18 28 -18 6 0
                11 -4 11 -10 0 -5 4 -10 10 -10 13 0 70 -57 70 -69 0 -6 16 -27 35 -47 19 -19
                35 -42 35 -50 0 -8 4 -14 8 -14 4 0 16 -20 26 -45 11 -25 23 -45 28 -45 4 0 8
                -9 8 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0 10 -11
                10 -24 0 -13 3 -26 8 -28 11 -5 62 -161 62 -192 0 -14 5 -26 10 -26 6 0 10
                -20 10 -45 0 -25 5 -45 10 -45 6 0 10 -10 10 -22 0 -22 21 -139 40 -226 6 -23
                10 -71 10 -107 0 -37 4 -65 10 -65 6 0 10 -40 10 -100 0 -60 4 -100 10 -100 6
                0 10 -33 10 -77 0 -43 7 -114 15 -158 8 -44 14 -106 15 -137 0 -31 5 -60 10
                -63 6 -3 10 -48 10 -101 0 -56 4 -94 10 -94 6 0 10 -37 10 -90 0 -49 4 -90 9
                -90 5 0 12 -37 15 -82 2 -46 12 -130 21 -188 9 -58 19 -142 22 -187 3 -46 9
                -83 14 -83 5 0 9 -36 9 -80 0 -44 4 -80 9 -80 5 0 11 -28 14 -62 3 -35 13
                -103 22 -153 9 -49 19 -127 22 -172 3 -46 9 -83 14 -83 5 0 9 -70 9 -155 0
                -97 4 -155 10 -155 6 0 10 -53 10 -137 0 -76 5 -167 10 -203 6 -41 6 -68 0
                -74 -6 -6 -10 -131 -10 -308 0 -192 -4 -298 -10 -298 -5 0 -10 -7 -10 -15 0
                -8 -8 -24 -17 -35 -21 -24 -97 -27 -158 -5 -22 8 -48 15 -57 15 -10 0 -18 5
                -18 10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -8 10 -17 11 -10 0 -31 9
                -48 20 -16 10 -37 22 -45 26 -26 12 -144 137 -160 168 -8 17 -21 36 -27 43 -7
                7 -13 22 -13 33 0 10 -4 19 -10 19 -5 0 -10 14 -10 30 0 17 -4 30 -10 30 -5 0
                -10 18 -10 40 0 22 -4 40 -10 40 -5 0 -10 12 -10 28 0 15 -7 36 -15 46 -8 11
                -15 30 -15 42 0 13 -4 26 -10 29 -5 3 -10 24 -10 46 0 21 -4 39 -10 39 -5 0
                -10 18 -10 39 0 22 -4 43 -10 46 -5 3 -10 19 -10 34 0 15 -7 36 -15 47 -8 10
                -15 31 -15 46 0 15 -4 30 -10 33 -5 3 -10 19 -10 36 0 16 -4 29 -10 29 -5 0
                -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 13 -10 29 0 16 -3 31 -7 33 -11 4
                -43 75 -43 93 0 8 -4 15 -10 15 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0
                -10 6 -10 12 0 16 -53 122 -62 126 -5 2 -8 17 -8 33 0 16 -3 29 -7 29 -11 0
                -43 58 -43 76 0 8 -4 14 -10 14 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10
                7 -10 15 0 8 -4 15 -10 15 -5 0 -10 6 -10 12 0 16 -53 122 -62 126 -5 2 -8 16
                -8 32 0 16 -4 30 -8 32 -12 5 -62 116 -62 138 0 11 -4 20 -10 20 -5 0 -10 18
                -10 40 0 22 -4 40 -10 40 -5 0 -10 18 -10 39 0 22 -4 43 -10 46 -5 3 -10 21
                -10 38 0 18 -8 69 -17 115 -14 69 -15 88 -4 115 19 48 26 313 11 437 -7 58
                -15 130 -17 160 -3 30 -9 59 -14 64 -5 6 -9 38 -9 73 0 35 -4 63 -10 63 -6 0
                -10 30 -10 69 0 39 -4 72 -9 75 -4 3 -11 39 -14 79 -4 41 -11 87 -17 101 -5
                15 -10 54 -10 87 0 33 -4 59 -10 59 -6 0 -10 40 -10 99 0 61 -4 101 -11 103
                -16 5 -18 490 -1 495 7 3 12 22 12 49 0 24 4 44 9 44 5 0 11 12 14 28 9 43 31
                102 39 102 5 0 8 11 8 25 0 14 5 25 10 25 6 0 10 7 10 16 0 24 119 134 152
                141 15 3 28 9 28 14 0 12 147 12 154 0z m13466 -51 c0 -5 16 -10 35 -10 19 0
                35 -4 35 -8 0 -4 15 -16 33 -27 42 -25 147 -132 147 -151 0 -8 5 -14 10 -14 6
                0 10 -11 10 -25 0 -14 4 -25 8 -25 16 0 42 -137 42 -222 0 -52 4 -88 10 -88 6
                0 10 -37 10 -90 0 -53 -4 -90 -10 -90 -6 0 -10 -43 -10 -109 0 -59 -5 -133
                -11 -162 -14 -73 -29 -164 -36 -221 -3 -27 -9 -48 -14 -48 -5 0 -9 -20 -9 -45
                0 -25 -4 -45 -10 -45 -5 0 -10 -14 -10 -31 0 -17 -5 -39 -10 -50 -12 -22 -29
                -123 -37 -216 -2 -35 -9 -63 -14 -63 -5 0 -9 -52 -9 -115 0 -67 -4 -115 -10
                -115 -6 0 -11 -98 -13 -247 -4 -236 -17 -377 -38 -397 -5 -6 -9 -23 -9 -38 0
                -15 -4 -28 -10 -28 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -10
                -10 -22 0 -23 -49 -130 -62 -136 -5 -2 -8 -12 -8 -23 0 -10 -4 -19 -10 -19 -5
                0 -10 -9 -10 -20 0 -11 -4 -20 -8 -20 -5 0 -17 -16 -28 -35 -10 -19 -22 -35
                -26 -35 -5 0 -8 -9 -8 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -7 -10 -15 0 -8 -4
                -15 -10 -15 -5 0 -10 -8 -10 -19 0 -10 -7 -24 -15 -31 -8 -7 -15 -19 -15 -26
                0 -8 -4 -14 -10 -14 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -11
                -10 -25 0 -14 -3 -25 -7 -25 -11 0 -43 -58 -43 -76 0 -8 -4 -14 -10 -14 -5 0
                -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10
                -25 -5 0 -10 -8 -10 -17 0 -10 -7 -27 -15 -37 -8 -11 -15 -28 -15 -38 0 -10
                -4 -18 -10 -18 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -6 -10
                -14 0 -14 -41 -121 -61 -158 -5 -10 -9 -29 -9 -43 0 -14 -4 -25 -10 -25 -5 0
                -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -12 -10 -27 0 -16 -7 -37 -15
                -47 -8 -11 -15 -32 -15 -48 0 -15 -4 -28 -10 -28 -5 0 -10 -16 -10 -35 0 -19
                -4 -35 -10 -35 -5 0 -10 -12 -10 -27 0 -28 -13 -76 -36 -131 -8 -18 -14 -42
                -14 -52 0 -11 -4 -20 -10 -20 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0
                -10 -9 -10 -20 0 -12 -6 -28 -12 -36 -7 -8 -17 -20 -23 -27 -5 -7 -17 -25 -25
                -42 -19 -38 -126 -145 -145 -145 -8 0 -15 -4 -15 -10 0 -5 -7 -10 -15 -10 -8
                0 -15 -4 -15 -8 0 -5 -20 -17 -45 -28 -25 -10 -45 -22 -45 -26 0 -4 -20 -8
                -45 -8 -25 0 -45 -4 -45 -10 0 -6 -30 -10 -70 -10 -40 0 -70 4 -70 10 0 6 -13
                10 -30 10 -28 0 -30 3 -30 35 0 19 4 35 9 35 21 0 27 351 15 810 -3 133 -1
                251 5 290 5 36 15 99 22 140 7 41 14 103 17 138 2 34 8 62 13 62 5 0 9 36 9
                80 0 47 4 80 10 80 6 0 10 32 10 75 0 43 4 75 10 75 6 0 10 21 10 48 0 26 7
                74 15 107 8 33 14 88 15 123 0 34 4 62 10 62 6 0 10 33 10 80 0 47 4 80 10 80
                6 0 10 35 10 84 0 47 4 87 9 90 4 3 11 47 15 98 3 52 11 109 16 128 6 19 10
                68 10 107 0 42 4 73 10 73 6 0 10 48 10 125 0 71 4 125 9 125 6 0 12 46 15
                103 6 127 22 271 36 317 5 19 10 63 10 97 0 35 4 63 10 63 6 0 10 25 10 55 0
                30 5 55 10 55 6 0 10 25 10 55 0 30 5 55 10 55 6 0 10 15 10 33 1 17 7 50 15
                72 8 22 15 52 15 68 0 15 5 27 10 27 6 0 10 16 10 35 0 19 5 35 10 35 6 0 10
                8 10 18 0 10 11 42 25 70 14 29 25 56 25 62 0 5 5 10 10 10 6 0 10 9 10 20 0
                11 4 20 8 20 4 0 16 15 27 33 10 17 31 44 47 59 15 14 28 29 28 33 0 8 26 35
                34 35 3 0 26 20 52 45 25 25 52 45 60 45 8 0 14 3 14 8 0 4 15 14 33 21 17 8
                38 21 45 28 7 7 22 13 33 13 10 0 19 5 19 10 0 6 11 10 25 10 14 0 25 5 25 10
                0 6 18 10 40 10 22 0 40 5 40 10 0 6 45 10 115 10 70 0 115 -4 115 -10z
                m-6890 -5962 c1 -50 26 -207 35 -216 4 -4 10 -1 12 6 6 15 113 17 113 2 0 -5
                9 -10 21 -10 11 0 26 -6 34 -12 7 -7 25 -22 41 -33 15 -11 33 -26 40 -32 7 -7
                17 -13 23 -13 6 0 28 -16 48 -35 20 -19 43 -35 50 -35 7 0 13 -4 13 -10 0 -5
                11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -8 0 -5 20
                -17 45 -28 25 -10 45 -22 45 -26 0 -4 11 -8 25 -8 14 0 25 -4 25 -10 0 -5 7
                -10 15 -10 8 0 38 -11 67 -25 28 -14 60 -25 70 -25 10 0 18 -4 18 -10 0 -5 11
                -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 19 -10 11 0 22 -4 26 -9 3 -5 19 -12
                35 -16 17 -4 30 -11 30 -16 0 -14 108 -11 112 3 5 14 81 13 86 -2 2 -5 19 -10
                38 -10 19 0 34 -4 34 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 12 -10
                26 -10 29 0 124 -28 139 -41 5 -5 24 -9 42 -9 18 0 33 -4 33 -10 0 -5 16 -10
                35 -10 19 0 35 -4 35 -10 0 -5 13 -10 29 -10 17 0 32 -4 35 -9 4 -5 24 -12 46
                -16 22 -4 42 -11 46 -16 3 -5 16 -9 29 -9 13 0 27 -4 30 -10 12 -20 67 -10
                110 21 l43 31 47 -21 c26 -12 56 -21 66 -21 10 0 21 -4 24 -10 3 -5 22 -10 41
                -10 19 0 34 -4 34 -10 0 -5 15 -10 34 -10 19 0 38 -4 41 -10 3 -5 18 -10 33
                -10 15 -1 38 -7 52 -15 14 -8 35 -14 48 -15 12 0 22 -4 22 -10 0 -5 9 -10 20
                -10 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -9 0 -5 8 -12 19 -16
                10 -3 33 -19 50 -35 17 -17 35 -30 40 -30 11 0 109 -96 136 -134 11 -16 26
                -34 33 -41 6 -8 12 -18 12 -24 0 -6 5 -11 10 -11 6 0 10 -7 10 -16 0 -8 7 -22
                15 -30 8 -9 15 -28 15 -44 0 -16 5 -32 10 -35 6 -3 10 -17 10 -31 0 -13 5 -24
                10 -24 6 0 10 -9 10 -20 0 -11 3 -20 8 -20 4 0 14 -13 23 -28 14 -26 14 -30 0
                -53 -9 -13 -19 -25 -23 -27 -5 -2 -8 -15 -8 -28 0 -13 -4 -24 -10 -24 -5 0
                -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -12 -11 -16 -25 -3 -14 -10 -25 -15
                -25 -5 0 -9 -9 -9 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -9 -10 -20 0 -11 -4 -20
                -10 -20 -5 0 -10 -7 -10 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -8 -10 -19 0 -10
                -7 -24 -15 -31 -8 -7 -15 -19 -15 -26 0 -8 -4 -14 -10 -14 -5 0 -10 -9 -10
                -20 0 -11 -4 -20 -10 -20 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -9 -25 -5 0 -17
                -20 -28 -45 -10 -25 -21 -45 -25 -45 -5 0 -8 -9 -8 -20 0 -11 -4 -20 -10 -20
                -5 0 -10 -9 -10 -20 0 -11 -4 -20 -8 -20 -10 0 -31 -53 -44 -110 -6 -25 -13
                -102 -15 -172 -2 -71 -8 -128 -14 -128 -5 0 -9 -16 -9 -35 0 -19 -4 -35 -10
                -35 -5 0 -10 -8 -10 -19 0 -10 -7 -24 -15 -31 -8 -7 -15 -17 -15 -22 0 -10
                -66 -78 -75 -78 -4 0 -21 -11 -39 -25 -18 -14 -38 -25 -44 -25 -7 0 -12 -4
                -12 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -6 -15 -13 0 -7 -9 -19 -20 -27 -11 -8
                -20 -22 -20 -32 0 -10 -4 -18 -9 -18 -5 0 -13 -10 -17 -22 -4 -13 -15 -30 -25
                -39 -11 -9 -19 -22 -19 -28 0 -18 -256 -271 -274 -271 -9 0 -16 -4 -16 -10 0
                -5 -8 -10 -17 -10 -22 -1 -53 -23 -53 -39 0 -6 -4 -11 -9 -11 -5 0 -14 -13
                -21 -29 -6 -16 -20 -37 -30 -46 -20 -18 -20 -18 -65 22 -7 7 -17 13 -22 13 -5
                0 -15 9 -23 20 -8 11 -19 20 -25 20 -6 0 -28 16 -48 35 -20 19 -44 35 -52 35
                -8 0 -15 4 -15 8 0 5 -11 15 -25 22 -14 7 -25 19 -25 27 0 7 -9 13 -20 13 -11
                0 -20 5 -20 10 0 6 -5 10 -10 10 -13 0 -51 37 -73 71 -11 18 -13 36 -8 71 11
                69 3 102 -34 139 -45 45 -62 59 -75 59 -5 0 -10 5 -10 10 0 6 -7 10 -15 10 -8
                0 -34 18 -57 40 -24 22 -51 43 -60 46 -10 3 -18 10 -18 15 0 5 -5 9 -10 9 -10
                0 -20 8 -85 68 -13 12 -29 22 -35 22 -5 0 -10 7 -10 15 0 8 -4 15 -10 15 -5 0
                -10 7 -10 15 0 8 -4 15 -10 15 -5 0 -10 7 -10 15 0 8 -4 15 -9 15 -18 0 -41
                88 -41 157 0 40 -4 75 -10 78 -5 3 -10 22 -10 41 0 19 -4 34 -10 34 -5 0 -10
                8 -10 18 0 15 -11 32 -60 89 -5 7 -10 15 -10 19 0 7 -25 30 -65 60 -15 10 -33
                25 -40 32 -8 6 -18 12 -24 12 -6 0 -11 5 -11 10 0 6 -7 10 -15 10 -9 0 -27 10
                -40 23 -40 37 -54 47 -65 47 -5 0 -10 5 -10 10 0 6 8 10 18 10 9 0 49 11 87
                25 39 13 84 25 102 25 17 0 35 5 38 10 3 6 31 10 61 10 30 0 54 5 54 10 0 6
                12 10 27 10 29 0 172 46 188 61 5 5 17 9 27 9 10 0 33 14 51 31 l32 32 -35 -8
                c-19 -3 -61 -9 -92 -12 -32 -3 -58 -9 -58 -14 0 -5 -31 -9 -70 -9 -40 0 -70
                -4 -70 -10 0 -6 -28 -10 -64 -10 -36 0 -68 -4 -71 -10 -3 -5 -23 -10 -43 -10
                -20 0 -62 -7 -92 -15 -30 -8 -72 -15 -92 -15 -21 0 -38 -4 -38 -10 0 -6 -28
                -10 -64 -10 -41 0 -66 -4 -68 -12 -6 -17 -610 -17 -616 0 -2 8 -28 12 -68 12
                -35 0 -64 4 -64 9 0 5 -28 11 -62 14 -35 4 -99 14 -143 23 -44 9 -108 18 -142
                21 -35 3 -63 9 -63 14 0 5 -29 9 -65 9 -37 0 -65 4 -65 10 0 6 -25 10 -55 10
                -30 0 -55 -3 -55 -6 0 -10 28 -34 39 -34 6 0 11 -4 11 -10 0 -5 7 -10 16 -10
                8 0 22 -7 30 -15 9 -8 24 -15 34 -15 10 0 22 -4 25 -10 3 -5 22 -10 41 -10 19
                0 34 -4 34 -10 0 -5 25 -10 55 -10 30 0 55 -4 55 -10 0 -6 29 -10 68 -10 78 0
                292 -31 292 -42 0 -5 -7 -8 -15 -8 -8 0 -15 -4 -15 -10 0 -5 -9 -10 -20 -10
                -11 0 -20 -4 -20 -8 0 -4 -15 -16 -32 -27 -18 -10 -40 -27 -49 -37 -9 -10 -22
                -18 -28 -18 -15 0 -141 -126 -141 -140 0 -6 -4 -10 -10 -10 -5 0 -10 -7 -10
                -15 0 -8 -4 -15 -10 -15 -5 0 -10 -8 -10 -19 0 -10 -7 -32 -15 -47 -8 -16 -15
                -39 -15 -51 0 -12 -4 -25 -10 -28 -5 -3 -10 -44 -10 -91 0 -49 -4 -84 -10 -84
                -5 0 -10 -13 -10 -30 0 -16 -4 -30 -8 -30 -4 0 -16 -14 -27 -32 -20 -35 -112
                -128 -126 -128 -5 0 -23 -13 -40 -30 -17 -16 -40 -32 -50 -35 -11 -4 -19 -11
                -19 -16 0 -5 -9 -9 -20 -9 -11 0 -20 -4 -20 -10 0 -5 -5 -10 -10 -10 -14 0
                -60 -46 -60 -60 0 -5 -3 -10 -7 -10 -17 0 -43 -64 -43 -105 0 -24 -4 -47 -10
                -50 -5 -3 -10 -19 -10 -36 0 -16 -4 -29 -8 -29 -5 0 -14 -16 -22 -35 -8 -19
                -18 -35 -22 -35 -5 0 -20 -10 -33 -22 -44 -42 -54 -48 -75 -48 -11 0 -20 -4
                -20 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -6 -10 -13 -10 -7 0
                -30 -16 -50 -35 -20 -19 -40 -35 -43 -35 -3 0 -12 -7 -21 -15 -15 -16 -54 -11
                -61 6 -2 5 -10 9 -18 9 -8 0 -14 5 -14 10 0 6 -5 10 -11 10 -6 0 -25 16 -43
                35 -19 19 -39 35 -46 35 -6 0 -31 20 -56 45 -24 25 -48 45 -53 45 -13 0 -181
                168 -181 181 0 5 -18 28 -39 50 -22 21 -43 48 -46 59 -4 11 -11 20 -16 20 -5
                0 -9 5 -9 10 0 6 -10 22 -22 35 -34 36 -48 53 -48 60 0 3 -20 26 -45 51 -25
                24 -45 46 -45 49 0 3 -9 14 -19 24 -25 25 -38 74 -47 169 -4 40 -11 75 -15 78
                -5 3 -9 23 -9 45 0 21 -4 39 -10 39 -5 0 -10 15 -10 34 0 19 -4 38 -10 41 -5
                3 -10 17 -10 29 0 13 -11 49 -25 80 -14 31 -25 63 -25 71 0 8 -4 15 -10 15 -5
                0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 6 -10 14 0 8 -11 34 -25 57 -14
                24 -25 52 -25 62 0 9 -4 17 -10 17 -5 0 -10 11 -10 25 0 14 -3 25 -7 25 -5 0
                -16 20 -26 45 -11 25 -23 45 -28 45 -5 0 -9 9 -9 20 0 11 -4 20 -10 20 -5 0
                -10 7 -10 15 0 8 -4 15 -10 15 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10
                6 -10 14 0 8 -7 22 -17 31 -10 10 -12 19 -6 23 5 4 18 22 28 40 11 17 23 32
                27 32 4 0 8 7 8 15 0 8 5 15 10 15 15 0 13 107 -2 114 -10 5 -10 7 0 12 6 3
                12 12 12 21 0 8 6 20 13 27 25 27 57 66 57 71 0 10 172 175 182 175 6 0 18 8
                27 18 9 10 23 22 31 25 8 4 29 16 45 26 17 11 38 20 48 20 9 1 17 6 17 11 0 6
                11 10 25 10 14 0 25 5 25 10 0 6 8 10 19 10 10 0 35 7 54 15 20 8 48 15 62 15
                14 0 25 5 25 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 15 10 34 10 19 0 38 5
                41 10 9 14 195 13 195 -1 0 -12 88 -7 160 10 25 5 69 16 98 23 28 6 52 16 52
                20 0 4 16 8 35 8 19 0 35 5 35 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 14 10
                30 10 17 0 30 5 30 10 0 6 10 10 23 10 12 1 33 7 47 15 14 8 35 14 48 15 12 0
                22 5 22 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 11 10 25 10 14 0 33 4 43 9
                46 23 95 41 112 41 11 0 20 5 20 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 14
                10 30 10 17 0 30 4 30 9 0 5 16 12 35 15 19 4 35 11 35 16 0 6 16 10 35 10 19
                0 35 5 35 10 0 6 14 10 30 10 17 0 30 5 30 10 0 6 10 10 21 10 24 0 119 49
                119 62 0 4 7 8 16 8 9 0 44 29 79 65 35 36 69 65 74 65 6 0 11 4 11 8 0 5 18
                17 40 28 22 10 40 22 40 27 0 4 7 7 15 7 8 0 15 5 15 10 0 6 10 22 23 35 41
                44 47 54 47 75 0 11 5 20 10 20 6 0 10 20 10 45 0 25 5 45 10 45 6 0 10 -15
                10 -32z"/>
                <path d="M11820 19245 c0 -177 4 -275 10 -275 6 0 10 -11 10 -25 0 -14 5 -25
                10 -25 6 0 10 -7 10 -15 0 -8 11 -25 25 -39 14 -14 25 -30 25 -36 0 -22 75
                -76 85 -61 3 5 1 12 -5 16 -5 3 -10 18 -10 33 0 26 -22 135 -41 198 -5 17 -9
                47 -9 67 0 20 -4 37 -10 37 -5 0 -10 25 -10 55 0 30 -4 55 -10 55 -5 0 -10 17
                -10 38 0 20 -7 59 -15 86 -8 27 -15 62 -15 78 0 15 -4 28 -10 28 -5 0 -10 14
                -10 30 0 17 -4 30 -10 30 -6 0 -10 -98 -10 -275z"/>
                <path d="M17335 13678 c-27 -5 -79 -15 -115 -23 -36 -9 -77 -15 -92 -15 -15 0
                -30 -4 -33 -10 -3 -5 -26 -10 -51 -10 -24 0 -44 -4 -44 -10 0 -5 -25 -10 -55
                -10 -30 0 -55 -4 -55 -9 0 -5 -17 -11 -37 -14 -21 -3 -65 -13 -98 -22 -33 -9
                -81 -19 -107 -22 -27 -3 -48 -9 -48 -14 0 -5 -20 -9 -45 -9 -25 0 -45 -4 -45
                -9 0 -5 -17 -11 -37 -14 -21 -3 -65 -13 -98 -22 -33 -10 -77 -19 -97 -22 -21
                -3 -38 -9 -38 -14 0 -5 -25 -9 -55 -9 -30 0 -55 -4 -55 -10 0 -5 -16 -10 -36
                -10 -20 0 -59 -7 -88 -16 -96 -30 -112 -34 -149 -34 -20 0 -37 -4 -37 -10 0
                -5 -18 -10 -40 -10 -22 0 -40 -4 -40 -10 0 -5 -11 -10 -25 -10 -13 0 -50 -11
                -81 -25 -31 -14 -63 -25 -70 -25 -8 0 -14 -4 -14 -10 0 -5 -11 -10 -25 -10
                -14 0 -25 -4 -25 -8 0 -4 -15 -16 -32 -27 -18 -10 -40 -27 -49 -37 -9 -10 -23
                -18 -30 -18 -8 0 -21 -9 -29 -20 -8 -11 -20 -20 -27 -20 -7 0 -13 -5 -13 -10
                0 -6 -10 -22 -22 -35 -38 -40 -48 -54 -48 -65 0 -5 -4 -10 -10 -10 -5 0 -10
                -9 -10 -20 0 -11 -4 -20 -8 -20 -12 0 -62 -93 -62 -114 0 -9 -4 -16 -10 -16
                -5 0 -10 -15 -10 -34 0 -19 -6 -37 -12 -39 -10 -4 -9 -8 2 -17 17 -12 229 -4
                268 11 13 5 37 9 53 9 16 0 29 5 29 10 0 6 20 10 45 10 25 0 45 5 45 10 0 6
                17 10 37 10 20 0 50 4 67 9 100 30 146 41 174 41 18 0 32 5 32 10 0 6 20 10
                45 10 25 0 45 5 45 10 0 6 20 10 45 10 25 0 45 5 45 10 0 6 15 10 33 10 17 1
                50 7 72 15 22 8 52 15 68 15 15 0 27 5 27 10 0 6 20 10 45 10 25 0 45 5 45 10
                0 6 20 10 45 10 25 0 45 5 45 10 0 6 12 10 26 10 15 0 49 7 78 16 96 30 112
                34 149 34 20 0 37 4 37 9 0 5 17 11 38 14 20 3 64 12 97 22 33 9 77 19 98 22
                20 3 37 9 37 14 0 5 20 9 45 9 25 0 45 4 45 9 0 5 17 11 38 15 20 3 62 9 92
                13 30 5 60 12 67 16 39 24 526 48 568 28 11 -5 48 -12 83 -15 35 -3 71 -10 82
                -16 10 -5 32 -10 49 -10 17 0 31 -4 31 -10 0 -5 16 -10 35 -10 19 0 35 -4 35
                -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -8
                0 -5 20 -17 45 -28 25 -10 45 -22 45 -26 0 -4 7 -8 16 -8 9 0 31 -16 50 -35
                18 -19 38 -35 44 -35 12 0 83 -72 115 -116 26 -35 92 -104 100 -104 4 0 13 -6
                20 -12 33 -30 45 -38 55 -38 5 0 10 -6 10 -12 0 -7 5 -5 11 6 24 40 -5 296
                -33 296 -4 0 -8 11 -8 25 0 14 -4 25 -10 25 -5 0 -10 9 -10 20 0 11 -4 20 -8
                20 -4 0 -16 15 -27 33 -10 17 -27 39 -37 48 -10 9 -18 19 -18 23 0 11 -48 56
                -60 56 -5 0 -10 5 -10 10 0 11 -45 60 -54 60 -3 0 -27 20 -53 45 -25 25 -52
                45 -58 45 -6 0 -17 9 -25 20 -8 11 -19 20 -25 20 -6 0 -22 11 -37 25 -15 14
                -34 25 -43 25 -8 0 -15 5 -15 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -9
                10 -20 10 -11 0 -20 5 -20 10 0 6 -8 10 -17 10 -10 0 -27 7 -37 15 -11 8 -28
                15 -38 15 -10 0 -18 5 -18 10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -11
                10 -25 10 -14 0 -33 4 -43 9 -9 5 -53 17 -97 26 -44 9 -99 21 -122 26 -52 11
                -321 9 -388 -3z"/>
                <path d="M10818 13670 c-48 -4 -93 -12 -100 -16 -12 -8 -71 -21 -140 -31 -21
                -3 -38 -9 -38 -14 0 -5 -16 -9 -35 -9 -19 0 -35 -4 -35 -10 0 -5 -8 -10 -18
                -10 -10 0 -42 -11 -70 -25 -29 -14 -59 -25 -67 -25 -8 0 -15 -4 -15 -10 0 -5
                -11 -10 -25 -10 -14 0 -25 -4 -25 -8 0 -5 -16 -17 -35 -28 -19 -10 -35 -22
                -35 -26 0 -5 -9 -8 -20 -8 -11 0 -20 -4 -20 -10 0 -5 -5 -10 -11 -10 -6 0 -16
                -6 -24 -12 -7 -7 -25 -22 -41 -33 -35 -25 -174 -160 -174 -169 0 -4 -10 -18
                -22 -31 -40 -42 -48 -54 -48 -70 0 -8 -4 -15 -10 -15 -5 0 -10 -7 -10 -15 0
                -8 -4 -15 -10 -15 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -9 -25 -5 0 -12 -13 -16
                -30 -4 -16 -11 -30 -16 -30 -5 0 -9 -11 -9 -25 0 -14 -4 -25 -10 -25 -5 0 -10
                -20 -10 -45 0 -25 -4 -45 -10 -45 -5 0 -10 -18 -10 -40 0 -22 5 -40 10 -40 6
                0 10 -7 10 -15 0 -45 148 13 170 66 7 16 16 29 21 29 5 0 9 5 9 10 0 11 10 25
                48 65 12 13 22 27 22 30 0 8 47 55 55 55 3 0 17 10 30 23 40 37 54 47 65 47 5
                0 10 5 10 10 0 6 9 10 20 10 11 0 20 3 20 8 0 10 58 42 76 42 8 0 14 5 14 10
                0 6 9 10 20 10 11 0 20 5 20 10 0 6 16 10 35 10 19 0 35 4 35 9 0 5 17 11 38
                14 41 6 123 22 190 37 54 13 316 13 356 1 17 -5 69 -15 116 -21 47 -7 110 -16
                140 -22 30 -5 76 -12 103 -15 26 -2 47 -9 47 -14 0 -5 20 -9 45 -9 25 0 45 -4
                45 -9 0 -5 21 -11 48 -14 61 -7 152 -27 174 -38 10 -5 38 -9 63 -9 25 0 45 -4
                45 -10 0 -5 19 -10 42 -10 23 0 55 -4 72 -9 54 -16 180 -41 208 -41 15 0 30
                -4 33 -10 3 -5 28 -10 56 -10 27 0 49 -4 49 -10 0 -5 25 -10 55 -10 30 0 55
                -4 55 -9 0 -5 21 -11 48 -14 71 -8 179 -31 188 -40 4 -4 31 -7 61 -7 29 0 53
                -4 53 -10 0 -6 27 -10 60 -10 33 0 60 -4 60 -10 0 -5 15 -10 33 -10 19 0 56
                -7 83 -15 27 -8 63 -15 81 -15 17 0 35 -4 38 -10 3 -5 28 -10 55 -10 l50 0 -7
                33 c-3 17 -10 34 -15 35 -4 2 -8 15 -8 28 0 13 -4 24 -10 24 -5 0 -10 14 -10
                30 0 17 -3 30 -8 30 -4 0 -14 15 -21 33 -8 17 -20 37 -25 44 -28 31 -36 43
                -36 48 0 13 -132 145 -145 145 -3 0 -11 5 -18 10 -34 29 -90 60 -107 60 -11 0
                -20 5 -20 10 0 6 -11 10 -25 10 -14 0 -25 4 -25 9 0 5 -15 11 -32 14 -61 10
                -133 29 -143 38 -5 5 -28 9 -52 9 -24 0 -43 5 -43 10 0 6 -20 10 -45 10 -25 0
                -45 5 -45 10 0 6 -22 10 -48 10 -27 0 -52 3 -56 8 -8 7 -102 29 -168 39 -21 3
                -38 9 -38 14 0 5 -25 9 -55 9 -30 0 -55 4 -55 9 0 5 -21 11 -47 14 -27 3 -77
                13 -113 22 -36 9 -84 19 -107 22 -24 3 -43 9 -43 14 0 5 -22 9 -50 9 -27 0
                -50 5 -50 10 0 6 -17 10 -38 10 -21 0 -42 4 -48 9 -5 5 -29 11 -54 14 -25 3
                -65 10 -90 15 -63 15 -348 22 -452 12z"/>
                <path d="M11485 12620 c-3 -5 -35 -10 -71 -10 -36 0 -64 -4 -64 -10 0 -5 -20
                -10 -45 -10 -25 0 -45 -4 -45 -10 0 -5 -9 -10 -20 -10 -17 0 -66 -18 -112 -41
                -10 -5 -25 -9 -33 -9 -8 0 -15 -4 -15 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4
                -25 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -3 -20 -7 0 -9 -57 -43 -72 -43 -10 0
                -38 -25 -38 -34 0 -3 9 -6 20 -6 11 0 20 5 20 10 0 6 11 10 25 10 14 0 25 5
                25 10 0 6 14 10 30 10 17 0 30 4 30 8 0 10 103 42 135 42 14 0 25 5 25 10 0 6
                20 10 45 10 25 0 45 4 45 9 0 5 21 11 48 14 26 3 70 10 97 16 65 13 427 13
                485 0 25 -6 60 -13 78 -16 17 -3 32 -9 32 -14 0 -5 16 -9 35 -9 19 0 35 -4 35
                -10 0 -5 8 -10 18 -10 10 0 42 -11 70 -25 29 -14 56 -25 62 -25 5 0 10 -4 10
                -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -9
                0 -5 20 -17 45 -28 25 -10 45 -21 45 -25 0 -5 9 -8 20 -8 11 0 20 -4 20 -10 0
                -5 6 -10 14 -10 18 0 76 -32 76 -42 0 -5 9 -8 20 -8 11 0 20 -4 20 -10 0 -5
                11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 2 20 5 0 10 -102
                105 -112 105 -5 0 -25 16 -44 35 -18 19 -39 35 -47 35 -7 0 -19 9 -27 20 -8
                11 -21 20 -30 20 -8 0 -28 11 -44 25 -16 14 -35 25 -43 25 -7 0 -13 5 -13 10
                0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -6 10 -14 10 -8 0 -29 8 -48 17 -62
                31 -68 33 -93 33 -14 0 -25 5 -25 10 0 6 -20 10 -45 10 -25 0 -45 5 -45 10 0
                6 -24 10 -54 10 -30 0 -58 5 -61 10 -4 6 -82 10 -200 10 -118 0 -196 -4 -200
                -10z"/>
                <path d="M16690 12600 c0 -6 -37 -10 -90 -10 -49 0 -90 -4 -90 -9 0 -5 -21
                -11 -47 -14 -27 -2 -75 -12 -108 -21 -33 -10 -72 -20 -87 -23 -16 -3 -28 -9
                -28 -14 0 -5 -16 -9 -35 -9 -19 0 -35 -4 -35 -10 0 -5 -7 -10 -17 -10 -22 0
                -93 -32 -93 -42 0 -4 -7 -8 -15 -8 -8 0 -15 -4 -15 -10 0 -5 -7 -10 -15 -10
                -9 0 -31 -15 -50 -32 -49 -47 -63 -58 -75 -58 -5 0 -10 -9 -10 -20 0 -11 -4
                -20 -8 -20 -5 0 -15 -11 -22 -25 -7 -14 -19 -25 -26 -25 -10 0 -23 -29 -24
                -52 0 -4 12 -8 28 -10 19 -2 28 -9 30 -25 2 -13 -1 -23 -7 -23 -6 0 -11 -8
                -11 -19 0 -10 -7 -24 -15 -31 -8 -7 -15 -19 -15 -26 0 -8 -4 -14 -10 -14 -5 0
                -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -7 -10 -15 0 -8 -4 -15 -10 -15
                -5 0 -10 -9 -10 -19 0 -11 -4 -23 -10 -26 -5 -3 -10 -16 -10 -27 0 -18 5 -16
                34 16 19 20 37 36 40 36 7 0 47 34 82 68 13 12 26 22 29 22 3 0 21 15 40 33
                47 44 63 57 72 57 5 0 15 9 23 20 8 11 20 20 26 20 6 0 17 7 24 15 7 8 21 15
                31 15 11 0 19 5 19 10 0 6 9 10 20 10 11 0 20 5 20 10 0 6 16 10 35 10 19 0
                35 5 35 10 0 6 11 10 25 10 l25 0 0 -100 c0 -60 4 -100 10 -100 6 0 10 -13 10
                -30 0 -16 5 -30 10 -30 6 0 10 -5 10 -10 0 -11 10 -25 48 -65 12 -13 22 -29
                22 -35 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 6 -10 13 -10 7 0 20 -9 30
                -20 16 -19 16 -20 -5 -20 -37 0 -138 24 -138 32 0 4 -16 8 -35 8 -19 0 -35 5
                -35 10 0 6 -13 10 -28 10 -15 0 -32 4 -37 9 -20 17 -158 33 -188 22 -16 -6
                -37 -11 -48 -11 -19 0 -49 -21 -49 -34 0 -3 16 -6 35 -6 19 0 35 -4 35 -10 0
                -5 11 -10 24 -10 13 0 43 -7 66 -15 23 -8 55 -15 71 -15 15 0 31 -4 34 -10 3
                -5 26 -10 51 -10 24 0 44 -4 44 -10 0 -5 25 -10 55 -10 30 0 55 -4 55 -10 0
                -5 14 -10 32 -10 32 0 83 -8 228 -36 42 -8 112 -14 158 -14 48 0 82 -4 82 -10
                0 -6 65 -10 175 -10 110 0 175 4 175 10 0 6 29 10 68 10 37 0 110 10 162 21
                52 12 112 23 133 26 20 3 37 9 37 14 0 5 9 9 20 9 11 0 20 5 20 10 0 6 -11 10
                -24 10 -37 0 -56 10 -56 31 0 13 7 19 24 19 14 0 28 5 31 10 3 6 17 10 31 10
                13 0 24 5 24 10 0 6 6 10 13 10 20 0 77 54 77 73 0 13 -9 17 -35 17 -19 0 -35
                -4 -35 -10 0 -5 -16 -10 -35 -10 -19 0 -43 -4 -53 -9 -21 -10 -95 -31 -140
                -38 -18 -3 -35 -9 -38 -14 -3 -5 -23 -9 -45 -9 -21 0 -39 -4 -39 -10 0 -5 -18
                -10 -39 -10 -22 0 -42 -4 -45 -9 -3 -5 -26 -12 -51 -15 -24 -4 -47 -11 -50
                -17 -4 -5 -21 -9 -39 -9 -17 0 -37 -5 -44 -12 -9 -9 -15 -9 -24 0 -7 7 -8 12
                -2 12 5 0 18 23 29 50 11 28 23 50 27 50 4 0 8 9 8 20 0 11 5 20 10 20 6 0 10
                6 10 12 0 16 53 122 63 126 4 2 7 12 7 23 0 10 5 19 10 19 6 0 10 6 10 13 0 6
                10 31 22 55 17 30 29 42 45 42 13 0 23 -4 23 -10 0 -5 11 -10 25 -10 14 0 25
                -4 25 -10 0 -5 8 -10 18 -10 10 0 27 -7 38 -15 10 -8 27 -15 37 -15 9 0 17 -4
                17 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 6 -10 12 -10 16 0 122 -53
                126 -62 2 -5 17 -8 33 -8 16 0 29 -4 29 -10 0 -5 13 -10 29 -10 17 0 32 -4 35
                -9 3 -5 23 -11 43 -14 21 -2 66 -10 101 -17 34 -7 74 -9 89 -5 l26 6 -32 20
                c-17 10 -38 19 -46 19 -8 0 -15 4 -15 9 0 5 -16 17 -36 27 -20 11 -44 23 -55
                29 -10 5 -19 13 -19 17 0 5 -7 8 -15 8 -8 0 -15 5 -15 10 0 6 -9 10 -20 10
                -11 0 -20 5 -20 10 0 6 -9 10 -20 10 -11 0 -20 4 -20 10 0 5 -11 12 -25 16
                -14 3 -25 10 -25 15 0 5 -9 9 -20 9 -11 0 -20 5 -20 10 0 6 -11 10 -25 10 -14
                0 -25 3 -25 8 0 4 -20 16 -45 27 -25 11 -45 23 -45 28 0 4 -11 7 -25 7 -14 0
                -25 5 -25 10 0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -9 10 -19 10 -11 0
                -23 5 -26 10 -3 6 -14 10 -23 10 -9 0 -30 7 -46 15 -15 8 -41 15 -57 15 -16 0
                -29 5 -29 10 0 6 -22 10 -50 10 -27 0 -50 4 -50 9 0 14 -115 22 -382 27 -160
                3 -238 1 -238 -6 0 -6 -24 -10 -55 -10 -30 0 -55 -4 -55 -10 0 -5 -16 -10 -35
                -10 -19 0 -35 -4 -35 -10 0 -5 -9 -10 -20 -10 -22 0 -133 -50 -138 -62 -2 -4
                -15 -8 -28 -8 -13 0 -24 -3 -24 -8 0 -4 -14 -13 -31 -21 -17 -7 -41 -24 -54
                -37 -13 -13 -29 -24 -35 -24 -5 0 -10 -4 -10 -9 0 -7 -70 -41 -85 -41 -3 0 -5
                11 -5 25 0 14 5 25 10 25 6 0 22 10 35 23 38 35 54 47 62 47 5 0 15 9 23 20 8
                11 22 20 32 20 10 0 18 3 18 8 0 4 16 16 35 26 19 11 35 23 35 28 0 4 11 8 25
                8 14 0 25 5 25 10 0 6 9 10 20 10 11 0 20 4 20 10 0 5 16 12 35 16 19 3 35 10
                35 15 0 5 14 9 30 9 17 0 30 5 30 10 0 6 20 10 45 10 25 0 45 4 45 9 0 5 21
                11 48 14 26 3 95 10 153 17 85 10 127 10 210 0 57 -7 130 -15 162 -17 31 -3
                57 -9 57 -14 0 -5 20 -9 45 -9 25 0 45 -4 45 -10 0 -5 12 -10 26 -10 30 0 127
                -31 132 -42 2 -5 17 -8 33 -8 16 0 29 -4 29 -10 0 -5 11 -10 25 -10 14 0 25
                -4 25 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 8 -10 19 -10 10 0 24 -7
                31 -15 7 -8 23 -15 36 -15 13 0 24 -4 24 -10 0 -5 9 -10 20 -10 11 0 20 -4 20
                -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 10 -10 23 -9 l22 0 -22 11
                c-13 6 -23 15 -23 20 0 4 -7 8 -15 8 -8 0 -15 5 -15 10 0 6 -5 10 -12 10 -6 0
                -26 11 -44 25 -18 14 -37 25 -43 25 -6 0 -11 5 -11 10 0 6 -9 10 -20 10 -11 0
                -20 4 -20 8 0 4 -20 16 -45 26 -25 11 -45 23 -45 28 0 4 -11 8 -25 8 -14 0
                -25 5 -25 10 0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -8 10 -17 10 -10 0
                -49 12 -88 25 -38 14 -82 25 -97 25 -16 0 -28 5 -28 10 0 6 -37 10 -90 10 -53
                0 -90 4 -90 10 0 6 -43 10 -110 10 -67 0 -110 -4 -110 -10z m385 -308 c6 -4
                18 -22 28 -40 18 -32 18 -34 1 -60 -26 -40 -40 -52 -62 -52 -11 0 -22 -6 -24
                -12 -6 -17 -38 14 -38 36 0 9 -4 16 -10 16 -5 0 -10 11 -10 25 0 14 -4 25 -10
                25 -19 0 -10 39 10 45 11 3 20 11 20 16 0 11 80 12 95 1z"/>
                <path d="M11385 12440 c-11 -5 -48 -9 -82 -9 -35 -1 -63 -5 -63 -11 0 -5 -20
                -10 -45 -10 -25 0 -45 -4 -45 -10 0 -5 -8 -10 -17 -10 -20 0 -108 -32 -119
                -43 -4 -4 -16 -7 -26 -7 -10 0 -18 -4 -18 -10 0 -5 -11 -10 -25 -10 -14 0 -25
                -4 -25 -8 0 -4 -25 -21 -55 -37 -30 -17 -55 -33 -55 -37 0 -5 -9 -8 -20 -8
                -11 0 -20 -4 -20 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -9 -10
                -19 -10 -10 0 -21 -7 -25 -15 -3 -8 -12 -15 -21 -15 -8 0 -15 -4 -15 -10 0 -5
                -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10
                0 -5 -6 -10 -14 -10 -8 0 -21 -6 -28 -13 -7 -7 -28 -20 -45 -28 -18 -7 -33
                -17 -33 -21 0 -5 -6 -8 -13 -8 -8 0 -28 -7 -46 -16 -54 -27 -23 -37 108 -37
                98 0 122 3 136 16 9 10 23 17 31 17 8 0 14 5 14 10 0 6 7 10 16 10 9 0 35 20
                60 45 24 25 48 45 54 45 5 0 10 5 10 10 0 6 9 10 20 10 11 0 20 3 20 8 0 12
                71 34 114 36 36 1 40 -2 52 -34 7 -19 13 -54 13 -77 1 -24 6 -43 11 -43 6 0
                10 -16 10 -35 0 -19 5 -35 10 -35 6 0 10 -7 10 -15 0 -8 25 -39 55 -70 30 -30
                55 -64 55 -75 0 -18 -7 -20 -55 -20 -30 0 -55 5 -55 10 0 6 -7 10 -16 10 -8 0
                -25 5 -37 12 -32 18 -89 38 -109 38 -10 0 -18 5 -18 10 0 6 -8 10 -18 10 -10
                0 -42 11 -70 25 -88 43 -131 34 -212 -43 -29 -27 -32 -34 -20 -42 8 -5 23 -10
                33 -10 9 0 17 -4 17 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 11 -10 24
                -10 14 0 28 -4 31 -10 3 -5 15 -10 26 -10 10 0 27 -4 37 -9 52 -26 96 -41 122
                -41 17 0 30 -4 30 -10 0 -6 27 -10 60 -10 33 0 60 -4 60 -10 0 -6 72 -10 195
                -10 123 0 195 4 195 10 0 6 43 10 110 10 67 0 110 4 110 10 0 6 33 10 78 10
                42 0 93 4 112 10 19 5 87 15 150 21 63 6 149 16 190 21 41 5 112 11 158 14 45
                3 82 10 82 15 0 5 29 9 64 9 81 0 96 6 96 37 l0 25 -112 -6 c-62 -3 -183 -8
                -268 -11 -85 -3 -197 -8 -247 -11 l-93 -6 0 31 c0 17 4 31 9 31 5 0 12 16 15
                35 4 19 11 35 16 35 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 14 10 30 0 17 5
                30 10 30 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 8 10 18 0 10 7 27 15 38 8
                10 15 27 15 37 0 9 5 17 10 17 6 0 10 9 10 20 0 16 7 20 35 20 19 0 35 -4 35
                -10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 9 -10 19 -10 11 0 23 -4 26
                -10 3 -5 15 -10 26 -10 10 0 19 -4 19 -10 0 -5 11 -12 25 -16 14 -3 25 -10 25
                -15 0 -5 9 -9 20 -9 11 0 20 -4 20 -10 0 -5 5 -10 11 -10 6 0 16 -6 24 -12 7
                -7 25 -22 41 -33 15 -11 33 -26 40 -32 7 -7 17 -13 23 -13 13 0 201 -187 201
                -200 0 -7 23 -20 36 -20 2 0 4 14 4 30 0 17 -4 30 -10 30 -5 0 -10 9 -10 20 0
                17 -22 46 -78 102 -71 71 -153 148 -157 148 -3 0 -11 5 -18 10 -56 47 -74 60
                -84 60 -7 0 -13 5 -13 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -6 10 -14
                10 -18 0 -76 32 -76 43 0 4 -9 7 -20 7 -11 0 -20 5 -20 10 0 6 -11 10 -25 10
                -14 0 -25 5 -25 10 0 6 -7 10 -15 10 -8 0 -23 4 -33 9 -46 23 -95 41 -112 41
                -11 0 -20 5 -20 10 0 6 -20 10 -45 10 -25 0 -45 4 -45 9 0 5 -28 12 -62 16
                -106 11 -462 15 -483 5z m-9 -204 c23 -24 18 -83 -11 -112 -32 -32 -92 -57
                -119 -50 -39 10 -76 51 -76 85 0 17 5 31 10 31 6 0 10 9 10 20 0 15 7 20 25
                20 14 0 25 5 25 10 0 16 119 12 136 -4z"/>
                <path d="M13190 9120 c0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -5 -10
                -11 -10 -11 0 -117 -105 -156 -156 -13 -15 -23 -34 -23 -41 0 -7 -4 -13 -10
                -13 -5 0 -10 -13 -10 -30 0 -16 -4 -30 -9 -30 -19 0 -39 -226 -22 -243 6 -6
                11 -30 11 -54 0 -24 5 -43 10 -43 6 0 10 -13 10 -30 0 -16 5 -30 10 -30 6 0
                10 -7 10 -15 0 -8 11 -25 25 -39 14 -14 25 -28 25 -32 0 -11 67 -74 79 -74 6
                0 11 -4 11 -8 0 -22 114 -62 178 -62 28 0 52 -4 52 -10 0 -5 7 -10 15 -10 21
                0 19 13 -6 30 -12 8 -27 20 -33 26 -6 5 -26 17 -43 25 -18 7 -33 17 -33 20 0
                4 -13 12 -29 19 -16 6 -39 22 -52 36 -12 13 -27 24 -33 24 -6 0 -22 14 -36 32
                -14 17 -31 37 -37 44 -7 7 -13 17 -13 23 0 6 -4 11 -10 11 -5 0 -10 10 -10 23
                0 13 -5 28 -12 35 -16 16 -15 255 1 260 6 2 11 17 11 33 0 16 5 29 10 29 6 0
                10 11 10 25 0 14 5 25 10 25 6 0 10 9 10 20 0 11 4 20 9 20 5 0 12 8 15 18 4
                10 14 27 24 38 9 10 30 37 46 59 17 22 38 47 48 56 20 18 23 29 8 29 -5 0 -10
                -4 -10 -10z"/>
                <path d="M15480 9114 c0 -9 8 -24 19 -33 10 -9 21 -26 25 -38 4 -13 11 -23 15
                -23 4 0 13 -16 21 -35 8 -19 17 -35 22 -35 4 0 8 -9 8 -20 0 -11 5 -20 10 -20
                6 0 10 -10 10 -23 0 -13 3 -27 7 -31 10 -10 42 -137 43 -169 0 -37 -32 -157
                -42 -157 -4 0 -8 -10 -8 -23 0 -12 -9 -29 -20 -37 -11 -8 -20 -19 -20 -25 0
                -11 -74 -95 -84 -95 -7 0 -24 -13 -61 -47 -13 -13 -29 -23 -35 -23 -12 0 -70
                -57 -70 -69 0 -12 88 -2 138 16 23 9 42 20 42 24 0 5 9 9 20 9 11 0 20 5 20
                10 0 6 5 10 11 10 11 0 39 24 39 34 0 4 14 20 30 38 34 35 60 83 60 110 0 10
                5 18 10 18 6 0 10 15 10 34 0 19 5 36 12 38 17 6 18 280 1 285 -7 3 -13 20
                -13 39 0 19 -4 34 -10 34 -5 0 -10 5 -10 12 0 6 -11 26 -25 44 -14 18 -25 36
                -25 39 0 4 -15 20 -32 36 -49 44 -56 49 -65 49 -5 0 -15 9 -23 20 -17 24 -30
                26 -30 4z"/>
                <path d="M15170 8520 c-35 -21 -84 -40 -102 -40 -10 0 -18 -4 -18 -10 0 -5 -9
                -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -5 -10 -10 -10 -10 0 -22 -8 -55 -37
                -7 -7 -18 -13 -24 -13 -6 0 -11 -4 -11 -10 0 -5 -7 -10 -16 -10 -9 0 -24 -8
                -33 -18 -9 -10 -34 -31 -56 -48 -22 -16 -53 -41 -69 -56 -16 -16 -33 -28 -37
                -28 -4 0 -19 -11 -33 -25 -14 -14 -29 -25 -35 -25 -14 0 -71 -34 -71 -42 0 -5
                -9 -8 -20 -8 -11 0 -20 -4 -20 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4 -25 -9
                0 -20 -265 -40 -283 -22 -6 6 -26 11 -44 11 -18 0 -33 5 -33 10 0 6 -10 10
                -22 10 -23 0 -130 49 -136 63 -2 4 -15 7 -28 7 -13 0 -24 5 -24 10 0 6 -9 10
                -20 10 -11 0 -20 5 -20 10 0 6 -8 10 -17 10 -10 0 -27 7 -37 15 -11 8 -26 15
                -34 15 -15 0 -92 79 -92 95 0 8 -47 55 -55 55 -6 0 -20 11 -50 38 -7 6 -21 12
                -29 12 -9 0 -16 5 -16 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -33 10
                -80 10 -47 0 -80 -4 -80 -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 9 -10
                20 -10 11 0 20 -4 20 -10 0 -5 8 -10 19 -10 10 0 24 -6 30 -13 6 -8 29 -20 51
                -27 22 -7 40 -17 40 -22 0 -4 9 -8 20 -8 11 0 20 -4 20 -10 0 -5 6 -10 12 -10
                16 0 122 -53 126 -62 2 -5 12 -8 23 -8 14 0 19 -7 19 -25 0 -14 5 -25 10 -25
                6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -16 0 -35 126 -124 176
                -124 13 0 24 -4 24 -10 0 -6 27 -10 60 -10 33 0 60 -4 60 -10 0 -6 58 -10 155
                -10 97 0 155 4 155 10 0 6 20 10 45 10 25 0 45 5 45 10 0 6 10 10 23 10 12 0
                42 11 66 25 23 14 49 25 57 25 8 0 14 5 14 10 0 6 9 10 20 10 11 0 20 4 20 9
                0 5 8 12 19 16 10 3 33 19 50 35 17 17 33 30 36 30 7 0 26 16 70 58 19 17 37
                32 40 32 3 0 17 10 30 23 40 37 54 47 65 47 5 0 10 5 10 10 0 6 9 10 20 10 11
                0 20 4 20 8 0 12 93 62 114 62 9 0 16 5 16 10 0 6 20 10 45 10 25 0 45 5 45
                10 0 6 11 10 25 10 29 0 33 17 8 36 -20 15 -110 18 -133 4z"/>
                <path d="M7538 12882 c-16 -2 -28 -9 -28 -18 0 -8 -4 -14 -10 -14 -5 0 -10
                -14 -10 -31 0 -26 3 -30 18 -23 30 13 112 17 112 5 0 -6 7 -11 15 -11 8 0 15
                -4 15 -10 0 -5 7 -10 16 -10 15 0 44 -23 44 -35 0 -8 27 -35 35 -35 8 0 55
                -47 55 -55 0 -7 14 -24 48 -60 12 -13 22 -29 22 -35 0 -5 5 -10 10 -10 6 0 10
                -9 10 -20 0 -11 3 -20 8 -20 10 0 42 -58 42 -76 0 -8 5 -14 10 -14 6 0 10 -9
                10 -20 0 -11 4 -20 9 -20 5 0 11 -12 14 -27 3 -16 13 -55 22 -88 9 -33 19 -77
                22 -97 3 -21 9 -38 14 -38 5 0 9 -20 9 -45 0 -25 5 -45 10 -45 6 0 10 -22 10
                -49 0 -28 5 -53 10 -56 6 -3 10 -23 10 -44 0 -21 7 -60 15 -87 8 -27 15 -75
                15 -106 0 -32 5 -58 10 -58 6 0 10 -55 10 -145 0 -90 4 -145 10 -145 6 0 10
                -43 10 -109 0 -134 4 -150 32 -119 19 22 20 32 14 168 -4 80 -11 183 -16 230
                -6 47 -10 131 -10 188 0 61 -4 102 -10 102 -6 0 -10 43 -10 110 0 61 -4 110
                -9 110 -5 0 -11 28 -14 63 -7 85 -22 156 -35 169 -7 7 -12 25 -12 40 0 15 -4
                28 -10 28 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 8 -10 18 0 9 -11 37
                -25 61 -14 23 -25 49 -25 57 0 8 -4 14 -10 14 -5 0 -10 7 -10 15 0 8 -4 15
                -10 15 -5 0 -10 7 -10 15 0 9 -11 27 -25 41 -14 14 -25 29 -25 33 0 13 -136
                151 -149 151 -6 0 -11 5 -11 10 0 6 -7 10 -15 10 -9 0 -18 7 -21 15 -3 8 -21
                20 -40 27 -19 6 -34 15 -34 19 0 8 -64 15 -102 11z"/>
                <path d="M7457 12745 c-16 -22 -18 -43 -14 -183 3 -160 21 -323 38 -354 5 -10
                9 -43 9 -73 0 -30 5 -55 10 -55 6 0 10 -30 10 -70 0 -38 4 -70 9 -70 5 0 12
                -30 15 -67 2 -38 12 -115 21 -173 9 -58 19 -169 22 -247 2 -79 9 -143 14 -143
                5 0 9 -72 9 -170 0 -107 -4 -170 -10 -170 -6 0 -10 -28 -10 -65 0 -37 4 -65
                10 -65 6 0 10 -28 10 -65 0 -37 4 -65 10 -65 6 0 10 -18 10 -39 0 -22 5 -43
                10 -46 6 -3 10 -16 10 -29 0 -12 7 -31 15 -42 8 -10 15 -31 15 -46 0 -16 5
                -28 10 -28 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 4 -15
                8 -15 5 0 17 -18 28 -40 10 -22 22 -40 27 -40 4 0 7 -5 7 -10 0 -6 10 -21 23
                -34 28 -29 67 -75 67 -79 0 -8 101 -107 110 -107 4 0 29 -20 53 -45 25 -25 48
                -45 52 -45 6 0 24 -14 60 -47 13 -13 29 -23 35 -23 5 0 10 -4 10 -10 0 -5 9
                -10 20 -10 11 0 20 -4 20 -8 0 -23 90 -41 116 -24 17 10 67 161 60 179 -6 14
                -8 14 -24 -1 -10 -9 -24 -16 -30 -16 -7 0 -12 -4 -12 -10 0 -6 -33 -10 -80
                -10 -47 0 -80 4 -80 10 0 6 -7 10 -14 10 -8 0 -27 11 -42 25 -15 14 -31 25
                -35 25 -11 0 -239 226 -239 237 0 4 -11 20 -25 35 -14 15 -25 34 -25 43 0 8
                -4 15 -10 15 -5 0 -10 11 -10 25 0 14 -4 25 -8 25 -11 0 -62 118 -62 143 0 9
                -4 17 -10 17 -6 0 -10 28 -10 65 0 36 -4 65 -10 65 -6 0 -11 141 -13 368 -3
                285 -8 391 -21 477 -10 61 -20 138 -23 173 -2 34 -9 62 -14 62 -5 0 -9 29 -9
                65 0 36 -4 65 -9 65 -5 0 -12 26 -15 58 -10 113 -31 251 -38 258 -5 4 -8 45
                -8 91 0 49 -4 83 -10 83 -6 0 -10 42 -10 105 0 63 -4 105 -10 105 -5 0 -10 20
                -10 45 0 51 -7 55 -33 20z"/>
                <path d="M20980 12821 c-25 -9 -46 -19 -48 -23 -2 -5 -12 -8 -23 -8 -10 0 -19
                -4 -19 -10 0 -5 -5 -10 -10 -10 -11 0 -25 -10 -65 -47 -13 -13 -27 -23 -30
                -23 -10 0 -125 -120 -125 -130 0 -6 -4 -10 -10 -10 -5 0 -10 -7 -10 -16 0 -8
                -6 -22 -12 -29 -37 -41 -58 -80 -58 -105 0 -11 -4 -20 -10 -20 -5 0 -10 -11
                -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -11 -10 -25 0 -14 -7 -42 -15 -62 -8
                -19 -15 -48 -15 -64 0 -16 -4 -29 -10 -29 -5 0 -10 -25 -10 -55 0 -30 -4 -55
                -10 -55 -5 0 -10 -24 -10 -53 0 -29 -4 -57 -9 -62 -5 -6 -11 -41 -14 -80 -3
                -38 -11 -126 -17 -195 -13 -141 -5 -457 12 -495 20 -44 28 -15 28 101 0 65 4
                114 10 114 5 0 11 69 14 163 6 202 21 391 35 437 6 19 11 49 11 67 0 17 5 35
                10 38 6 3 10 22 10 41 0 19 5 34 10 34 6 0 10 16 10 35 0 19 5 35 10 35 6 0
                10 9 10 20 0 22 50 133 62 138 4 2 8 15 8 28 0 13 5 24 10 24 6 0 10 7 10 16
                0 8 6 22 13 29 26 30 37 44 37 50 0 8 47 55 55 55 3 0 21 15 40 33 49 46 63
                57 75 57 5 0 10 5 10 10 0 6 9 10 19 10 11 0 21 3 23 8 2 4 20 15 41 25 43 19
                166 24 198 6 11 -5 27 -9 35 -7 19 4 -19 47 -61 68 -16 8 -36 21 -43 28 -18
                16 -87 13 -142 -7z"/>
                <path d="M21047 12307 c-4 -10 -7 -43 -7 -73 0 -30 -4 -54 -10 -54 -6 0 -10
                -52 -10 -135 0 -83 -4 -135 -10 -135 -6 0 -10 -65 -10 -174 0 -106 -4 -177
                -10 -181 -6 -4 -10 -117 -11 -303 0 -163 -5 -328 -10 -367 -6 -38 -13 -96 -16
                -127 -2 -32 -9 -58 -14 -58 -5 0 -9 -20 -9 -45 0 -25 -4 -45 -10 -45 -5 0 -10
                -13 -10 -28 0 -16 -11 -52 -25 -80 -14 -29 -25 -61 -25 -72 0 -11 -4 -20 -10
                -20 -5 0 -10 -8 -10 -17 0 -9 -25 -40 -55 -69 -30 -29 -55 -56 -55 -59 0 -6
                -28 -38 -77 -88 -44 -44 -60 -57 -73 -57 -5 0 -10 -4 -10 -10 0 -5 -9 -10 -20
                -10 -11 0 -20 -4 -20 -10 0 -5 -11 -10 -25 -10 -14 0 -25 5 -25 10 0 6 -9 10
                -19 10 -11 0 -21 5 -23 11 -5 14 -131 15 -136 0 -2 -6 -12 -11 -23 -11 -10 0
                -19 -4 -19 -10 0 -5 -7 -10 -15 -10 -9 0 -40 -25 -70 -57 -41 -41 -55 -64 -55
                -85 0 -40 44 -108 70 -108 7 0 21 -11 32 -25 26 -33 42 -22 34 24 -17 93 -17
                113 -5 144 19 46 33 57 73 59 25 1 41 -5 55 -20 14 -17 30 -22 68 -22 48 0
                103 17 103 33 0 4 6 7 14 7 8 0 31 16 50 35 20 19 41 35 46 35 6 0 10 5 10 10
                0 6 4 10 10 10 14 0 83 71 105 108 11 17 23 32 27 32 4 0 8 9 8 20 0 11 5 20
                10 20 6 0 10 9 10 20 0 12 15 36 33 55 46 49 57 63 57 75 0 5 5 10 10 10 6 0
                10 9 10 19 0 11 4 22 9 26 5 3 12 19 16 35 4 17 11 30 16 30 5 0 9 16 9 35 0
                19 5 35 10 35 6 0 10 25 10 55 0 30 4 55 10 55 6 0 11 101 14 258 2 141 10
                365 17 497 21 388 13 868 -14 802z"/>
                <path d="M14785 6369 c-38 -5 -96 -11 -127 -15 -32 -3 -58 -10 -58 -15 0 -5
                -16 -9 -35 -9 -19 0 -43 -4 -53 -9 -35 -18 -190 -41 -277 -41 -92 0 -286 25
                -317 41 -10 5 -38 9 -63 9 -25 0 -45 5 -45 10 0 6 -87 10 -240 10 -153 0 -240
                -4 -240 -10 0 -5 -20 -10 -45 -10 -24 0 -54 -4 -67 -9 -80 -30 -217 -52 -360
                -58 -65 -2 -118 -8 -118 -14 0 -5 -129 -9 -325 -9 -179 0 -325 -4 -325 -8 0
                -17 148 -52 248 -59 39 -2 72 -9 72 -14 0 -5 79 -9 185 -9 117 0 185 4 185 10
                0 6 27 10 62 10 34 0 75 4 92 9 63 19 172 41 199 41 15 0 27 5 27 10 0 6 23
                10 50 10 28 0 50 5 50 10 0 6 19 10 43 10 24 0 48 5 54 11 16 16 296 23 368 9
                33 -6 77 -14 98 -17 20 -3 37 -9 37 -14 0 -5 27 -9 60 -9 33 0 60 -4 60 -10 0
                -6 80 -10 220 -10 140 0 220 4 220 10 0 6 33 10 80 10 44 0 80 4 80 9 0 5 21
                12 48 15 26 3 83 10 127 15 105 13 324 13 450 0 55 -6 135 -13 178 -16 42 -3
                77 -9 77 -14 0 -5 29 -9 65 -9 37 0 65 -4 65 -10 0 -5 17 -10 38 -10 20 0 57
                -5 82 -11 183 -44 477 -44 583 -1 16 7 39 12 53 12 13 0 24 5 24 10 0 6 16 10
                35 10 19 0 35 5 35 10 0 6 11 10 25 10 14 0 25 4 25 9 0 5 15 12 33 15 25 5
                29 9 17 16 -10 5 -45 3 -90 -6 -41 -8 -94 -14 -117 -14 -24 0 -43 -4 -43 -10
                0 -6 -52 -10 -135 -10 -83 0 -135 -4 -135 -10 0 -5 -11 -10 -25 -10 -14 0 -25
                4 -25 9 0 6 -61 12 -137 14 -142 5 -247 17 -296 36 -16 6 -46 11 -68 11 -21 0
                -39 5 -39 10 0 6 -20 10 -45 10 -25 0 -45 5 -45 10 0 6 -28 10 -63 10 -35 0
                -67 4 -72 9 -14 13 -336 21 -420 10z"/>
                </g>
                </svg>
                    <div class="bread-pro-heading">
                        <h4>Can I Kick-Start Beard Growth?</h4>
                        <p class="pro_desc text-center">Transform your beard with our premium Beard Growth Kit. Ignite hair follicles, stimulate growth, and achieve the full, even, and luscious beard of your dreams. Our kit includes specialised treatments and a powerful minoxidil solution for ultimate results. Unlock your beard's potential and achieve the masculine appearance you desire. Discover the contents of our Gentleman's Beard Growth Kit today.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="container">
        <img src="{{asset('frontend_new/images/money-back.jpeg')}}" class="img-fluid"/>

    </div>

<!-- Beard Growth html end -->
<!-- Men getting html -->
<section class="men-getting-sec men-banner-sec swiper-design">
    <div class="container-xxl container">
        <div class="">
            <h2 class="text-center big-heading">Unlock Your Dream Beard:<br> Join The Tribe of Men Achieving Their Facial Hair Goals with Agent </h2>
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
                            <h4>Arun</h4>
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
                            <p>Finally getting the beard I’ve always wanted. Month by month, I've seen steady gains, and now it's at a point where I’m getting shape-ups I never thought possible.</p>
                        </div>
                        <div class="men-get-image longEnough mCustomScrollbar" data-mcs-theme="dark">
                            <img src="{{asset('frontend_new/images/ter_11.jpg')}}" alt="img">
                            <img src="{{asset('frontend_new/images/ter_12.jpg')}}" alt="img">
                            <img src="{{asset('frontend_new/images/ter_13.jpg')}}" alt="img">
                            <img src="{{asset('frontend_new/images/ter_14.jpg')}}" alt="img">
                            <!-- <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/ter_14.JPG" alt="img">
                            <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/ter_11.JPG" alt="img">
                            <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/ter_12.JPG" alt="img"> -->
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                <div class="men-get-box">
                        <div class="men-get-text">
                            <h4>Danny</h4>
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
                            <p>2  months in after being told I don’t have “ beard genetics “‘ im on my way</p>
                        </div>
                        <div class="men-get-image longEnough mCustomScrollbar" data-mcs-theme="dark">
                            <img src="{{asset('frontend_new/images/DENNY_1.jpeg')}}" alt="img">
                            <img src="{{asset('frontend_new/images/DENNY_2.jpeg')}}" alt="img">
                            <!-- <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/ter_14.JPG" alt="img">
                            <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/ter_11.JPG" alt="img">
                            <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/ter_12.JPG" alt="img"> -->
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


        <div class="get-started-inr">
            <h2 class="text-white">Start consultation today!</h2>
            <a class="pure-white-btn" href="{{ url('/questionnaire/31') }}">Get Started</a>
        </div>
    </div>
</section>

<!--Treatment options html start  -->
<section class="Treatment-opt-sec">
    <div class="container-xxl container">
        <div class="">
            <h2 class="text-center big-heading">Beard Care Treatment Options</h2>
            <p class="text-center pb-40">Embark on the Path to a More Polished, Thicker, and Healthier Beard Today. Explore our products below for more information or begin your complimentary online beard growth consultation now.</p>
        </div>

        <ul class="Treatment-opt">
            <li class="to-image">
                <figure>
                    <img src="{{ asset('frontend_new/images/beard_1_hd.PNG') }}" alt="img"/>
                </figure>
            </li>
            <li class="to-content">
                <p>Full Beard Growth Kit</p>
                <p class="price-text"><br>from £18.33/month</p>
            </li>
            <li class="to-buttons">
                <a class="btn-visit" href="{{ url('/questionnaire/31')}}">Start Visit</a>
                <!-- <a class="btn-more" href="{{ url('/product/beard-growth-kit')}}">Learn more</a> -->
                <!-- <a class="btn-more" href="{{ route('product.detail','Beard-Growth-Kit') }}">Learn more</a> -->
            </li>
        </ul>
        <ul class="Treatment-opt">
            <li class="to-image">
                <figure>
                    <img src="{{ asset('frontend_new/images/beard-slide-2.PNG') }}" alt="img"/>
                </figure>
            </li>
            <li class="to-content">
                <p>Beard Care Accessories</p>
                <p class="price-text"><br>from £18.33/month</p>

            </li>
            <li class="to-buttons">
                <a class="btn-visit" href="{{ url('/questionnaire/31')}}">Start Visit</a>
                <!-- <a class="btn-more" href="{{ url('/product/beard-care-accessories')}}">Learn more</a> -->
                <!-- <a class="btn-more" href="{{ route('product.detail','Beard-Care-Accessories') }}">Learn more</a> -->
            </li>
        </ul>
        <ul class="Treatment-opt">
            <li class="to-image">
                <figure>
                    <img src="{{ asset('frontend_new/images/slide-3-bd.PNG') }}" alt="img"/>
                </figure>
            </li>
            <li class="to-content">
                <p>Beard Care Vitamins </p>
                <p class="price-text"><br>from £4/month</p>
            </li>
            <li class="to-buttons">
                <a class="btn-visit" href="{{ url('/questionnaire/31')}}">Start Visit</a>
                <!-- <a class="btn-more" href="{{ url('/product/beard-care-vitamins')}}">Learn more</a> -->
                <!-- <a class="btn-more" href="{{ route('product.detail','Beard-Care-Vitamins') }}">Learn more</a> -->
            </li>
        </ul>
    </div>
</section>
<!-- Treatment options html end -->
<!-- How you get started  html start -->
<section class="product-get-start-sec">
    <div class="container-xxl container">
        <div class="pb-40">
            <h2 class="big-heading">Cultivating Your Legacy: The Three-Part Plan to <span>A Remarkable Beard</span></h2>
        </div>
        <div class="product-get-main">
            <ul class="product-get-start">
                <li class="ques-text">
                    <span></span>
                    <h4 class="big-heading">Initiate Your Journey</h4>
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
                    <p class="pro_desc">Begin your quest to a remarkable beard by sharing some details about yourself through our easy
                         online questionnaire. Our esteemed clinicians will attentively review your information, curating an ideal beard growth regimen suited just for you — delivered with ease straight to your door.</p>
                </li>
            </ul>

            <ul class="product-get-start">
                <li class="ques-text">
                    <span></span>
                    <h4 class="big-heading">Receive Your Bespoke Solution</h4>
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
                    <p class="pro_desc">Welcome to the beginning of your journey towards an impressive beard with your first delivery.
                         We are here to ensure consistency in nurturing your beard by arranging regular shipments of your chosen treatment. Your role? Simply follow the instructions enclosed and let our products work their magic. </p>
                </li>
            </ul>
            <ul class="product-get-start">
                <li class="ques-text">
                    <span></span>
                    <h4 class="big-heading">Unveil Your Masterpiece </h4>
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
                    <p class="pro_desc">Now, the stage is yours! Revel in the transformation as you adhere to the treatments and accessories we have carefully selected for you. With consistent use and a bit of patience, you will
                         gradually notice the difference: a fuller, denser beard that reflects your impeccable style. And remember, we are with you throughout this journey — reach out to us anytime for advice, or check out our blog for more tips and guidance.</p>
                </li>
            </ul>
        </div>
        <div class="product-get-button">
            <a href="{{ url('/questionnaire/31') }}">Get Started</a>
        </div>
    </div>
</section>
<!-- How you get started  html End -->
<!--Bread Growth treatment journey html start  -->
<section class="bread-journey-sec bread-journey-v2">
    <div class="container-xxl container">
        <div class="">
            <h2 class="text-center big-heading">The Gentleman's Guide:<br>Navigating Your <span>Beard Growth Journey</span> & what to expect</h2>
            <p class="pro_desc text-center">As beard growth is a naturally slow process, there is likely to be little change for the first month or two. When you start using the beard growth kit, be patient! Good things come to those who wait.</p>
        </div>
        <div class="row justify-content-center pt-40">
            <div class="col-md-6 col-lg-4">
                <div class="bread-journey-box">
                <?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
 "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="1364.000000pt" height="1091.000000pt" viewBox="0 0 1364.000000 1091.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,1091.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M5195 10574 c-223 -32 -365 -73 -475 -138 -124 -73 -173 -131 -332
-395 -103 -170 -190 -299 -244 -359 -26 -30 -116 -105 -200 -167 -168 -125
-217 -178 -273 -295 -35 -74 -36 -77 -36 -200 0 -96 5 -147 23 -219 l23 -95
-82 -82 -82 -82 21 -34 c25 -41 57 -60 145 -87 118 -36 116 -33 52 -104 -88
-97 -145 -205 -179 -342 -65 -258 -86 -482 -86 -905 0 -362 16 -530 81 -869
17 -84 28 -156 25 -158 -3 -3 -34 2 -70 11 -88 22 -133 20 -186 -6 -51 -26
-79 -64 -111 -146 -20 -54 -21 -69 -16 -277 5 -173 11 -254 33 -380 21 -125
27 -200 29 -345 3 -236 14 -284 111 -481 106 -215 139 -302 184 -476 50 -194
76 -250 143 -318 58 -58 105 -77 219 -91 32 -3 63 -13 69 -20 13 -16 14 -28
59 -549 17 -192 37 -384 46 -425 24 -120 146 -353 278 -531 53 -71 355 -372
546 -544 36 -32 135 -124 220 -205 85 -80 183 -167 217 -193 34 -26 88 -78
120 -115 119 -137 221 -236 333 -321 241 -183 332 -232 500 -269 112 -24 123
-25 490 -23 388 2 460 7 570 43 191 61 440 242 643 465 65 71 125 139 133 151
8 12 42 40 74 62 33 22 122 100 197 173 76 72 219 208 318 302 442 416 533
523 654 760 92 178 108 251 150 695 11 113 25 274 31 359 5 85 12 156 14 159
3 2 44 15 93 29 102 28 153 56 205 110 50 52 79 115 128 278 54 176 105 302
174 424 89 158 92 163 119 233 40 99 54 184 66 391 6 104 23 254 37 335 14 81
31 185 39 231 46 263 -25 461 -183 507 -61 18 -111 14 -199 -17 -31 -10 -58
-19 -60 -19 -8 0 -1 53 17 136 40 176 51 794 19 1109 -18 190 -156 992 -193
1125 -119 432 -289 747 -551 1019 -116 121 -356 338 -464 420 -421 321 -1084
566 -1821 675 -281 42 -440 44 -618 10 -79 -15 -103 -16 -161 -6 -37 6 -89 21
-115 32 -67 28 -140 26 -212 -7 -65 -29 -55 -30 -244 22 -81 23 -119 27 -260
30 -91 2 -178 1 -195 -1z m628 -531 c3 -5 -15 -42 -39 -83 -92 -156 -147 -359
-142 -516 l3 -84 124 90 c119 85 200 126 238 118 12 -2 -3 -16 -47 -43 -79
-48 -215 -183 -252 -252 -41 -75 -46 -136 -26 -287 32 -229 133 -423 307 -588
111 -106 270 -194 412 -228 30 -7 72 -21 94 -32 l40 -18 -75 4 c-41 2 -124 18
-185 36 -60 17 -156 37 -213 45 -82 10 -118 21 -173 49 -184 95 -246 158 -393
405 -120 202 -163 294 -197 427 -31 122 -31 283 1 409 28 114 97 292 121 316
35 35 38 20 9 -43 -111 -246 -132 -580 -49 -791 44 -110 263 -491 310 -538 66
-66 177 -136 265 -168 47 -17 92 -31 102 -31 9 0 -8 21 -44 52 -104 91 -435
447 -475 512 -29 47 -42 152 -36 278 7 136 92 578 132 683 36 95 100 213 138
253 31 33 42 38 50 25z m2096 -490 c-82 -120 -227 -232 -379 -292 -154 -61
-259 -83 -422 -88 l-147 -5 72 -53 c42 -31 99 -61 137 -73 36 -12 108 -38 160
-58 52 -20 209 -65 350 -101 140 -36 257 -67 260 -70 3 -3 -51 -3 -120 0 -139
7 -235 27 -420 86 -68 22 -126 38 -128 36 -2 -2 12 -18 32 -36 177 -154 404
-272 646 -334 143 -37 139 -36 115 -45 -44 -18 -107 -8 -294 51 -196 61 -196
61 -301 138 -58 43 -154 113 -214 157 -377 275 -580 436 -635 503 l-36 44 34
-6 c18 -4 74 -30 124 -58 116 -66 233 -116 290 -124 56 -9 238 17 355 51 98
27 239 93 324 151 54 37 75 54 176 146 24 21 46 36 49 34 3 -3 -10 -27 -28
-54z m-1645 -50 c34 -37 95 -104 137 -148 136 -144 219 -273 219 -341 0 -27 4
-32 29 -37 19 -4 43 -23 68 -54 73 -93 179 -188 254 -230 40 -22 138 -62 217
-88 78 -26 142 -52 142 -58 0 -16 -104 1 -203 34 -268 90 -401 201 -644 540
-176 244 -313 439 -313 445 0 2 7 4 16 4 10 0 44 -30 78 -67z m-1378 -69 c-24
-97 -56 -272 -56 -312 0 -66 28 -153 86 -269 67 -135 153 -253 240 -330 35
-31 64 -61 64 -65 0 -16 -93 41 -141 85 -104 97 -191 228 -250 377 -31 79 -33
93 -33 205 -1 96 4 136 22 200 22 74 70 180 79 171 2 -2 -3 -30 -11 -62z
m-256 -293 c0 -138 39 -326 83 -401 33 -56 128 -172 172 -210 103 -88 175
-170 148 -170 -12 0 -137 111 -235 208 -101 99 -165 207 -199 339 -27 106 -30
247 -6 291 10 18 22 30 27 27 6 -4 10 -41 10 -84z m339 -58 c65 -193 154 -378
234 -486 14 -18 33 -45 42 -62 16 -25 11 -23 -29 15 -105 100 -229 332 -276
516 -18 68 -27 155 -16 143 2 -2 23 -59 45 -126z m-749 -243 c6 -52 13 -106
15 -120 3 -14 -6 7 -20 47 -30 89 -49 229 -41 297 16 123 20 122 28 -4 4 -69
12 -168 18 -220z m120 195 c14 -116 37 -196 74 -259 15 -25 83 -105 151 -178
69 -73 121 -134 116 -136 -32 -11 -170 107 -259 220 -73 92 -112 233 -112 403
0 96 15 71 30 -50z m-235 -62 c-26 -203 -24 -322 4 -406 23 -68 100 -195 140
-231 29 -26 26 -38 -4 -24 -39 18 -174 186 -186 233 -15 55 -16 368 -1 427 18
71 55 165 59 151 3 -7 -3 -75 -12 -150z m2829 -101 c34 -21 172 -83 308 -138
178 -71 239 -100 220 -102 -122 -16 -559 181 -653 294 -12 15 -10 15 26 0 21
-9 66 -34 99 -54z m-776 -189 c11 -10 28 -31 38 -47 23 -36 8 -29 -56 27 -36
30 -40 37 -23 37 11 0 30 -8 41 -17z m-81 -214 c167 -69 228 -88 330 -105 77
-13 104 -14 127 -5 l29 12 -28 29 c-16 17 -23 30 -17 30 17 0 109 -47 117 -60
4 -6 -14 -19 -41 -31 -40 -18 -61 -21 -153 -17 -98 4 -116 9 -239 56 -161 62
-242 102 -242 119 0 19 8 17 117 -28z m-1224 -263 c302 -61 692 -131 862 -155
260 -37 398 -41 1353 -41 1023 0 1077 2 1362 60 80 17 249 59 375 95 126 36
230 63 232 62 8 -9 163 -359 178 -402 11 -34 19 -110 26 -240 5 -104 16 -320
24 -480 21 -409 46 -518 152 -676 107 -158 118 -197 148 -524 13 -143 35 -370
49 -505 37 -366 38 -385 26 -515 -13 -145 -62 -491 -96 -674 -13 -75 -24 -175
-25 -225 0 -50 -4 -113 -9 -141 -22 -121 -41 -277 -45 -365 -2 -52 -11 -151
-20 -220 -9 -69 -15 -147 -12 -175 3 -27 1 -77 -4 -110 -8 -62 -12 -94 -24
-202 -4 -35 -11 -63 -17 -63 -5 0 -7 -9 -3 -20 9 -29 -12 -98 -49 -160 -19
-30 -36 -72 -40 -92 -7 -37 -19 -48 -31 -28 -3 6 -14 10 -23 10 -13 -1 -10 -6
11 -25 32 -28 31 -37 -10 -118 -28 -55 -110 -166 -128 -174 -7 -2 -16 -15 -19
-28 -3 -13 -21 -34 -39 -46 -66 -45 -129 -107 -122 -119 3 -6 -4 -14 -17 -19
-13 -5 -41 -28 -62 -52 -72 -83 -93 -104 -154 -162 -34 -32 -62 -63 -62 -69 0
-14 -122 -130 -176 -168 -23 -16 -44 -36 -47 -45 -4 -8 -14 -15 -24 -15 -23 0
-192 -148 -228 -200 -15 -21 -52 -62 -82 -91 -30 -28 -66 -69 -80 -90 -14 -22
-29 -39 -34 -39 -4 0 -40 -32 -80 -70 -39 -39 -75 -70 -79 -70 -4 0 -11 -12
-14 -26 -5 -20 -10 -24 -18 -16 -15 15 -38 -3 -38 -29 0 -25 -87 -82 -116 -76
-17 3 -20 0 -16 -15 2 -10 0 -18 -6 -18 -5 0 -27 -18 -48 -40 -22 -22 -44 -40
-50 -40 -6 0 -17 -6 -23 -14 -7 -8 -20 -12 -31 -9 -10 3 -33 -2 -51 -11 -18
-9 -41 -16 -52 -16 -12 0 -38 -12 -60 -27 -31 -22 -42 -25 -57 -16 -13 9 -30
8 -69 -2 -28 -7 -74 -16 -103 -20 -29 -4 -71 -14 -93 -22 -28 -10 -60 -12
-107 -8 -58 6 -68 5 -68 -9 0 -21 -10 -20 -26 2 -11 14 -16 15 -33 5 -13 -8
-22 -9 -26 -3 -3 6 -34 10 -69 10 -34 0 -66 3 -70 7 -13 13 -118 32 -236 42
-63 5 -132 16 -152 23 -47 17 -89 53 -82 72 3 8 -3 19 -14 25 -13 7 -18 18
-15 30 6 23 -16 39 -27 20 -5 -7 -4 -21 1 -32 17 -30 5 -44 -17 -19 -10 13
-52 44 -91 69 -40 25 -73 49 -73 54 0 4 -15 15 -33 24 -41 19 -177 142 -177
159 0 25 -205 222 -335 322 -140 109 -162 128 -243 220 -103 114 -227 234
-249 240 -13 4 -23 11 -23 16 0 11 -144 177 -252 290 -43 44 -78 84 -78 89 0
5 -4 9 -9 9 -5 0 -30 28 -56 63 -26 34 -53 66 -61 70 -8 4 -14 16 -14 26 0 9
-9 27 -20 39 -11 12 -20 30 -20 40 0 11 -6 25 -14 31 -7 6 -16 32 -19 57 -2
24 -19 73 -36 108 -17 35 -31 71 -31 80 0 9 -12 39 -26 67 -14 28 -30 76 -35
108 -27 152 -38 247 -44 361 -11 221 -25 393 -40 475 -7 44 -16 188 -20 320
-3 134 -13 275 -21 320 -36 201 -45 257 -59 361 -42 323 -41 591 5 1109 45
498 51 531 144 707 100 189 110 239 131 683 34 701 31 665 58 745 38 114 101
215 196 313 73 76 88 87 118 87 18 0 133 -20 256 -44z m-1328 -2209 c53 -26
125 -97 164 -160 33 -53 78 -191 101 -310 11 -56 38 -266 60 -467 22 -201 54
-459 70 -575 42 -298 50 -402 50 -636 0 -218 -4 -262 -26 -280 -19 -16 -72 -6
-142 26 -107 49 -143 100 -197 285 -70 242 -87 287 -176 470 -140 286 -143
297 -145 525 -1 156 -7 227 -32 401 -43 286 -54 423 -42 502 20 119 71 220
124 243 37 16 138 4 191 -24z m6741 -6 c23 -10 53 -34 67 -53 48 -62 57 -107
57 -277 -1 -154 -7 -205 -49 -401 -24 -113 -41 -270 -41 -386 0 -167 -27 -249
-170 -509 -67 -123 -144 -312 -190 -467 -53 -178 -93 -238 -192 -287 -46 -23
-75 -31 -116 -31 l-55 0 9 123 c5 67 6 147 4 177 -14 157 -3 307 43 625 26
176 58 433 72 570 35 343 43 406 67 515 46 213 138 340 293 403 55 22 150 21
201 -2z"/>
<path d="M5540 9036 c0 -144 7 -173 53 -223 25 -27 37 -29 31 -5 -2 9 -20 93
-39 187 -20 93 -38 172 -41 174 -2 2 -4 -57 -4 -133z"/>
<path d="M5025 6214 c-11 -2 -45 -9 -75 -15 -142 -28 -305 -120 -380 -214 -44
-54 -92 -157 -98 -211 -4 -43 -4 -44 23 -44 20 0 37 11 59 37 100 118 186 177
296 204 34 9 105 14 185 13 113 -1 154 -7 315 -42 102 -23 244 -52 315 -66 72
-14 224 -43 338 -66 115 -22 211 -40 213 -40 26 0 -57 160 -107 205 -72 64
-118 78 -614 187 -178 38 -255 51 -340 53 -60 2 -119 2 -130 -1z"/>
<path d="M8150 6186 c-85 -19 -229 -52 -320 -74 -91 -22 -208 -50 -260 -62
-126 -29 -210 -71 -265 -132 -40 -45 -95 -141 -95 -167 0 -34 178 0 875 170
200 49 271 62 360 66 209 11 373 -44 482 -161 55 -58 113 -106 128 -106 16 0
-8 119 -36 176 -52 109 -205 233 -354 288 -72 26 -94 29 -220 32 -128 3 -153
1 -295 -30z"/>
<path d="M5282 5670 c-73 -19 -197 -74 -209 -93 -3 -5 0 -7 8 -4 72 30 222 68
302 77 166 19 251 -1 480 -116 60 -31 111 -53 113 -51 9 9 -95 87 -168 126
-41 23 -110 50 -153 61 -104 27 -271 27 -373 0z"/>
<path d="M7908 5666 c-158 -28 -266 -79 -328 -154 -34 -41 -37 -52 -15 -52 22
0 19 -16 -20 -81 -19 -32 -31 -59 -27 -59 4 0 35 23 67 51 76 65 152 115 188
123 24 6 27 4 27 -19 0 -60 23 -116 63 -156 36 -34 38 -39 18 -39 -12 0 -46 9
-76 19 -77 27 -127 34 -159 21 -16 -6 -26 -13 -23 -16 9 -10 157 -45 272 -65
206 -37 439 -35 567 3 38 11 39 12 17 24 -22 11 -21 12 22 31 42 19 77 49 67
58 -2 2 -82 -16 -177 -41 -94 -26 -174 -44 -177 -42 -7 8 97 218 108 218 6 0
37 -13 70 -30 104 -53 177 -80 238 -88 33 -5 60 -6 60 -3 0 6 -166 105 -230
136 -60 31 -196 73 -274 85 -106 18 -294 8 -377 -19 -36 -11 -96 -41 -135 -65
-73 -48 -102 -44 -43 6 40 34 175 101 239 119 26 8 98 13 170 13 138 0 220
-18 354 -75 39 -17 86 -37 104 -45 17 -8 32 -12 32 -10 0 7 -134 85 -183 105
-124 53 -299 71 -439 47z m290 -148 c19 -19 14 -56 -9 -68 -28 -15 -45 -7 -53
25 -11 44 31 74 62 43z"/>
<path d="M5278 5590 c-84 -14 -175 -50 -260 -102 -46 -28 -109 -65 -141 -83
-31 -17 -54 -34 -50 -38 3 -4 27 -7 52 -7 50 0 117 26 140 54 18 22 84 56 109
56 14 0 21 -13 30 -58 8 -37 23 -71 43 -95 49 -60 28 -68 -73 -28 -115 46
-156 50 -187 17 -18 -20 -21 -27 -10 -31 253 -93 292 -95 764 -40 243 29 265
33 265 47 0 6 -66 7 -186 3 l-185 -8 16 39 c9 22 30 74 47 116 l29 77 52 -20
c70 -28 171 -97 235 -160 45 -45 52 -49 52 -30 0 48 -159 185 -275 236 -130
58 -319 80 -467 55z m36 -93 c23 -17 7 -63 -29 -79 -53 -24 -99 28 -57 64 32
29 60 34 86 15z"/>
<path d="M6167 3868 c-58 -58 -77 -104 -77 -185 0 -127 94 -241 192 -231 l32
3 -59 35 c-32 19 -72 52 -89 73 -60 75 -42 220 40 315 51 60 23 52 -39 -10z"/>
<path d="M7430 3845 c35 -67 40 -84 40 -143 0 -75 -20 -118 -73 -162 -17 -14
-45 -37 -61 -52 l-31 -27 30 -1 c91 0 165 99 173 230 5 84 -7 124 -53 178 -57
67 -67 58 -25 -23z"/>
<path d="M7181 3595 c-29 -14 -91 -55 -137 -90 -113 -89 -171 -115 -256 -115
-68 0 -102 10 -220 64 -31 14 -60 26 -63 26 -3 0 4 -18 16 -39 29 -52 90 -79
201 -87 142 -11 227 20 363 131 73 60 154 105 192 105 27 0 38 16 17 24 -29
11 -59 6 -113 -19z"/>
<path d="M6290 3595 c0 -9 202 -106 208 -101 11 12 -75 82 -115 94 -41 12 -93
16 -93 7z"/>
<path d="M7170 3161 c0 -13 26 -32 33 -24 8 7 -11 33 -24 33 -5 0 -9 -4 -9 -9z"/>
<path d="M6470 3150 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M7110 3132 c0 -12 7 -25 15 -29 25 -9 27 2 6 28 l-20 24 -1 -23z"/>
<path d="M6600 3130 c0 -5 6 -10 14 -10 8 0 18 5 21 10 3 6 -3 10 -14 10 -12
0 -21 -4 -21 -10z"/>
<path d="M6374 3105 c-19 -14 -19 -14 2 -15 11 0 29 7 40 15 19 14 19 14 -2
15 -11 0 -29 -7 -40 -15z"/>
<path d="M7380 3084 c22 -20 43 -34 46 -31 12 11 -7 44 -32 55 -48 22 -54 12
-14 -24z"/>
<path d="M6265 3099 c-12 -19 5 -23 22 -6 16 16 16 17 1 17 -9 0 -20 -5 -23
-11z"/>
<path d="M7250 3075 c24 -25 50 -33 50 -16 0 13 -41 41 -59 41 -10 0 -8 -7 9
-25z"/>
<path d="M7022 3078 c3 -7 13 -15 24 -17 16 -3 17 -1 5 13 -16 19 -34 21 -29
4z"/>
<path d="M6451 3067 c-13 -6 -31 -22 -39 -34 -13 -21 -13 -23 1 -23 17 0 67
45 67 60 0 12 0 12 -29 -3z"/>
<path d="M6554 3053 c-18 -16 -24 -28 -17 -30 15 -5 73 34 73 48 0 17 -27 9
-56 -18z"/>
<path d="M6810 3035 c0 -19 11 -19 36 0 18 14 18 14 -8 15 -18 0 -28 -5 -28
-15z"/>
<path d="M7191 3028 c15 -28 39 -47 58 -48 8 0 -2 16 -23 35 -45 41 -51 43
-35 13z"/>
<path d="M6950 3032 c0 -10 41 -35 47 -28 9 8 -17 36 -33 36 -8 0 -14 -3 -14
-8z"/>
<path d="M7527 3024 c-11 -11 6 -35 35 -50 37 -19 47 -11 22 17 -23 25 -49 40
-57 33z"/>
<path d="M6632 2997 c-24 -25 -28 -37 -12 -37 13 0 50 37 50 50 0 17 -15 11
-38 -13z"/>
<path d="M6265 2984 c-9 -14 -14 -28 -12 -31 11 -10 47 19 47 37 0 28 -14 25
-35 -6z"/>
<path d="M5950 2964 c-12 -31 -9 -37 14 -28 18 7 22 39 6 49 -6 3 -15 -6 -20
-21z"/>
<path d="M6180 2970 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0
-15 -4 -15 -10z"/>
<path d="M7115 2951 c17 -16 41 -32 55 -36 23 -6 21 -3 -12 29 -21 20 -46 36
-55 36 -14 0 -11 -6 12 -29z"/>
<path d="M7360 2945 c39 -40 50 -43 50 -16 0 23 -36 51 -64 51 -17 0 -15 -5
14 -35z"/>
<path d="M6072 2954 c-12 -8 -22 -19 -22 -25 0 -15 26 -10 43 9 30 33 17 43
-21 16z"/>
<path d="M6719 2954 c-11 -14 -10 -15 11 -12 13 1 25 9 28 16 5 17 -23 15 -39
-4z"/>
<path d="M7650 2960 c0 -13 37 -50 50 -50 16 0 12 14 -10 38 -22 23 -40 29
-40 12z"/>
<path d="M6825 2949 c-11 -17 1 -21 15 -4 8 9 8 15 2 15 -6 0 -14 -5 -17 -11z"/>
<path d="M7040 2935 c23 -24 70 -55 85 -55 3 0 1 9 -5 20 -12 23 -44 45 -80
55 l-25 7 25 -27z"/>
<path d="M7485 2940 c3 -5 19 -19 35 -30 24 -17 30 -18 30 -6 0 21 -28 46 -51
46 -11 0 -18 -4 -14 -10z"/>
<path d="M7272 2918 c18 -27 45 -45 54 -35 12 12 -26 57 -47 57 -20 0 -20 -2
-7 -22z"/>
<path d="M7743 2917 c5 -17 56 -52 63 -44 4 4 -1 15 -10 26 -20 22 -59 35 -53
18z"/>
<path d="M6340 2900 c-20 -20 -26 -40 -12 -40 16 0 52 32 52 46 0 20 -16 18
-40 -6z"/>
<path d="M6483 2913 c-18 -6 -16 -33 1 -33 19 0 31 19 20 30 -5 4 -15 5 -21 3z"/>
<path d="M7607 2914 c-9 -9 44 -85 55 -78 13 9 0 56 -19 72 -19 13 -27 15 -36
6z"/>
<path d="M6960 2896 c0 -9 7 -16 16 -16 17 0 14 22 -4 28 -7 2 -12 -3 -12 -12z"/>
<path d="M7840 2903 c0 -10 52 -63 62 -63 14 0 8 27 -9 42 -21 18 -53 30 -53
21z"/>
<path d="M6604 2876 c-10 -8 -15 -18 -11 -22 4 -4 17 2 30 14 24 25 12 30 -19
8z"/>
<path d="M6180 2855 c-13 -14 -21 -28 -18 -31 12 -11 48 17 48 36 0 25 -2 25
-30 -5z"/>
<path d="M5847 2863 c-12 -11 -8 -23 8 -23 8 0 15 7 15 15 0 16 -12 20 -23 8z"/>
<path d="M6742 2858 c-7 -7 -12 -18 -12 -25 0 -11 5 -11 20 -3 11 6 20 17 20
25 0 18 -12 19 -28 3z"/>
<path d="M6816 2851 c-11 -12 -17 -23 -14 -26 8 -9 41 21 37 34 -3 9 -11 6
-23 -8z"/>
<path d="M7190 2852 c0 -19 18 -42 32 -42 12 0 9 35 -4 48 -17 17 -28 15 -28
-6z"/>
<path d="M7460 2862 c0 -5 11 -19 25 -32 25 -23 25 -23 25 -2 0 12 -9 26 -19
32 -24 12 -31 13 -31 2z"/>
<path d="M6014 2847 c-3 -9 -4 -24 -2 -34 3 -16 5 -15 17 6 9 16 10 26 2 34
-7 7 -12 6 -17 -6z"/>
<path d="M6402 2844 c-22 -15 -30 -44 -12 -44 13 0 50 37 50 50 0 14 -12 12
-38 -6z"/>
<path d="M5912 2843 c-15 -6 -46 -63 -34 -63 5 0 19 11 31 24 24 25 26 46 3
39z"/>
<path d="M7730 2827 c0 -16 32 -47 48 -47 18 0 14 18 -8 40 -23 23 -40 26 -40
7z"/>
<path d="M7840 2830 c0 -18 30 -70 40 -70 17 0 11 46 -8 63 -21 19 -32 22 -32
7z"/>
<path d="M7080 2817 c0 -18 29 -43 60 -52 24 -7 23 -5 -9 29 -37 38 -51 44
-51 23z"/>
<path d="M6962 2801 c4 -13 18 -16 19 -4 0 4 -5 9 -11 12 -7 2 -11 -2 -8 -8z"/>
<path d="M7565 2780 c17 -33 35 -40 35 -12 0 21 -18 42 -37 42 -11 0 -10 -6 2
-30z"/>
<path d="M7982 2782 c15 -20 24 -24 26 -15 5 18 -16 43 -35 43 -11 0 -8 -8 9
-28z"/>
<path d="M4220 2790 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
-4 -4 -4 -10z"/>
<path d="M5660 2779 c-7 -11 -9 -23 -6 -26 8 -9 36 17 36 33 0 21 -18 17 -30
-7z"/>
<path d="M6675 2789 c-4 -6 -5 -13 -2 -16 7 -7 27 6 27 18 0 12 -17 12 -25 -2z"/>
<path d="M7340 2791 c0 -15 30 -41 46 -41 21 0 17 17 -8 34 -25 18 -38 20 -38
7z"/>
<path d="M8057 2794 c-8 -9 11 -44 23 -44 6 0 10 6 10 14 0 16 -24 38 -33 30z"/>
<path d="M5766 2761 c-15 -16 -23 -31 -18 -35 13 -8 62 32 62 50 0 21 -13 17
-44 -15z"/>
<path d="M6484 2759 l-29 -19 26 0 c15 0 32 6 38 14 19 23 -3 26 -35 5z"/>
<path d="M7270 2746 c0 -24 26 -54 36 -43 11 10 -5 54 -21 61 -11 4 -15 -1
-15 -18z"/>
<path d="M7480 2740 c11 -37 19 -50 30 -50 12 0 0 63 -14 72 -20 14 -25 8 -16
-22z"/>
<path d="M7680 2751 c0 -20 37 -53 55 -49 19 3 18 5 -7 31 -27 27 -48 35 -48
18z"/>
<path d="M5905 2730 c-10 -11 -15 -26 -11 -36 6 -15 8 -15 26 1 20 18 28 55
12 55 -5 0 -17 -9 -27 -20z"/>
<path d="M6277 2736 c-6 -16 2 -28 14 -20 12 7 11 34 0 34 -5 0 -11 -6 -14
-14z"/>
<path d="M6120 2730 c0 -5 4 -10 9 -10 6 0 13 5 16 10 3 6 -1 10 -9 10 -9 0
-16 -4 -16 -10z"/>
<path d="M6379 2708 c-10 -18 -9 -20 6 -15 9 4 19 7 21 7 2 0 4 7 4 15 0 22
-18 18 -31 -7z"/>
<path d="M7930 2708 c0 -7 7 -21 14 -31 12 -15 14 -15 19 -3 4 9 -1 22 -9 31
-19 18 -24 19 -24 3z"/>
<path d="M5465 2690 c-18 -20 -11 -25 19 -14 17 6 23 34 8 34 -5 0 -17 -9 -27
-20z"/>
<path d="M6004 2695 c-3 -8 -3 -19 0 -24 10 -16 36 -1 36 20 0 22 -28 26 -36
4z"/>
<path d="M7810 2698 c1 -7 7 -24 15 -38 l15 -25 -2 34 c-3 32 -28 59 -28 29z"/>
<path d="M5531 2677 c-11 -13 -21 -32 -21 -42 0 -17 1 -17 21 1 27 24 41 51
30 58 -4 3 -18 -5 -30 -17z"/>
<path d="M6146 2674 c-12 -17 -15 -29 -8 -36 7 -7 16 -1 28 16 11 18 14 30 7
37 -7 7 -16 1 -27 -17z"/>
<path d="M8060 2681 c0 -10 9 -29 20 -42 l19 -24 0 25 c0 24 -19 60 -33 60 -3
0 -6 -9 -6 -19z"/>
<path d="M7430 2672 c0 -11 7 -25 16 -33 14 -11 15 -9 12 16 -3 32 -28 47 -28
17z"/>
<path d="M4370 2670 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M7530 2668 c0 -16 19 -38 33 -38 4 0 7 10 5 22 -3 25 -38 39 -38 16z"/>
<path d="M7642 2669 c2 -7 10 -15 17 -17 8 -3 12 1 9 9 -2 7 -10 15 -17 17 -8
3 -12 -1 -9 -9z"/>
<path d="M7740 2647 c0 -8 9 -22 20 -32 22 -20 27 -7 10 26 -12 22 -30 25 -30
6z"/>
<path d="M9266 2645 c4 -8 13 -15 21 -15 13 0 13 3 3 15 -7 8 -16 15 -21 15
-5 0 -6 -7 -3 -15z"/>
<path d="M4456 2628 c-9 -12 -14 -23 -12 -25 8 -9 56 18 56 32 0 22 -27 18
-44 -7z"/>
<path d="M5854 2619 c-19 -21 -19 -21 6 -18 14 2 26 12 28 22 5 23 -11 22 -34
-4z"/>
<path d="M4375 2580 c-3 -5 -1 -10 4 -10 6 0 11 5 11 10 0 6 -2 10 -4 10 -3 0
-8 -4 -11 -10z"/>
<path d="M4530 2559 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10
-5 -10 -11z"/>
<path d="M5342 2533 c-16 -16 -22 -28 -15 -30 20 -7 53 17 53 37 0 26 -6 25
-38 -7z"/>
<path d="M9256 2535 c4 -8 13 -15 21 -15 13 0 13 3 3 15 -7 8 -16 15 -21 15
-5 0 -6 -7 -3 -15z"/>
<path d="M7030 2529 c-41 -4 -100 -15 -130 -23 -71 -20 -209 -20 -302 0 -111
24 -244 22 -368 -6 -87 -19 -146 -24 -340 -29 l-235 -6 80 -20 c124 -30 281
-26 473 14 172 35 250 38 349 15 92 -23 271 -22 392 1 125 23 311 16 531 -20
149 -25 173 -27 243 -17 83 12 187 41 187 52 0 4 -44 1 -97 -7 -128 -19 -283
-11 -443 20 -146 30 -236 36 -340 26z"/>
<path d="M8170 2513 c0 -18 28 -53 43 -53 16 0 5 28 -18 50 -24 23 -25 23 -25
3z"/>
<path d="M8240 2457 c0 -23 17 -47 32 -47 12 0 9 45 -4 58 -18 18 -28 14 -28
-11z"/>
<path d="M9060 2471 c0 -13 29 -35 37 -28 7 8 -15 37 -28 37 -5 0 -9 -4 -9 -9z"/>
<path d="M5420 2445 c0 -17 5 -25 13 -22 6 2 12 12 12 22 0 10 -6 20 -12 23
-8 2 -13 -6 -13 -23z"/>
<path d="M8070 2451 c0 -12 29 -35 36 -28 11 10 -5 37 -21 37 -8 0 -15 -4 -15
-9z"/>
<path d="M4540 2430 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M4715 2430 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
-7 -4 -4 -10z"/>
<path d="M5366 2433 c-12 -12 -5 -23 14 -23 11 0 20 4 20 9 0 11 -26 22 -34
14z"/>
<path d="M4470 2400 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M5426 2381 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z"/>
<path d="M4810 2360 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
-4 -4 -4 -10z"/>
<path d="M8160 2358 c0 -7 5 -20 10 -28 7 -12 12 -12 21 -3 9 9 9 16 -1 28
-15 18 -30 20 -30 3z"/>
<path d="M4640 2344 c0 -9 5 -14 12 -12 18 6 21 28 4 28 -9 0 -16 -7 -16 -16z"/>
<path d="M8030 2350 c0 -19 28 -60 41 -60 16 0 10 18 -16 47 -16 19 -24 23
-25 13z"/>
<path d="M9190 2311 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0
-10 -4 -10 -9z"/>
<path d="M4540 2299 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10
-5 -10 -11z"/>
<path d="M8805 2300 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
-7 -4 -4 -10z"/>
<path d="M8365 2290 c3 -5 10 -10 16 -10 5 0 9 5 9 10 0 6 -7 10 -16 10 -8 0
-12 -4 -9 -10z"/>
<path d="M8560 2280 c14 -27 50 -46 50 -27 0 17 -32 47 -49 47 -9 0 -9 -5 -1
-20z"/>
<path d="M4880 2261 c-12 -24 -6 -56 9 -47 13 8 20 42 11 56 -6 9 -11 7 -20
-9z"/>
<path d="M8307 2244 c9 -15 19 -21 21 -15 6 19 -6 41 -23 41 -14 0 -13 -3 2
-26z"/>
<path d="M9090 2256 c0 -9 5 -16 10 -16 6 0 10 4 10 9 0 6 -4 13 -10 16 -5 3
-10 -1 -10 -9z"/>
<path d="M8137 2240 c6 -21 31 -46 39 -38 2 3 -1 17 -7 32 -14 31 -40 36 -32
6z"/>
<path d="M8986 2246 c3 -9 11 -16 16 -16 13 0 5 23 -10 28 -7 2 -10 -2 -6 -12z"/>
<path d="M4770 2240 c0 -5 4 -10 9 -10 6 0 13 5 16 10 3 6 -1 10 -9 10 -9 0
-16 -4 -16 -10z"/>
<path d="M7180 2219 c-110 -24 -337 -49 -440 -49 -94 0 -239 15 -360 36 -47 9
-105 18 -130 20 l-45 5 50 -27 c57 -31 233 -69 375 -83 137 -13 365 3 482 33
116 31 208 64 208 77 0 13 -41 9 -140 -12z"/>
<path d="M5521 2212 c-14 -25 -14 -42 -1 -42 15 0 29 35 20 49 -6 11 -10 9
-19 -7z"/>
<path d="M5405 2211 c-6 -11 9 -23 19 -14 9 9 7 23 -3 23 -6 0 -12 -4 -16 -9z"/>
<path d="M8740 2197 c0 -17 20 -37 37 -37 10 0 11 5 4 19 -13 23 -41 35 -41
18z"/>
<path d="M8563 2163 c9 -9 19 -14 23 -11 10 10 -6 28 -24 28 -15 0 -15 -1 1
-17z"/>
<path d="M8130 2150 c0 -12 8 -32 17 -47 15 -23 17 -24 24 -7 7 21 -15 74 -31
74 -6 0 -10 -9 -10 -20z"/>
<path d="M8960 2153 c0 -5 4 -15 10 -23 11 -18 25 -7 17 15 -6 15 -27 21 -27
8z"/>
<path d="M4715 2140 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
-7 -4 -4 -10z"/>
<path d="M8260 2102 c0 -11 9 -27 20 -37 22 -20 26 -9 8 30 -13 29 -28 33 -28
7z"/>
<path d="M5395 2090 c3 -5 10 -10 16 -10 5 0 9 5 9 10 0 6 -7 10 -16 10 -8 0
-12 -4 -9 -10z"/>
<path d="M4895 2081 c-3 -5 -1 -12 5 -16 5 -3 10 1 10 9 0 18 -6 21 -15 7z"/>
<path d="M5486 2045 c-3 -8 -1 -15 4 -15 13 0 22 18 11 24 -5 3 -11 -1 -15 -9z"/>
<path d="M8907 2030 c-7 -29 1 -50 20 -50 12 0 14 7 8 28 -9 38 -21 47 -28 22z"/>
<path d="M5447 2013 c-10 -9 -9 -43 1 -43 12 0 32 23 32 37 0 14 -22 18 -33 6z"/>
<path d="M8220 2003 c0 -25 38 -85 49 -78 11 6 -2 60 -20 81 -16 19 -29 18
-29 -3z"/>
<path d="M8340 1970 c0 -18 20 -50 30 -50 18 0 10 39 -10 50 -14 8 -20 8 -20
0z"/>
<path d="M8590 1952 c0 -5 7 -13 16 -16 10 -4 14 -1 12 6 -5 15 -28 23 -28 10z"/>
<path d="M4848 1943 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/>
<path d="M8155 1940 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
-7 -4 -4 -10z"/>
<path d="M8460 1902 c0 -10 6 -26 13 -37 21 -28 32 0 13 30 -20 30 -26 31 -26
7z"/>
<path d="M6290 1894 c0 -8 5 -12 10 -9 6 3 10 10 10 16 0 5 -4 9 -10 9 -5 0
-10 -7 -10 -16z"/>
<path d="M6437 1873 c-4 -3 -7 -20 -7 -36 0 -29 0 -30 20 -12 23 20 27 55 7
55 -8 0 -17 -3 -20 -7z"/>
<path d="M6523 1847 c-25 -36 -28 -53 -13 -62 12 -8 42 51 38 76 -3 16 -7 14
-25 -14z"/>
<path d="M6824 1836 c-6 -27 12 -70 27 -61 17 11 8 85 -12 85 -5 0 -11 -11
-15 -24z"/>
<path d="M6932 1848 c-8 -8 -9 -15 -1 -25 18 -20 38 -16 32 7 -7 26 -17 32
-31 18z"/>
<path d="M7290 1845 c0 -8 5 -15 10 -15 6 0 10 7 10 15 0 8 -4 15 -10 15 -5 0
-10 -7 -10 -15z"/>
<path d="M6340 1839 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10
-5 -10 -11z"/>
<path d="M8280 1842 c0 -4 9 -13 20 -20 16 -10 20 -10 20 2 0 8 -7 17 -16 20
-20 8 -24 8 -24 -2z"/>
<path d="M6580 1820 c-24 -24 -26 -58 -3 -67 21 -8 53 30 53 63 0 30 -23 31
-50 4z"/>
<path d="M7140 1821 c0 -10 7 -21 15 -25 16 -6 19 3 9 28 -8 22 -24 20 -24 -3z"/>
<path d="M8086 1826 c21 -15 30 -14 19 3 -3 6 -14 11 -23 11 -13 0 -13 -2 4
-14z"/>
<path d="M6715 1809 c-9 -14 3 -59 15 -59 6 0 10 16 10 35 0 34 -12 46 -25 24z"/>
<path d="M8182 1786 c2 -22 9 -41 16 -44 17 -5 15 40 -3 64 -14 18 -15 17 -13
-20z"/>
<path d="M7986 1792 c-7 -12 22 -38 31 -28 4 3 0 14 -9 22 -9 10 -18 12 -22 6z"/>
<path d="M6900 1770 c0 -13 5 -20 13 -17 6 2 12 10 12 17 0 7 -6 15 -12 18 -8
2 -13 -5 -13 -18z"/>
<path d="M7030 1781 c0 -14 18 -23 31 -15 8 4 7 9 -2 15 -18 11 -29 11 -29 0z"/>
<path d="M7285 1780 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
-7 -4 -4 -10z"/>
<path d="M8600 1786 c0 -8 31 -36 41 -36 5 0 4 9 -3 20 -11 17 -38 28 -38 16z"/>
<path d="M8336 1772 c-3 -6 -1 -14 5 -17 15 -10 25 3 12 16 -7 7 -13 7 -17 1z"/>
<path d="M8725 1770 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
-7 -4 -4 -10z"/>
<path d="M8114 1744 c3 -9 6 -18 6 -20 0 -2 10 -4 22 -4 20 0 21 1 3 20 -22
24 -40 26 -31 4z"/>
<path d="M8492 1739 c2 -7 10 -15 17 -17 8 -3 12 1 9 9 -2 7 -10 15 -17 17 -8
3 -12 -1 -9 -9z"/>
<path d="M6618 1728 c-7 -19 2 -38 19 -38 9 0 13 8 11 22 -3 25 -23 35 -30 16z"/>
<path d="M8260 1728 c0 -19 18 -43 25 -36 9 9 -4 48 -16 48 -5 0 -9 -6 -9 -12z"/>
<path d="M5415 1709 c-10 -15 3 -25 16 -12 7 7 7 13 1 17 -6 3 -14 1 -17 -5z"/>
<path d="M6467 1707 c-3 -8 -1 -20 4 -28 11 -19 34 3 26 25 -8 20 -23 21 -30
3z"/>
<path d="M6797 1714 c-8 -8 3 -34 14 -34 11 0 12 27 0 34 -4 3 -11 3 -14 0z"/>
<path d="M7956 1693 c10 -41 16 -47 26 -29 5 10 5 23 -2 36 -16 30 -31 25 -24
-7z"/>
<path d="M6730 1685 c0 -15 6 -25 14 -25 19 0 27 25 13 39 -18 18 -27 13 -27
-14z"/>
<path d="M6963 1694 c-7 -20 9 -49 28 -49 22 0 18 59 -4 63 -9 2 -20 -4 -24
-14z"/>
<path d="M6862 1658 c-7 -24 -15 -49 -19 -56 -9 -22 34 4 47 28 8 15 7 27 -3
45 l-13 25 -12 -42z"/>
<path d="M6551 1681 c-8 -5 -11 -16 -8 -25 10 -25 27 -19 27 9 0 28 0 28 -19
16z"/>
<path d="M8400 1680 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
-4 -4 -4 -10z"/>
<path d="M5237 1673 c-10 -9 -9 -23 1 -23 5 0 17 7 28 15 19 14 19 14 -2 15
-11 0 -24 -3 -27 -7z"/>
<path d="M8050 1662 c0 -19 18 -42 32 -42 12 0 9 35 -4 48 -17 17 -28 15 -28
-6z"/>
<path d="M8346 1672 c-3 -6 -1 -14 5 -17 15 -10 25 3 12 16 -7 7 -13 7 -17 1z"/>
<path d="M6656 1655 c-9 -24 -7 -45 3 -45 5 0 13 9 16 21 8 26 -9 48 -19 24z"/>
<path d="M8470 1627 c0 -13 7 -32 15 -43 14 -18 14 -18 15 8 0 32 -9 58 -21
58 -5 0 -9 -10 -9 -23z"/>
<path d="M8160 1610 c0 -23 4 -30 20 -30 23 0 27 29 8 48 -19 19 -28 14 -28
-18z"/>
<path d="M5150 1610 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M8580 1610 c0 -5 7 -10 16 -10 8 0 12 5 9 10 -3 6 -10 10 -16 10 -5
0 -9 -4 -9 -10z"/>
<path d="M5280 1600 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M5404 1596 c-8 -22 3 -33 18 -18 9 9 9 15 0 24 -9 9 -13 7 -18 -6z"/>
<path d="M7850 1594 c0 -9 32 -33 44 -34 5 0 1 9 -9 20 -18 20 -35 26 -35 14z"/>
<path d="M7965 1590 c3 -5 11 -10 16 -10 6 0 7 5 4 10 -3 6 -11 10 -16 10 -6
0 -7 -4 -4 -10z"/>
<path d="M8291 1587 c-38 -19 -37 -35 3 -35 19 0 39 -3 45 -7 17 -10 13 11 -6
34 -16 18 -21 19 -42 8z"/>
<path d="M5164 1565 c-7 -30 2 -59 16 -50 13 8 13 75 0 75 -5 0 -12 -11 -16
-25z"/>
<path d="M8414 1569 c-3 -6 3 -21 15 -32 17 -18 21 -19 21 -5 0 39 -21 61 -36
37z"/>
<path d="M6657 1554 c-8 -8 1 -24 14 -24 5 0 9 7 9 15 0 15 -12 20 -23 9z"/>
<path d="M5530 1538 c-26 -10 -40 -25 -40 -46 0 -17 59 13 67 34 8 21 2 23
-27 12z"/>
<path d="M5316 1518 c-18 -25 -16 -31 8 -22 9 3 16 15 16 25 0 25 -5 24 -24
-3z"/>
<path d="M6773 1519 c-8 -8 -7 -19 4 -40 15 -30 43 -40 43 -14 0 8 -7 15 -15
15 -11 0 -14 7 -9 25 6 26 -4 33 -23 14z"/>
<path d="M8480 1520 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M6474 1506 c-6 -17 2 -36 17 -36 12 0 12 37 -1 45 -6 3 -13 -1 -16
-9z"/>
<path d="M8080 1509 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10
-5 -10 -11z"/>
<path d="M7843 1483 c9 -9 19 -14 23 -11 10 10 -6 28 -24 28 -15 0 -15 -1 1
-17z"/>
<path d="M8195 1480 c10 -11 24 -20 32 -20 11 0 11 4 3 20 -6 11 -20 20 -32
20 -20 0 -21 -1 -3 -20z"/>
<path d="M7192 1468 c2 -6 10 -14 16 -16 7 -2 10 2 6 12 -7 18 -28 22 -22 4z"/>
<path d="M7932 1468 c2 -6 10 -14 16 -16 7 -2 10 2 6 12 -7 18 -28 22 -22 4z"/>
<path d="M8340 1470 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M5625 1459 c-10 -15 3 -25 16 -12 7 7 7 13 1 17 -6 3 -14 1 -17 -5z"/>
<path d="M5337 1453 c-10 -9 -9 -23 2 -23 5 0 11 7 15 15 5 15 -5 20 -17 8z"/>
<path d="M6041 1446 c-14 -17 -1 -28 19 -16 11 7 12 12 4 20 -8 8 -14 7 -23
-4z"/>
<path d="M6610 1440 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M6860 1431 c0 -12 5 -21 10 -21 6 0 10 6 10 14 0 8 -4 18 -10 21 -5
3 -10 -3 -10 -14z"/>
<path d="M5403 1424 c-9 -23 11 -38 26 -20 13 16 7 36 -10 36 -5 0 -12 -7 -16
-16z"/>
<path d="M5880 1430 c0 -5 7 -10 16 -10 8 0 12 5 9 10 -3 6 -10 10 -16 10 -5
0 -9 -4 -9 -10z"/>
<path d="M8120 1430 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
-4 -4 -4 -10z"/>
<path d="M7270 1416 c0 -8 5 -18 10 -21 6 -3 10 1 10 9 0 8 -4 18 -10 21 -5 3
-10 -1 -10 -9z"/>
<path d="M7770 1411 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0
-10 -4 -10 -9z"/>
<path d="M8002 1395 c8 -17 15 -22 21 -16 7 7 6 15 -3 26 -20 24 -31 18 -18
-10z"/>
<path d="M5635 1390 c-28 -31 -8 -37 23 -7 19 20 22 27 11 27 -9 0 -24 -9 -34
-20z"/>
<path d="M6505 1400 c-4 -6 -3 -16 3 -22 6 -6 12 -6 17 2 4 6 3 16 -3 22 -6 6
-12 6 -17 -2z"/>
<path d="M7420 1398 c0 -18 18 -34 28 -24 3 4 -2 14 -11 23 -16 16 -17 16 -17
1z"/>
<path d="M8306 1401 c-8 -12 21 -34 34 -26 8 5 8 11 -1 21 -13 16 -25 18 -33
5z"/>
<path d="M6700 1385 c0 -9 6 -12 15 -9 8 4 12 10 9 15 -8 14 -24 10 -24 -6z"/>
<path d="M5973 1383 c-14 -5 -18 -43 -5 -43 10 0 42 33 42 43 0 8 -19 8 -37 0z"/>
<path d="M7055 1381 c-7 -12 12 -24 25 -16 11 7 4 25 -10 25 -5 0 -11 -4 -15
-9z"/>
<path d="M7152 1379 c2 -7 10 -15 17 -17 8 -3 12 1 9 9 -2 7 -10 15 -17 17 -8
3 -12 -1 -9 -9z"/>
<path d="M7626 1372 c-3 -5 1 -15 9 -22 16 -14 20 -3 6 19 -5 8 -11 9 -15 3z"/>
<path d="M5273 1343 c9 -9 19 -14 23 -11 10 10 -6 28 -24 28 -15 0 -15 -1 1
-17z"/>
<path d="M6900 1345 c0 -8 4 -15 9 -15 5 0 11 7 15 15 3 9 0 15 -9 15 -8 0
-15 -7 -15 -15z"/>
<path d="M8162 1343 c2 -12 14 -19 33 -21 l30 -4 -27 21 c-32 26 -40 26 -36 4z"/>
<path d="M5525 1340 c-3 -5 1 -10 10 -10 9 0 13 5 10 10 -3 6 -8 10 -10 10 -2
0 -7 -4 -10 -10z"/>
<path d="M6090 1340 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M6586 1342 c-3 -6 -1 -14 5 -17 15 -10 25 3 12 16 -7 7 -13 7 -17 1z"/>
<path d="M8020 1340 c0 -13 28 -25 38 -16 3 4 0 11 -8 16 -20 13 -30 12 -30 0z"/>
<path d="M5383 1333 c-17 -6 -16 -33 1 -33 20 0 40 26 24 32 -7 3 -19 3 -25 1z"/>
<path d="M5758 1323 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/>
<path d="M7505 1320 c3 -5 11 -10 16 -10 6 0 7 5 4 10 -3 6 -11 10 -16 10 -6
0 -7 -4 -4 -10z"/>
<path d="M6340 1305 c0 -9 5 -15 11 -13 6 2 11 8 11 13 0 5 -5 11 -11 13 -6 2
-11 -4 -11 -13z"/>
<path d="M6418 1313 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/>
<path d="M7350 1312 c0 -16 38 -44 50 -37 7 4 2 14 -14 26 -26 21 -36 24 -36
11z"/>
<path d="M5526 1294 c-4 -9 -4 -19 -1 -23 8 -7 38 12 43 27 6 19 -35 14 -42
-4z"/>
<path d="M7860 1295 c0 -16 27 -32 37 -21 7 7 -16 36 -28 36 -5 0 -9 -7 -9
-15z"/>
<path d="M6136 1281 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z"/>
<path d="M6990 1276 c0 -9 5 -16 10 -16 6 0 10 4 10 9 0 6 -4 13 -10 16 -5 3
-10 -1 -10 -9z"/>
<path d="M5458 1263 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/>
<path d="M7550 1251 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0
-10 -4 -10 -9z"/>
<path d="M7176 1241 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z"/>
<path d="M8022 1238 c3 -7 13 -15 22 -16 12 -3 17 1 14 10 -3 7 -13 15 -22 16
-12 3 -17 -1 -14 -10z"/>
<path d="M5586 1224 c-17 -16 -22 -44 -8 -44 14 0 53 46 45 53 -10 11 -20 8
-37 -9z"/>
<path d="M6796 1205 c-3 -9 0 -15 9 -15 16 0 20 16 6 24 -5 3 -11 -1 -15 -9z"/>
<path d="M8137 1206 c-6 -15 1 -26 15 -26 4 0 8 9 8 20 0 23 -15 27 -23 6z"/>
<path d="M5807 1203 c-8 -7 21 -63 32 -63 5 0 14 7 22 16 10 13 10 17 -2 25
-32 22 -47 28 -52 22z"/>
<path d="M7640 1196 c0 -9 5 -16 10 -16 6 0 10 4 10 9 0 6 -4 13 -10 16 -5 3
-10 -1 -10 -9z"/>
<path d="M6880 1191 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0
-10 -4 -10 -9z"/>
<path d="M7290 1171 c0 -35 24 -60 34 -35 6 15 -17 64 -29 64 -3 0 -5 -13 -5
-29z"/>
<path d="M5465 1179 c-10 -15 1 -23 20 -15 9 3 13 10 10 16 -8 13 -22 13 -30
-1z"/>
<path d="M5925 1180 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
-7 -4 -4 -10z"/>
<path d="M6378 1183 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/>
<path d="M7075 1181 c-7 -12 12 -24 25 -16 11 7 4 25 -10 25 -5 0 -11 -4 -15
-9z"/>
<path d="M6510 1170 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
-4 -4 -4 -10z"/>
<path d="M7515 1172 c-28 -20 -37 -42 -25 -57 18 -22 32 -18 29 8 -2 12 0 28
5 35 10 16 4 24 -9 14z"/>
<path d="M7787 1173 c-4 -6 0 -16 8 -23 21 -17 28 -8 11 15 -8 11 -15 14 -19
8z"/>
<path d="M7900 1161 c13 -25 33 -28 28 -4 -2 10 -11 19 -21 21 -16 3 -17 1 -7
-17z"/>
<path d="M6045 1140 c-8 -13 5 -13 25 0 13 8 13 10 -2 10 -9 0 -20 -4 -23 -10z"/>
<path d="M5687 1113 c-24 -23 9 -31 39 -8 18 14 18 14 -7 15 -14 0 -29 -3 -32
-7z"/>
<path d="M7660 1100 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M7934 1095 c-7 -18 3 -35 22 -35 15 0 17 9 8 34 -8 20 -23 21 -30 1z"/>
<path d="M7097 1074 c-8 -8 1 -24 14 -24 5 0 9 7 9 15 0 15 -12 20 -23 9z"/>
<path d="M6285 1050 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0
-7 -4 -4 -10z"/>
<path d="M6676 1053 c-11 -11 -6 -23 9 -23 8 0 15 4 15 9 0 13 -16 22 -24 14z"/>
<path d="M6960 1050 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M7266 1053 c-11 -11 -6 -23 9 -23 8 0 15 4 15 9 0 13 -16 22 -24 14z"/>
<path d="M7805 1030 c-11 -33 16 -57 29 -25 6 17 -2 45 -14 45 -5 0 -11 -9
-15 -20z"/>
<path d="M5910 1020 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0
-15 -4 -15 -10z"/>
<path d="M7695 1021 c-7 -12 12 -24 25 -16 11 7 4 25 -10 25 -5 0 -11 -4 -15
-9z"/>
<path d="M5741 1011 c-7 -5 -11 -14 -7 -19 9 -15 36 -4 36 14 0 16 -9 18 -29
5z"/>
<path d="M7380 1010 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M7507 1004 c-8 -8 1 -24 14 -24 5 0 9 7 9 15 0 15 -12 20 -23 9z"/>
<path d="M7755 980 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0 -7
-4 -4 -10z"/>
<path d="M6095 970 c-3 -5 1 -10 10 -10 9 0 13 5 10 10 -3 6 -8 10 -10 10 -2
0 -7 -4 -10 -10z"/>
<path d="M6280 944 c0 -17 22 -14 28 4 2 7 -3 12 -12 12 -9 0 -16 -7 -16 -16z"/>
<path d="M5960 939 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10
-5 -10 -11z"/>
<path d="M6795 940 c-8 -13 4 -50 16 -50 5 0 9 14 9 30 0 30 -13 40 -25 20z"/>
<path d="M6487 922 c-13 -15 -16 -25 -10 -37 8 -14 11 -15 22 -1 7 8 11 25 9
37 l-3 21 -18 -20z"/>
<path d="M5850 915 c0 -10 7 -15 18 -13 21 4 19 22 -2 26 -10 2 -16 -3 -16
-13z"/>
<path d="M7142 918 c2 -6 10 -14 16 -16 7 -2 10 2 6 12 -7 18 -28 22 -22 4z"/>
<path d="M7000 885 c0 -14 5 -25 10 -25 6 0 10 11 10 25 0 14 -4 25 -10 25 -5
0 -10 -11 -10 -25z"/>
<path d="M7680 895 c-9 -10 -10 -19 -3 -26 14 -14 45 0 41 19 -4 22 -23 25
-38 7z"/>
<path d="M6600 890 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M7490 885 c0 -8 4 -15 9 -15 5 0 14 7 21 15 10 13 9 15 -9 15 -12 0
-21 -6 -21 -15z"/>
<path d="M6900 878 c0 -7 5 -20 10 -28 9 -13 11 -13 19 0 6 9 6 19 -1 27 -13
17 -28 17 -28 1z"/>
<path d="M7227 884 c-8 -8 1 -24 14 -24 5 0 9 7 9 15 0 15 -12 20 -23 9z"/>
<path d="M7340 854 c0 -22 2 -24 14 -14 8 6 12 18 9 26 -9 23 -23 16 -23 -12z"/>
<path d="M5985 859 c-4 -6 -5 -13 -2 -16 7 -7 27 6 27 18 0 12 -17 12 -25 -2z"/>
<path d="M6324 849 c-3 -6 -2 -15 3 -20 13 -13 43 -1 43 17 0 16 -36 19 -46 3z"/>
<path d="M6050 840 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M7520 830 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0
-15 -4 -15 -10z"/>
<path d="M6194 789 c-9 -16 2 -22 21 -11 15 8 16 10 1 15 -8 3 -18 2 -22 -4z"/>
<path d="M6491 782 c-42 -21 -56 -48 -20 -37 55 17 69 25 69 40 0 19 -7 19
-49 -3z"/>
<path d="M7090 760 c0 -5 4 -10 9 -10 6 0 13 5 16 10 3 6 -1 10 -9 10 -9 0
-16 -4 -16 -10z"/>
<path d="M7350 760 c-12 -8 -12 -10 3 -16 21 -8 35 2 21 16 -5 5 -15 6 -24 0z"/>
<path d="M6690 749 c-12 -8 -12 -12 -2 -16 7 -3 17 -16 22 -29 5 -13 14 -24
20 -24 16 0 12 37 -5 44 -8 3 -12 12 -9 21 7 17 -4 19 -26 4z"/>
<path d="M6800 746 c0 -10 9 -16 21 -16 24 0 21 23 -4 28 -10 2 -17 -3 -17
-12z"/>
<path d="M7175 739 c-8 -23 -1 -34 14 -24 13 8 15 45 2 45 -5 0 -13 -9 -16
-21z"/>
<path d="M6383 735 c-3 -9 -3 -18 0 -21 9 -9 27 6 27 22 0 19 -19 18 -27 -1z"/>
<path d="M6957 722 c-3 -15 -4 -29 -2 -31 8 -8 25 12 25 29 0 30 -17 32 -23 2z"/>
<path d="M6530 715 c-23 -25 -23 -25 -2 -25 18 0 42 25 42 44 0 13 -18 4 -40
-19z"/>
<path d="M7476 651 c-4 -5 -2 -12 3 -15 5 -4 12 -2 15 3 4 5 2 12 -3 15 -5 4
-12 2 -15 -3z"/>
<path d="M6316 592 c-3 -6 -2 -20 2 -32 7 -20 9 -20 22 -5 11 14 11 18 -2 31
-10 10 -18 12 -22 6z"/>
<path d="M6540 540 c0 -15 5 -20 18 -18 9 2 17 10 17 18 0 8 -8 16 -17 18 -13
2 -18 -3 -18 -18z"/>
<path d="M7320 550 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
-10 -4 -10 -10z"/>
<path d="M6190 530 c0 -5 9 -10 21 -10 11 0 17 5 14 10 -3 6 -13 10 -21 10 -8
0 -14 -4 -14 -10z"/>
<path d="M7005 529 c-11 -17 1 -21 15 -4 8 9 8 15 2 15 -6 0 -14 -5 -17 -11z"/>
<path d="M6757 513 c-12 -11 -8 -23 8 -23 8 0 15 7 15 15 0 16 -12 20 -23 8z"/>
<path d="M3367 5813 c-18 -17 -5 -33 26 -33 25 0 44 -12 89 -55 89 -85 118
-146 159 -328 29 -130 48 -269 49 -357 0 -84 8 -123 22 -114 18 11 -16 454
-43 554 -21 78 -73 183 -116 235 -59 70 -161 124 -186 98z"/>
<path d="M3333 5734 c-8 -21 4 -169 23 -285 35 -218 46 -325 50 -508 6 -266
23 -329 124 -450 58 -70 209 -191 238 -191 15 0 24 12 36 47 18 53 16 59 -12
44 -39 -21 -82 -13 -133 25 -94 68 -175 181 -197 274 -6 25 -13 135 -16 245
-3 130 -12 247 -26 335 -27 171 -46 315 -55 408 -7 69 -19 90 -32 56z"/>
<path d="M10130 5770 c-64 -35 -132 -104 -165 -170 -51 -100 -85 -305 -84
-505 1 -170 14 -205 23 -60 22 348 35 425 96 546 29 57 78 108 143 148 31 19
48 23 93 19 30 -3 54 -2 54 2 0 9 -75 50 -91 50 -8 0 -39 -14 -69 -30z"/>
<path d="M10182 5338 c-7 -95 -14 -256 -17 -357 -6 -191 -21 -298 -56 -378
-22 -52 -110 -158 -152 -184 -26 -15 -33 -16 -64 -3 -27 12 -42 13 -69 4 -42
-14 -94 -62 -94 -87 0 -17 47 -73 61 -73 3 0 5 23 4 51 0 60 20 83 55 61 11
-6 33 -12 49 -12 42 0 141 77 176 136 16 27 41 66 56 87 49 67 60 129 69 386
12 302 12 541 2 541 -5 0 -14 -78 -20 -172z"/>
<path d="M7850 640 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
-4 -4 -4 -10z"/>
</g>
</svg>
                    <div class="bread-journey-heading">
                    <h3 class="pre-crou-head pb-20">Mid Stage: </h3>
                        <p class="pro_desc"> <b> Two to Four Months</b> In the 2-4-month period, your patience begins to yield results. You'll start to notice the emergence of new hairs, which may initially appear thin. However, with consistent care, they will gradually transform into thick, strong strands that will kick start your journey and enhance your appearance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="bread-journey-box">
                <?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
 "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="2871.000000pt" height="2298.000000pt" viewBox="0 0 2871.000000 2298.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,2298.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M11110 22250 c0 -6 -45 -10 -115 -10 -63 0 -115 -4 -115 -9 0 -5 -33
-11 -72 -14 -81 -6 -192 -28 -204 -39 -4 -5 -27 -8 -51 -8 -24 0 -43 -4 -43
-10 0 -5 -22 -10 -50 -10 -27 0 -50 -4 -50 -10 0 -5 -15 -10 -34 -10 -19 0
-36 -3 -38 -7 -4 -10 -100 -43 -122 -43 -9 0 -16 -4 -16 -10 0 -5 -13 -10 -30
-10 -16 0 -30 -4 -30 -10 0 -5 -7 -10 -15 -10 -9 0 -33 -11 -55 -25 -22 -14
-46 -25 -55 -25 -8 0 -15 -4 -15 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20
-10 0 -5 -5 -10 -11 -10 -6 0 -25 -11 -43 -25 -18 -14 -38 -25 -44 -25 -7 0
-12 -4 -12 -10 0 -5 -5 -10 -10 -10 -6 0 -22 -10 -35 -22 -35 -34 -53 -48 -60
-48 -7 0 -145 -138 -145 -145 0 -7 -15 -25 -47 -60 -13 -13 -23 -29 -23 -35 0
-5 -4 -10 -10 -10 -5 0 -10 -7 -10 -15 0 -9 -11 -28 -25 -43 -14 -15 -25 -32
-25 -39 0 -7 -4 -13 -10 -13 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0
-10 -5 -10 -11 0 -6 -6 -17 -12 -24 -32 -35 -38 -45 -38 -60 0 -8 -4 -15 -10
-15 -5 0 -10 -7 -10 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -9 -10 -20 0 -11 -3
-20 -8 -20 -4 0 -16 -16 -26 -35 -11 -19 -23 -35 -28 -35 -4 0 -8 -9 -8 -20 0
-11 -4 -20 -10 -20 -5 0 -10 -7 -10 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -7 -10
-16 0 -8 -6 -22 -12 -29 -30 -33 -38 -45 -38 -55 0 -5 -4 -10 -10 -10 -5 0
-10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -6 -10 -13 0 -7 -11 -24 -25
-39 -14 -15 -25 -34 -25 -43 0 -8 -4 -15 -10 -15 -5 0 -10 -7 -10 -15 0 -8 -4
-15 -10 -15 -5 0 -10 -7 -10 -16 0 -8 -6 -22 -12 -29 -30 -33 -38 -45 -38 -55
0 -5 -4 -10 -10 -10 -5 0 -10 -7 -10 -15 0 -9 -11 -28 -25 -43 -14 -15 -25
-31 -25 -37 0 -6 -9 -17 -20 -25 -11 -8 -20 -18 -20 -23 0 -5 -6 -14 -12 -22
-7 -7 -22 -25 -33 -41 -11 -15 -30 -38 -42 -50 -13 -13 -23 -26 -23 -30 0 -7
-22 -32 -108 -120 -34 -35 -65 -64 -67 -64 -6 0 -49 -36 -81 -67 -13 -13 -28
-23 -34 -23 -5 0 -10 -4 -10 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -6 -20 -14 0
-8 -13 -20 -30 -28 -16 -7 -30 -16 -30 -20 0 -5 -7 -8 -15 -8 -8 0 -15 -4 -15
-9 0 -5 -8 -12 -19 -16 -10 -3 -33 -19 -50 -35 -17 -17 -36 -30 -42 -30 -6 0
-16 -6 -23 -12 -7 -7 -25 -22 -40 -33 -16 -11 -34 -26 -41 -32 -8 -7 -16 -13
-19 -13 -10 0 -216 -210 -216 -220 0 -6 -4 -10 -10 -10 -5 0 -10 -7 -10 -15 0
-8 -4 -15 -10 -15 -5 0 -10 -5 -10 -10 0 -6 -11 -23 -25 -38 -14 -15 -25 -32
-25 -39 0 -7 -4 -13 -10 -13 -5 0 -10 -9 -10 -19 0 -11 -3 -21 -7 -23 -13 -5
-63 -117 -63 -138 0 -11 -4 -20 -10 -20 -5 0 -10 -16 -10 -35 0 -19 -4 -35
-10 -35 -5 0 -10 -25 -10 -55 0 -30 -4 -55 -10 -55 -6 0 -10 -58 -10 -154 0
-93 4 -157 10 -161 6 -3 10 -31 10 -61 0 -30 5 -54 10 -54 6 0 10 -22 10 -50
0 -27 4 -50 9 -50 5 0 11 -19 14 -42 11 -80 31 -168 39 -168 4 0 8 -14 8 -31
0 -22 -10 -40 -35 -65 -19 -18 -35 -36 -35 -39 0 -3 -40 -45 -90 -94 -49 -50
-90 -93 -90 -96 0 -8 -27 -35 -35 -35 -10 0 -35 -27 -35 -38 0 -6 -6 -13 -12
-16 -10 -5 -10 -7 0 -12 6 -3 12 -12 12 -20 0 -8 11 -27 25 -42 14 -15 25 -31
25 -35 0 -14 28 -37 44 -37 9 0 16 -4 16 -10 0 -5 7 -10 15 -10 8 0 15 -3 15
-7 0 -13 60 -43 86 -43 13 0 24 -4 24 -10 0 -5 13 -10 29 -10 17 0 33 -4 36
-10 3 -5 18 -10 33 -10 15 0 36 -7 46 -15 11 -8 32 -15 48 -15 15 0 28 -4 28
-10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 -4 20
-10 0 -5 -4 -10 -10 -10 -5 0 -10 -7 -10 -15 0 -8 -4 -15 -8 -15 -10 0 -82
-65 -82 -74 0 -4 -15 -22 -32 -40 -50 -50 -78 -85 -78 -96 0 -6 -4 -10 -8 -10
-4 0 -16 -15 -27 -32 -10 -18 -27 -40 -37 -49 -10 -9 -18 -26 -18 -38 0 -11
-4 -21 -10 -21 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -12 -11 -16
-25 -3 -14 -10 -25 -15 -25 -5 0 -9 -9 -9 -20 0 -11 -4 -20 -10 -20 -5 0 -10
-11 -10 -25 0 -14 -3 -25 -8 -25 -8 0 -30 -59 -39 -102 -3 -16 -9 -28 -14 -28
-5 0 -9 -13 -9 -30 0 -16 -4 -30 -10 -30 -5 0 -10 -18 -10 -40 0 -22 -4 -40
-10 -40 -5 0 -10 -16 -10 -35 0 -19 -4 -43 -9 -53 -14 -27 -41 -154 -41 -189
0 -18 -4 -33 -10 -33 -5 0 -10 -25 -10 -55 0 -30 -4 -55 -10 -55 -6 0 -10 -30
-10 -70 0 -38 -4 -70 -9 -70 -5 0 -11 -30 -13 -67 -3 -38 -10 -113 -16 -168
-26 -232 -32 -333 -32 -558 0 -151 -4 -237 -10 -237 -6 0 -10 -103 -10 -290 0
-187 4 -290 10 -290 6 0 10 -89 10 -247 0 -136 4 -272 10 -302 10 -60 30 -240
37 -333 3 -32 9 -58 14 -58 5 0 9 -36 9 -80 0 -47 4 -80 10 -80 6 0 10 -32 10
-75 0 -41 4 -75 9 -75 5 0 11 -24 14 -52 8 -82 26 -181 37 -200 6 -10 10 -36
10 -58 0 -22 5 -40 10 -40 6 0 10 -22 10 -50 0 -27 4 -50 9 -50 5 0 11 -21 14
-47 3 -27 10 -67 16 -91 11 -43 2 -88 -13 -63 -4 6 -17 11 -29 11 -22 0 -108
25 -139 41 -10 5 -38 9 -63 9 -25 0 -45 5 -45 10 0 6 -28 10 -65 10 -37 0 -65
-4 -65 -10 0 -5 -20 -10 -44 -10 -24 0 -46 -3 -48 -7 -1 -5 -21 -17 -43 -28
-48 -24 -135 -107 -135 -129 0 -9 -3 -16 -8 -16 -4 0 -16 -20 -27 -45 -11 -25
-23 -45 -27 -45 -5 0 -8 -11 -8 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -13 -10
-30 0 -16 -4 -30 -9 -30 -20 0 -24 -81 -23 -415 1 -391 9 -615 23 -615 5 0 9
-40 9 -90 0 -49 4 -90 9 -90 4 0 11 -26 15 -57 12 -105 31 -211 39 -219 4 -4
7 -34 7 -66 0 -32 4 -58 10 -58 6 0 10 -37 10 -90 0 -53 4 -90 10 -90 6 0 10
-72 10 -195 0 -123 -4 -195 -10 -195 -6 0 -10 -35 -10 -85 0 -50 4 -85 10 -85
6 0 10 -26 10 -57 0 -58 24 -183 41 -215 5 -10 9 -31 9 -48 0 -16 5 -30 10
-30 6 0 10 -13 10 -30 0 -16 5 -30 10 -30 6 0 10 -9 10 -19 0 -26 50 -141 61
-141 5 0 9 -13 9 -29 0 -16 3 -31 8 -33 4 -1 16 -21 27 -42 35 -68 40 -76 47
-76 5 0 8 -9 8 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 4 -25 9 -25 5
0 17 -20 28 -45 10 -25 21 -45 26 -45 4 0 7 -11 7 -25 0 -14 5 -25 10 -25 6 0
10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -8 10 -18 0 -10 7 -27 15 -38 8 -10
15 -27 15 -36 0 -10 5 -18 10 -18 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0
10 -13 10 -30 0 -16 5 -30 10 -30 6 0 10 -11 10 -24 0 -14 7 -31 15 -40 8 -8
15 -24 15 -35 0 -11 5 -23 10 -26 6 -3 10 -19 10 -36 0 -16 5 -29 10 -29 6 0
10 -18 10 -40 0 -22 4 -40 9 -40 5 0 11 -12 14 -27 18 -85 32 -133 39 -133 4
0 8 -20 8 -45 0 -25 5 -45 10 -45 6 0 10 -20 10 -45 0 -25 5 -45 10 -45 6 0
10 -15 10 -32 1 -18 7 -44 15 -58 8 -14 14 -35 15 -47 0 -13 5 -23 10 -23 6 0
10 -13 10 -30 0 -16 5 -30 10 -30 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0
10 -8 10 -18 0 -10 7 -27 15 -38 8 -10 15 -27 15 -36 0 -10 5 -18 10 -18 6 0
10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -7 10 -15 0 -9 10 -27 23 -40 59 -65
67 -75 67 -85 0 -5 4 -10 10 -10 9 0 42 -25 76 -57 7 -7 17 -13 23 -13 6 0 11
-4 11 -10 0 -5 9 -10 20 -10 11 0 20 -3 20 -8 0 -4 28 -16 63 -26 34 -11 66
-23 71 -28 6 -4 34 -8 63 -8 29 0 53 -4 53 -10 0 -6 33 -10 80 -10 44 0 80 -3
80 -8 0 -4 14 -13 30 -20 25 -11 30 -19 30 -48 0 -19 5 -34 10 -34 6 0 10 -43
10 -110 0 -67 4 -110 10 -110 6 0 10 -20 10 -45 0 -25 -4 -45 -10 -45 -5 0
-10 -7 -10 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -7 -10 -16 0 -8 -7 -23 -16 -31
-13 -14 -15 -30 -9 -92 4 -41 11 -86 16 -99 5 -13 9 -59 9 -103 0 -46 4 -79
10 -79 6 0 10 -40 10 -100 0 -60 4 -100 10 -100 6 0 10 -33 10 -77 0 -43 7
-114 15 -158 8 -44 14 -122 15 -172 0 -55 4 -93 10 -93 6 0 10 -40 10 -100 0
-60 4 -100 10 -100 6 0 10 -40 10 -100 0 -55 4 -100 9 -100 5 0 11 -42 15 -92
8 -124 29 -285 39 -294 4 -4 7 -27 7 -51 0 -23 5 -43 10 -43 6 0 10 -18 10
-40 0 -22 5 -40 10 -40 6 0 10 -9 10 -20 0 -22 31 -93 43 -98 4 -2 7 -15 7
-28 0 -13 5 -24 10 -24 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -9 10 -20
0 -11 3 -20 8 -20 4 0 16 -16 26 -35 11 -19 23 -35 28 -35 4 0 8 -9 8 -20 0
-11 5 -20 10 -20 6 0 10 -5 10 -11 0 -6 11 -25 25 -43 14 -18 25 -38 25 -44 0
-7 5 -12 10 -12 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -6 10 -14 0 -7 11
-25 25 -40 14 -15 25 -33 25 -39 0 -7 9 -19 20 -27 11 -8 20 -18 20 -23 0 -5
6 -15 13 -22 29 -33 37 -45 37 -55 0 -5 5 -10 10 -10 6 0 10 -7 10 -15 0 -8 5
-15 10 -15 6 0 10 -5 10 -11 0 -6 16 -25 35 -43 19 -19 35 -38 35 -44 0 -14
348 -362 361 -362 6 0 35 -25 64 -55 30 -30 61 -55 70 -55 8 0 15 -4 15 -8 0
-5 11 -15 25 -22 14 -7 25 -17 25 -22 0 -11 25 -38 35 -38 3 0 17 -10 30 -22
61 -57 75 -68 79 -68 3 0 27 -20 53 -45 25 -25 50 -45 55 -45 5 0 33 -25 63
-55 29 -30 57 -55 62 -55 4 0 29 -20 55 -45 27 -25 50 -45 53 -45 7 0 27 -16
70 -58 19 -17 37 -32 40 -32 3 0 17 -10 30 -22 62 -57 75 -68 80 -68 3 0 17
-10 30 -22 35 -33 53 -48 59 -48 3 0 27 -20 53 -45 25 -25 51 -45 56 -45 5 0
34 -25 63 -55 30 -30 61 -55 69 -55 8 0 15 -4 15 -8 0 -5 11 -15 25 -22 14 -7
25 -19 25 -26 0 -7 14 -18 30 -26 17 -7 30 -16 30 -20 0 -5 5 -8 10 -8 6 0 30
-20 54 -45 25 -25 49 -45 55 -45 7 0 31 -20 55 -45 25 -25 49 -45 56 -45 6 0
25 -13 41 -29 16 -17 38 -33 49 -36 11 -4 20 -10 20 -14 0 -4 16 -13 35 -21
19 -8 35 -17 35 -21 0 -4 10 -11 23 -15 19 -6 247 -227 247 -239 0 -6 36 -49
68 -81 12 -13 22 -26 22 -29 0 -3 15 -21 33 -40 64 -69 77 -84 77 -95 0 -5 5
-10 10 -10 12 0 60 -45 60 -55 0 -8 27 -35 35 -35 3 0 21 -15 39 -33 43 -42
85 -77 92 -77 10 0 34 -28 34 -39 0 -6 3 -11 8 -11 4 0 20 -11 36 -25 16 -14
32 -25 35 -25 3 0 25 -18 49 -40 23 -22 47 -40 53 -40 7 0 26 -16 45 -35 18
-19 38 -35 44 -35 6 0 17 -6 24 -12 7 -7 25 -22 40 -33 16 -11 34 -26 41 -32
8 -7 18 -13 24 -13 6 0 11 -4 11 -10 0 -5 7 -10 15 -10 8 0 32 -16 52 -35 20
-19 42 -35 48 -35 6 0 17 -9 25 -20 8 -11 19 -20 25 -20 6 0 22 -11 37 -25 15
-14 34 -25 43 -25 8 0 15 -4 15 -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5
9 -10 20 -10 11 0 20 -4 20 -10 0 -5 11 -12 25 -16 14 -3 25 -10 25 -15 0 -5
9 -9 20 -9 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 7
-10 15 -10 8 0 40 -11 71 -25 31 -14 65 -25 75 -25 11 0 19 -4 19 -10 0 -5 20
-10 45 -10 25 0 45 -4 45 -10 0 -5 22 -10 48 -10 27 0 52 -3 56 -7 13 -13 127
-34 214 -40 45 -3 82 -9 82 -14 0 -5 61 -9 135 -9 83 0 135 -4 135 -10 0 -6
50 -10 130 -10 80 0 130 4 130 10 0 7 157 10 450 10 293 0 450 3 450 10 0 6
34 10 83 10 78 0 248 28 263 43 4 4 25 7 46 7 21 0 38 5 38 10 0 6 16 10 35
10 19 0 35 5 35 10 0 6 8 10 18 10 10 0 42 11 70 25 29 14 59 25 67 25 8 0 15
5 15 10 0 6 11 10 25 10 14 0 25 4 25 9 0 5 11 12 25 15 14 4 25 11 25 16 0 6
9 10 20 10 11 0 20 5 20 10 0 6 7 10 15 10 8 0 15 5 15 10 0 6 9 10 20 10 11
0 20 5 20 10 0 6 9 10 20 10 11 0 20 4 20 9 0 5 10 13 23 17 12 4 29 15 38 25
9 11 24 19 33 19 9 0 16 5 16 10 0 6 5 10 10 10 10 0 22 8 55 38 7 6 17 12 22
12 5 0 15 9 23 20 8 11 21 20 29 20 7 0 28 16 47 35 18 19 40 35 48 35 9 0 16
5 16 10 0 6 5 10 10 10 6 0 21 10 34 23 34 33 75 67 81 67 3 0 25 20 49 45 25
25 51 45 60 45 9 0 16 7 16 15 0 8 4 15 9 15 13 0 249 236 286 285 16 22 58
68 92 102 35 34 63 65 63 68 0 3 15 21 33 40 42 44 57 63 57 70 0 3 10 16 23
29 40 41 67 76 67 86 0 6 9 10 20 10 11 0 20 5 20 10 0 6 5 10 11 10 6 0 17 6
24 12 33 30 45 38 55 38 5 0 10 5 10 10 0 6 7 10 15 10 8 0 29 13 47 30 17 16
35 30 39 30 5 0 36 27 69 60 33 33 65 60 71 60 6 0 30 20 55 45 24 25 46 45
49 45 4 0 12 6 19 12 7 7 30 27 51 43 21 17 48 39 59 50 12 11 39 34 61 50 22
17 60 49 85 72 25 24 49 43 53 43 5 0 33 25 62 55 30 30 60 55 66 55 6 0 31
20 55 45 23 25 46 45 49 45 4 0 13 6 20 12 8 7 30 27 50 43 20 17 50 42 67 58
17 15 33 27 37 27 4 0 34 25 66 55 33 30 63 55 68 55 4 0 33 25 63 55 31 30
62 55 70 55 8 0 14 4 14 8 0 5 11 15 25 22 14 7 25 19 25 26 0 7 14 18 30 26
17 7 30 16 30 20 0 5 5 8 10 8 6 0 30 20 54 45 25 25 49 45 55 45 6 0 35 24
64 53 28 28 70 65 91 81 45 34 336 323 336 334 0 4 20 28 45 54 25 27 45 50
45 53 0 7 14 25 48 60 12 13 22 29 22 35 0 5 5 10 10 10 6 0 10 7 10 15 0 9
10 27 23 40 37 40 47 54 47 65 0 5 5 10 10 10 6 0 10 9 10 20 0 11 4 20 8 20
5 0 17 16 28 35 10 19 22 35 26 35 5 0 8 9 8 20 0 11 5 20 10 20 6 0 10 7 10
15 0 8 5 15 10 15 6 0 10 6 10 14 0 18 32 76 43 76 4 0 7 9 7 20 0 11 5 20 10
20 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 7 10 15 0 8 11 40 25 71 14 31 25
65 25 75 0 11 5 19 10 19 6 0 10 16 10 35 0 19 5 35 10 35 6 0 10 16 10 35 0
19 4 43 9 53 13 23 33 166 38 275 2 48 9 87 14 87 5 0 9 49 9 110 0 61 4 110
9 110 5 0 12 42 15 93 6 117 21 249 35 307 6 25 11 78 11 118 0 41 4 72 10 72
6 0 10 58 10 155 0 90 4 155 9 155 6 0 12 55 14 123 2 67 10 164 17 215 l13
94 -27 23 c-18 15 -26 32 -26 54 0 17 5 31 10 31 6 0 10 49 10 128 l0 129 30
26 c20 18 41 27 65 27 19 0 35 5 35 10 0 6 23 10 50 10 28 0 50 5 50 10 0 6
11 10 25 10 13 0 50 11 81 25 31 14 63 25 70 25 8 0 14 5 14 10 0 6 11 10 25
10 14 0 25 4 25 8 0 4 15 16 33 27 17 10 39 27 48 37 9 10 19 18 23 18 11 0
126 118 126 130 0 5 5 10 10 10 6 0 10 7 10 16 0 9 8 24 19 33 10 9 21 26 25
39 4 12 12 22 17 22 5 0 9 9 9 20 0 11 5 20 10 20 6 0 10 16 10 35 0 19 5 35
10 35 6 0 10 8 10 18 0 17 17 60 41 104 5 10 9 31 9 48 0 16 5 30 10 30 6 0
10 20 10 45 0 25 5 45 10 45 6 0 10 16 10 35 0 19 4 35 9 35 5 0 12 20 15 45
4 25 11 45 17 45 5 0 9 14 9 30 0 17 5 30 10 30 6 0 10 16 10 35 0 19 5 35 10
35 6 0 10 9 10 20 0 11 11 43 25 72 14 28 25 60 25 70 0 10 5 18 10 18 6 0 10
11 10 25 0 14 5 25 10 25 6 0 10 9 10 20 0 11 4 20 8 20 4 0 16 22 27 50 11
28 23 50 27 50 4 0 8 9 8 20 0 11 5 20 10 20 6 0 10 7 10 15 0 14 45 101 61
120 5 5 9 17 9 27 0 10 5 18 10 18 6 0 10 9 10 20 0 11 3 20 8 20 7 0 12 8 47
76 11 21 23 41 28 42 4 2 7 11 7 21 0 9 9 23 19 30 11 8 27 34 37 58 10 23 22
43 26 43 4 0 8 11 8 25 0 14 5 25 10 25 6 0 10 7 10 16 0 8 7 22 15 30 8 9 15
26 15 40 0 13 5 24 10 24 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 14 10 30 0
17 5 30 10 30 6 0 10 11 10 25 0 13 6 42 14 62 29 81 36 111 36 146 0 20 5 37
10 37 6 0 10 40 10 99 0 56 4 103 10 106 6 4 10 90 10 226 0 120 4 219 8 219
5 0 12 48 15 108 4 59 11 123 17 142 5 19 10 59 10 87 0 29 5 53 10 53 6 0 10
28 10 65 0 36 4 65 9 65 5 0 11 26 14 58 3 31 13 91 22 132 9 41 19 96 22 123
3 26 9 47 14 47 5 0 9 29 9 65 0 37 4 65 10 65 6 0 10 31 10 73 0 40 5 78 11
84 19 19 -2 433 -22 433 -5 0 -9 18 -9 40 0 22 -4 40 -10 40 -5 0 -10 9 -10
21 0 11 -7 27 -15 35 -8 9 -15 24 -15 35 0 10 -4 19 -10 19 -5 0 -10 7 -10 15
0 8 -4 15 -10 15 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 5 -10 10 0 24
-126 150 -150 150 -5 0 -10 5 -10 10 0 6 -9 10 -20 10 -11 0 -20 5 -20 10 0 6
-9 10 -20 10 -12 0 -33 6 -48 14 -59 30 -285 27 -317 -5 -5 -5 -22 -9 -37 -9
-15 0 -28 -4 -28 -10 0 -5 -16 -10 -35 -10 -19 0 -35 -4 -35 -10 0 -5 -11 -10
-25 -10 -14 0 -25 -4 -25 -10 0 -15 -29 -12 -46 4 -16 17 -19 56 -4 56 6 0 10
25 10 55 0 30 5 55 10 55 6 0 10 25 10 55 0 30 4 55 8 55 9 0 33 123 39 208 3
34 9 62 14 62 5 0 9 82 9 190 0 120 4 190 10 190 7 0 10 218 10 635 0 417 -3
635 -10 635 -6 0 -10 60 -10 160 0 88 -4 160 -9 160 -5 0 -11 46 -15 103 -7
127 -28 293 -38 303 -5 4 -8 40 -8 81 0 42 -4 73 -10 73 -6 0 -10 28 -10 65 0
36 -4 65 -9 65 -5 0 -12 28 -14 63 -3 34 -13 100 -22 147 -9 47 -19 111 -22
143 -3 31 -9 57 -14 57 -5 0 -9 32 -9 70 0 40 -4 70 -10 70 -5 0 -10 23 -10
51 0 28 -4 58 -9 67 -11 21 -32 142 -38 225 -3 31 -9 57 -14 57 -5 0 -9 29 -9
65 0 37 -4 65 -10 65 -5 0 -10 23 -10 52 0 28 -4 65 -9 82 -19 63 -41 172 -41
199 0 15 -4 27 -10 27 -5 0 -10 23 -10 50 0 28 -4 50 -9 50 -5 0 -11 19 -14
43 -2 23 -12 67 -21 97 -10 30 -20 70 -23 88 -3 18 -9 35 -14 38 -5 3 -9 23
-9 45 0 21 -4 39 -10 39 -5 0 -10 16 -10 35 0 19 -4 35 -9 35 -5 0 -11 12 -14
28 -5 29 -24 86 -38 114 -5 10 -9 27 -9 38 0 11 -4 20 -10 20 -5 0 -10 16 -10
35 0 19 -3 35 -7 35 -5 0 -17 29 -28 65 -10 36 -23 65 -27 65 -4 0 -8 11 -8
25 0 14 -4 25 -10 25 -5 0 -10 8 -10 18 0 10 -11 42 -25 70 -14 29 -25 56 -25
62 0 5 -4 10 -10 10 -5 0 -10 14 -10 30 0 17 -4 30 -10 30 -5 0 -10 5 -10 11
0 6 -16 44 -35 85 -19 40 -35 78 -35 84 0 5 -4 10 -10 10 -5 0 -10 9 -10 20 0
11 -4 20 -10 20 -5 0 -10 6 -10 14 0 16 -51 110 -62 114 -4 2 -8 14 -8 27 0
13 -3 25 -7 27 -11 4 -63 86 -63 98 0 5 -4 10 -10 10 -5 0 -10 9 -10 20 0 11
-4 20 -10 20 -5 0 -10 5 -10 11 0 6 -6 17 -12 24 -30 33 -38 45 -38 55 0 5 -4
10 -10 10 -5 0 -10 7 -10 16 0 9 -16 31 -35 50 -19 18 -35 38 -35 44 0 6 -10
21 -22 34 -13 12 -34 39 -48 59 -14 20 -28 37 -32 37 -5 0 -8 5 -8 11 0 6 -6
16 -12 23 -7 7 -26 30 -43 51 -16 20 -41 50 -55 65 -14 16 -34 41 -45 56 -22
31 -501 514 -510 514 -7 0 -36 26 -125 113 -39 37 -73 67 -76 67 -3 0 -25 20
-48 45 -24 25 -48 45 -54 45 -7 0 -12 4 -12 8 0 5 -11 15 -25 22 -14 7 -25 19
-25 27 0 7 -4 13 -8 13 -4 0 -25 16 -46 35 -21 19 -42 35 -45 35 -4 0 -23 15
-43 33 -20 19 -53 44 -72 58 -20 13 -36 27 -36 32 0 4 -7 7 -15 7 -8 0 -15 5
-15 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -4 10 -10 10 -9 0 -42 25 -76
58 -7 6 -17 12 -23 12 -6 0 -11 4 -11 8 0 5 -16 16 -35 25 -19 9 -35 21 -35
27 0 5 -9 10 -20 10 -11 0 -20 5 -20 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0
6 -6 10 -12 10 -7 0 -26 11 -42 25 -16 14 -35 25 -43 25 -7 0 -13 5 -13 10 0
6 -9 10 -20 10 -11 0 -20 4 -20 8 0 5 -16 17 -35 28 -19 10 -35 22 -35 26 0 5
-9 8 -20 8 -11 0 -20 5 -20 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -9 10
-20 10 -11 0 -20 3 -20 8 0 10 -58 42 -76 42 -8 0 -14 5 -14 10 0 6 -9 10 -20
10 -11 0 -20 3 -20 8 0 4 -20 15 -45 25 -25 11 -45 23 -45 28 0 5 -11 9 -25 9
-14 0 -25 5 -25 10 0 6 -9 10 -20 10 -11 0 -20 5 -20 10 0 6 -11 10 -24 10
-13 0 -26 4 -28 9 -4 11 -114 61 -133 61 -8 0 -15 5 -15 10 0 6 -11 10 -25 10
-14 0 -25 5 -25 10 0 6 -7 10 -16 10 -9 0 -30 7 -47 16 -58 31 -67 34 -82 34
-8 0 -15 5 -15 10 0 6 -11 10 -25 10 -25 0 -31 2 -93 33 -19 9 -40 17 -48 17
-8 0 -14 5 -14 10 0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -8 10 -17 10 -23
0 -110 32 -165 61 -10 5 -29 9 -43 9 -14 0 -25 5 -25 10 0 6 -16 10 -35 10
-19 0 -35 3 -35 8 0 4 -29 16 -65 27 -36 10 -65 23 -65 27 0 4 -16 8 -35 8
-19 0 -35 5 -35 10 0 6 -16 10 -35 10 -19 0 -35 4 -35 9 0 5 -15 11 -32 14
-59 10 -128 31 -128 39 0 5 -16 8 -35 8 -19 0 -35 5 -35 10 0 6 -18 10 -40 10
-22 0 -40 4 -40 9 0 5 -17 11 -37 14 -53 7 -140 31 -149 40 -4 4 -25 7 -46 7
-21 0 -38 5 -38 10 0 6 -20 10 -45 10 -25 0 -45 5 -45 10 0 6 -20 10 -45 10
-25 0 -45 4 -45 9 0 5 -25 12 -55 16 -30 3 -57 11 -60 16 -4 5 -26 9 -51 9
-24 0 -44 5 -44 10 0 6 -25 10 -55 10 -30 0 -55 4 -55 9 0 5 -26 11 -57 14
-32 3 -92 13 -133 22 -41 9 -101 19 -132 22 -32 3 -58 9 -58 14 0 5 -36 9 -80
9 -47 0 -80 4 -80 10 0 6 -32 10 -75 10 -41 0 -75 4 -75 8 0 5 -44 12 -97 15
-54 4 -114 11 -133 17 -19 5 -83 10 -142 10 -65 0 -108 4 -108 10 0 6 -57 10
-150 10 -86 0 -150 -4 -150 -9 0 -5 -42 -12 -92 -14 -110 -6 -239 -25 -252
-38 -6 -5 -36 -9 -68 -9 -32 0 -58 -4 -58 -10 0 -6 -42 -10 -105 -10 -63 0
-105 4 -105 10 0 6 -24 10 -54 10 -30 0 -57 4 -60 9 -4 5 -24 12 -46 16 -22 4
-40 11 -40 16 0 5 -11 9 -25 9 -14 0 -25 5 -25 10 0 6 -13 10 -30 10 -16 0
-30 5 -30 10 0 6 -11 10 -24 10 -13 0 -26 5 -28 12 -3 7 -38 11 -106 11 -64 0
-107 -4 -114 -11 -7 -7 -25 -12 -40 -12 -15 0 -28 -4 -28 -10 0 -5 -9 -10 -20
-10 -11 0 -20 -4 -20 -10 0 -5 -5 -10 -11 -10 -6 0 -17 -7 -25 -15 -9 -8 -24
-15 -34 -15 -10 0 -22 -4 -25 -10 -3 -5 -40 -10 -81 -10 -43 0 -74 4 -74 10 0
6 -10 10 -22 10 -13 1 -34 7 -48 15 -14 8 -35 14 -47 15 -13 0 -23 5 -23 10 0
6 -13 10 -30 10 -16 0 -30 4 -30 9 0 5 -17 11 -37 14 -21 3 -67 13 -103 22
-36 9 -86 19 -112 22 -27 3 -48 9 -48 14 0 5 -49 9 -110 9 -67 0 -110 4 -110
10 0 6 -65 10 -175 10 -110 0 -175 -4 -175 -10z m1155 -1130 c6 -19 -21 -69
-37 -70 -5 0 -8 -9 -8 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -7 -10 -15 0 -8 -4
-15 -10 -15 -5 0 -10 -7 -10 -15 0 -17 -49 -109 -62 -113 -4 -2 -8 -15 -8 -28
0 -13 -4 -24 -10 -24 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -8
-10 -17 0 -10 -7 -27 -15 -37 -8 -11 -15 -28 -15 -38 0 -10 -4 -18 -10 -18 -5
0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -11 -10 -25 0 -14 -4 -25
-10 -25 -5 0 -10 -13 -10 -28 0 -16 -7 -37 -15 -48 -8 -10 -15 -31 -15 -46 0
-15 -4 -30 -10 -33 -5 -3 -10 -26 -10 -51 0 -24 -4 -44 -10 -44 -5 0 -10 -25
-10 -55 0 -30 -4 -55 -9 -55 -9 0 -13 -40 -31 -285 -10 -128 -8 -205 6 -205 3
0 12 6 19 13 33 29 45 37 55 37 5 0 10 5 10 10 0 6 7 10 15 10 8 0 32 16 52
35 20 19 42 35 48 35 6 0 17 9 25 20 8 11 20 20 27 20 7 0 13 5 13 10 0 6 6
10 14 10 7 0 22 11 32 25 10 14 24 25 31 25 7 0 13 5 13 10 0 6 7 10 16 10 9
0 24 8 33 18 21 23 67 52 83 52 8 0 20 9 28 20 8 11 23 20 33 20 10 0 25 7 33
15 9 8 24 15 34 15 10 0 22 5 25 10 3 6 19 10 36 10 16 0 29 5 29 10 0 15 60
12 76 -4 20 -20 19 -21 -31 -42 -25 -10 -45 -22 -45 -26 0 -4 -9 -8 -20 -8
-11 0 -20 -4 -20 -10 0 -5 -6 -10 -13 -10 -7 0 -24 -11 -39 -25 -15 -14 -32
-25 -38 -25 -5 0 -10 -4 -10 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0
-5 -7 -10 -15 -10 -8 0 -15 -7 -15 -15 0 -8 -4 -15 -10 -15 -5 0 -55 -45 -110
-100 -55 -55 -100 -104 -100 -110 0 -5 -5 -10 -11 -10 -14 0 -39 -25 -39 -39
0 -6 -4 -11 -10 -11 -5 0 -10 -6 -10 -12 0 -11 -13 -29 -60 -85 -5 -7 -10 -17
-10 -23 0 -5 -4 -10 -10 -10 -5 0 -10 -11 -10 -25 0 -14 -3 -25 -8 -25 -10 0
-33 -66 -39 -112 -3 -21 -9 -38 -14 -38 -12 0 -12 -225 0 -264 22 -71 41 -185
41 -238 0 -32 4 -58 10 -58 6 0 10 -25 10 -55 0 -30 5 -55 10 -55 6 0 10 -8
10 -17 0 -21 20 -78 38 -110 7 -12 12 -29 12 -37 0 -9 5 -16 10 -16 6 0 10
-11 10 -25 0 -14 5 -25 10 -25 6 0 10 -9 10 -19 0 -11 5 -23 10 -26 6 -3 10
-15 10 -25 0 -10 7 -25 15 -34 8 -8 15 -22 15 -30 0 -9 5 -16 10 -16 6 0 10
-9 10 -20 0 -12 9 -30 20 -42 11 -12 20 -28 20 -36 0 -7 6 -20 13 -27 29 -33
37 -45 37 -55 0 -5 5 -10 10 -10 6 0 10 -9 10 -20 0 -11 4 -20 8 -20 4 0 16
-15 27 -32 10 -18 27 -40 37 -49 10 -9 18 -22 18 -28 0 -6 20 -31 45 -55 25
-25 45 -47 45 -50 0 -14 152 -166 165 -166 8 0 35 -27 35 -35 0 -10 28 -35 39
-35 6 0 11 -4 11 -9 0 -5 8 -12 18 -15 9 -3 31 -19 49 -36 18 -16 39 -30 47
-30 9 0 16 -4 16 -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 7 -10 15 -10 9
0 28 -11 43 -25 15 -14 32 -25 39 -25 7 0 13 -4 13 -10 0 -5 9 -10 20 -10 11
0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -8 0 -10 65 -42 85 -42 8 0
15 -4 15 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 17 0 66
-18 112 -41 10 -5 31 -9 48 -9 16 0 30 -4 30 -10 0 -5 18 -10 40 -10 22 0 40
-4 40 -10 0 -5 14 -10 30 -10 17 0 38 -4 48 -9 9 -5 38 -18 64 -28 27 -10 48
-21 48 -25 0 -5 7 -8 15 -8 8 0 15 -4 15 -10 0 -6 -40 -10 -100 -10 -60 0
-100 4 -100 10 0 6 -25 10 -55 10 -30 0 -55 5 -55 10 0 6 -18 10 -39 10 -22 0
-42 4 -45 9 -4 5 -24 12 -46 16 -22 4 -42 11 -46 16 -3 5 -18 9 -35 9 -16 0
-29 5 -29 10 0 6 -20 10 -45 10 -25 0 -45 4 -45 9 0 5 -17 11 -37 14 -21 3
-67 13 -103 23 -36 9 -102 19 -147 21 -46 3 -83 9 -83 14 0 5 -38 9 -85 9 -50
0 -85 4 -85 10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -9 10 -19 10 -11 0
-26 7 -35 15 -8 8 -24 15 -35 15 -12 0 -21 5 -21 10 0 6 -9 10 -20 10 -11 0
-20 3 -20 8 0 4 -15 14 -32 21 -18 8 -39 21 -46 28 -7 7 -20 13 -28 13 -8 0
-14 5 -14 10 0 6 -8 10 -18 10 -10 0 -24 9 -32 20 -8 11 -19 20 -25 20 -6 0
-28 16 -48 35 -20 19 -42 35 -48 35 -6 0 -31 20 -55 45 -23 25 -46 45 -49 45
-8 0 -35 27 -35 35 0 3 -20 26 -45 49 -25 24 -45 49 -45 55 0 6 -4 11 -10 11
-5 0 -10 7 -10 15 0 8 -4 15 -8 15 -5 0 -17 16 -28 35 -10 19 -22 35 -26 35
-5 0 -8 7 -8 15 0 9 -9 25 -20 37 -11 12 -20 28 -20 35 0 13 -7 23 -37 58 -7
7 -13 18 -13 24 0 6 -4 11 -10 11 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0
-10 6 -10 13 0 7 -11 24 -25 39 -14 15 -25 34 -25 43 0 8 -4 15 -10 15 -5 0
-10 9 -10 20 0 12 -11 32 -25 46 -14 14 -25 31 -25 39 0 8 -4 15 -10 15 -5 0
-10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 7 -10 15 0 8 -4 15 -10 15 -5 0 -10
5 -10 10 0 6 -11 28 -25 50 -14 22 -25 46 -25 55 0 8 -4 15 -10 15 -5 0 -10 9
-10 20 0 11 -4 20 -10 20 -5 0 -10 6 -10 14 0 7 -7 19 -15 26 -8 7 -15 21 -15
31 0 11 -4 19 -10 19 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 11 -10 25
0 14 -4 25 -10 25 -5 0 -10 11 -10 25 0 14 -3 25 -8 25 -8 0 -30 59 -39 103
-3 15 -9 27 -14 27 -5 0 -9 16 -9 35 0 19 -4 35 -10 35 -5 0 -10 20 -10 45 0
25 -4 45 -8 45 -38 0 -52 600 -18 760 9 47 20 102 23 123 3 20 9 37 14 37 5 0
9 20 9 45 0 25 5 45 10 45 6 0 10 9 10 20 0 17 18 66 41 112 5 10 9 25 9 33 0
8 5 15 10 15 6 0 10 16 10 35 0 19 5 35 10 35 6 0 10 9 10 19 0 11 4 22 9 26
5 3 12 19 16 35 4 17 11 30 16 30 5 0 9 11 9 25 0 14 5 25 10 25 6 0 10 9 10
20 0 11 5 20 10 20 6 0 10 7 10 16 0 20 54 74 73 74 9 0 17 6 20 13 2 7 8 8
13 3 5 -5 4 -11 -3 -13 -7 -3 -13 -16 -13 -29 0 -13 -4 -24 -10 -24 -5 0 -10
-11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -7 -10 -15 0 -8 -11 -38 -25 -67
-14 -28 -25 -60 -25 -70 0 -10 -4 -18 -10 -18 -5 0 -10 -11 -10 -25 0 -14 -4
-25 -10 -25 -5 0 -10 -11 -10 -25 0 -14 -4 -33 -9 -43 -16 -29 -41 -119 -41
-146 0 -14 -4 -26 -10 -26 -5 0 -10 -25 -10 -55 0 -30 -4 -55 -10 -55 -5 0
-10 -24 -10 -54 0 -30 -4 -57 -8 -60 -34 -21 -34 -696 -1 -696 5 0 9 -20 9
-45 0 -25 5 -45 10 -45 6 0 10 -20 10 -45 0 -25 5 -45 10 -45 6 0 10 -8 10
-17 0 -20 32 -108 43 -119 4 -4 7 -16 7 -26 0 -10 5 -18 10 -18 6 0 10 -11 10
-25 0 -14 5 -25 10 -25 6 0 10 -9 10 -20 0 -11 3 -20 8 -20 4 0 16 -20 27 -45
11 -25 23 -45 27 -45 5 0 8 -9 8 -20 0 -11 3 -20 8 -20 4 0 16 -20 27 -45 11
-25 23 -45 27 -45 5 0 8 -7 8 -15 0 -8 5 -15 10 -15 6 0 10 -9 10 -20 0 -11 5
-20 10 -20 6 0 10 -6 10 -14 0 -18 32 -76 43 -76 4 0 7 -9 7 -20 0 -11 5 -20
10 -20 6 0 10 -11 10 -25 0 -14 4 -25 8 -25 5 0 17 -16 28 -35 10 -19 22 -35
26 -35 5 0 8 -9 8 -19 0 -11 5 -23 10 -26 6 -3 10 -15 10 -26 0 -10 5 -19 10
-19 6 0 10 -5 10 -10 0 -12 52 -94 63 -98 4 -2 7 -12 7 -23 0 -10 5 -19 10
-19 6 0 10 -7 10 -15 0 -8 4 -15 9 -15 5 0 11 -8 15 -17 14 -41 51 -88 130
-168 47 -47 90 -85 95 -85 6 0 30 -18 53 -40 24 -22 51 -43 61 -46 9 -3 17
-10 17 -15 0 -5 7 -9 15 -9 8 0 15 -4 15 -10 0 -5 9 -10 20 -10 11 0 20 -3 20
-7 0 -11 58 -43 76 -43 8 0 14 -4 14 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10
0 -5 5 -10 10 -10 6 0 33 -11 62 -25 28 -14 60 -25 70 -25 10 0 18 -4 18 -10
0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 13 -10 28 -10 15 0 32 -4 38 -9 14
-13 62 -22 68 -13 3 5 -13 24 -36 43 -22 19 -48 42 -57 52 -8 9 -19 17 -24 17
-5 0 -37 29 -72 65 -36 36 -67 65 -70 65 -8 0 -35 27 -35 35 0 8 -47 55 -55
55 -8 0 -35 27 -35 35 0 10 -48 55 -60 55 -5 0 -10 4 -10 9 0 5 -34 44 -75 86
-41 43 -75 81 -75 85 0 5 -40 49 -90 99 -49 51 -90 95 -90 99 0 4 -25 34 -55
66 -30 33 -55 63 -55 68 0 4 -5 8 -11 8 -11 0 -39 24 -39 34 0 7 -31 44 -80
96 -19 20 -44 49 -55 64 -11 16 -26 34 -32 41 -7 8 -13 21 -13 29 0 9 -4 16
-10 16 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 18 -10 41 0 22 -5 49
-11 60 -5 11 -13 58 -16 105 -3 46 -10 87 -15 90 -12 8 -10 224 2 224 6 0 10
29 10 68 0 37 7 98 15 137 8 38 15 85 15 102 0 18 5 33 10 33 6 0 10 25 10 55
0 30 4 55 9 55 5 0 11 21 14 48 3 26 13 76 22 112 9 36 19 88 22 115 3 28 9
54 14 60 5 5 9 33 9 62 0 29 5 53 10 53 6 0 10 25 10 55 0 30 5 55 10 55 6 0
10 21 11 48 0 47 29 175 42 188 4 4 7 22 7 41 0 18 5 33 10 33 6 0 10 16 10
35 0 19 4 35 9 35 5 0 12 16 15 35 4 19 11 35 16 35 6 0 10 11 10 25 0 14 5
25 10 25 6 0 10 9 10 20 0 11 5 20 10 20 6 0 10 11 10 25 0 14 5 25 10 25 6 0
10 9 10 20 0 11 4 20 8 20 5 0 17 20 28 45 10 25 22 45 26 45 4 0 8 9 8 20 0
11 5 20 10 20 6 0 10 4 10 10 0 9 39 72 60 97 5 7 10 17 10 23 0 5 5 10 10 10
6 0 10 9 10 20 0 11 5 20 10 20 12 0 29 13 63 47 28 27 54 29 62 3z m4445
-943 c0 -12 -9 -29 -20 -37 -11 -8 -20 -23 -20 -33 0 -9 -7 -20 -15 -23 -8 -3
-17 -14 -20 -24 -3 -10 -14 -27 -23 -38 -10 -11 -27 -32 -37 -46 -11 -14 -25
-26 -32 -26 -7 0 -13 -7 -13 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -6 -11 -12 0
-7 -16 -26 -35 -43 -19 -16 -50 -45 -69 -62 -19 -18 -37 -33 -40 -33 -3 0 -17
-11 -31 -25 -14 -14 -29 -25 -33 -25 -4 0 -22 -13 -39 -30 -18 -16 -39 -30
-47 -30 -8 0 -15 -4 -15 -10 0 -5 -6 -10 -13 -10 -8 0 -27 -11 -43 -25 -16
-14 -37 -25 -46 -25 -10 0 -18 -4 -18 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -3
-20 -7 0 -5 -20 -16 -45 -26 -25 -11 -45 -23 -45 -28 0 -5 -11 -9 -25 -9 -14
0 -25 -4 -25 -10 0 -5 -13 -10 -30 -10 -16 0 -30 -4 -30 -10 0 -5 -9 -10 -21
-10 -11 0 -35 -7 -52 -16 -61 -32 -67 -34 -97 -34 -16 0 -30 -4 -30 -10 0 -5
-16 -10 -35 -10 -19 0 -35 -4 -35 -9 0 -5 -17 -11 -37 -14 -21 -2 -74 -14
-117 -26 -44 -11 -96 -21 -118 -21 -21 0 -38 -4 -38 -10 0 -6 -52 -10 -135
-10 -83 0 -135 -4 -135 -10 0 -6 -27 -10 -60 -10 -33 0 -60 4 -60 10 0 6 -43
10 -110 10 -67 0 -110 -4 -110 -10 0 -5 7 -10 15 -10 19 0 63 -27 86 -52 9
-10 21 -18 27 -18 6 0 31 -20 55 -45 25 -25 50 -45 56 -45 6 0 11 -3 11 -7 0
-5 18 -17 40 -27 22 -11 40 -23 40 -28 0 -4 16 -8 35 -8 19 0 35 -4 35 -10 0
-5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 11 -10 25 -10 14 0 33 -4 43 -9 46
-23 95 -41 112 -41 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0
-5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 9 -10 20 -10 17 0 66 -18 112 -41 10
-5 29 -9 43 -9 14 0 25 -4 25 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5
12 -10 28 -10 15 0 36 -7 46 -15 11 -8 35 -15 53 -15 18 0 33 -4 33 -10 0 -5
18 -10 40 -10 22 0 40 -4 40 -10 0 -5 18 -10 39 -10 22 0 42 -4 45 -9 3 -5 23
-11 43 -14 46 -6 122 -26 145 -38 10 -5 36 -9 58 -9 22 0 40 -4 40 -10 0 -5
18 -10 39 -10 22 0 42 -4 45 -9 3 -5 23 -11 43 -14 53 -7 140 -31 149 -40 4
-4 25 -7 46 -7 21 0 38 -4 38 -10 0 -5 18 -10 40 -10 45 0 54 -16 14 -26 -36
-9 -364 5 -385 17 -10 5 -47 9 -83 9 -37 0 -66 4 -66 10 0 6 -25 10 -55 10
-30 0 -55 5 -55 10 0 6 -13 10 -29 10 -27 0 -107 21 -159 41 -13 5 -36 9 -52
9 -17 0 -30 5 -30 10 0 6 -12 10 -27 10 -27 0 -163 42 -195 60 -10 6 -29 10
-43 10 -14 0 -25 5 -25 10 0 6 -16 10 -35 10 -19 0 -35 3 -35 8 0 11 -119 46
-127 37 -5 -4 -3 -10 4 -12 7 -2 29 -20 49 -39 21 -19 42 -34 46 -34 4 0 8 -5
8 -11 0 -6 6 -17 14 -25 8 -8 19 -14 25 -14 6 0 11 -4 11 -10 0 -5 7 -10 15
-10 9 0 35 -20 59 -45 25 -25 51 -45 60 -45 9 0 16 -3 16 -7 0 -5 17 -19 37
-33 20 -14 41 -29 47 -35 6 -5 25 -17 41 -25 30 -15 44 -25 70 -47 7 -7 18
-13 24 -13 6 0 11 -4 11 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 9 -10
20 -10 11 0 20 -4 20 -9 0 -5 11 -12 25 -15 14 -4 25 -11 25 -16 0 -6 7 -10
15 -10 8 0 15 -4 15 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 7 -10 15
-10 8 0 34 -11 59 -25 25 -14 52 -25 60 -25 9 0 16 -4 16 -10 0 -5 11 -10 25
-10 14 0 25 -4 25 -10 0 -5 9 -10 19 -10 11 0 23 -4 26 -10 3 -5 15 -10 25
-10 10 0 25 -7 34 -15 8 -8 24 -15 35 -15 12 0 21 -4 21 -10 0 -5 16 -10 35
-10 19 0 35 -4 35 -10 0 -5 13 -10 29 -10 16 0 31 -3 33 -7 5 -12 102 -43 132
-43 14 0 26 -4 26 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 16 -10 35
-10 19 0 43 -4 53 -9 23 -12 99 -32 145 -38 41 -6 51 -23 12 -23 -14 0 -25 -4
-25 -10 0 -6 -47 -10 -120 -10 -73 0 -120 4 -120 10 0 6 -15 10 -34 10 -19 0
-38 5 -41 10 -3 6 -16 10 -28 10 -12 0 -53 12 -92 25 -38 14 -78 25 -87 25
-10 0 -18 5 -18 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -10 10 -22 10
-24 1 -124 33 -135 44 -3 3 -19 6 -35 6 -15 0 -28 5 -28 10 0 6 -16 10 -35 10
-19 0 -35 5 -35 10 0 6 -11 10 -25 10 -25 0 -117 46 -123 62 -2 4 -10 8 -18 8
-8 0 -14 5 -14 10 0 6 -7 10 -15 10 -8 0 -29 16 -48 35 -19 19 -41 35 -51 35
-9 0 -16 3 -16 8 0 4 -21 21 -45 37 -25 17 -45 33 -45 38 0 4 -7 7 -15 7 -8 0
-15 5 -15 10 0 6 -7 10 -15 10 -7 0 -18 6 -22 13 -9 13 -68 57 -78 57 -3 0
-17 11 -31 25 -14 14 -29 25 -33 25 -4 0 -22 14 -39 30 -18 17 -37 30 -43 30
-6 0 -16 6 -23 13 -7 6 -25 21 -40 32 -16 11 -34 26 -41 33 -8 6 -16 12 -20
12 -6 0 -19 10 -50 38 -7 6 -17 12 -22 12 -5 0 -15 9 -23 20 -8 11 -20 20 -28
20 -7 0 -29 16 -49 35 -20 19 -42 35 -50 35 -7 0 -13 3 -13 8 0 4 -21 21 -45
37 -25 17 -45 33 -45 38 0 4 -7 7 -15 7 -8 0 -15 5 -15 10 0 6 -7 10 -15 10
-8 0 -15 5 -15 10 0 6 -5 10 -10 10 -6 0 -23 11 -38 25 -15 14 -31 25 -37 25
-6 0 -17 9 -25 20 -8 11 -18 20 -23 20 -8 0 -24 12 -62 48 -13 12 -29 22 -35
22 -5 0 -10 5 -10 10 0 6 -6 10 -14 10 -7 0 -22 11 -32 25 -10 14 -24 25 -31
25 -7 0 -13 5 -13 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -5 10 -11 10 -6
0 -25 16 -43 35 -19 19 -39 35 -45 35 -7 0 -30 18 -52 40 -22 22 -45 40 -50
40 -5 0 -31 23 -59 50 -28 28 -57 50 -65 50 -8 0 -15 4 -15 8 0 5 -11 15 -25
22 -14 7 -25 17 -25 22 0 11 -25 38 -35 38 -8 0 -75 67 -75 75 0 8 -27 35 -35
35 -8 0 -35 27 -35 34 0 4 -14 21 -31 39 l-31 32 35 3 c20 2 45 -2 56 -7 11
-6 29 -11 40 -11 12 0 21 -4 21 -10 0 -5 6 -10 14 -10 18 0 76 -32 76 -42 0
-5 7 -8 15 -8 8 0 15 -4 15 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 9
-10 20 -10 11 0 20 -3 20 -7 0 -5 20 -16 45 -26 25 -11 45 -23 45 -28 0 -5 9
-9 19 -9 11 0 21 -3 23 -7 5 -12 106 -63 123 -63 8 0 15 -4 15 -10 0 -5 11
-10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -9 0 -5 16 -12
35 -15 19 -4 35 -11 35 -16 0 -6 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 18 -10
40 -10 22 0 40 -4 40 -10 0 -6 38 -10 95 -10 52 0 95 4 95 9 0 5 33 12 73 14
90 7 201 23 247 37 19 5 47 10 62 10 16 0 28 5 28 10 0 6 20 10 45 10 25 0 45
5 45 10 0 6 12 10 26 10 31 0 187 51 192 62 2 5 19 8 38 8 19 0 34 5 34 10 0
6 9 10 19 10 11 0 23 5 26 10 3 6 13 10 21 10 9 0 22 7 30 15 9 8 24 15 34 15
10 0 22 5 25 10 3 6 15 10 26 10 10 0 19 3 19 8 0 4 15 13 33 21 17 8 34 17
37 20 12 14 60 41 75 41 8 0 15 4 15 8 0 5 16 17 35 28 19 10 35 21 35 25 0 4
14 12 30 19 17 7 30 16 30 21 0 5 5 9 11 9 6 0 16 6 24 13 7 6 25 21 41 32 15
11 37 29 48 40 12 11 39 33 60 49 21 16 79 69 127 117 92 91 119 106 119 66z
m-3670 -57 c0 -5 18 -10 40 -10 22 0 40 -5 40 -10 0 -6 10 -22 23 -35 56 -62
67 -75 67 -80 0 -2 30 -36 68 -75 95 -99 112 -118 112 -130 0 -5 5 -10 10 -10
11 0 60 -45 60 -55 0 -10 49 -55 60 -55 5 0 10 -4 10 -9 0 -5 17 -26 38 -47
20 -22 51 -57 67 -79 17 -22 47 -58 68 -80 20 -22 40 -48 43 -57 3 -10 10 -18
15 -18 5 0 9 -5 9 -10 0 -11 10 -25 48 -65 12 -13 22 -31 22 -40 0 -8 5 -15
10 -15 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -6 10 -14 0 -8 11 -34 25
-57 14 -24 25 -59 25 -76 0 -18 5 -33 10 -33 6 0 10 -28 10 -65 l0 -65 30 0
c40 0 98 -28 137 -67 18 -18 33 -35 33 -38 0 -6 11 -20 38 -50 6 -7 12 -18 12
-24 0 -6 5 -11 10 -11 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -7 10 -15 0
-8 7 -15 15 -15 8 0 15 -4 15 -10 0 -12 174 -187 214 -215 15 -11 34 -26 41
-32 8 -7 17 -13 22 -13 5 0 15 -9 23 -20 8 -11 20 -20 26 -20 6 0 17 -7 24
-15 7 -8 21 -15 31 -15 11 0 19 -4 19 -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10
0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 8 -10 19 -10 10 0 24 -7 31 -15 7
-8 23 -15 36 -15 13 0 24 -4 24 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5
10 -10 23 -10 12 -1 33 -7 47 -15 14 -8 35 -14 48 -15 12 0 22 -4 22 -10 0 -5
14 -10 30 -10 17 0 30 -4 30 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 8
-10 19 -10 10 0 44 -11 75 -25 31 -14 65 -25 76 -25 11 0 20 -4 20 -10 0 -5
14 -10 30 -10 17 0 30 -4 30 -10 0 -5 13 -10 29 -10 37 0 49 -16 18 -24 -35
-9 -138 -6 -182 5 -22 6 -57 13 -77 16 -21 3 -38 9 -38 14 0 5 -18 9 -40 9
-22 0 -40 5 -40 10 0 6 -7 10 -16 10 -22 0 -118 33 -122 43 -2 4 -15 7 -28 7
-13 0 -24 5 -24 10 0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -11 10 -25 10
-14 0 -25 5 -25 10 0 6 -8 10 -19 10 -10 0 -24 7 -31 15 -7 8 -19 15 -26 15
-8 0 -14 5 -14 10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -9 10 -20 10 -11
0 -20 4 -20 8 0 5 -18 17 -40 28 -22 10 -40 22 -40 27 0 4 -7 7 -15 7 -8 0
-15 5 -15 10 0 6 -6 10 -13 10 -7 0 -30 16 -50 35 -20 19 -44 35 -52 35 -8 0
-15 5 -15 10 0 6 -5 10 -11 10 -6 0 -26 16 -45 35 -18 19 -38 35 -44 35 -5 0
-10 5 -10 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 11 -45 60 -55 60 -8 0 -55
47 -55 55 0 3 -10 16 -22 29 -34 35 -68 75 -68 82 0 10 -28 34 -39 34 -6 0
-11 6 -11 13 0 7 -9 19 -20 27 -11 8 -20 20 -20 28 0 7 -16 28 -35 46 -19 19
-35 38 -35 45 0 6 -13 25 -30 43 -16 17 -30 35 -30 39 0 4 -11 19 -25 33 -14
14 -25 28 -25 31 0 7 -14 24 -47 60 -13 13 -23 31 -23 40 0 8 -4 15 -10 15 -5
0 -10 7 -10 15 0 8 -4 15 -8 15 -4 0 -16 15 -27 33 -10 17 -27 39 -37 48 -10
9 -18 22 -18 28 0 7 -6 18 -12 25 -7 7 -22 25 -33 40 -11 16 -26 34 -32 41 -7
8 -13 16 -13 20 0 3 -4 11 -10 18 -47 57 -60 76 -60 86 0 6 -4 11 -10 11 -5 0
-10 7 -10 15 0 8 -4 15 -8 15 -4 0 -16 15 -27 33 -10 17 -27 39 -37 48 -10 9
-18 24 -18 33 0 9 -4 16 -10 16 -5 0 -10 5 -10 10 0 10 -8 22 -37 55 -7 7 -13
17 -13 22 0 5 -9 15 -20 23 -11 8 -20 20 -20 27 0 6 -11 24 -25 39 -14 15 -25
32 -25 38 0 6 -9 18 -20 26 -11 8 -20 18 -20 23 0 8 -12 24 -47 62 -13 13 -23
29 -23 35 0 5 -4 10 -10 10 -5 0 -10 9 -10 20 0 11 7 20 15 20 8 0 15 -4 15
-10z m-2680 -140 c0 -5 -4 -10 -10 -10 -5 0 -10 -14 -10 -30 0 -17 -4 -38 -10
-48 -12 -22 -31 -105 -37 -164 -3 -27 -9 -48 -14 -48 -5 0 -9 -20 -9 -45 0
-25 -4 -45 -10 -45 -5 0 -10 -24 -10 -54 0 -30 -4 -58 -10 -61 -5 -3 -10 -21
-10 -38 0 -18 -7 -54 -15 -81 -21 -67 -20 -274 0 -323 8 -19 15 -48 15 -64 0
-16 5 -29 10 -29 6 0 10 -13 10 -30 0 -16 5 -30 10 -30 6 0 10 -11 10 -25 0
-14 5 -25 10 -25 6 0 10 -10 10 -22 0 -13 11 -43 25 -67 14 -23 25 -49 25 -57
0 -8 5 -14 10 -14 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0 10 -9 10 -20 0
-11 3 -20 8 -20 10 0 42 -58 42 -76 0 -8 5 -14 10 -14 6 0 10 -9 10 -20 0 -11
5 -20 10 -20 6 0 10 -5 10 -10 0 -10 8 -22 38 -55 6 -7 12 -21 12 -29 0 -9 5
-16 10 -16 6 0 10 -5 10 -10 0 -6 11 -22 25 -36 14 -14 25 -29 25 -33 0 -4 14
-22 30 -39 17 -18 30 -36 30 -40 0 -5 20 -30 45 -55 25 -26 45 -50 45 -53 0
-9 49 -54 60 -54 5 0 10 -5 10 -10 0 -11 65 -80 75 -80 9 0 147 -142 142 -146
-6 -6 -101 37 -105 48 -2 4 -10 8 -18 8 -18 0 -63 28 -85 52 -9 10 -21 18 -28
18 -6 0 -11 5 -11 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -7 10 -15 10 -8
0 -15 5 -15 10 0 12 -45 60 -55 60 -8 0 -35 27 -35 35 0 3 -10 17 -22 30 -57
62 -68 75 -68 80 0 3 -10 17 -22 30 -36 38 -48 54 -48 62 0 5 -9 15 -20 23
-11 8 -20 22 -20 32 0 10 -4 18 -10 18 -5 0 -10 7 -10 15 0 8 -11 25 -25 39
-14 14 -25 34 -25 45 0 11 -4 21 -8 23 -13 4 -62 96 -62 113 0 8 -4 15 -10 15
-5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 11 -10 24 0 13 -3 26 -7 28 -11
4 -43 75 -43 93 0 8 -4 15 -10 15 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0
-10 15 -10 34 0 19 -3 36 -8 38 -12 5 -42 208 -42 288 0 84 27 306 41 332 5
10 9 34 9 53 0 19 5 35 10 35 6 0 10 16 10 35 0 19 5 35 10 35 6 0 10 9 10 20
0 22 50 133 62 138 4 2 8 15 8 28 0 13 5 24 10 24 6 0 10 7 10 16 0 8 6 21 13
28 6 8 19 23 27 35 15 22 30 28 30 11z m-588 -611 c-15 -23 -16 -159 -2 -159
6 0 10 -40 10 -100 0 -60 4 -100 10 -100 6 0 10 -30 10 -70 0 -40 4 -70 10
-70 6 0 10 -19 10 -42 0 -51 17 -149 36 -203 8 -23 14 -51 14 -63 0 -12 5 -22
10 -22 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0 10 -7 10 -15 0 -17 49 -109
62 -113 4 -2 8 -10 8 -18 0 -8 5 -14 10 -14 6 0 10 -7 10 -15 0 -9 10 -27 23
-40 33 -35 47 -53 47 -60 0 -3 14 -19 30 -37 17 -17 30 -34 30 -38 0 -5 12
-21 28 -37 15 -17 36 -42 47 -56 11 -15 25 -27 32 -27 7 0 13 -5 13 -10 0 -11
65 -80 75 -80 3 0 17 -11 31 -25 14 -14 29 -25 34 -25 16 0 220 -210 220 -226
0 -8 5 -14 10 -14 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0
-21 -7 -19 -36 10 -14 14 -29 25 -33 25 -4 0 -22 14 -39 30 -18 17 -34 30 -37
30 -9 0 -29 18 -106 93 -38 37 -72 67 -74 67 -3 0 -16 9 -28 20 -62 58 -102
90 -109 90 -4 0 -8 5 -8 10 0 11 -45 60 -55 60 -8 0 -55 47 -55 55 0 10 -27
35 -38 35 -5 0 -15 11 -22 25 -7 14 -17 25 -22 25 -4 0 -8 7 -8 15 0 9 -10 27
-22 40 -38 40 -48 54 -48 65 0 5 -4 10 -10 10 -5 0 -10 9 -10 20 0 11 -4 20
-9 20 -5 0 -12 11 -15 25 -4 14 -11 25 -16 25 -6 0 -10 9 -10 20 0 11 -4 20
-10 20 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 11 -10 25 0 14 -4 25
-10 25 -5 0 -10 11 -10 24 0 13 -3 26 -7 28 -11 4 -43 101 -43 127 0 11 -4 21
-10 21 -5 0 -10 20 -10 45 0 25 -4 45 -9 45 -5 0 -11 30 -14 68 -3 37 -10 98
-17 137 -20 114 1 335 32 335 5 0 8 7 8 15 0 8 5 15 10 15 6 0 10 9 10 20 0
11 7 20 15 20 8 0 15 6 16 13 0 6 5 2 12 -11 8 -18 8 -28 -1 -43z m651 -45 c4
-4 7 -20 7 -36 0 -15 5 -28 10 -28 6 0 10 -16 10 -35 0 -19 5 -35 10 -35 6 0
10 -16 10 -35 0 -19 3 -35 8 -35 4 0 16 -29 27 -65 10 -36 23 -65 27 -65 4 0
8 -16 8 -35 0 -19 5 -35 10 -35 6 0 10 -7 10 -15 0 -15 3 -23 33 -83 9 -19 17
-40 17 -48 0 -8 5 -14 10 -14 6 0 10 -13 10 -30 0 -16 4 -30 8 -30 4 0 16 -22
27 -50 11 -27 23 -50 27 -50 4 0 8 -9 8 -20 0 -11 5 -20 10 -20 6 0 10 -11 10
-25 0 -14 5 -25 10 -25 6 0 10 -9 10 -20 0 -11 3 -20 8 -20 4 0 16 -20 27 -45
11 -25 23 -45 28 -45 4 0 7 -9 7 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0
-8 5 -15 10 -15 6 0 10 -7 10 -16 0 -8 6 -22 13 -29 29 -33 37 -45 37 -55 0
-5 5 -10 10 -10 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -5 10 -10 0 -10
8 -22 38 -55 6 -7 12 -18 12 -24 0 -6 4 -11 9 -11 5 0 12 -9 16 -20 3 -11 19
-33 36 -49 16 -16 29 -35 29 -42 0 -6 10 -20 22 -30 11 -11 19 -22 15 -25 -3
-3 -17 4 -30 17 -14 13 -41 38 -61 54 -19 17 -36 36 -36 43 0 6 -6 12 -13 12
-7 0 -21 12 -32 27 -11 14 -32 39 -47 56 -16 16 -28 32 -28 37 0 4 -13 21 -30
38 -16 18 -30 39 -30 47 0 8 -4 15 -10 15 -5 0 -10 6 -10 13 0 8 -11 27 -25
43 -14 16 -25 35 -25 42 0 6 -4 12 -10 12 -5 0 -10 11 -10 25 0 14 -4 25 -8
25 -5 0 -17 16 -28 35 -10 19 -22 35 -26 35 -5 0 -8 9 -8 20 0 11 -4 20 -10
20 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 9 -10 19 0 11 -3 21 -7 23
-11 4 -43 75 -43 93 0 8 -4 15 -10 15 -5 0 -10 11 -10 25 0 14 -4 25 -10 25
-5 0 -10 9 -10 20 0 11 -11 43 -25 72 -14 28 -25 60 -25 70 0 10 -4 18 -10 18
-5 0 -10 20 -10 45 0 25 -4 45 -9 45 -5 0 -11 17 -14 38 -14 93 -30 168 -38
184 -11 21 -12 119 -2 145 5 14 9 8 18 -24 5 -23 13 -45 18 -49z m-1543 -235
c0 -146 4 -229 10 -229 6 0 10 -37 10 -92 0 -50 4 -117 10 -147 38 -219 45
-281 31 -281 -6 0 -14 14 -18 30 -3 17 -10 33 -14 36 -5 3 -9 18 -9 35 0 16
-4 29 -10 29 -5 0 -10 20 -10 45 0 25 -4 45 -10 45 -5 0 -10 12 -10 28 -1 15
-7 54 -15 87 -8 33 -15 86 -15 118 0 31 -4 57 -10 57 -6 0 -10 43 -10 109 0
63 4 112 10 116 6 3 10 25 10 48 1 23 5 62 11 87 5 25 12 62 15 82 15 89 24
11 24 -203z m262 121 c4 0 8 -40 8 -90 0 -49 4 -90 9 -90 5 0 12 -30 14 -67 8
-112 32 -223 58 -275 5 -10 9 -29 9 -43 0 -14 5 -25 10 -25 6 0 10 -13 10 -30
0 -16 5 -30 10 -30 6 0 10 -6 10 -14 0 -7 7 -19 15 -26 8 -7 15 -21 15 -31 0
-11 5 -19 10 -19 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -7 10 -15 0 -9
11 -27 25 -41 14 -14 25 -29 25 -33 0 -4 12 -21 28 -37 15 -16 40 -45 55 -65
15 -20 113 -123 217 -228 105 -105 190 -198 190 -206 0 -17 -35 -21 -45 -5 -3
6 -15 10 -26 10 -10 0 -19 5 -19 10 0 6 -9 10 -20 10 -11 0 -20 4 -20 8 0 5
-16 17 -35 28 -19 10 -35 22 -35 26 0 5 -5 8 -11 8 -10 0 -239 225 -239 236 0
6 -16 26 -57 69 -18 19 -33 37 -33 40 0 3 -5 11 -10 18 -37 44 -70 92 -75 108
-4 10 -11 19 -16 19 -5 0 -9 6 -9 14 0 8 -11 34 -25 57 -14 24 -25 54 -25 67
0 12 -4 22 -10 22 -5 0 -10 14 -10 30 0 17 -4 30 -10 30 -5 0 -10 22 -10 48 0
26 -4 52 -9 58 -13 14 -31 271 -30 424 1 113 3 129 12 98 6 -21 14 -38 19 -38z
m-422 -15 c0 -8 -4 -15 -10 -15 -6 0 -10 -40 -10 -100 0 -55 -4 -100 -9 -100
-5 0 -12 -39 -14 -87 -6 -102 -22 -264 -38 -378 -14 -99 -6 -277 16 -370 9
-38 19 -82 22 -97 3 -16 9 -28 14 -28 5 0 9 -16 9 -35 0 -19 5 -35 10 -35 6 0
10 -7 10 -16 0 -8 11 -35 25 -60 14 -25 25 -51 25 -59 0 -8 5 -15 10 -15 6 0
10 -6 10 -14 0 -8 3 -16 8 -18 4 -1 25 -30 47 -63 21 -33 63 -83 92 -112 29
-29 53 -55 53 -58 0 -4 7 -13 15 -22 8 -8 13 -19 10 -24 -8 -12 -45 -12 -45 1
0 6 -7 10 -16 10 -16 0 -164 145 -164 161 0 4 -20 28 -45 52 -25 25 -45 48
-45 52 0 3 -5 11 -10 18 -47 56 -60 74 -60 85 0 6 -4 12 -10 12 -5 0 -10 11
-10 25 0 14 -3 25 -8 25 -16 0 -35 90 -44 210 -16 193 -21 489 -9 545 11 56
29 160 38 218 3 20 9 37 14 37 5 0 9 20 9 45 0 25 5 45 10 45 6 0 10 11 10 25
0 14 5 25 10 25 6 0 10 8 10 18 0 10 7 27 15 38 8 10 15 25 15 32 0 14 21 41
33 42 4 0 7 -7 7 -15z m5678 -412 c12 -3 22 -9 22 -14 0 -5 9 -9 20 -9 11 0
20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -8 0 -5 16 -17 35 -28 19 -10
35 -22 35 -26 0 -5 9 -8 20 -8 11 0 20 -4 20 -10 0 -5 7 -10 15 -10 8 0 15 -4
15 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 11 -12 25 -16 14 -3 25 -10
25 -15 0 -5 9 -9 20 -9 11 0 20 -4 20 -10 0 -5 8 -10 18 -10 20 0 77 -20 109
-38 12 -7 29 -12 37 -12 9 0 16 -4 16 -10 0 -5 11 -10 25 -10 14 0 25 -4 25
-10 0 -5 7 -10 15 -10 8 0 23 -4 33 -9 69 -34 136 -61 152 -61 11 0 20 -4 20
-10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -9
0 -5 16 -12 35 -15 19 -4 35 -11 35 -16 0 -6 11 -10 25 -10 14 0 25 -4 25 -10
0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 9 -10 19 -10 11 0 23 -4 26 -10 3
-5 15 -10 25 -10 10 0 25 -7 34 -15 8 -8 24 -15 35 -15 12 0 21 -4 21 -10 0
-5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 11 -10 25 -10 16 0 25 -6 25 -16 0
-15 -9 -16 -77 -10 -42 4 -84 11 -94 17 -10 5 -36 9 -58 9 -23 0 -41 5 -41 10
0 6 -20 10 -45 10 -25 0 -45 5 -45 10 0 6 -13 10 -29 10 -17 0 -33 5 -36 10
-3 6 -14 10 -23 10 -9 0 -30 7 -46 15 -15 8 -37 15 -47 15 -11 0 -19 5 -19 10
0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -13 10 -30 10 -16 0 -30 4 -30 8 0
4 -22 16 -50 27 -27 11 -50 23 -50 27 0 4 -9 8 -20 8 -11 0 -20 5 -20 10 0 6
-8 10 -18 10 -21 0 -72 22 -72 31 0 3 -20 14 -45 25 -25 10 -45 22 -45 26 0 4
-9 8 -20 8 -11 0 -20 5 -20 10 0 6 -6 10 -14 10 -8 0 -21 6 -28 13 -7 6 -26
19 -43 27 -16 8 -36 21 -43 28 -7 6 -17 12 -21 12 -5 0 -24 13 -42 30 -19 16
-40 30 -46 30 -7 0 -13 4 -13 8 0 4 -12 15 -28 24 -15 9 -42 30 -60 47 -17 17
-35 31 -40 31 -4 0 -13 10 -21 21 -12 20 -11 21 11 15 12 -4 33 -10 46 -13z
m-5441 -485 c-3 -8 -6 -5 -6 6 -1 11 2 17 5 13 3 -3 4 -12 1 -19z m3983 2 c0
-5 5 -10 10 -10 26 0 101 -79 140 -149 8 -14 19 -29 25 -33 5 -4 6 -11 1 -15
-5 -4 -11 -2 -13 5 -3 6 -9 12 -14 12 -6 0 -21 10 -34 23 -62 56 -75 67 -80
67 -3 0 -21 15 -40 33 -49 46 -63 57 -75 57 -5 0 -10 5 -10 10 0 6 20 10 45
10 25 0 45 -4 45 -10z m-325 -400 c3 -5 16 -10 28 -10 12 0 31 -7 41 -15 11
-8 28 -15 38 -15 10 0 18 -4 18 -10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0
-5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 11 -10 24 -10 14 0 31 -7 40 -15 8
-8 22 -15 30 -15 9 0 16 -4 16 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5
9 -10 20 -10 11 0 20 -4 20 -10 0 -5 9 -10 21 -10 11 0 27 -7 35 -15 9 -8 26
-15 40 -15 13 0 24 -4 24 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 18
-10 39 -10 22 0 43 -4 46 -10 3 -5 21 -10 40 -10 19 0 46 -5 62 -11 68 -26
323 -49 323 -30 0 6 10 11 23 11 25 0 67 26 67 41 0 5 -7 9 -15 9 -8 0 -15 5
-15 10 0 6 -6 10 -13 10 -12 0 -77 54 -77 64 0 10 69 6 75 -4 3 -5 15 -10 26
-10 10 0 19 -4 19 -8 0 -5 20 -17 45 -28 25 -10 45 -22 45 -26 0 -4 7 -8 15
-8 9 0 26 -9 37 -20 21 -20 21 -20 2 -35 -10 -8 -27 -15 -36 -15 -10 0 -18 -4
-18 -9 0 -5 -10 -12 -22 -16 -129 -43 -358 -58 -471 -31 -38 9 -79 16 -93 16
-13 0 -24 5 -24 10 0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -11 10 -25 10
-14 0 -25 4 -25 9 0 5 -12 11 -27 14 -44 9 -103 31 -103 39 0 5 -11 8 -25 8
-14 0 -25 5 -25 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -6 10 -14 10 -7
0 -39 11 -70 25 -31 14 -65 25 -76 25 -11 0 -20 5 -20 10 0 6 -9 10 -20 10
-11 0 -20 5 -20 10 0 6 -6 10 -14 10 -18 0 -76 32 -76 43 0 4 -9 7 -20 7 -11
0 -20 5 -20 10 0 6 -5 10 -11 10 -17 0 -39 27 -39 49 0 16 6 21 24 21 14 0 28
-4 31 -10z m-2745 -558 c0 -8 97 -27 193 -38 26 -3 47 -10 47 -15 0 -5 27 -9
60 -9 33 0 60 -4 60 -9 0 -5 21 -11 48 -14 26 -3 79 -13 117 -22 39 -9 94 -19
123 -22 28 -3 52 -9 52 -14 0 -5 25 -9 55 -9 30 0 55 -4 55 -9 0 -5 26 -11 58
-14 31 -3 89 -12 127 -22 39 -9 94 -19 123 -22 28 -3 52 -9 52 -14 0 -5 25 -9
55 -9 30 0 55 -4 55 -9 0 -5 26 -11 58 -14 31 -3 91 -13 132 -22 41 -9 101
-19 133 -22 31 -3 57 -9 57 -14 0 -5 25 -9 55 -9 30 0 55 -4 55 -10 0 -6 30
-10 70 -10 40 0 70 -4 70 -10 0 -5 21 -10 48 -10 26 0 65 -5 87 -11 58 -14
177 -30 273 -36 45 -2 82 -9 82 -14 0 -5 49 -9 109 -9 61 0 112 -4 115 -9 3
-4 70 -11 148 -15 79 -3 220 -10 313 -16 226 -12 3688 -12 3870 1 77 5 188 12
248 15 59 4 107 10 107 15 0 5 41 9 90 9 53 0 90 4 90 10 0 6 30 10 69 10 39
0 73 5 76 10 3 6 21 10 38 10 18 0 57 7 87 15 30 8 72 15 93 15 20 0 37 5 37
10 0 6 23 10 50 10 28 0 50 5 50 10 0 6 23 10 50 10 28 0 50 4 50 9 0 5 19 11
43 14 64 8 147 30 147 39 0 4 18 8 40 8 22 0 40 5 40 10 0 6 18 10 40 10 22 0
40 5 40 10 0 6 10 10 23 10 23 1 123 33 134 44 3 3 19 6 35 6 15 0 28 5 28 10
0 6 20 10 45 10 25 0 45 5 45 10 0 6 7 10 16 10 19 0 112 28 136 41 10 5 29 9
43 9 14 0 25 5 25 10 0 6 20 10 44 10 24 0 46 4 48 9 4 10 82 21 94 12 16 -11
44 -60 44 -76 0 -8 5 -15 10 -15 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0 10
-9 10 -19 0 -11 7 -26 15 -35 8 -8 15 -21 15 -30 0 -8 5 -18 10 -21 6 -3 10
-15 10 -26 0 -10 5 -19 10 -19 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10
-11 10 -25 0 -14 4 -25 8 -25 10 0 42 -71 42 -93 0 -10 5 -17 10 -17 6 0 10
-9 10 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 4 -25 9 -25 5 0 12 -13
16 -30 4 -16 11 -32 16 -35 5 -4 9 -15 9 -26 0 -10 5 -19 10 -19 6 0 10 -11
10 -25 0 -14 5 -25 10 -25 6 0 10 -9 10 -20 0 -11 4 -28 9 -38 20 -40 41 -120
41 -159 0 -23 5 -45 10 -48 6 -4 10 -68 10 -161 0 -96 4 -154 10 -154 6 0 10
-64 10 -172 0 -95 4 -234 10 -308 10 -137 30 -579 37 -837 3 -79 9 -143 14
-143 5 0 9 -45 9 -100 0 -60 4 -100 10 -100 6 0 10 -26 10 -59 0 -33 5 -63 10
-66 6 -3 10 -23 10 -43 1 -20 7 -55 15 -77 8 -22 15 -52 15 -67 0 -16 5 -28
10 -28 6 0 10 -16 10 -35 0 -19 5 -35 10 -35 6 0 10 -16 10 -35 0 -19 5 -35
10 -35 6 0 10 -7 10 -15 0 -18 32 -89 43 -93 4 -2 7 -12 7 -23 0 -10 5 -19 10
-19 6 0 10 -7 10 -15 0 -19 27 -63 52 -86 10 -9 18 -21 18 -28 0 -6 5 -11 10
-11 6 0 10 -7 10 -16 0 -9 8 -24 18 -33 10 -9 27 -31 37 -48 11 -18 23 -33 27
-33 4 0 8 -9 8 -20 0 -11 4 -20 9 -20 5 0 12 -11 15 -25 4 -14 11 -25 16 -25
6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6
0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0 10 -13 10 -30 0 -16 4 -30 9 -30 5 0
12 -20 15 -45 4 -24 11 -47 17 -50 5 -4 9 -28 9 -56 0 -27 5 -49 10 -49 6 0
10 -37 10 -90 0 -53 4 -90 10 -90 6 0 10 -38 10 -92 0 -51 5 -111 10 -133 6
-22 13 -97 17 -167 3 -71 10 -128 15 -128 4 0 8 -49 8 -110 0 -67 4 -110 10
-110 6 0 10 -43 10 -110 0 -67 4 -110 10 -110 6 0 10 -31 10 -72 0 -40 7 -113
15 -163 8 -49 15 -118 15 -152 0 -34 5 -65 10 -68 6 -3 10 -48 10 -101 0 -56
4 -94 10 -94 6 0 10 -52 10 -135 0 -83 4 -135 10 -135 6 0 10 -113 10 -320 0
-207 -4 -320 -10 -320 -6 0 -10 -45 -10 -115 0 -63 -4 -115 -9 -115 -5 0 -11
-37 -14 -82 -3 -46 -13 -123 -22 -173 -9 -49 -19 -123 -22 -162 -2 -40 -9 -73
-14 -73 -5 0 -9 -29 -9 -65 0 -36 -4 -65 -9 -65 -5 0 -11 -33 -14 -72 -3 -40
-13 -109 -22 -153 -9 -44 -19 -104 -22 -132 -3 -29 -9 -53 -14 -53 -5 0 -9
-25 -9 -55 0 -30 -4 -55 -9 -55 -5 0 -11 -26 -14 -57 -3 -32 -13 -92 -22 -133
-9 -41 -19 -132 -22 -202 -3 -71 -9 -128 -14 -128 -5 0 -9 -102 -9 -235 0
-150 -4 -235 -10 -235 -6 0 -10 -43 -10 -110 0 -60 -4 -110 -8 -110 -17 0 -36
-109 -37 -214 0 -77 -4 -111 -13 -114 -7 -2 -12 -10 -12 -18 0 -9 -11 -14 -28
-14 -24 0 -32 -7 -48 -40 -10 -22 -22 -40 -26 -40 -5 0 -8 -7 -8 -15 0 -12
-14 -15 -64 -15 -86 0 -94 -19 -32 -76 44 -40 58 -75 36 -89 -5 -3 -10 -15
-10 -26 0 -10 -4 -19 -10 -19 -5 0 -10 -7 -10 -15 0 -15 -6 -25 -37 -60 -7 -7
-13 -18 -13 -24 0 -18 -18 -12 -44 14 -14 14 -32 25 -41 25 -21 0 -45 -24 -45
-44 0 -8 -5 -18 -10 -21 -5 -3 -10 -26 -10 -51 l0 -44 74 0 c87 0 106 5 106
31 0 10 5 19 10 19 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 7 10 16 0 10 16
32 35 50 25 25 43 34 68 34 34 0 67 -23 49 -34 -5 -3 -12 -33 -15 -68 -4 -51
-2 -64 11 -75 9 -7 12 -13 6 -13 -7 0 -15 -11 -18 -25 -5 -20 -13 -25 -36 -25
-17 0 -30 4 -30 9 0 5 -12 11 -27 13 -16 3 -35 8 -44 12 -17 7 -39 -29 -39
-64 0 -11 -10 -49 -21 -85 -19 -56 -25 -65 -45 -65 -13 0 -24 -3 -24 -7 0 -13
-89 -46 -105 -39 -8 3 -15 15 -15 26 0 11 -4 20 -10 20 -5 0 -10 9 -10 20 0
12 -7 20 -16 20 -19 0 -74 -56 -74 -76 0 -8 -4 -14 -10 -14 -5 0 -10 -20 -10
-45 0 -25 -4 -45 -10 -45 -5 0 -10 -7 -10 -16 0 -15 -23 -44 -35 -44 -4 0 -13
-6 -21 -14 -16 -16 -19 -76 -4 -76 6 0 10 -6 10 -13 0 -7 11 -24 25 -39 14
-15 25 -32 25 -38 0 -15 -55 -70 -70 -70 -14 0 -40 -25 -40 -37 0 -14 48 -53
65 -53 8 0 15 -4 15 -10 0 -5 9 -10 20 -10 23 0 120 -93 120 -115 0 -8 5 -15
10 -15 6 0 10 -16 10 -35 0 -32 -2 -35 -30 -35 -16 0 -30 5 -30 10 0 6 -11 10
-25 10 -14 0 -25 5 -25 10 0 6 -7 10 -15 10 -21 0 -63 28 -97 62 -24 26 -32
28 -102 28 l-76 0 0 -55 c0 -52 1 -55 25 -55 14 0 25 -4 25 -10 0 -5 14 -10
30 -10 19 0 30 -5 30 -14 0 -8 6 -17 13 -20 10 -5 10 -7 0 -12 -7 -3 -13 -14
-13 -25 0 -10 -4 -19 -10 -19 -5 0 -10 -20 -10 -45 0 -25 5 -45 10 -45 6 0 10
-16 10 -35 0 -31 3 -35 25 -35 14 0 25 -4 25 -10 0 -5 7 -10 16 -10 18 0 44
-23 44 -39 0 -6 4 -11 9 -11 5 0 12 -20 15 -45 6 -36 11 -45 27 -45 10 0 19
-4 19 -10 0 -5 8 -10 18 -10 19 -1 41 -28 63 -77 7 -18 25 -38 39 -45 14 -7
33 -20 43 -30 16 -17 17 -20 3 -34 -9 -8 -16 -19 -16 -24 0 -17 -34 -20 -56
-5 -13 8 -32 15 -44 15 -11 0 -20 5 -20 10 0 6 -11 10 -25 10 -14 0 -25 5 -25
10 0 6 -8 10 -17 10 -40 1 -53 24 -53 94 l0 66 -35 0 c-19 0 -35 5 -35 10 0 6
-13 10 -30 10 -27 0 -30 -3 -30 -29 0 -17 5 -33 10 -36 6 -3 10 -29 10 -56 0
-76 -10 -81 -132 -75 -213 10 -226 20 -140 111 12 13 22 29 22 35 0 5 4 10 9
10 15 0 30 53 33 121 4 68 20 99 52 99 9 0 16 4 16 10 0 5 11 12 25 16 14 3
25 10 25 15 0 5 9 9 20 9 17 0 20 7 20 39 0 40 -11 51 -51 51 -10 0 -19 5 -19
10 0 6 -23 10 -51 10 -46 0 -55 -4 -85 -37 -19 -20 -34 -41 -34 -45 0 -4 -5
-8 -11 -8 -11 0 -39 -25 -39 -35 0 -5 -10 -18 -67 -80 -13 -13 -23 -27 -23
-30 0 -3 -25 -30 -55 -60 -30 -29 -55 -58 -55 -63 0 -6 -20 -31 -45 -55 -25
-25 -45 -52 -45 -61 0 -8 -5 -18 -11 -22 -8 -4 -8 -9 0 -17 6 -6 11 -18 11
-27 0 -8 9 -22 20 -30 20 -15 28 -60 10 -60 -5 0 -10 -13 -10 -30 0 -16 -4
-30 -10 -30 -5 0 -10 -11 -10 -24 0 -13 -6 -27 -12 -30 -10 -5 -10 -7 0 -12 6
-3 12 -15 12 -26 0 -11 24 -44 56 -75 55 -54 55 -55 35 -72 -12 -10 -21 -22
-21 -25 0 -4 -6 -14 -14 -22 -8 -7 -16 -19 -18 -26 -4 -10 -9 -8 -21 4 -9 9
-17 21 -17 26 0 6 -8 24 -17 41 -25 43 -56 41 -98 -6 -28 -31 -38 -36 -76 -36
-24 0 -58 7 -76 16 -65 34 -107 15 -140 -62 -20 -46 -3 -81 39 -81 15 0 28 5
28 10 0 6 16 10 35 10 28 0 35 -4 35 -20 0 -11 5 -20 10 -20 6 0 10 -12 10
-27 0 -16 7 -36 14 -45 14 -20 36 -24 36 -8 0 6 9 10 19 10 11 0 21 6 24 13 9
26 31 -27 44 -110 4 -28 2 -33 -14 -33 -22 0 -62 -42 -45 -48 7 -2 12 -12 12
-22 0 -11 6 -34 14 -52 38 -90 46 -148 21 -148 -8 0 -15 5 -15 10 0 6 -9 10
-20 10 -11 0 -20 5 -20 10 0 6 -7 10 -16 10 -20 0 -53 39 -54 63 0 25 -80 96
-107 97 -13 0 -23 5 -23 10 0 6 -30 10 -70 10 -51 0 -70 4 -70 13 0 24 24 37
67 37 24 0 43 5 43 10 0 6 7 10 15 10 23 0 18 53 -10 106 -14 26 -25 53 -25
60 0 8 -4 14 -10 14 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 5 -10 11 0
22 -30 39 -69 39 -23 0 -41 5 -41 10 0 6 -6 10 -13 10 -7 0 -19 9 -27 20 -8
11 -17 20 -20 20 -12 0 -60 -49 -60 -61 0 -18 35 -49 55 -49 8 0 15 -4 15 -10
0 -5 7 -10 15 -10 35 0 1 -46 -43 -57 -15 -3 -60 -1 -102 5 -67 9 -77 8 -91
-7 -29 -30 -52 -90 -41 -104 5 -6 12 -29 16 -49 l7 -38 -46 0 c-50 0 -75 -16
-75 -49 0 -12 -4 -21 -10 -21 -5 0 -10 -13 -10 -30 0 -27 -3 -30 -30 -30 -43
0 -80 39 -80 83 0 29 5 37 31 48 41 16 79 52 79 73 0 12 -10 16 -45 16 -25 0
-45 -4 -45 -10 0 -5 -25 -10 -55 -10 -30 0 -55 -4 -55 -9 0 -11 -58 -21 -162
-27 -57 -4 -81 -2 -91 8 -25 25 -67 108 -67 133 0 14 -4 25 -10 25 -5 0 -10 7
-10 15 0 8 5 15 10 15 6 0 10 9 10 19 0 11 5 21 11 23 18 6 -12 48 -33 48 -10
0 -18 5 -18 10 0 6 -9 10 -20 10 -11 0 -20 5 -20 10 0 6 -11 10 -25 10 -16 0
-25 -6 -25 -16 0 -8 -40 -55 -90 -103 -49 -49 -90 -96 -90 -105 0 -9 -3 -16
-7 -16 -15 0 -42 -86 -44 -140 -5 -117 5 -142 45 -120 19 9 26 22 26 42 0 34
26 38 58 8 12 -11 28 -20 37 -20 8 0 15 -4 15 -10 0 -5 5 -10 11 -10 16 0 39
-26 39 -45 0 -9 -9 -19 -20 -22 -11 -3 -20 -9 -20 -14 0 -5 -7 -9 -15 -9 -8 0
-15 -3 -15 -7 0 -11 -58 -43 -76 -43 -8 0 -14 -4 -14 -10 0 -13 -56 -13 -81 0
-15 8 -23 7 -34 -4 -17 -17 -20 -46 -5 -46 6 0 10 -11 10 -25 0 -14 5 -25 10
-25 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -28 10 -65 0 -62 23 -135 42
-135 4 0 8 -5 8 -10 0 -14 46 -60 60 -60 5 0 10 23 10 53 0 43 4 55 22 67 11
8 31 26 42 39 54 61 69 73 90 67 11 -3 30 -6 41 -6 15 0 24 -11 33 -40 6 -22
12 -46 12 -54 0 -17 45 -66 60 -66 6 0 10 -43 10 -100 0 -55 -3 -100 -7 -100
-9 0 -43 78 -43 98 0 6 -4 12 -10 12 -5 0 -10 7 -10 15 0 10 -10 15 -30 15
-39 0 -59 -37 -42 -75 7 -14 12 -39 12 -55 0 -17 5 -30 10 -30 6 0 10 -9 10
-20 0 -12 7 -20 18 -20 9 0 35 -12 57 -25 22 -14 48 -25 58 -25 9 0 17 -4 17
-10 0 -6 27 -10 60 -10 l60 0 0 56 c0 33 5 61 13 69 8 7 38 15 68 18 30 3 71
9 92 13 31 5 41 3 52 -12 20 -26 19 -31 -15 -64 -16 -16 -30 -36 -30 -45 0 -8
-4 -15 -9 -15 -5 0 -12 -8 -15 -18 -4 -13 -16 -17 -44 -17 -40 0 -91 -30 -92
-54 0 -7 9 -21 20 -31 30 -26 36 -71 11 -98 l-20 -24 -22 21 c-24 22 -102 30
-114 11 -9 -14 -95 -13 -95 1 0 9 -21 10 -70 6 l-70 -6 0 35 c0 19 -4 34 -10
34 -5 0 -10 20 -10 45 0 36 6 52 26 72 18 18 24 32 20 47 -3 11 -6 27 -6 34 0
8 -18 12 -55 12 -48 0 -55 -2 -55 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -7 -10
-15 0 -8 -9 -15 -20 -15 -24 0 -70 -42 -70 -64 0 -25 -22 -66 -37 -66 -7 0
-13 5 -13 10 0 6 -7 10 -16 10 -9 0 -30 16 -47 35 -16 19 -38 35 -48 35 -11 0
-19 5 -19 10 0 38 -111 -53 -141 -116 -8 -16 -23 -30 -33 -32 -27 -6 -55 -34
-38 -40 7 -2 19 -10 26 -18 8 -8 20 -14 26 -14 6 0 17 -6 25 -13 11 -12 11
-23 -2 -68 -17 -62 -6 -107 27 -116 11 -3 20 -9 20 -14 0 -20 31 -7 63 26 45
46 67 46 67 0 0 -19 -4 -35 -10 -35 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10
-25 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -6 -10 -13 0 -8 -8
-21 -18 -30 -34 -31 -122 16 -122 65 0 10 -4 18 -10 18 -5 0 -10 5 -10 11 0
14 -25 39 -39 39 -6 0 -11 5 -11 10 0 6 -9 10 -20 10 -11 0 -20 4 -20 9 0 5
-11 12 -25 15 -14 4 -25 11 -25 16 0 6 -9 10 -20 10 -18 0 -20 -7 -20 -55 0
-30 4 -55 9 -55 4 0 11 -29 13 -65 6 -68 15 -82 66 -109 18 -9 32 -23 32 -30
0 -26 -12 -46 -27 -46 -8 0 -21 -7 -29 -15 -24 -23 -44 -18 -44 10 0 14 -4 25
-10 25 -5 0 -10 16 -10 35 0 31 -3 35 -25 35 -14 0 -25 6 -26 13 0 9 -2 9 -6
0 -2 -7 -11 -13 -19 -13 -8 0 -14 -10 -14 -25 0 -14 -4 -25 -10 -25 -5 0 -10
-8 -10 -19 0 -13 -10 -21 -34 -25 -38 -7 -86 1 -86 15 0 5 -12 9 -26 9 -30 0
-56 -26 -86 -85 -27 -52 -34 -56 -90 -49 -53 7 -108 -18 -108 -48 0 -10 -4
-18 -10 -18 -5 0 -10 -7 -10 -15 0 -8 -6 -15 -12 -15 -7 0 -5 -5 6 -11 13 -8
20 -8 26 1 4 6 26 14 49 17 l41 6 0 -56 c0 -47 -3 -57 -20 -62 -11 -3 -25 -3
-30 0 -6 4 -22 4 -36 1 -17 -5 -24 -13 -24 -32 0 -29 11 -42 58 -69 17 -11 32
-23 32 -27 0 -4 6 -8 13 -8 6 0 23 -9 37 -20 14 -11 37 -20 53 -20 22 0 27 -4
27 -25 0 -14 -4 -25 -10 -25 -13 0 -13 -60 0 -80 9 -13 10 -13 10 0 0 18 53
80 68 80 17 0 34 -56 27 -91 -4 -24 -16 -40 -36 -52 -38 -21 -99 -23 -99 -3 0
8 -8 16 -17 18 -23 5 -73 -23 -73 -39 0 -7 -4 -13 -10 -13 -5 0 -10 -8 -10
-17 0 -10 -7 -27 -15 -37 -8 -11 -15 -26 -15 -33 0 -7 -22 -35 -49 -62 -57
-57 -61 -54 -61 51 0 75 -12 98 -51 98 -21 0 -22 2 -15 90 l7 90 -71 0 c-40 0
-70 4 -70 10 0 6 -8 10 -18 10 -10 0 -28 9 -40 20 -12 11 -24 20 -27 20 -3 0
-5 -37 -5 -82 0 -82 0 -83 -31 -100 -17 -10 -40 -18 -51 -18 -22 0 -78 30 -78
42 0 4 -43 8 -95 8 -57 0 -95 -4 -95 -10 0 -5 -17 -10 -37 -10 -21 -1 -49 -7
-63 -15 -38 -21 -65 -18 -97 13 -47 43 -54 112 -12 112 10 0 19 5 19 10 0 6
13 10 29 10 17 0 33 5 36 10 3 6 17 10 29 10 39 0 42 8 62 158 3 23 3 54 0 67
-6 24 -10 25 -81 25 -41 0 -75 3 -75 6 0 8 78 84 86 84 11 0 54 42 54 52 0 4
13 22 30 39 16 17 32 40 35 50 4 11 10 19 14 19 5 0 14 14 21 30 14 33 10 41
-52 101 -16 15 -28 30 -28 34 0 10 -27 35 -39 35 -6 0 -11 5 -11 10 0 6 -9 10
-20 10 -13 0 -20 7 -20 19 0 42 -10 51 -61 51 l-49 0 0 35 c0 19 5 35 10 35
15 0 12 88 -2 93 -17 5 -17 149 0 155 7 2 12 12 12 23 0 10 5 19 10 19 6 0 10
9 10 19 0 11 5 23 10 26 6 3 10 15 10 26 0 10 4 19 8 19 5 0 17 20 28 45 10
25 22 45 26 45 4 0 8 14 8 30 0 17 4 30 8 30 4 0 16 22 27 50 11 27 23 50 27
50 4 0 8 7 8 15 0 8 16 32 35 52 19 20 35 43 35 50 0 7 5 13 10 13 6 0 10 16
10 35 0 19 5 35 10 35 6 0 10 35 10 85 0 50 -4 85 -10 85 -5 0 -10 10 -10 21
0 22 -56 79 -77 79 -7 0 -13 5 -13 10 0 6 -9 10 -20 10 -11 0 -20 4 -20 9 0 5
-24 12 -52 15 -29 3 -77 8 -105 12 -36 4 -53 2 -53 -5 0 -6 -9 -11 -20 -11
-11 0 -20 -4 -20 -10 0 -5 -11 -10 -25 -10 -14 0 -25 5 -25 10 0 6 -9 10 -20
10 -11 0 -20 4 -20 8 0 4 -14 13 -31 19 -31 12 -79 1 -79 -19 0 -4 -7 -8 -15
-8 -8 0 -15 -4 -15 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -9 -10
-20 -10 -11 0 -20 5 -20 10 0 6 -5 10 -10 10 -6 0 -24 14 -42 30 -36 35 -58
38 -78 10 -8 -11 -22 -20 -32 -20 -10 0 -18 -4 -18 -10 0 -5 -7 -10 -15 -10
-8 0 -15 -4 -15 -10 0 -5 -9 -10 -20 -10 -11 0 -20 4 -20 8 0 5 -9 19 -20 32
-19 22 -24 23 -54 12 -18 -7 -49 -12 -69 -12 -20 0 -37 -4 -37 -10 0 -5 -16
-10 -35 -10 -19 0 -35 -4 -35 -10 0 -5 -9 -10 -20 -10 -25 0 -86 -30 -117 -58
-18 -15 -23 -30 -23 -71 0 -28 3 -51 8 -51 10 0 42 -58 42 -76 0 -8 5 -14 10
-14 6 0 10 -6 10 -14 0 -8 3 -16 8 -18 6 -3 24 -45 53 -128 6 -19 16 -43 20
-52 5 -10 9 -40 9 -68 0 -27 5 -50 10 -50 6 0 10 -13 10 -29 0 -30 29 -91 43
-91 4 0 7 -9 7 -19 0 -11 5 -23 10 -26 6 -3 10 -15 10 -26 0 -10 5 -19 10 -19
6 0 10 -8 10 -18 0 -11 7 -33 15 -50 16 -31 11 -112 -6 -112 -5 0 -9 -11 -9
-25 0 -14 -4 -25 -10 -25 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10
-6 -10 -14 0 -8 -40 -55 -90 -105 -89 -90 -90 -93 -90 -141 0 -27 5 -52 10
-55 6 -3 10 -24 10 -46 0 -21 5 -39 10 -39 6 0 10 -9 10 -20 0 -29 52 -80 95
-91 50 -14 85 -50 85 -89 l0 -30 -84 0 c-67 0 -85 -3 -90 -16 -9 -24 -7 -54 4
-54 6 0 10 -11 10 -25 0 -14 7 -42 15 -62 8 -19 15 -48 15 -63 0 -15 -7 -33
-15 -40 -19 -16 -19 -60 0 -86 8 -10 15 -25 15 -32 0 -21 32 -50 38 -34 2 6
13 12 24 12 25 0 48 23 48 49 0 12 5 21 10 21 6 0 10 9 10 20 0 11 5 20 10 20
6 0 10 -4 10 -10 0 -5 5 -10 11 -10 20 0 39 -29 39 -59 0 -17 4 -31 9 -31 9 0
17 -31 28 -102 3 -25 1 -38 -6 -38 -6 0 -11 -13 -11 -30 0 -16 -4 -30 -10 -30
-5 0 -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -9 -10 -20 0 -17 -23 -74
-36 -89 -6 -6 -34 27 -34 41 0 8 -11 38 -25 66 -14 29 -25 56 -25 62 0 5 -4
10 -10 10 -5 0 -10 14 -10 30 0 17 -4 30 -10 30 -5 0 -10 7 -10 15 0 23 -9 19
-51 -24 -22 -21 -39 -48 -39 -60 0 -11 -4 -21 -10 -21 -5 0 -10 -18 -10 -40
l0 -40 64 0 64 0 6 -45 c10 -63 -10 -115 -44 -115 -8 0 -11 -11 -8 -32 6 -35
-10 -58 -37 -58 -35 0 -45 25 -45 119 l0 90 -40 41 c-25 26 -48 40 -65 40 -14
0 -25 5 -25 10 0 6 -5 10 -11 10 -19 0 -37 26 -55 81 -11 30 -24 60 -31 67
-14 14 -93 16 -93 2 0 -5 -9 -10 -20 -10 -11 0 -20 -7 -20 -15 0 -8 -4 -15 -9
-15 -5 0 -13 -9 -16 -20 -11 -35 -25 -21 -25 25 0 25 -4 45 -10 45 -5 0 -10
20 -10 45 0 25 -4 45 -10 45 -5 0 -10 13 -10 29 0 30 -34 116 -49 126 -13 7
-84 -18 -88 -31 -2 -7 3 -19 12 -27 19 -20 19 -48 0 -94 -8 -19 -15 -48 -15
-64 0 -16 -4 -29 -10 -29 -5 0 -10 -18 -10 -41 0 -42 -17 -69 -45 -69 -15 0
-65 42 -65 55 0 9 -27 35 -37 35 -5 0 -15 9 -23 20 -11 15 -26 20 -57 20 -34
0 -43 4 -43 18 1 26 25 52 49 52 11 0 21 5 21 10 0 6 9 10 20 10 14 0 20 7 20
21 0 34 -24 49 -79 49 -59 0 -70 20 -22 40 32 13 88 62 114 100 21 30 22 73 2
90 -8 7 -15 19 -15 26 0 8 -4 14 -10 14 -29 0 14 68 43 70 5 0 15 7 24 15 13
14 12 19 -18 46 -32 28 -38 30 -91 24 -56 -6 -58 -5 -58 17 0 13 -9 30 -20 38
-11 8 -20 19 -20 26 0 6 -11 17 -25 24 -14 7 -25 17 -25 22 0 4 -9 8 -20 8
-11 0 -20 5 -20 10 0 6 -7 10 -15 10 -8 0 -15 8 -15 18 -1 28 -25 52 -54 52
-14 0 -26 -4 -26 -10 0 -5 -16 -10 -35 -10 -19 0 -35 -4 -35 -10 0 -5 -6 -10
-14 -10 -26 0 -27 -18 -5 -65 12 -25 23 -45 25 -45 9 0 60 26 65 33 3 4 13 5
22 1 18 -7 24 -64 7 -64 -5 0 -10 -4 -10 -9 0 -6 -12 -30 -27 -55 -20 -32 -35
-45 -50 -46 -28 0 -63 29 -63 52 0 10 -4 18 -10 18 -5 0 -10 9 -10 20 0 11 -4
20 -10 20 -5 0 -10 -25 -10 -55 0 -30 5 -55 10 -55 19 0 10 -27 -12 -38 -35
-16 -76 -24 -156 -29 l-73 -5 3 54 3 53 45 3 c72 4 90 10 90 32 0 11 5 20 10
20 6 0 10 11 10 25 0 14 5 25 10 25 17 0 11 32 -8 49 -37 32 -55 76 -48 115 4
20 12 36 18 36 9 0 9 3 0 12 -9 9 -20 7 -46 -7 -30 -16 -35 -25 -38 -60 -3
-37 -5 -40 -31 -38 -28 2 -57 23 -57 43 0 17 -77 90 -95 90 -12 0 -15 15 -15
80 0 47 4 80 10 80 6 0 10 -3 10 -8 0 -4 16 -16 35 -26 19 -11 35 -23 35 -28
0 -4 9 -8 20 -8 11 0 20 -4 20 -10 0 -14 19 -12 33 3 24 26 37 58 37 92 0 19
5 35 10 35 6 0 10 7 10 15 0 8 -4 15 -10 15 -5 0 -10 15 -10 33 0 30 5 36 43
52 23 11 44 20 46 21 4 4 -26 34 -34 34 -7 0 -28 17 -58 47 -56 56 -59 71 -22
99 18 13 25 28 25 51 0 18 -4 33 -10 33 -5 0 -10 9 -10 19 0 11 -4 22 -9 26
-14 8 -41 65 -41 87 0 10 -4 18 -10 18 -5 0 -10 16 -10 35 0 19 -4 35 -9 35
-5 0 -11 12 -14 28 -3 15 -15 37 -26 49 -16 16 -21 35 -21 73 0 43 -3 50 -20
50 -11 0 -20 -4 -20 -10 0 -5 -16 -10 -35 -10 -34 0 -35 1 -35 41 0 48 -18 69
-59 69 -21 0 -31 5 -31 15 0 8 -4 15 -10 15 -19 0 -10 53 12 71 11 11 24 19
28 19 10 0 40 68 40 90 0 11 5 20 10 20 6 0 10 20 10 45 0 41 -2 45 -25 45
-14 0 -25 5 -25 10 0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -6 10 -13 10
-15 0 -57 45 -57 60 0 6 -4 10 -10 10 -5 0 -10 8 -10 18 0 10 -7 27 -15 38 -8
10 -15 27 -15 37 0 9 -4 17 -10 17 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0
-10 11 -10 25 0 16 -6 25 -15 25 -8 0 -15 6 -15 13 -1 19 -40 -64 -40 -85 0
-10 -4 -18 -10 -18 -5 0 -10 -9 -10 -20 0 -11 4 -20 9 -20 5 0 11 -12 14 -28
3 -15 9 -39 13 -54 5 -23 1 -33 -25 -57 -17 -16 -31 -34 -31 -40 0 -6 -4 -11
-10 -11 -14 0 -13 -56 2 -97 8 -21 19 -33 30 -33 10 0 18 -4 18 -10 0 -5 16
-10 35 -10 19 0 35 -4 35 -9 0 -5 9 -13 20 -16 39 -13 32 -85 -9 -85 -6 0 -11
-6 -11 -14 0 -8 -13 -20 -30 -28 -16 -7 -30 -16 -30 -20 0 -5 -7 -8 -15 -8 -8
0 -15 -4 -15 -10 0 -6 -29 -10 -68 -10 -73 0 -92 -10 -92 -47 0 -13 -4 -23
-10 -23 -5 0 -10 -9 -10 -20 0 -26 -12 -26 -30 0 -8 11 -18 20 -23 20 -4 0
-19 10 -32 23 -40 37 -54 47 -65 47 -5 0 -10 5 -10 10 0 6 -18 10 -41 10 -39
0 -69 -17 -69 -39 0 -6 -6 -11 -12 -11 -9 0 -8 -4 2 -10 8 -5 30 -10 48 -10
19 0 32 -5 32 -12 0 -16 -52 -122 -62 -126 -5 -2 -8 -10 -8 -19 0 -23 -26 -43
-55 -43 -14 0 -37 -11 -51 -25 -50 -50 -143 -21 -212 67 -11 13 -9 24 8 61 25
53 25 130 -1 135 -8 1 -30 -11 -47 -28 -39 -37 -65 -38 -80 -5 -18 38 -15 102
4 109 28 11 71 6 84 -9 19 -23 56 -18 84 10 14 14 28 25 31 25 4 0 13 7 22 16
14 14 12 19 -21 53 -20 20 -36 42 -36 48 0 6 -6 14 -12 17 -10 5 -10 7 0 12 6
3 12 10 12 16 0 16 28 38 49 38 39 0 15 30 -40 50 -31 11 -38 11 -57 -6 -12
-10 -22 -26 -22 -36 0 -9 -4 -20 -10 -23 -5 -3 -10 -33 -10 -66 l0 -59 -37 0
c-29 0 -43 7 -70 36 -18 20 -33 40 -33 45 0 14 -50 10 -66 -5 -16 -17 -20
-156 -4 -156 6 0 10 -7 10 -15 0 -9 -9 -15 -25 -15 -14 0 -25 -4 -25 -10 0
-15 -29 -12 -46 4 -16 17 -20 116 -4 116 6 0 10 16 10 35 0 19 3 35 8 35 4 0
12 10 17 23 8 18 19 23 63 25 28 2 52 7 52 13 0 5 14 9 30 9 17 0 30 5 30 10
0 6 7 10 15 10 8 0 15 5 15 10 0 6 9 10 20 10 11 0 20 4 20 9 0 5 9 13 20 16
17 5 20 15 20 58 0 44 4 55 25 71 59 44 14 80 -91 73 -131 -9 -172 -22 -215
-69 -9 -10 -27 -18 -39 -18 -13 0 -37 -15 -56 -36 -31 -32 -35 -34 -50 -20
-35 35 -49 12 -46 -74 2 -56 -1 -69 -21 -92 -21 -24 -32 -28 -77 -28 -45 0
-56 4 -76 28 -13 15 -24 30 -24 35 0 4 20 7 45 7 38 0 45 3 45 19 0 11 5 21
11 23 16 5 17 110 2 115 -21 7 -15 53 10 74 17 14 39 18 100 19 l77 0 0 56 0
56 -42 -4 c-37 -2 -43 0 -46 17 -2 13 7 26 26 37 27 16 32 16 80 0 l52 -17 0
-52 c0 -47 2 -53 20 -53 22 0 70 41 70 60 0 5 9 10 20 10 11 0 20 5 20 10 0 6
33 10 80 10 l80 0 0 35 c0 19 -4 35 -10 35 -5 0 -10 8 -10 18 0 29 -90 71
-116 54 -6 -4 -14 -17 -18 -29 -7 -21 -13 -23 -82 -23 -43 0 -74 4 -74 10 0 6
-5 10 -10 10 -10 0 -22 8 -56 39 -12 10 -21 11 -37 3 -42 -21 -84 -23 -121 -8
-25 10 -44 12 -59 6 -12 -5 -34 -11 -48 -14 -40 -9 -54 -54 -52 -166 0 -58 5
-96 12 -98 14 -5 15 -122 1 -122 -5 0 -10 -9 -10 -20 0 -16 -7 -20 -31 -20
-31 0 -59 19 -59 40 0 14 -30 61 -52 81 -10 9 -18 30 -18 48 0 28 3 31 33 31
23 0 40 8 55 25 28 32 29 65 2 65 -11 0 -20 3 -20 8 0 4 -20 15 -45 25 -26 11
-45 26 -45 34 0 16 36 53 52 53 4 0 8 13 8 29 0 30 10 44 49 71 11 8 21 22 21
32 0 10 5 18 10 18 6 0 10 15 10 33 1 17 7 43 15 57 8 14 14 35 15 48 0 12 5
22 10 22 6 0 10 27 10 61 0 53 -4 65 -26 85 -14 13 -37 24 -52 24 -15 0 -34 4
-42 10 -12 7 -11 12 8 28 12 11 22 27 22 36 0 19 -43 66 -60 66 -5 0 -10 5
-10 10 0 6 -7 10 -15 10 -17 0 -75 54 -75 70 0 29 -35 45 -107 48 -53 3 -71 7
-65 16 5 6 12 23 16 38 3 14 8 33 12 41 3 8 -10 30 -30 52 -40 42 -62 42 -108
2 -27 -24 -38 -57 -18 -57 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 22 -11 35
-25 23 -22 25 -32 25 -107 0 -72 3 -86 20 -98 11 -8 20 -18 20 -23 0 -8 12
-24 48 -62 28 -30 29 -65 3 -65 -11 0 -21 -5 -23 -12 -6 -17 -220 -17 -226 0
-2 7 -19 12 -38 12 -19 0 -34 4 -34 9 0 12 -89 28 -123 21 -17 -3 -34 -15 -42
-29 -12 -23 -18 -24 -76 -22 -35 1 -66 7 -67 12 -8 20 -36 40 -63 46 -22 4
-29 11 -29 29 0 13 -4 24 -8 24 -8 0 -32 58 -32 78 0 7 9 12 20 12 11 0 20 -4
20 -10 0 -5 9 -10 20 -10 11 0 20 5 20 10 0 18 45 10 60 -10 8 -11 20 -20 26
-20 17 0 25 29 14 50 -6 10 -10 39 -10 63 l0 44 57 12 c31 6 79 11 107 11 60
1 86 17 86 54 0 14 5 26 10 26 6 0 10 11 10 25 0 14 5 25 10 25 13 0 13 37 0
45 -5 3 -10 15 -10 25 0 10 -6 21 -12 23 -9 4 -10 8 -3 14 19 15 38 67 26 71
-6 2 -11 10 -11 18 0 8 -4 14 -10 14 -5 0 -10 9 -10 19 0 11 -6 21 -12 23 -17
6 14 38 36 38 12 0 16 10 16 35 0 24 -5 35 -15 35 -21 0 -129 -110 -146 -148
-10 -22 -21 -32 -36 -32 -13 0 -23 -4 -23 -10 0 -5 -9 -10 -21 -10 -16 0 -19
4 -14 18 4 9 10 29 13 44 2 16 8 28 13 28 5 0 9 9 9 20 0 11 5 20 10 20 6 0
10 11 10 24 0 14 7 31 15 40 8 8 15 24 15 35 0 12 5 21 10 21 6 0 10 35 10 85
0 50 4 85 10 85 6 0 10 20 10 45 0 25 -4 45 -10 45 -5 0 -10 9 -10 21 0 23
-50 119 -62 119 -5 0 -8 9 -8 20 0 19 -7 20 -91 20 -83 0 -90 -2 -83 -17 13
-31 17 -113 5 -113 -6 0 -11 -11 -11 -25 0 -14 -4 -25 -9 -25 -5 0 -12 -9 -16
-19 -7 -24 -90 -111 -104 -111 -6 0 -11 -4 -11 -10 0 -5 -18 -10 -39 -10 -22
0 -43 5 -46 10 -3 6 -13 10 -21 10 -18 0 -44 24 -44 39 0 6 -4 11 -10 11 -5 0
-10 9 -10 20 0 11 5 20 10 20 6 0 10 16 10 35 0 19 5 35 10 35 6 0 10 9 10 20
0 11 -4 20 -10 20 -5 0 -10 14 -10 31 0 25 -3 29 -19 24 -12 -4 -21 0 -25 11
-9 22 11 44 41 44 24 0 66 34 75 60 4 12 7 12 21 -2 18 -18 23 -58 7 -58 -5 0
-10 -9 -10 -20 0 -17 7 -20 51 -20 72 0 104 38 59 70 -17 12 -20 26 -20 92 0
43 -4 78 -9 78 -5 0 -12 11 -15 25 -4 14 -11 25 -16 25 -6 0 -10 8 -10 19 0
15 11 19 66 24 66 6 94 -3 94 -32 0 -15 9 -14 28 5 10 11 18 39 20 79 4 60 3
63 -33 99 -40 40 -64 41 -96 5 -21 -25 -41 -24 -59 2 -8 11 -20 28 -26 37 -10
13 -5 27 22 69 19 30 34 58 34 63 0 6 5 10 10 10 6 0 10 23 10 51 0 68 -19 85
-67 58 -19 -11 -40 -19 -48 -19 -8 0 -15 -4 -15 -10 0 -5 -11 -10 -25 -10 -22
0 -25 4 -25 40 0 22 -4 40 -10 40 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0
-10 18 -10 41 0 22 -5 49 -10 60 -6 10 -13 48 -17 84 -3 36 -10 65 -14 65 -5
0 -9 34 -9 75 0 43 -4 75 -10 75 -6 0 -10 37 -10 90 0 53 -4 90 -10 90 -6 0
-10 30 -10 71 0 38 -5 89 -10 112 -13 51 -30 209 -36 335 -3 50 -10 92 -15 92
-5 0 -9 45 -9 100 0 60 -4 100 -10 100 -5 0 -10 21 -10 48 0 26 -10 90 -21
142 -12 52 -24 119 -26 148 -3 28 -9 52 -14 52 -5 0 -9 29 -9 65 0 37 -4 65
-10 65 -5 0 -10 23 -10 51 0 28 -5 59 -10 69 -11 20 -29 150 -37 263 -3 37 -9
67 -14 67 -5 0 -9 38 -9 85 0 47 -4 85 -9 85 -5 0 -12 44 -14 98 -3 53 -15
265 -27 470 l-23 372 23 373 c12 204 25 425 27 490 2 64 8 117 14 117 5 0 9
57 9 135 0 74 4 135 9 135 5 0 11 46 14 103 8 157 26 357 37 410 6 26 10 79
10 117 0 40 4 70 10 70 6 0 10 40 10 100 0 60 4 100 10 100 6 0 10 30 10 70 0
39 4 78 9 88 13 28 41 118 41 136 0 9 5 16 10 16 6 0 10 13 10 29 0 16 3 31 8
33 9 4 62 110 62 126 0 6 5 12 10 12 6 0 10 7 10 15 0 8 5 15 10 15 6 0 10 9
10 20 0 11 3 20 8 20 10 0 42 58 42 76 0 8 5 14 10 14 6 0 10 9 10 20 0 11 5
20 10 20 6 0 10 6 10 14 0 7 11 34 25 60 14 26 25 56 25 67 0 10 5 19 10 19 6
0 10 16 10 35 0 19 5 35 10 35 6 0 10 14 10 30 0 17 3 30 8 30 4 0 15 37 25
83 10 45 22 96 27 113 6 17 10 56 10 87 0 31 5 57 10 57 6 0 10 69 10 188 0
103 4 192 9 198 5 5 11 86 14 179 5 192 22 510 37 690 6 66 10 195 10 288 0
105 4 167 10 167 6 0 10 70 10 190 0 120 4 190 10 190 6 0 10 15 10 33 0 30
22 112 41 149 5 10 9 29 9 43 0 14 5 25 10 25 6 0 10 14 10 30 0 17 3 30 8 30
4 0 15 20 25 45 11 25 23 45 28 45 5 0 9 11 9 25 0 14 4 25 8 25 5 0 16 15 25
33 25 47 40 70 60 88 9 9 17 24 17 33 0 9 5 16 10 16 6 0 10 7 10 15 0 8 5 15
11 15 16 0 39 26 39 44 0 9 5 16 10 16 6 0 10 4 10 10 0 5 62 72 138 149 l137
140 123 1 c67 0 122 -4 122 -8z m-2580 -4652 c0 -5 18 -10 40 -10 22 0 40 -4
40 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -8 0 -5 20 -17 45 -28 25 -10 45 -22
45 -26 0 -4 9 -8 20 -8 11 0 20 -4 20 -8 0 -5 11 -15 25 -22 14 -7 25 -19 25
-27 0 -7 5 -13 10 -13 11 0 80 -65 80 -75 0 -3 16 -22 35 -42 19 -20 35 -42
35 -48 0 -6 9 -17 20 -25 11 -8 20 -20 20 -26 0 -17 33 -74 43 -74 4 0 7 -11
7 -25 0 -14 5 -25 10 -25 6 0 10 -13 10 -30 0 -16 5 -30 10 -30 6 0 10 -7 10
-15 0 -8 4 -23 10 -33 18 -32 60 -168 60 -195 0 -15 5 -27 10 -27 6 0 10 -20
10 -45 0 -25 5 -45 10 -45 6 0 10 -13 10 -28 0 -16 7 -51 15 -78 8 -27 15 -68
15 -91 0 -23 5 -45 10 -48 6 -3 10 -40 10 -81 0 -41 4 -74 9 -74 5 0 12 -37
14 -82 7 -134 27 -330 37 -368 6 -19 10 -68 10 -107 0 -42 4 -73 10 -73 6 0
10 -40 10 -100 0 -60 4 -100 10 -100 6 0 10 -31 10 -72 0 -39 4 -85 9 -102 10
-34 32 -211 38 -318 3 -38 9 -68 14 -68 5 0 9 -36 9 -80 0 -47 4 -80 10 -80 6
0 10 -31 10 -72 0 -39 4 -85 9 -102 11 -36 32 -176 38 -256 3 -30 9 -59 14
-65 5 -5 9 -37 9 -72 0 -35 4 -63 9 -63 5 0 12 -37 14 -82 3 -46 12 -164 21
-263 8 -99 18 -252 21 -340 4 -88 11 -179 17 -201 7 -30 7 -48 -1 -63 -8 -14
-13 -123 -15 -323 -4 -387 -4 -388 -130 -388 -44 0 -76 4 -76 10 0 6 -13 10
-30 10 -16 0 -30 5 -30 10 0 6 -9 10 -20 10 -22 0 -93 31 -98 43 -2 4 -12 7
-23 7 -10 0 -19 5 -19 10 0 6 -4 10 -10 10 -10 0 -45 27 -86 68 -13 12 -27 22
-32 22 -5 0 -15 11 -22 25 -7 14 -17 25 -22 25 -4 0 -8 7 -8 16 0 9 -8 24 -17
33 -24 22 -53 78 -53 102 0 10 -4 19 -10 19 -5 0 -10 16 -10 35 0 19 -4 35
-10 35 -5 0 -10 16 -10 35 0 19 -4 35 -9 35 -6 0 -13 20 -17 45 -3 25 -10 45
-15 45 -5 0 -9 14 -9 30 0 17 -4 30 -10 30 -5 0 -10 18 -10 40 0 22 -4 40 -10
40 -5 0 -10 18 -10 39 0 22 -4 42 -9 45 -5 4 -12 24 -16 46 -4 22 -11 42 -16
46 -5 3 -9 18 -9 35 0 16 -4 29 -10 29 -5 0 -10 16 -10 35 0 19 -4 35 -10 35
-5 0 -10 8 -10 19 0 10 -7 32 -15 47 -8 16 -15 37 -15 47 0 9 -4 17 -10 17 -5
0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0
-10 9 -10 19 0 11 -11 41 -25 67 -14 26 -25 53 -25 60 0 8 -4 14 -10 14 -5 0
-10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 11 -10 25 0 14 -4 25 -8 25 -5 0 -17
20 -28 45 -10 25 -22 45 -26 45 -4 0 -8 11 -8 25 0 14 -4 25 -10 25 -5 0 -10
9 -10 20 0 11 -4 20 -9 20 -5 0 -17 20 -28 45 -10 25 -21 45 -25 45 -5 0 -8 9
-8 20 0 11 -4 20 -10 20 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 7 -10
16 0 8 -7 22 -15 30 -8 9 -15 26 -15 40 0 13 -4 24 -10 24 -5 0 -10 9 -10 20
0 11 -4 20 -10 20 -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 10 -10 23
-1 12 -7 33 -15 47 -8 14 -14 37 -15 52 0 15 -4 30 -10 33 -5 3 -10 30 -10 60
0 29 -5 55 -11 57 -15 5 -14 331 0 336 14 5 15 262 2 262 -5 0 -12 44 -15 98
-6 112 -18 212 -42 332 -9 47 -18 115 -21 153 -2 37 -9 67 -14 67 -5 0 -9 36
-9 80 0 47 -4 80 -10 80 -6 0 -10 29 -10 66 0 36 -4 73 -10 83 -5 10 -15 67
-21 127 -15 137 -23 584 -10 584 5 0 12 25 16 55 3 30 11 55 16 55 5 0 9 14 9
30 0 17 5 30 10 30 6 0 10 14 10 30 0 17 5 30 10 30 6 0 10 7 10 16 0 21 50
114 62 114 4 0 8 8 8 18 0 10 10 24 21 32 12 8 27 21 35 28 7 6 17 12 23 12 6
0 11 5 11 10 0 6 11 10 25 10 14 0 25 5 25 10 0 6 40 10 100 10 60 0 100 -4
100 -10z m14254 -47 c28 -10 53 -21 54 -25 2 -5 10 -8 18 -8 8 0 14 -4 14 -10
0 -5 7 -10 15 -10 16 0 48 -23 74 -54 9 -10 26 -29 39 -42 12 -13 22 -27 22
-32 0 -5 7 -15 15 -22 8 -7 15 -21 15 -31 0 -11 5 -19 10 -19 6 0 10 -11 10
-25 0 -14 5 -25 10 -25 6 0 10 -18 10 -39 0 -23 5 -41 13 -44 17 -5 16 -669
-1 -675 -8 -2 -12 -31 -12 -83 0 -43 -4 -79 -9 -79 -5 0 -11 -21 -14 -47 -2
-27 -12 -75 -21 -108 -26 -91 -37 -145 -43 -202 -3 -29 -9 -53 -13 -53 -5 0
-11 -26 -14 -57 -3 -32 -9 -87 -14 -123 -23 -160 -32 -284 -43 -555 -6 -159
-15 -291 -20 -293 -5 -2 -9 -24 -9 -50 0 -42 -37 -172 -60 -214 -6 -10 -10
-29 -10 -43 0 -14 -4 -25 -10 -25 -5 0 -10 -9 -10 -20 0 -11 -3 -20 -7 -20 -5
0 -16 -20 -26 -45 -11 -25 -23 -45 -28 -45 -5 0 -9 -7 -9 -15 0 -8 -4 -15 -10
-15 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -6 -10 -13 0 -8 -9
-24 -20 -37 -11 -13 -23 -34 -26 -47 -4 -13 -10 -23 -15 -23 -5 0 -9 -9 -9
-20 0 -11 -3 -20 -7 -20 -11 0 -43 -58 -43 -76 0 -8 -4 -14 -10 -14 -5 0 -10
-7 -10 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5
0 -10 -7 -10 -15 0 -8 -11 -34 -25 -59 -14 -25 -25 -52 -25 -60 0 -9 -4 -16
-10 -16 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -9 -10 -19 0 -11
-3 -21 -7 -23 -11 -4 -43 -75 -43 -93 0 -8 -4 -15 -10 -15 -5 0 -10 -11 -10
-25 0 -14 -4 -25 -10 -25 -5 0 -10 -9 -10 -20 0 -11 -4 -28 -9 -38 -24 -44
-41 -87 -41 -104 0 -10 -4 -18 -10 -18 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10
-35 -5 0 -10 -8 -10 -19 0 -10 -7 -32 -15 -47 -8 -16 -15 -37 -15 -46 0 -9 -4
-20 -10 -23 -5 -3 -10 -19 -10 -36 0 -16 -4 -29 -10 -29 -5 0 -10 -20 -10 -45
0 -25 -4 -45 -10 -45 -5 0 -10 -13 -10 -29 0 -17 -4 -32 -9 -35 -5 -4 -12 -24
-16 -46 -4 -22 -11 -42 -16 -46 -5 -3 -9 -14 -9 -25 0 -10 -4 -19 -10 -19 -5
0 -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -8 -11 -17 0 -10 -9 -31 -20
-48 -10 -16 -22 -37 -26 -45 -4 -8 -19 -27 -35 -44 -15 -16 -28 -33 -28 -37 0
-5 -4 -9 -10 -9 -5 0 -31 -20 -57 -45 -25 -25 -53 -45 -60 -45 -7 0 -13 -4
-13 -10 0 -5 -9 -10 -19 -10 -11 0 -21 -3 -23 -7 -1 -5 -28 -20 -58 -35 -51
-26 -64 -28 -178 -28 l-122 0 0 105 c0 63 4 105 10 105 6 0 10 52 10 135 0 83
4 135 10 135 6 0 10 32 10 75 0 43 -4 75 -10 75 -6 0 -10 32 -10 75 0 43 -4
75 -10 75 -6 0 -10 68 -10 185 0 117 4 185 10 185 6 0 10 37 10 90 0 53 4 90
10 90 6 0 10 31 10 74 0 41 4 77 9 80 4 3 11 39 14 79 4 41 11 87 17 101 5 15
10 52 10 82 0 30 5 54 10 54 6 0 10 33 10 80 0 44 4 80 9 80 5 0 11 35 14 78
2 42 12 124 21 182 9 58 19 140 23 183 3 43 10 80 14 83 5 3 9 43 9 90 0 49 4
84 10 84 6 0 10 35 10 85 0 47 4 85 9 85 5 0 11 37 14 83 5 107 25 307 37 378
6 30 10 92 10 137 0 48 4 82 10 82 6 0 10 40 10 100 0 60 4 100 10 100 6 0 10
26 10 58 0 31 5 77 11 102 15 61 29 153 36 223 2 31 9 57 14 57 5 0 9 23 9 50
0 28 5 50 10 50 6 0 10 9 10 21 0 25 27 127 40 151 6 10 10 29 10 43 0 14 5
25 10 25 6 0 10 10 10 22 0 23 49 130 63 136 4 2 7 12 7 23 0 10 5 19 10 19 6
0 10 5 10 10 0 11 10 25 48 65 12 13 22 27 22 30 0 12 141 145 155 145 8 0 15
5 15 10 0 6 7 10 15 10 8 0 15 3 15 8 0 10 58 42 76 42 8 0 14 5 14 10 0 6 9
10 20 10 11 0 20 5 20 10 0 6 11 10 25 10 14 0 25 4 25 9 0 5 19 12 43 16 23
4 49 11 57 16 28 16 189 10 244 -8z m-1818 -6237 c8 -8 14 -19 14 -25 0 -6 5
-11 10 -11 6 0 10 -9 10 -20 0 -11 4 -20 9 -20 5 0 13 -10 17 -22 4 -13 20
-35 35 -49 32 -30 35 -43 17 -82 -14 -28 -25 -31 -97 -27 -49 2 -91 35 -91 70
0 11 -4 20 -10 20 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 14 -10 31 0
23 9 39 33 60 17 16 38 29 45 29 6 0 12 5 12 10 0 14 9 12 26 -4z m-10642 -22
c23 -9 20 -34 -4 -34 -13 0 -20 7 -20 20 0 22 1 23 24 14z m10500 -280 c8 -21
9 -18 -13 -42 -26 -31 -101 -32 -101 -2 0 16 7 20 33 20 21 0 38 7 47 20 17
24 26 25 34 4z m-10796 -105 c2 -5 15 -9 28 -9 13 0 24 -4 24 -10 0 -5 20 -10
45 -10 25 0 45 -4 45 -10 0 -5 9 -10 20 -10 11 0 20 5 20 10 0 19 23 10 46
-17 30 -35 31 -63 3 -63 -25 0 -60 -31 -41 -38 6 -2 12 -10 12 -17 0 -7 6 -15
12 -17 9 -3 7 -10 -6 -23 -14 -14 -34 -19 -81 -19 -73 -1 -87 7 -57 33 12 10
22 22 22 27 0 5 9 16 20 24 11 8 20 18 20 22 0 4 -45 8 -100 8 l-100 0 0 35
c0 19 -4 35 -10 35 -18 0 -11 58 8 63 23 7 66 -2 70 -14z m10888 -66 c20 -27
17 -33 -16 -33 -22 0 -30 -5 -30 -18 0 -16 12 -28 48 -51 24 -14 2 -41 -34
-41 -19 0 -34 4 -34 8 0 12 -44 62 -54 62 -10 0 -36 26 -36 36 0 5 10 18 23
31 29 29 113 32 133 6z m70 -267 c17 -18 19 -77 2 -94 -16 -16 -28 -15 -28 3
0 8 -4 15 -10 15 -20 0 -23 50 -4 70 23 23 22 23 40 6z m-9942 -662 c19 -7 21
-40 4 -47 -14 -5 27 -47 44 -47 15 0 38 -27 38 -43 0 -9 6 -17 13 -20 19 -7 0
-20 -30 -20 -16 0 -43 3 -60 8 l-33 8 0 -67 c0 -36 -4 -66 -8 -66 -15 0 -85
84 -74 88 7 2 12 15 12 28 0 13 5 24 10 24 6 0 10 14 10 30 0 17 -4 30 -10 30
-5 0 -10 11 -10 25 0 14 -4 25 -10 25 -23 0 -7 19 28 33 42 18 54 20 76 11z
m8996 -45 c0 -11 5 -19 10 -19 6 0 10 -11 10 -25 0 -30 -24 -33 -52 -8 -17 15
-25 63 -12 75 11 12 44 -5 44 -23z m-9355 -36 c19 -9 35 -20 35 -25 0 -4 7 -8
15 -8 8 0 15 -9 15 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 5 -25 10
-25 6 0 10 -8 10 -18 0 -19 -34 -30 -140 -47 -36 -6 -77 11 -52 22 14 6 17 93
2 93 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -19 0 -10 27 13 38 32 15 52 14 92
-5z m9915 -43 c0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -6 -27 -10 -60 -10
-53 0 -60 2 -60 20 0 16 7 20 35 20 19 0 35 -4 35 -10z m-10132 -132 c18 -18
14 -38 -7 -38 -23 0 -35 15 -27 35 7 18 18 19 34 3z m9392 -263 c0 -14 3 -25
8 -25 11 0 32 -75 32 -115 0 -19 -4 -35 -10 -35 -5 0 -10 -9 -10 -19 0 -11 -9
-22 -19 -26 -23 -7 -71 4 -71 16 0 5 -9 9 -20 9 -11 0 -20 5 -20 10 0 6 -7 10
-16 10 -14 0 -16 8 -11 42 3 24 11 44 16 46 6 2 11 19 11 38 0 19 5 34 10 34
6 0 10 9 10 20 0 17 7 20 45 20 41 0 45 -2 45 -25z m-756 -211 c9 -3 16 -12
16 -20 0 -8 5 -14 10 -14 6 0 10 -28 10 -63 0 -53 -3 -64 -21 -76 -19 -11 -24
-10 -45 13 -17 18 -24 37 -24 66 0 22 5 40 10 40 6 0 10 14 10 30 0 31 6 35
34 24z m-814 -79 c0 -41 -2 -45 -25 -45 -22 0 -25 4 -25 35 0 24 5 35 15 35 8
0 15 5 15 10 0 6 5 10 10 10 6 0 10 -20 10 -45z m247 -25 c14 0 43 -23 43 -34
0 -3 -20 -6 -45 -6 -25 0 -45 -4 -45 -10 0 -5 -13 -10 -29 -10 -50 0 -61 -9
-61 -51 0 -21 5 -39 10 -39 6 0 10 -5 10 -11 0 -17 -27 -39 -49 -39 -12 0 -21
-4 -21 -10 0 -5 -18 -10 -40 -10 -22 0 -40 -4 -40 -10 0 -5 -11 -10 -25 -10
-21 0 -25 5 -25 28 1 26 20 62 34 62 13 0 36 28 36 44 0 9 5 16 10 16 6 0 10
16 10 35 0 33 2 35 35 35 19 0 35 5 35 10 0 6 8 10 18 10 9 0 25 7 36 15 16
12 23 12 54 0 19 -8 41 -15 49 -15z m423 16 c0 -8 6 -16 13 -19 7 -2 0 -15
-20 -34 -18 -17 -33 -34 -33 -38 0 -3 -7 -13 -15 -21 -8 -9 -15 -28 -15 -44 0
-29 -15 -40 -54 -40 -26 0 -76 -21 -76 -32 0 -5 -7 -8 -15 -8 -8 0 -15 -4 -15
-10 0 -19 -53 -10 -71 12 -11 11 -19 24 -19 27 0 10 39 41 50 41 6 0 10 5 10
10 0 6 7 10 15 10 8 0 15 5 15 10 0 6 11 10 24 10 28 0 76 35 76 56 0 8 5 14
10 14 6 0 10 7 10 15 0 8 5 15 10 15 6 0 10 6 10 14 0 18 15 24 58 25 21 1 32
-4 32 -13z m-470 -181 c0 -8 5 -15 10 -15 6 0 10 -13 10 -30 0 -16 -4 -30 -10
-30 -5 0 -10 -11 -10 -25 0 -16 -6 -25 -15 -25 -8 0 -15 -4 -15 -10 0 -5 -4
-10 -10 -10 -5 0 -10 25 -10 55 0 30 -4 55 -10 55 -18 0 -10 15 18 32 35 21
42 21 42 3z m621 -1 c36 -12 49 -21 49 -35 0 -11 -4 -19 -10 -19 -5 0 -10 -13
-10 -30 0 -16 -4 -30 -10 -30 -5 0 -10 -7 -10 -15 0 -8 7 -15 16 -15 18 0 54
-36 54 -54 0 -7 9 -18 20 -26 27 -19 25 -30 -5 -30 -32 0 -135 -32 -135 -42 0
-4 -9 -8 -20 -8 -11 0 -20 -4 -20 -10 0 -5 -4 -10 -10 -10 -5 0 -12 17 -15 38
-11 60 -16 72 -31 72 -8 0 -14 -9 -14 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -11
-10 -25 0 -14 -4 -25 -9 -25 -5 0 -12 -9 -16 -19 -10 -32 -69 -54 -128 -46
-86 10 -161 28 -174 41 -24 23 -15 43 22 50 19 3 35 10 35 15 0 5 5 9 10 9 14
0 60 46 60 60 0 5 5 10 10 10 6 0 10 7 10 16 0 40 82 75 133 56 18 -7 41 -12
50 -12 9 0 17 -4 17 -10 0 -5 13 -10 29 -10 31 0 41 14 41 61 0 16 5 29 10 29
6 0 10 16 10 35 0 19 3 35 6 35 3 0 27 -7 55 -16z m-7711 -169 c0 -14 5 -25
10 -25 6 0 10 -13 10 -30 0 -29 -1 -30 -51 -30 -31 0 -56 -6 -65 -15 -17 -16
-44 -20 -44 -6 0 4 -14 23 -31 40 -17 18 -29 34 -27 36 17 15 73 35 98 35 16
0 30 5 30 10 0 6 16 10 35 10 31 0 35 -3 35 -25z m8390 -20 c0 -25 -4 -45 -8
-45 -5 0 -15 -11 -22 -25 -22 -41 -40 -31 -40 21 0 50 24 93 53 94 14 0 17 -9
17 -45z m-7867 5 c9 -11 17 -31 17 -45 0 -21 -5 -25 -31 -25 -20 0 -39 8 -50
22 -23 26 -23 32 -3 52 21 22 46 20 67 -4z m1047 -75 l0 -45 -100 0 c-64 0
-100 4 -100 11 0 16 26 39 44 39 9 0 16 5 16 10 0 6 16 10 35 10 19 0 35 5 35
10 0 6 16 10 35 10 35 0 35 0 35 -45z m-340 9 c0 -8 7 -37 16 -65 19 -58 12
-99 -16 -99 -11 0 -20 -3 -20 -7 0 -8 -47 -33 -62 -33 -4 0 -8 23 -8 50 0 28
-4 50 -10 50 -5 0 -10 23 -10 50 0 43 3 50 20 50 11 0 20 5 20 10 0 6 16 10
35 10 25 0 35 -4 35 -16z m5900 6 c0 -5 11 -10 25 -10 14 0 25 -2 25 -5 0 -11
-35 -45 -47 -45 -7 0 -13 -4 -13 -10 0 -5 -7 -10 -15 -10 -9 0 -15 -9 -15 -25
0 -14 -4 -25 -10 -25 -5 0 -10 -9 -10 -20 0 -17 -7 -20 -45 -20 -45 0 -45 0
-45 35 0 19 5 35 10 35 6 0 10 12 10 26 0 40 48 83 93 84 20 0 37 -4 37 -10z
m-6621 -91 c18 -51 14 -59 -23 -59 -28 0 -35 4 -40 26 -10 38 2 64 29 64 17 0
26 -8 34 -31z m431 -139 c0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 14 -10 30
-10 17 0 30 -4 30 -10 0 -5 5 -10 11 -10 17 0 39 -27 39 -47 0 -21 -20 -56
-20 -35 0 6 -11 12 -25 12 -14 0 -25 5 -25 10 0 6 -8 10 -17 10 -22 1 -53 23
-53 39 0 6 -4 11 -10 11 -5 0 -10 14 -10 30 0 17 5 30 10 30 6 0 10 -4 10 -10z
m546 -24 c16 -16 19 -76 4 -76 -5 0 -10 -25 -10 -55 0 -30 5 -55 10 -55 6 0
10 -28 10 -65 0 -70 -5 -75 -53 -52 -15 6 -30 22 -33 35 -4 12 -10 22 -15 22
-5 0 -9 23 -9 50 0 28 -4 50 -10 50 -5 0 -10 16 -10 35 0 19 5 35 10 35 6 0
10 5 10 10 0 14 46 60 60 60 5 0 10 5 10 10 0 14 9 12 26 -4z m284 4 c0 -5 9
-10 20 -10 19 0 46 -21 78 -62 16 -20 -2 -65 -30 -73 -10 -4 -18 -11 -18 -16
0 -5 -7 -9 -15 -9 -8 0 -15 -4 -15 -10 0 -5 -4 -10 -10 -10 -5 0 -10 16 -10
35 0 19 -4 35 -10 35 -5 0 -10 7 -10 15 0 26 -33 55 -62 55 -30 0 -37 20 -15
45 14 16 97 20 97 5z m4874 -236 c22 -8 20 -53 -2 -73 -27 -23 -35 -51 -17
-57 17 -7 21 -84 5 -84 -5 0 -10 -7 -10 -15 0 -19 -37 -20 -56 -1 -8 8 -14 28
-14 45 0 17 -4 31 -10 31 -5 0 -10 18 -10 40 0 44 27 81 68 94 12 4 22 12 22
17 0 11 3 11 24 3z m-4984 -144 c0 -5 9 -10 20 -10 30 0 25 -32 -8 -51 -30
-17 -42 -13 -70 23 -11 14 -11 20 0 32 15 17 58 21 58 6z m4670 -36 c0 -8 5
-14 10 -14 6 0 10 -11 10 -25 0 -19 -5 -25 -21 -25 -43 0 -65 51 -32 76 20 14
33 10 33 -12z m-5000 -119 c7 -8 19 -15 26 -15 8 0 14 -4 14 -10 0 -5 14 -10
30 -10 46 0 38 -23 -18 -52 -19 -10 -49 -18 -68 -18 l-34 0 0 54 c0 50 6 62
31 65 4 1 12 -6 19 -14z m5200 -55 c0 -43 -3 -50 -20 -50 -11 0 -20 -4 -20
-10 0 -5 -11 -10 -25 -10 -14 0 -25 5 -25 10 0 6 5 10 10 10 6 0 10 9 10 20 0
19 47 79 63 80 4 0 7 -22 7 -50z m-2780 10 c0 -5 7 -10 16 -10 8 0 21 -6 27
-12 16 -16 37 -65 37 -83 0 -20 -44 -65 -64 -65 -9 0 -16 -4 -16 -10 0 -5 -5
-10 -10 -10 -13 0 -110 97 -110 110 0 19 76 89 98 89 12 1 22 -3 22 -9z m2770
-205 c8 -19 17 -35 22 -35 4 0 8 -4 8 -10 0 -5 -16 -10 -35 -10 -35 0 -35 0
-35 45 0 55 20 60 40 10z m-1982 -53 c3 -64 -5 -76 -34 -48 -16 16 -19 86 -4
86 6 0 10 7 10 16 0 9 6 14 13 12 7 -3 13 -28 15 -66z m1722 18 c0 -11 3 -20
8 -20 27 0 47 -139 23 -163 -6 -6 -11 -21 -11 -34 0 -13 -4 -23 -10 -23 -5 0
-10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -7 -10 -15 0 -19 -31 -56 -42
-49 -4 3 -8 14 -8 25 0 10 -4 19 -10 19 -14 0 -12 79 3 94 6 7 27 19 45 27 17
7 32 18 32 22 0 10 -26 37 -35 37 -12 0 -35 28 -35 42 0 7 7 22 15 32 8 11 15
26 15 33 0 15 21 42 33 43 4 0 7 -9 7 -20z m-2360 -150 c0 -13 -7 -20 -20 -20
-11 0 -20 2 -20 4 0 2 -3 11 -6 20 -5 12 0 16 20 16 19 0 26 -5 26 -20z m67
-42 c15 -7 30 -15 33 -18 3 -3 17 -11 33 -19 15 -8 27 -20 27 -28 0 -7 5 -13
10 -13 6 0 10 -4 10 -10 0 -5 -18 -10 -39 -10 -31 0 -41 -4 -46 -20 -3 -11
-11 -20 -16 -20 -5 0 -9 -11 -9 -25 0 -20 -5 -25 -25 -25 -14 0 -25 4 -25 9 0
5 -9 13 -20 16 -21 7 -29 58 -10 70 6 3 10 21 10 40 0 65 14 76 67 53z m337
-24 c3 -9 6 -24 6 -35 0 -10 5 -19 10 -19 6 0 10 -16 10 -35 0 -19 5 -35 10
-35 15 0 12 -29 -4 -46 -22 -21 -56 -18 -56 5 0 11 -4 23 -10 26 -5 3 -10 24
-10 46 0 32 -3 39 -20 39 -11 0 -20 -4 -20 -10 0 -5 -11 -10 -25 -10 -14 0
-25 -4 -25 -10 0 -5 -4 -10 -10 -10 -5 0 -10 14 -10 31 0 37 23 58 63 59 15 0
27 5 27 10 0 17 57 12 64 -6z m1742 -311 c9 -16 26 -36 37 -45 20 -18 20 -18
-3 -38 -13 -11 -27 -20 -31 -20 -15 0 -39 58 -39 95 0 42 11 45 36 8z m-3646
-23 c0 -23 -5 -30 -19 -30 -27 0 -36 31 -15 47 27 20 34 16 34 -17z m1930 -20
c0 -5 9 -10 20 -10 23 0 25 -15 8 -70 -12 -37 -28 -54 -28 -30 0 6 -11 10 -25
10 -14 0 -25 5 -25 10 0 6 -22 10 -49 10 -28 0 -53 5 -57 11 -9 14 16 59 33
59 7 0 13 5 13 10 0 6 25 10 55 10 30 0 55 -4 55 -10z m1540 -90 c0 -5 7 -10
15 -10 11 0 15 -12 15 -45 l0 -45 -45 0 -45 0 0 40 c0 23 6 47 13 55 14 16 47
20 47 5z m-3470 -41 c0 -35 -20 -59 -49 -59 -18 0 -21 6 -21 45 0 45 0 45 35
45 32 0 35 -2 35 -31z m2230 -125 c28 -6 31 -10 27 -33 -20 -106 -23 -94 27
-115 55 -22 60 -34 55 -144 -3 -56 -9 -83 -21 -95 -22 -23 -45 -21 -53 3 -3
11 -11 20 -16 20 -5 0 -9 6 -9 13 0 7 -9 19 -20 27 -21 15 -27 40 -10 40 6 0
10 9 10 20 0 11 5 20 10 20 6 0 10 9 10 20 0 11 -4 20 -10 20 -5 0 -10 9 -10
20 0 11 -4 20 -10 20 -5 0 -10 9 -10 21 0 11 -6 26 -12 34 -7 7 -22 25 -32 39
-10 14 -23 26 -28 26 -10 0 -38 25 -38 34 0 12 92 19 140 10z m-689 -153 c22
-13 42 -18 61 -14 24 5 30 2 35 -16 3 -11 9 -21 14 -21 5 0 9 -20 9 -45 0 -41
-2 -45 -25 -45 -14 0 -25 -4 -25 -10 0 -5 -9 -10 -20 -10 -13 0 -20 7 -20 20
0 11 -4 20 -10 20 -5 0 -10 10 -10 23 0 12 -11 31 -25 41 -16 12 -25 29 -25
47 0 34 1 34 41 10z m389 4 c0 -8 5 -15 10 -15 6 0 10 -7 10 -16 0 -8 6 -22
14 -30 16 -16 76 -19 76 -4 0 6 20 10 45 10 41 0 45 -2 45 -23 0 -16 -9 -28
-25 -35 -17 -8 -28 -24 -36 -57 -12 -49 -14 -50 -70 -34 -57 18 -69 0 -69
-100 0 -47 4 -81 10 -81 6 0 10 -28 10 -65 0 -58 -3 -69 -26 -92 -32 -32 -57
-22 -62 26 -2 17 -7 31 -13 31 -5 0 -9 14 -9 31 0 23 -10 42 -39 70 -32 33
-45 39 -80 39 -22 0 -41 -4 -41 -9 0 -11 -55 -22 -75 -15 -18 7 -21 64 -2 64
19 1 57 36 57 54 0 9 5 16 10 16 6 0 10 16 10 35 0 33 2 35 35 35 19 0 35 -4
35 -10 0 -20 47 -9 68 15 22 25 30 85 12 85 -5 0 -10 9 -10 20 0 11 -4 20 -10
20 -14 0 -13 23 2 38 18 18 118 16 118 -3z m650 -94 l0 -89 67 -7 c113 -12
113 -12 113 -127 0 -95 -1 -99 -21 -96 -11 2 -28 16 -37 33 -45 79 -90 105
-180 105 -90 0 -104 10 -92 66 5 21 10 58 10 81 0 53 15 93 35 93 8 0 15 4 15
9 0 11 23 18 63 20 l27 1 0 -89z m367 23 c25 -24 0 -35 -77 -32 -59 3 -65 5
-68 26 -3 21 0 22 63 22 47 0 71 -5 82 -16z m-2156 -157 c20 -13 25 -47 10
-75 -5 -9 -12 -24 -15 -32 -7 -19 -27 -50 -43 -67 -17 -19 -93 -17 -93 2 0 8
5 15 10 15 6 0 10 27 10 60 0 36 7 74 16 91 14 28 19 30 51 24 19 -3 44 -12
54 -18z m539 -11 c0 -22 -11 -46 -21 -46 -10 0 -12 43 -2 53 11 12 23 8 23 -7z
m1680 -137 c0 -30 -6 -56 -14 -65 -17 -16 -106 -20 -106 -4 0 6 -9 10 -20 10
-18 0 -20 7 -20 55 l0 55 80 0 80 0 0 -51z m-1542 -56 c12 -12 13 -18 4 -21
-6 -2 -12 -10 -12 -18 0 -8 -8 -14 -18 -14 -20 0 -52 33 -52 55 0 21 57 20 78
-2z m152 -367 c0 -2 -3 -11 -6 -20 -5 -12 -9 -13 -25 -3 -26 16 -24 27 6 27
14 0 25 -2 25 -4z m130 -31 c0 -28 -4 -35 -19 -35 -20 0 -31 18 -31 51 0 14 7
19 25 19 22 0 25 -4 25 -35z m110 25 c0 -5 -4 -10 -10 -10 -5 0 -10 5 -10 10
0 6 5 10 10 10 6 0 10 -4 10 -10z m200 0 c0 -6 -32 -10 -75 -10 -43 0 -75 4
-75 10 0 6 32 10 75 10 43 0 75 -4 75 -10z"/>
<path d="M11686 19238 c-4 -12 -12 -121 -18 -241 -8 -162 -8 -225 1 -243 6
-14 11 -31 11 -39 0 -32 57 -133 101 -177 25 -27 49 -48 53 -48 3 0 6 25 6 55
0 30 -4 55 -10 55 -5 0 -10 17 -10 37 0 20 -4 50 -9 67 -20 68 -41 173 -41
204 0 17 -4 32 -10 32 -5 0 -10 25 -10 55 0 30 -4 55 -10 55 -5 0 -10 20 -10
45 0 25 -4 45 -10 45 -5 0 -10 21 -10 48 0 57 -14 85 -24 50z"/>
<path d="M17535 13099 c-27 -5 -74 -12 -103 -15 -29 -4 -55 -10 -58 -15 -3 -5
-27 -9 -55 -9 -27 0 -49 -4 -49 -9 0 -5 -21 -11 -47 -14 -55 -6 -123 -20 -173
-36 -19 -6 -47 -11 -62 -11 -16 0 -28 -4 -28 -10 0 -5 -20 -10 -45 -10 -25 0
-45 -4 -45 -10 0 -5 -20 -10 -45 -10 -25 0 -45 -4 -45 -10 0 -5 -13 -10 -29
-10 -16 0 -45 -7 -64 -15 -20 -8 -52 -15 -72 -15 -19 0 -35 -4 -35 -10 0 -5
-20 -10 -45 -10 -25 0 -45 -4 -45 -9 0 -5 -17 -11 -37 -14 -64 -9 -127 -24
-156 -36 -16 -6 -44 -11 -63 -11 -19 0 -34 -4 -34 -10 0 -5 -25 -10 -55 -10
-30 0 -55 -4 -55 -10 0 -5 -18 -10 -40 -10 -22 0 -48 -4 -58 -9 -23 -12 -99
-32 -144 -38 -21 -3 -38 -9 -38 -14 0 -5 -16 -9 -35 -9 -19 0 -35 -4 -35 -10
0 -5 -13 -10 -30 -10 -16 0 -30 -4 -30 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4
-25 -9 0 -5 -20 -17 -45 -28 -25 -10 -45 -21 -45 -25 0 -5 -7 -8 -15 -8 -8 0
-32 -16 -52 -35 -20 -19 -41 -35 -46 -35 -10 0 -86 -81 -87 -93 0 -4 -13 -21
-30 -38 -16 -17 -32 -40 -35 -50 -4 -11 -11 -19 -16 -19 -5 0 -9 -9 -9 -20 0
-11 -4 -20 -10 -20 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -8
-10 -18 0 -10 -3 -22 -7 -26 -4 -3 -12 -23 -20 -44 -20 -59 -11 -62 155 -49
78 6 142 14 142 19 0 4 23 8 50 8 28 0 50 5 50 10 0 6 14 10 32 10 17 0 45 4
62 9 100 30 146 41 174 41 18 0 32 5 32 10 0 6 20 10 45 10 25 0 45 5 45 10 0
6 20 10 45 10 25 0 45 4 45 9 0 5 21 11 48 14 51 5 126 24 154 38 10 5 34 9
53 9 19 0 35 5 35 10 0 6 20 10 45 10 25 0 45 4 45 9 0 5 21 11 48 14 51 5
126 24 154 38 10 5 34 9 53 9 19 0 35 5 35 10 0 6 20 10 45 10 25 0 45 4 45 9
0 5 17 11 38 14 20 3 64 12 97 22 33 9 77 19 98 22 20 3 37 9 37 14 0 5 20 9
45 9 25 0 45 4 45 9 0 5 17 11 38 14 66 10 160 32 168 40 4 4 29 7 56 7 26 0
48 5 48 10 0 6 37 10 90 10 53 0 90 4 90 10 0 6 68 10 185 10 117 0 185 -4
185 -10 0 -6 33 -10 80 -10 47 0 80 -4 80 -10 0 -5 14 -10 32 -10 33 0 79 -12
136 -36 18 -8 42 -14 52 -14 11 0 20 -4 20 -10 0 -5 9 -10 20 -10 11 0 20 -4
20 -10 0 -5 11 -10 25 -10 14 0 25 -3 25 -8 0 -4 16 -16 35 -26 19 -11 35 -23
35 -28 0 -4 9 -8 20 -8 11 0 20 -4 20 -8 0 -4 13 -16 30 -25 36 -22 160 -142
160 -156 0 -15 108 -119 130 -126 11 -4 20 -10 20 -14 0 -7 43 -31 55 -31 10
0 5 219 -5 225 -5 3 -10 19 -10 36 0 16 -4 29 -10 29 -5 0 -10 16 -10 35 0 19
-3 35 -8 35 -4 0 -16 16 -26 35 -11 19 -23 35 -28 35 -4 0 -8 8 -8 18 0 10 -9
24 -20 32 -11 8 -20 18 -20 23 0 9 -136 147 -146 147 -9 0 -34 28 -34 39 0 6
-3 11 -7 11 -5 0 -21 11 -37 25 -16 14 -32 25 -36 25 -3 0 -22 14 -40 30 -18
17 -40 30 -47 30 -7 0 -13 5 -13 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6
-7 10 -16 10 -8 0 -22 6 -29 13 -36 31 -46 37 -65 37 -11 0 -20 5 -20 10 0 6
-9 10 -20 10 -11 0 -20 5 -20 10 0 6 -8 10 -17 10 -10 0 -27 7 -37 15 -11 8
-30 15 -43 15 -13 0 -23 5 -23 10 0 6 -13 10 -30 10 -16 0 -30 4 -30 9 0 5
-17 11 -37 14 -21 3 -87 15 -148 26 -117 22 -331 27 -430 10z"/>
<path d="M10640 13090 c-25 -5 -66 -9 -92 -9 -27 -1 -48 -5 -48 -11 0 -5 -22
-10 -50 -10 -27 0 -50 -4 -50 -10 0 -5 -18 -10 -40 -10 -22 0 -40 -4 -40 -10
0 -5 -10 -10 -22 -10 -13 -1 -34 -7 -48 -15 -14 -8 -35 -14 -47 -15 -13 0 -23
-4 -23 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4 -25 -10 0 -5 -8 -10 -17 -10
-10 0 -38 -11 -62 -25 -23 -14 -49 -25 -57 -25 -8 0 -14 -4 -14 -10 0 -5 -7
-10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -7 -10 -15 -10 -15 0 -25 -6 -60 -37 -7
-7 -17 -13 -22 -13 -5 0 -15 -9 -23 -20 -8 -11 -20 -20 -26 -20 -15 0 -184
-166 -184 -180 0 -6 -13 -24 -30 -41 -16 -17 -32 -40 -35 -50 -4 -11 -11 -19
-16 -19 -5 0 -9 -11 -9 -25 0 -14 -4 -25 -9 -25 -5 0 -17 -20 -28 -45 -10 -25
-21 -45 -25 -45 -5 0 -8 -13 -8 -30 0 -16 -4 -30 -10 -30 -5 0 -10 -16 -10
-35 0 -19 -4 -35 -10 -35 -6 0 -10 -31 -10 -74 0 -61 3 -75 17 -81 10 -3 19
-1 21 4 2 6 18 11 36 11 41 0 126 60 126 90 0 5 3 10 8 10 4 0 13 14 20 30 8
17 20 30 28 30 8 0 14 5 14 10 0 21 149 170 170 170 5 0 10 5 10 10 0 6 9 10
20 10 11 0 20 3 20 8 0 10 58 42 76 42 8 0 14 5 14 10 0 6 9 10 20 10 11 0 20
5 20 10 0 6 11 10 24 10 13 0 26 3 28 8 5 11 102 42 132 42 14 0 26 5 26 10 0
6 35 10 85 10 50 0 85 4 85 10 0 6 57 10 150 10 93 0 150 -4 150 -10 0 -6 40
-10 100 -10 60 0 100 -4 100 -10 0 -5 24 -10 53 -10 30 0 57 -3 61 -7 9 -10
114 -33 179 -40 26 -3 47 -9 47 -14 0 -5 20 -9 45 -9 25 0 45 -4 45 -10 0 -5
25 -10 55 -10 30 0 55 -4 55 -8 0 -8 97 -29 183 -38 26 -3 47 -10 47 -15 0 -5
25 -9 55 -9 30 0 55 -4 55 -10 0 -5 25 -10 55 -10 30 0 55 -4 55 -8 0 -9 95
-29 183 -39 26 -3 47 -9 47 -14 0 -5 29 -9 65 -9 36 0 65 -4 65 -9 0 -5 21
-11 48 -14 26 -3 79 -12 117 -21 39 -9 94 -19 123 -23 28 -3 52 -9 52 -14 0
-5 25 -9 55 -9 30 0 55 -4 55 -10 0 -5 25 -10 55 -10 30 0 55 -4 55 -10 0 -5
17 -10 38 -10 21 0 61 -6 88 -14 27 -8 70 -16 97 -19 46 -4 47 -4 47 24 0 16
-4 29 -10 29 -5 0 -10 8 -10 18 0 10 -7 27 -15 38 -8 10 -15 27 -15 37 0 9 -4
17 -10 17 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 9 -10 21 0 11 -6 27
-12 34 -29 32 -38 45 -38 52 0 5 -9 15 -20 23 -11 8 -20 19 -20 25 -1 14 -76
95 -90 95 -6 0 -21 11 -34 25 -13 14 -31 25 -40 25 -9 0 -16 5 -16 10 0 6 -7
10 -15 10 -8 0 -15 5 -15 10 0 6 -9 10 -20 10 -11 0 -20 3 -20 8 0 4 -28 15
-63 25 -34 10 -70 23 -79 28 -10 5 -34 9 -53 9 -19 0 -35 5 -35 10 0 6 -18 10
-39 10 -22 0 -43 5 -46 10 -3 6 -21 10 -40 10 -19 0 -46 5 -62 11 -35 14 -103
29 -165 36 -27 3 -48 9 -48 13 0 4 -21 10 -47 13 -27 3 -68 10 -93 16 -25 5
-67 15 -95 21 -27 6 -64 15 -81 21 -17 5 -47 9 -67 9 -20 0 -37 5 -37 10 0 6
-18 10 -40 10 -22 0 -48 4 -58 9 -23 12 -152 41 -179 41 -12 0 -25 5 -28 10
-3 6 -24 10 -46 10 -21 0 -39 5 -39 10 0 6 -25 10 -55 10 -30 0 -55 4 -55 9 0
18 -404 35 -480 21z"/>
<path d="M11350 11979 c-41 -5 -103 -11 -137 -15 -35 -3 -63 -10 -63 -15 0 -5
-16 -9 -35 -9 -19 0 -35 -4 -35 -10 0 -5 -12 -10 -27 -10 -16 0 -37 -7 -47
-15 -11 -8 -30 -15 -43 -15 -13 0 -23 -4 -23 -10 0 -5 -13 -10 -30 -10 -16 0
-30 -4 -30 -10 0 -5 -7 -10 -15 -10 -9 0 -33 -11 -55 -25 -22 -14 -44 -25 -50
-25 -5 0 -10 -4 -10 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -9 -10
-20 -10 -11 0 -20 -4 -20 -10 0 -5 9 -10 20 -10 11 0 20 5 20 10 0 6 16 10 35
10 19 0 35 5 35 10 0 6 9 10 20 10 11 0 28 4 38 9 43 21 142 51 195 58 20 3
37 9 37 14 0 5 23 9 51 9 28 0 58 4 67 9 37 20 336 33 469 20 70 -6 132 -15
138 -20 5 -5 26 -9 47 -9 21 0 38 -4 38 -10 0 -5 14 -10 30 -10 17 0 30 -4 30
-10 0 -5 11 -10 24 -10 14 0 31 -7 40 -15 8 -8 24 -15 35 -15 12 0 21 -4 21
-10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25
-10 0 -5 9 -10 20 -10 11 0 20 -4 20 -8 0 -5 20 -17 45 -28 25 -10 45 -22 45
-26 0 -4 11 -8 25 -8 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 -3 20 -7 0
-11 58 -43 76 -43 8 0 14 -4 14 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -8 0 -9
62 -34 69 -27 6 6 -157 165 -169 165 -5 0 -20 11 -34 25 -14 14 -32 25 -41 25
-8 0 -15 5 -15 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -8 10 -19 10 -10 0
-24 7 -31 15 -7 8 -19 15 -26 15 -8 0 -14 5 -14 10 0 6 -11 10 -25 10 -14 0
-25 4 -25 8 0 4 -21 14 -47 21 -27 8 -57 20 -68 28 -11 7 -29 13 -42 13 -12 0
-25 5 -28 10 -3 6 -24 10 -46 10 -21 0 -39 5 -39 10 0 6 -24 10 -54 10 -30 0
-56 4 -58 9 -4 13 -327 21 -418 10z"/>
<path d="M16760 11951 c0 -5 -33 -12 -72 -14 -86 -6 -155 -19 -185 -35 -12 -7
-35 -12 -52 -12 -17 0 -31 -4 -31 -10 0 -5 -16 -10 -35 -10 -19 0 -35 -4 -35
-10 0 -5 -16 -10 -35 -10 -19 0 -35 -4 -35 -10 0 -5 -8 -10 -18 -10 -10 0 -27
-7 -38 -15 -10 -8 -27 -15 -36 -15 -10 0 -18 -4 -18 -10 0 -5 -9 -10 -20 -10
-11 0 -20 -4 -20 -8 0 -4 -15 -16 -32 -27 -18 -10 -45 -31 -60 -47 -14 -15
-29 -28 -33 -28 -8 0 -35 -26 -35 -35 0 -3 -10 -17 -22 -30 -38 -40 -48 -54
-48 -65 0 -5 -4 -10 -10 -10 -5 0 -10 -4 -10 -10 0 -5 7 -10 15 -10 8 0 15 -4
15 -10 0 -5 9 -10 20 -10 15 0 20 -7 20 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -9
-10 -20 0 -11 -3 -20 -7 -20 -11 0 -43 -58 -43 -76 0 -8 -4 -14 -10 -14 -5 0
-10 -6 -10 -14 0 -8 -3 -16 -7 -18 -8 -3 -43 -62 -43 -72 0 -14 23 -4 46 19
14 14 28 25 33 25 4 0 39 29 77 65 38 36 73 65 77 65 5 0 28 20 53 45 24 25
51 45 59 45 8 0 15 5 15 10 0 6 7 10 15 10 8 0 15 5 15 10 0 6 9 10 20 10 11
0 20 4 20 10 0 5 11 12 25 16 14 3 25 10 25 15 0 5 14 9 30 9 17 0 30 5 30 10
0 6 16 10 35 10 l35 0 0 -90 c0 -53 4 -90 10 -90 6 0 10 -16 10 -35 0 -19 4
-35 8 -35 5 0 17 -18 28 -40 10 -22 22 -40 27 -40 4 0 7 -5 7 -10 0 -12 45
-60 55 -60 4 0 12 -6 19 -12 8 -7 23 -20 35 -28 28 -19 27 -30 -4 -30 -14 0
-25 5 -25 10 0 6 -22 10 -50 10 -27 0 -50 5 -50 10 0 6 -10 10 -22 10 -13 1
-34 7 -48 15 -14 8 -35 14 -47 15 -13 0 -23 5 -23 10 0 6 -20 10 -45 10 -25 0
-45 5 -45 10 0 6 -33 10 -80 10 -44 0 -80 -4 -80 -9 0 -6 -14 -11 -32 -13 -47
-5 -47 -36 0 -43 21 -3 45 -10 54 -16 10 -5 34 -9 53 -9 19 0 35 -4 35 -10 0
-5 23 -10 50 -10 28 0 50 -4 50 -9 0 -5 17 -11 38 -14 43 -6 123 -24 168 -38
17 -5 54 -9 82 -9 29 0 52 -4 52 -9 0 -5 30 -12 68 -14 37 -3 117 -11 177 -19
188 -22 755 -13 755 13 0 5 23 9 50 9 28 0 50 5 50 10 0 6 18 10 39 10 22 0
42 4 45 9 3 4 20 11 38 15 26 5 30 9 18 16 -8 5 -28 10 -43 10 -16 0 -35 6
-43 14 -18 19 -18 26 1 26 8 0 23 4 33 9 9 5 37 17 62 27 44 19 130 93 130
114 0 5 -9 10 -20 10 -11 0 -20 -4 -20 -8 0 -8 -77 -29 -142 -39 -21 -3 -38
-9 -38 -14 0 -5 -20 -9 -45 -9 -25 0 -45 -4 -45 -10 0 -5 -12 -10 -27 -10 -27
0 -45 -5 -139 -34 -29 -9 -61 -16 -72 -16 -12 0 -24 -4 -27 -10 -3 -5 -24 -10
-46 -10 -21 0 -39 -4 -39 -10 0 -5 -15 -10 -34 -10 -19 0 -38 -4 -41 -10 -10
-17 -25 -11 -25 9 0 21 30 84 43 89 4 2 7 12 7 23 0 10 5 19 10 19 6 0 10 9
10 20 0 11 4 20 8 20 4 0 16 23 26 50 10 28 22 50 27 50 5 0 9 9 9 20 0 11 5
20 10 20 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 9 10 20 0 11 4 20 9 20 5 0
12 11 15 25 5 19 13 25 33 25 30 0 103 -30 103 -42 0 -4 11 -8 25 -8 14 0 25
-4 25 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 6 -10 12 -10 16 0 122
-53 126 -62 2 -5 17 -8 33 -8 16 0 29 -4 29 -10 0 -5 7 -10 15 -10 8 0 23 -4
33 -9 52 -26 96 -41 122 -41 17 0 30 -4 30 -10 0 -6 37 -10 90 -10 50 0 90 3
90 8 0 4 -25 20 -55 37 -30 16 -55 33 -55 37 0 4 -9 8 -20 8 -11 0 -20 5 -20
10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -8 10 -19 10 -10 0 -24 7 -31 15
-7 8 -19 15 -26 15 -8 0 -14 5 -14 10 0 6 -9 10 -19 10 -11 0 -21 3 -23 8 -4
9 -54 40 -90 55 -16 6 -28 15 -28 19 0 4 -9 8 -20 8 -11 0 -20 5 -20 10 0 6
-7 10 -17 10 -22 0 -93 32 -93 42 0 4 -11 8 -25 8 -14 0 -25 5 -25 10 0 6 -13
10 -30 10 -16 0 -30 5 -30 10 0 6 -9 10 -20 10 -10 0 -34 6 -52 14 -18 8 -53
19 -78 26 -25 7 -55 16 -68 21 -13 5 -41 9 -62 9 -22 0 -40 5 -40 10 0 6 -33
10 -80 10 -47 0 -80 4 -80 10 0 6 -80 10 -220 10 -140 0 -220 -4 -220 -10 0
-5 -25 -10 -55 -10 -30 0 -55 -4 -55 -10 0 -5 -16 -10 -35 -10 -19 0 -43 -4
-53 -9 -16 -8 -72 -28 -149 -55 -18 -6 -33 -14 -33 -18 0 -5 -11 -8 -25 -8
-14 0 -25 -4 -25 -8 0 -5 -16 -17 -35 -28 -19 -10 -35 -22 -35 -26 0 -5 -8 -8
-18 -8 -10 0 -24 -9 -32 -20 -8 -11 -18 -20 -23 -20 -5 0 -15 -6 -22 -12 -36
-32 -46 -38 -65 -38 -33 0 -23 30 25 74 65 60 73 66 85 66 5 0 10 5 10 10 0 6
7 10 16 10 9 0 24 8 33 19 9 10 26 21 39 25 12 4 22 12 22 17 0 5 9 9 20 9 11
0 20 5 20 10 0 6 11 10 25 10 14 0 25 5 25 10 0 6 9 10 20 10 11 0 20 5 20 10
0 6 11 10 24 10 13 0 26 5 28 11 4 11 60 28 121 36 20 3 37 9 37 13 0 14 116
22 325 23 206 0 345 -9 345 -24 0 -5 18 -9 40 -9 21 0 49 -4 62 -9 13 -5 50
-17 83 -27 33 -10 64 -22 70 -26 5 -4 22 -8 37 -8 15 0 28 -4 28 -10 0 -5 7
-10 15 -10 19 0 179 -72 183 -82 2 -5 12 -8 23 -8 10 0 19 -4 19 -10 0 -5 11
-10 24 -10 13 0 26 -5 28 -11 2 -6 17 -9 33 -6 28 4 29 5 8 12 -13 4 -23 11
-23 16 0 5 -7 9 -15 9 -8 0 -15 5 -15 10 0 6 -5 10 -12 10 -6 0 -26 11 -44 25
-18 14 -37 25 -43 25 -6 0 -11 5 -11 10 0 6 -9 10 -20 10 -11 0 -20 5 -20 10
0 6 -11 10 -25 10 -14 0 -25 4 -25 8 0 11 -110 62 -133 62 -9 0 -17 5 -17 10
0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -9 10 -21 10 -11 0 -30 5 -42 12
-30 16 -99 29 -184 35 -40 2 -73 9 -73 14 0 5 -75 9 -175 9 -100 0 -175 -4
-175 -9z m473 -315 c9 -7 17 -18 17 -25 0 -6 5 -11 10 -11 6 0 10 -18 10 -40
0 -46 -34 -90 -69 -90 -11 0 -21 -5 -23 -11 -2 -5 -10 -8 -18 -4 -13 4 -29 37
-66 131 -3 6 11 19 31 29 19 11 35 23 35 27 0 13 54 8 73 -6z"/>
<path d="M11250 11790 c-8 -5 -50 -10 -92 -10 -45 0 -78 -4 -78 -10 0 -5 -20
-10 -45 -10 -25 0 -45 -4 -45 -10 0 -5 -13 -10 -29 -10 -16 0 -54 -11 -85 -25
-31 -14 -63 -25 -71 -25 -8 0 -15 -4 -15 -10 0 -5 -11 -10 -25 -10 -14 0 -25
-3 -25 -7 0 -5 -25 -21 -55 -37 -30 -16 -55 -32 -55 -37 0 -5 -9 -9 -20 -9
-11 0 -20 -4 -20 -10 0 -5 -6 -10 -13 -10 -8 0 -27 -11 -43 -25 -16 -14 -37
-25 -46 -25 -10 0 -18 -4 -18 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -8 0
-5 -16 -17 -35 -28 -19 -10 -35 -22 -35 -26 0 -5 -9 -8 -20 -8 -11 0 -20 -4
-20 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -9 -10 -20 -10 -11 0
-20 -4 -20 -10 0 -5 -11 -12 -25 -16 -14 -3 -25 -10 -25 -15 0 -5 -9 -9 -20
-9 -24 0 -25 -6 -6 -26 17 -17 206 -21 206 -4 0 6 16 10 35 10 19 0 35 5 35
10 0 6 9 10 20 10 11 0 20 4 20 8 0 5 11 15 25 22 14 7 25 19 25 27 0 7 4 13
10 13 9 0 42 25 76 58 7 6 20 12 28 12 9 0 16 5 16 10 0 6 11 10 24 10 13 0
26 4 28 9 3 8 80 16 116 12 7 0 12 -16 12 -39 0 -22 7 -61 15 -88 8 -27 15
-59 15 -71 0 -13 5 -23 10 -23 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -4
10 -10 0 -5 25 -34 56 -65 50 -49 54 -56 41 -70 -18 -17 -117 -21 -117 -5 0 6
-11 10 -25 10 -14 0 -25 5 -25 10 0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6
-8 10 -17 10 -10 0 -27 7 -37 15 -11 8 -30 15 -43 15 -13 0 -23 5 -23 10 0 6
-9 10 -20 10 -11 0 -20 5 -20 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6
-13 10 -30 10 -16 0 -30 -4 -30 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4 -25 -8
0 -4 -12 -15 -27 -25 -61 -38 -67 -44 -50 -61 9 -9 25 -16 36 -16 12 0 21 -4
21 -10 0 -5 11 -10 24 -10 13 0 39 -8 58 -17 62 -31 68 -33 93 -33 14 0 25 -4
25 -10 0 -5 11 -10 25 -10 14 0 33 -4 43 -9 26 -13 85 -31 144 -43 73 -15 448
-22 528 -9 94 14 273 34 360 38 41 3 79 9 85 14 5 5 46 9 92 9 46 0 83 4 83 9
0 5 42 11 93 14 105 6 233 22 292 37 22 5 58 10 79 10 56 0 106 20 106 42 0
16 -11 18 -119 18 -69 0 -122 -4 -126 -10 -4 -6 -102 -10 -261 -10 -163 0
-254 -4 -254 -10 0 -5 -5 -10 -11 -10 -7 0 -9 10 -6 23 8 37 42 122 50 125 4
2 7 15 7 28 0 13 5 24 10 24 6 0 10 9 10 20 0 11 11 43 25 72 14 28 25 60 25
70 0 10 5 18 10 18 6 0 10 11 10 25 0 14 4 25 9 25 5 0 11 14 15 30 4 21 11
30 26 30 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 7 -10
15 -10 18 0 89 -32 93 -42 2 -5 12 -8 23 -8 10 0 19 -4 19 -10 0 -5 9 -10 20
-10 11 0 20 -4 20 -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -8 0 -5 18 -17 40 -28
22 -10 40 -22 40 -26 0 -5 7 -8 15 -8 8 0 15 -4 15 -8 0 -4 14 -16 31 -26 17
-10 81 -68 142 -128 103 -102 137 -123 137 -84 0 8 -4 18 -10 21 -5 3 -10 15
-10 26 0 10 -4 19 -10 19 -5 0 -10 6 -10 14 0 16 -146 166 -161 166 -5 0 -29
20 -53 45 -25 25 -49 45 -56 45 -6 0 -17 6 -24 13 -7 6 -25 21 -40 32 -16 11
-34 26 -41 33 -8 6 -22 12 -32 12 -10 0 -25 9 -33 20 -8 11 -22 20 -31 20 -9
0 -22 7 -29 15 -7 8 -19 15 -26 15 -8 0 -14 5 -14 10 0 6 -13 10 -30 10 -16 0
-30 5 -30 10 0 6 -11 10 -24 10 -13 0 -26 3 -28 8 -5 11 -102 42 -132 42 -14
0 -26 5 -26 10 0 6 -20 10 -45 10 -25 0 -45 5 -45 10 0 6 -28 10 -64 10 -36 0
-68 5 -71 10 -8 13 -345 13 -365 0z m-100 -200 c0 -5 13 -10 29 -10 21 0 30
-6 34 -21 7 -26 -3 -89 -14 -89 -5 0 -9 -5 -9 -11 0 -6 -6 -17 -14 -25 -8 -8
-19 -14 -25 -14 -6 0 -11 -4 -11 -10 0 -14 -98 -12 -116 3 -44 37 -45 39 -38
80 8 51 43 87 84 87 16 0 30 5 30 10 0 6 11 10 25 10 14 0 25 -4 25 -10z"/>
<path d="M17925 11610 c4 -6 11 -8 16 -5 14 9 11 15 -7 15 -8 0 -12 -5 -9 -10z"/>
<path d="M13120 8270 c0 -5 -6 -10 -14 -10 -8 0 -31 -16 -50 -35 -20 -19 -41
-35 -47 -35 -12 0 -69 -57 -69 -70 0 -6 -4 -10 -10 -10 -5 0 -10 -7 -10 -15 0
-8 -4 -15 -8 -15 -13 0 -62 -95 -62 -119 0 -11 -4 -21 -10 -21 -5 0 -10 -25
-10 -55 0 -33 -4 -55 -11 -55 -7 0 -9 -16 -5 -47 3 -27 9 -76 12 -110 4 -35
10 -63 15 -63 5 0 9 -16 9 -35 0 -19 3 -35 8 -35 4 0 16 -19 27 -43 23 -48
126 -157 150 -157 8 0 15 -3 15 -7 0 -8 48 -28 121 -51 41 -14 129 -16 129 -4
0 5 -16 17 -35 28 -19 10 -35 22 -35 26 0 5 -9 8 -20 8 -11 0 -20 5 -20 10 0
6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -7 10 -15 10 -9 0 -18 7 -21 15 -4 8
-12 15 -18 15 -7 0 -22 9 -34 20 -12 11 -24 20 -27 20 -8 0 -55 47 -55 55 0 6
-11 20 -37 50 -7 7 -13 21 -13 29 0 9 -4 16 -10 16 -5 0 -10 13 -10 28 0 15
-5 33 -11 39 -19 19 1 273 22 273 5 0 9 10 9 23 1 12 9 36 18 53 9 17 26 47
36 67 11 20 23 37 28 37 4 0 8 5 8 10 0 6 10 22 23 35 35 38 47 54 47 62 0 5
9 15 20 23 21 15 26 30 10 30 -5 0 -10 -4 -10 -10z"/>
<path d="M15550 8260 c0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 5 -15 10 -15
6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 3 -15 8 -15 4 0
16 -18 26 -40 11 -22 23 -40 28 -40 4 0 8 -11 8 -25 0 -14 5 -25 10 -25 6 0
10 -15 10 -34 0 -19 6 -36 12 -38 18 -6 18 -242 1 -259 -7 -7 -13 -21 -13 -31
0 -10 -4 -18 -10 -18 -5 0 -10 -7 -10 -15 0 -21 -28 -63 -62 -97 -16 -14 -28
-29 -28 -33 0 -10 -27 -35 -39 -35 -6 0 -11 -4 -11 -10 0 -5 -7 -10 -15 -10
-9 0 -27 -10 -40 -22 -36 -34 -53 -48 -60 -48 -10 0 -35 -28 -35 -39 0 -6 -6
-11 -12 -11 -9 0 -8 -3 2 -10 8 -5 26 -7 40 -4 83 18 120 29 120 36 0 4 10 8
23 8 12 0 29 9 37 20 8 11 19 20 25 20 16 1 55 37 55 52 0 7 9 20 20 28 11 8
20 20 20 26 0 6 7 17 15 24 8 7 15 21 15 31 0 11 5 19 10 19 6 0 10 11 10 25
0 14 5 25 10 25 6 0 10 20 10 45 0 25 5 45 10 45 6 0 10 47 10 120 0 73 -4
120 -10 120 -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 11 -10 25 0 14 -3
25 -8 25 -4 0 -16 16 -26 35 -11 19 -23 35 -28 35 -4 0 -8 7 -8 16 0 15 -23
44 -35 44 -5 0 -18 10 -80 68 -30 27 -35 28 -35 2z"/>
<path d="M15260 7640 c0 -5 -16 -10 -35 -10 -19 0 -35 -4 -35 -10 0 -5 -11
-10 -25 -10 -14 0 -25 -4 -25 -9 0 -5 -13 -12 -29 -16 -15 -3 -38 -15 -49 -25
-12 -11 -28 -20 -37 -20 -8 0 -15 -4 -15 -10 0 -5 -6 -10 -13 -10 -7 0 -24
-11 -39 -25 -15 -14 -32 -25 -38 -25 -5 0 -10 -4 -10 -10 0 -5 -7 -10 -15 -10
-8 0 -15 -4 -15 -10 0 -5 -5 -10 -11 -10 -6 0 -25 -16 -43 -35 -19 -19 -38
-35 -45 -35 -6 0 -25 -13 -43 -30 -17 -16 -35 -30 -39 -30 -4 0 -19 -11 -33
-25 -14 -14 -34 -25 -46 -25 -11 0 -20 -3 -20 -7 0 -11 -58 -43 -76 -43 -8 0
-14 -4 -14 -10 0 -5 -13 -10 -30 -10 -16 0 -30 -4 -30 -9 0 -11 -90 -24 -170
-23 -88 1 -170 12 -170 23 0 5 -10 9 -21 9 -12 0 -55 16 -95 35 -40 19 -77 35
-83 35 -6 0 -11 4 -11 8 0 4 -20 14 -45 21 -24 7 -49 19 -56 27 -6 8 -20 14
-30 14 -11 0 -19 5 -19 10 0 6 -9 10 -21 10 -24 0 -49 22 -49 44 0 9 -4 16
-10 16 -5 0 -10 5 -10 10 0 12 -45 60 -55 60 -10 0 -35 28 -35 39 0 6 -9 11
-20 11 -11 0 -20 5 -20 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -13 10 -28
10 -15 0 -32 4 -38 10 -15 15 -158 25 -180 11 -18 -10 -18 -11 4 -17 12 -3 22
-10 22 -15 0 -5 9 -9 20 -9 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4
25 -9 0 -5 20 -17 45 -28 25 -10 45 -21 45 -25 0 -5 9 -8 20 -8 11 0 20 -4 20
-10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 -4 20
-10 0 -5 11 -12 25 -16 14 -3 25 -10 25 -15 0 -5 7 -9 16 -9 20 0 44 -24 44
-44 0 -21 32 -86 42 -86 4 0 8 -5 8 -11 0 -14 25 -39 39 -39 6 0 11 -3 11 -7
0 -9 98 -56 151 -72 19 -6 54 -11 77 -11 23 0 42 -4 42 -10 0 -6 62 -10 165
-10 103 0 165 4 165 10 0 6 20 10 45 10 25 0 45 4 45 9 0 5 12 11 28 14 43 9
102 31 102 39 0 5 9 8 20 8 11 0 20 5 20 10 0 6 7 10 15 10 8 0 15 5 15 10 0
6 7 10 15 10 8 0 25 11 39 25 14 14 32 25 41 25 8 0 15 4 15 8 0 5 11 15 25
22 14 7 25 19 25 25 0 6 12 18 28 26 15 8 36 22 46 32 11 9 23 17 28 17 4 0 8
7 8 15 0 8 7 15 15 15 8 0 15 5 15 10 0 6 7 10 15 10 8 0 15 5 15 10 0 6 7 10
15 10 8 0 15 4 15 8 0 5 16 17 35 28 19 10 35 22 35 26 0 5 9 8 20 8 11 0 20
5 20 10 0 6 11 10 25 10 14 0 25 4 25 9 0 5 15 11 33 14 17 3 58 11 90 17 58
12 58 12 38 31 -11 11 -27 19 -36 19 -8 0 -15 5 -15 10 0 6 -13 10 -30 10 -16
0 -30 -4 -30 -10z"/>
<path d="M15160 6963 c-67 -7 -130 -43 -130 -74 0 -6 -21 -33 -47 -59 -27 -26
-55 -56 -65 -66 -9 -11 -29 -31 -45 -45 -15 -14 -35 -34 -44 -45 -26 -31 -58
-54 -74 -54 -8 0 -15 -4 -15 -10 0 -5 -13 -10 -29 -10 -16 0 -42 -5 -56 -10
-80 -30 -597 -46 -725 -23 -62 12 -120 34 -120 45 0 4 -7 8 -15 8 -9 0 -26 10
-39 23 -41 40 -76 67 -86 67 -6 0 -10 3 -10 8 0 9 -36 55 -77 98 -18 18 -33
36 -33 39 0 9 -27 35 -36 35 -3 0 -14 8 -23 18 -26 27 -88 52 -134 52 -44 0
-127 -27 -127 -41 0 -5 -7 -9 -15 -9 -9 0 -26 -10 -39 -22 -12 -13 -35 -32
-50 -43 -16 -11 -34 -26 -41 -32 -8 -7 -18 -13 -24 -13 -6 0 -11 -4 -11 -10 0
-5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -11 -12 -25 -16 -14 -3 -25 -10
-25 -15 0 -5 -9 -9 -20 -9 -11 0 -20 -4 -20 -10 0 -5 -5 -10 -10 -10 -12 0
-60 -45 -60 -55 0 -4 -6 -13 -14 -21 -11 -10 -41 -14 -110 -14 -57 0 -96 -4
-96 -10 0 -5 -9 -10 -20 -10 -24 0 -90 -31 -90 -42 0 -4 -7 -8 -15 -8 -8 0
-15 -4 -15 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -5 -10 -12 -10
-16 0 -178 -49 -200 -61 -10 -5 -27 -9 -38 -9 -11 0 -20 -4 -20 -10 0 -5 -11
-10 -25 -10 -14 0 -25 -4 -25 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0
-5 -11 -12 -25 -16 -14 -3 -25 -10 -25 -15 0 -5 -9 -9 -20 -9 -11 0 -20 -4
-20 -10 0 -5 -7 -10 -15 -10 -16 0 -65 -28 -76 -43 -4 -5 -37 -4 -77 3 -54 10
-81 10 -115 1 -25 -6 -64 -11 -86 -11 -22 0 -43 -4 -46 -10 -3 -5 -33 -10 -66
-10 -33 0 -59 -4 -59 -10 0 -5 -8 -10 -17 -10 -26 0 -73 -44 -73 -69 0 -11 -4
-21 -10 -21 -6 0 -10 -102 -10 -285 0 -183 4 -285 10 -285 6 0 10 -9 10 -20 0
-11 5 -20 10 -20 6 0 10 -9 10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -16 -10 -35
0 -19 -4 -35 -10 -35 -6 0 -10 -47 -10 -121 l0 -121 31 -29 c38 -35 47 -85 25
-130 -21 -42 -20 -110 1 -147 13 -22 31 -33 80 -48 35 -10 63 -22 63 -26 0 -5
8 -8 19 -8 16 0 19 11 24 77 3 43 11 79 16 81 6 2 11 12 11 23 0 10 5 19 10
19 6 0 10 7 10 15 0 8 5 15 10 15 16 0 13 217 -2 223 -9 4 -10 8 -2 14 26 19
64 95 64 126 0 29 16 93 26 106 2 2 11 -4 20 -13 12 -12 25 -15 48 -10 17 3
33 10 34 15 2 5 17 9 33 9 16 0 29 5 29 10 0 6 5 10 10 10 21 0 70 54 70 77 0
44 26 58 117 62 67 2 83 0 83 -11 0 -19 -33 -58 -49 -58 -19 0 -61 -48 -61
-70 0 -11 7 -20 15 -20 9 0 28 -11 43 -25 15 -14 32 -25 39 -25 7 0 13 -4 13
-10 0 -5 9 -10 20 -10 11 0 20 6 20 14 0 18 32 76 43 76 4 0 7 5 7 11 0 22 29
40 47 30 47 -27 47 -27 19 -57 -15 -17 -26 -40 -26 -57 0 -53 52 -76 80 -37 8
11 20 20 26 20 17 0 74 33 74 43 0 4 7 7 15 7 8 0 15 5 15 10 0 6 14 10 30 10
17 0 30 5 30 10 0 6 9 10 21 10 22 0 49 22 49 39 0 6 5 11 10 11 6 0 10 17 10
38 0 25 7 45 18 55 17 15 20 14 47 -18 28 -32 65 -47 65 -26 0 25 34 41 86 41
53 0 54 0 54 30 0 17 -4 30 -10 30 -5 0 -10 11 -10 25 0 24 3 25 54 25 30 0
56 -4 58 -9 7 -18 65 -23 81 -7 9 9 23 16 31 16 9 0 16 5 16 10 0 6 10 10 21
10 12 0 29 9 38 19 30 34 94 54 153 46 65 -8 159 -8 257 0 55 5 87 3 126 -9
32 -11 77 -16 120 -14 48 2 70 -1 72 -9 3 -7 11 -13 19 -13 8 0 14 -4 14 -10
0 -5 20 -10 45 -10 25 0 45 5 45 10 0 6 7 10 15 10 9 0 18 7 21 15 4 8 14 15
24 15 10 0 21 6 23 13 8 17 23 -7 39 -60 7 -24 16 -43 20 -43 4 0 8 -7 8 -15
0 -9 9 -15 25 -15 14 0 25 -4 25 -10 0 -5 7 -10 16 -10 18 0 44 23 44 39 0 6
5 11 11 11 11 0 8 47 -6 115 -6 28 -3 33 32 49 21 11 46 23 55 27 10 5 29 9
43 9 24 0 25 -3 25 -60 0 -33 -4 -60 -10 -60 -5 0 -10 -9 -10 -20 0 -17 7 -20
45 -20 25 0 45 3 45 8 0 4 16 16 35 26 19 11 35 23 35 27 0 4 21 0 48 -8 52
-16 184 -12 190 7 2 5 15 10 28 10 13 0 24 5 24 10 0 6 27 10 61 10 58 0 63 2
95 38 18 20 34 40 34 45 0 10 30 9 30 -1 0 -5 16 -17 35 -28 19 -10 35 -22 35
-26 0 -5 9 -8 20 -8 11 0 20 -4 20 -10 0 -5 5 -10 11 -10 11 0 39 -25 39 -35
0 -10 48 -55 60 -55 5 0 10 -4 10 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0
-5 8 -10 18 -10 9 0 26 -7 36 -15 23 -18 36 -19 36 -5 0 6 11 22 25 35 30 31
81 34 90 6 7 -23 -4 -71 -16 -71 -18 0 -8 -17 16 -28 32 -15 122 -16 130 -2 3
6 31 10 61 10 l54 0 0 -55 c0 -30 5 -55 10 -55 6 0 10 -5 10 -11 0 -17 27 -39
49 -39 12 0 21 -4 21 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 19
-10 11 0 26 -7 35 -15 8 -8 24 -15 35 -15 12 0 21 -4 21 -10 0 -5 9 -10 20
-10 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20
-10 11 0 20 5 20 10 0 6 5 10 11 10 6 0 18 7 26 16 15 14 12 19 -25 55 -23 21
-49 39 -57 39 -8 0 -15 5 -15 10 0 6 -7 10 -15 10 -9 0 -15 9 -15 25 0 18 5
25 20 25 11 0 20 5 20 10 0 6 7 10 15 10 8 0 15 4 15 8 0 5 16 16 35 25 52 25
244 24 271 0 24 -22 54 -68 54 -83 0 -20 28 -40 54 -40 14 0 26 -4 26 -10 0
-5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 11 -10 25 -10 22 0 24 3 19 30 -7 32
7 40 30 17 21 -20 46 -74 46 -97 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14
5 -25 10 -25 6 0 10 -15 10 -34 0 -19 5 -38 10 -41 6 -3 10 -28 10 -56 0 -27
-4 -49 -10 -49 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -6 0 -10 -32 -10
-75 0 -43 4 -75 10 -75 6 0 10 -11 10 -24 0 -24 47 -118 62 -124 4 -2 8 -8 8
-13 0 -6 9 -19 19 -30 17 -19 20 -19 32 -4 8 9 24 27 37 40 12 13 22 27 22 30
0 3 10 16 23 29 37 38 67 76 67 84 0 4 9 14 20 22 21 15 27 40 10 40 -5 0 -10
8 -10 18 0 10 -9 24 -20 32 -20 15 -28 60 -10 60 6 0 10 9 10 20 0 11 5 20 10
20 6 0 10 15 10 34 0 19 5 36 11 38 6 2 13 34 16 71 5 52 2 77 -12 107 -10 22
-22 40 -27 40 -4 0 -8 16 -8 35 0 19 4 35 8 35 4 0 16 14 26 30 14 25 18 59
21 173 2 78 7 179 10 225 7 83 2 107 -35 174 -6 10 -10 25 -10 33 0 8 -4 15
-10 15 -5 0 -10 9 -10 21 0 24 -22 49 -44 49 -9 0 -16 5 -16 10 0 6 -45 10
-114 10 -66 0 -117 4 -121 10 -3 6 -49 10 -104 10 l-97 0 -37 35 c-25 24 -46
35 -67 35 -17 0 -30 5 -30 10 0 6 -13 10 -28 10 -16 0 -37 7 -48 15 -10 8 -26
15 -35 15 -20 0 -69 23 -69 33 0 4 -9 7 -20 7 -11 0 -20 5 -20 10 0 6 -6 10
-14 10 -8 0 -16 4 -18 10 -3 8 -69 24 -160 37 -21 3 -38 9 -38 14 0 5 -9 9
-20 9 -11 0 -20 5 -20 10 0 6 -11 10 -25 10 -14 0 -25 4 -25 8 0 12 -73 42
-103 42 -15 0 -27 5 -27 10 0 6 -27 10 -60 10 -33 0 -60 4 -60 10 0 6 -7 10
-15 10 -9 0 -28 11 -43 25 -15 14 -32 25 -39 25 -7 0 -13 5 -13 10 0 6 -7 10
-15 10 -9 0 -27 11 -41 25 -14 14 -29 25 -33 25 -4 0 -22 14 -39 30 -18 17
-34 30 -37 30 -10 0 -55 49 -55 60 0 5 -5 10 -10 10 -6 0 -21 9 -33 21 -45 43
-119 61 -207 52z m204 -269 c10 -26 -3 -34 -54 -34 -53 0 -69 11 -48 34 18 21
94 21 102 0z m-2240 -70 c3 -9 6 -33 6 -55 0 -38 -1 -39 -35 -39 -19 0 -35 -4
-35 -10 0 -5 -22 -10 -50 -10 -56 0 -61 8 -25 44 14 14 25 30 25 36 0 5 9 10
20 10 11 0 20 5 20 10 0 6 11 10 25 10 14 0 25 5 25 10 0 16 17 12 24 -6z
m2306 6 c0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -6 28 -10 65 -10 48 0 65 -3
65 -14 0 -7 3 -28 6 -45 6 -30 6 -31 -30 -31 -20 0 -36 5 -36 10 0 6 -11 10
-25 10 -14 0 -25 4 -25 9 0 5 -12 11 -27 13 -17 2 -32 12 -38 26 -5 12 -13 22
-17 22 -5 0 -8 9 -8 20 0 11 5 20 10 20 6 0 10 -4 10 -10z m136 -555 l26 -26
-23 -19 c-12 -11 -28 -20 -36 -20 -7 0 -13 -4 -13 -10 0 -5 -25 -10 -55 -10
-55 0 -55 0 -55 31 0 30 19 59 39 59 6 0 11 5 11 10 0 6 18 10 40 10 30 0 47
-7 66 -25z m-2486 -5 c0 -5 6 -10 13 -10 17 0 117 -53 117 -62 0 -4 -9 -8 -20
-8 -11 0 -20 -4 -20 -10 0 -5 -16 -10 -35 -10 -19 0 -35 -4 -35 -10 0 -15 -19
-12 -36 4 -20 21 -19 116 1 116 8 0 15 -4 15 -10z m894 -25 c13 -35 -37 -95
-79 -95 -15 0 -36 -5 -47 -11 -16 -9 -23 -8 -29 2 -17 27 -8 44 29 62 65 31
82 42 82 49 0 15 38 8 44 -7z m662 3 c8 -7 26 -24 40 -37 19 -17 28 -21 37
-12 6 6 19 11 29 11 13 0 18 -8 18 -30 0 -29 -2 -30 -45 -30 -25 0 -45 5 -45
10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -7 10 -16 10 -15 0 -44 23 -44
35 0 13 26 34 43 35 10 0 25 -6 33 -12z"/>
<path d="M9370 5372 c-30 -8 -56 -19 -58 -24 -2 -4 -10 -8 -17 -8 -33 0 -21
-83 13 -88 12 -2 22 -8 22 -13 0 -5 9 -9 20 -9 11 0 20 5 20 10 0 6 14 10 31
10 27 0 59 19 59 35 0 4 7 13 15 21 19 20 19 48 -1 68 -19 19 -33 19 -104 -2z"/>
<path d="M14775 5350 c-11 -5 -44 -9 -72 -9 -29 -1 -53 -5 -53 -11 0 -5 -20
-10 -45 -10 -25 0 -45 -4 -45 -10 0 -5 -13 -10 -29 -10 -16 0 -45 -7 -64 -15
-23 -10 -69 -15 -126 -15 -53 0 -93 -4 -96 -11 -4 -6 -14 -7 -24 -3 -9 4 -65
11 -126 15 -60 4 -141 15 -180 25 -38 9 -98 18 -132 21 -35 3 -63 9 -63 14 0
5 -90 9 -210 9 -118 0 -210 -4 -210 -9 0 -5 -21 -11 -47 -14 -63 -7 -131 -22
-166 -36 -16 -6 -46 -11 -67 -11 -21 0 -42 -4 -45 -10 -3 -5 -42 -10 -85 -10
-53 0 -80 -4 -82 -12 -4 -10 -100 -12 -434 -11 -417 2 -505 -2 -439 -18 36 -8
93 -28 117 -40 10 -5 38 -9 63 -9 25 0 45 -4 45 -10 0 -6 31 -10 74 -10 41 0
78 -4 81 -10 4 -6 72 -10 171 -10 103 0 164 4 164 10 0 6 33 10 80 10 47 0 80
4 80 10 0 6 21 10 47 10 26 0 60 4 77 9 63 19 172 41 199 41 15 0 27 5 27 10
0 6 20 10 45 10 25 0 45 4 45 9 0 14 101 23 275 23 167 0 255 -8 255 -23 0 -5
20 -9 44 -9 25 0 47 -4 50 -9 20 -32 656 -32 656 0 0 5 25 9 55 9 30 0 55 4
55 9 0 14 132 22 365 23 239 0 435 -10 435 -23 0 -5 29 -9 65 -9 36 0 65 -4
65 -9 0 -5 28 -11 63 -14 34 -4 98 -14 142 -23 44 -9 108 -18 143 -21 34 -3
62 -9 62 -14 0 -5 58 -9 130 -9 72 0 130 4 130 9 0 5 26 11 58 14 90 8 232 44
232 59 0 4 16 8 35 8 19 0 35 5 35 10 0 6 9 10 19 10 25 0 38 20 14 21 -50 4
-138 -4 -141 -12 -2 -5 -39 -9 -83 -9 -46 0 -79 -4 -79 -10 0 -6 -87 -10 -240
-10 -140 0 -240 4 -240 9 0 5 -35 12 -77 14 -94 6 -188 21 -226 36 -16 6 -41
11 -57 11 -16 0 -32 5 -35 10 -3 6 -31 10 -61 10 -30 0 -54 5 -54 10 0 6 -28
10 -64 10 -36 0 -68 5 -71 10 -8 12 -401 12 -430 0z"/>
<path d="M15310 4738 c-25 -5 -49 -14 -54 -19 -6 -5 -29 -9 -53 -9 -24 0 -43
-4 -43 -10 0 -6 -28 -10 -65 -10 -36 0 -65 -4 -65 -9 0 -5 -26 -11 -57 -14
-75 -6 -206 -25 -261 -37 -23 -6 -87 -10 -142 -10 -60 0 -100 -4 -100 -10 0
-6 -102 -10 -285 -10 -170 0 -285 4 -285 9 0 6 -46 12 -102 14 -119 6 -237 20
-294 36 -21 6 -56 11 -76 11 -21 0 -38 5 -38 10 0 6 -30 10 -70 10 -38 0 -70
4 -70 9 0 5 -26 12 -57 14 -32 3 -75 9 -95 12 -25 5 -38 3 -38 -4 0 -6 9 -11
20 -11 11 0 20 -4 20 -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 9 -10 20
-10 11 0 20 -4 20 -10 0 -5 9 -10 19 -10 11 0 26 -7 35 -15 8 -8 24 -15 35
-15 12 0 21 -4 21 -10 0 -5 20 -10 45 -10 25 0 45 -4 45 -10 0 -5 20 -10 45
-10 25 0 45 -4 45 -10 0 -5 15 -10 33 -10 17 0 59 -7 92 -15 33 -8 74 -14 92
-15 17 0 35 -4 38 -10 3 -5 33 -10 66 -10 32 0 59 -4 59 -9 0 -10 182 -22 335
-21 213 0 465 11 465 20 0 6 28 10 62 10 34 0 75 4 92 9 47 15 207 53 244 58
17 3 32 9 32 14 0 5 16 9 35 9 19 0 35 5 35 10 0 6 13 10 29 10 17 0 33 5 36
10 3 6 14 10 23 10 9 0 30 7 46 15 15 8 37 15 47 15 11 0 19 5 19 10 0 6 16
10 35 10 30 0 35 3 35 24 0 21 -27 39 -50 35 -3 -1 -25 -6 -50 -11z"/>
<path d="M11023 4442 c-31 -3 -33 -6 -33 -43 l0 -39 54 0 c58 0 92 -20 82 -47
-3 -8 -6 -17 -6 -19 0 -2 -8 -4 -18 -4 -10 0 -27 -7 -38 -15 -10 -8 -31 -15
-46 -15 -16 0 -28 -4 -28 -10 0 -5 -9 -10 -19 -10 -23 0 -31 -19 -31 -69 0
-23 8 -47 19 -60 18 -21 32 -23 153 -30 73 -4 141 -6 151 -3 25 6 23 52 -3 52
-11 0 -20 3 -20 6 0 10 28 34 41 34 24 0 129 34 129 42 0 4 5 8 11 8 26 0 39
30 39 94 l0 66 -55 0 c-30 0 -55 5 -55 10 0 6 -20 10 -45 10 -25 0 -45 5 -45
10 0 6 -15 10 -34 10 -19 0 -36 4 -38 9 -3 9 -115 18 -165 13z"/>
<path d="M16530 3582 c0 -21 8 -32 33 -47 17 -10 35 -23 39 -28 10 -16 38 19
38 48 0 37 -22 55 -69 55 -38 0 -41 -2 -41 -28z"/>
<path d="M15420 2700 c-8 -5 -30 -10 -47 -10 -18 0 -33 -4 -33 -10 0 -5 -13
-10 -30 -10 -16 0 -30 -4 -30 -10 0 -5 5 -10 10 -10 6 0 10 -5 10 -10 0 -14
46 -60 60 -60 5 0 10 -4 10 -10 0 -5 20 -10 45 -10 25 0 45 5 45 10 0 6 9 10
20 10 16 0 20 7 20 30 0 17 -4 30 -10 30 -5 0 -10 6 -10 13 0 13 -32 57 -41
57 -2 0 -11 -5 -19 -10z"/>
<path d="M13161 2639 c-15 -45 -5 -79 25 -79 13 0 24 5 24 10 0 6 14 10 30 10
37 0 46 19 29 60 -12 26 -19 30 -55 30 -38 0 -43 -3 -53 -31z"/>
<path d="M15171 2663 c0 -7 -8 -13 -16 -13 -8 0 -15 -5 -15 -10 0 -19 -48 -60
-70 -60 -11 0 -20 -4 -20 -10 0 -5 -16 -10 -35 -10 -19 0 -35 -4 -35 -9 0 -5
-13 -11 -30 -14 -30 -6 -30 -7 -30 -72 0 -58 2 -65 20 -65 11 0 20 -4 20 -10
0 -5 16 -10 35 -10 28 0 35 -4 35 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0
-15 6 -25 14 -25 8 0 17 -6 19 -12 4 -10 6 -10 6 0 1 6 8 12 16 12 16 0 21 36
5 42 -5 2 -12 17 -16 35 l-6 32 88 3 c84 3 89 4 92 26 2 12 -1 22 -7 22 -6 0
-11 9 -11 20 0 11 -4 20 -10 20 -5 0 -10 7 -10 15 0 8 -3 15 -8 15 -6 0 -36
86 -46 135 -2 11 -4 14 -5 8z"/>
<path d="M13350 2500 c0 -5 -5 -10 -11 -10 -34 0 -52 -68 -25 -96 8 -7 16 -19
18 -25 4 -12 84 -17 95 -6 3 4 -8 20 -26 36 -31 29 -40 51 -21 51 15 0 12 29
-4 46 -17 16 -26 18 -26 4z"/>
<path d="M13079 2447 c-40 -33 -42 -53 -11 -88 82 -93 156 -163 159 -151 3 6
9 12 14 12 6 0 21 11 34 24 13 13 30 26 37 28 10 4 9 9 -4 21 -9 9 -20 17 -25
17 -4 0 -33 13 -64 29 -55 28 -56 29 -37 45 11 10 30 22 44 28 29 14 32 38 4
38 -11 0 -20 5 -20 10 0 6 -24 10 -52 10 -40 0 -59 -5 -79 -23z"/>
<path d="M15340 2447 c0 -15 9 -29 25 -37 14 -7 25 -17 25 -22 0 -4 7 -8 15
-8 9 0 25 -9 37 -20 22 -20 38 -18 38 6 0 8 5 14 10 14 6 0 10 11 10 25 0 14
5 25 10 25 6 0 10 9 10 20 0 19 -7 20 -90 20 -88 0 -90 -1 -90 -23z"/>
<path d="M14960 2140 c0 -5 -7 -10 -15 -10 -18 0 -19 -9 -4 -30 8 -11 12 -12
16 -2 2 6 18 12 35 12 23 0 29 4 24 16 -3 9 -6 18 -6 20 0 2 -11 4 -25 4 -14
0 -25 -4 -25 -10z"/>
<path d="M13435 2018 c15 -54 28 -68 62 -68 18 0 33 -4 33 -10 0 -5 9 -10 20
-10 11 0 20 -6 20 -13 0 -18 42 -40 66 -35 15 2 20 13 22 47 5 62 -4 91 -28
91 -11 0 -20 5 -20 10 0 6 -37 10 -91 10 -89 0 -90 0 -84 -22z"/>
<path d="M7135 12252 c-24 -5 -55 -40 -55 -60 0 -23 -23 -82 -32 -82 -4 0 -8
-103 -8 -230 0 -147 4 -230 10 -230 6 0 10 -26 10 -59 0 -33 5 -63 10 -66 6
-3 10 -25 10 -48 0 -23 7 -67 15 -97 8 -30 15 -76 15 -102 0 -26 5 -50 10 -53
6 -3 10 -35 10 -71 0 -35 4 -64 9 -64 5 0 11 -39 14 -87 3 -49 10 -128 15
-178 23 -203 32 -422 24 -550 -9 -126 2 -293 21 -311 4 -4 7 -27 7 -51 0 -23
5 -43 10 -43 6 0 10 -13 10 -28 0 -16 11 -52 25 -80 14 -29 25 -56 25 -62 0
-5 5 -10 10 -10 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -9 10 -20 0 -11
5 -20 10 -20 6 0 10 -7 10 -15 0 -8 11 -25 25 -39 14 -14 25 -30 25 -36 0 -5
5 -10 10 -10 6 0 10 -9 10 -20 0 -11 7 -20 15 -20 8 0 15 -4 15 -8 0 -12 158
-172 170 -172 5 0 10 -4 10 -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 7
-10 15 -10 8 0 15 -5 15 -11 0 -14 25 -39 39 -39 6 0 11 -4 11 -10 0 -5 7 -10
16 -10 8 0 30 -16 48 -35 19 -19 41 -35 50 -35 9 0 16 -3 16 -7 0 -12 51 -33
77 -33 35 0 74 44 80 91 3 21 10 39 14 39 5 0 9 16 9 35 0 28 -4 35 -19 35
-11 0 -23 -4 -26 -10 -3 -5 -15 -10 -26 -10 -10 0 -19 -4 -19 -9 0 -5 -16 -12
-36 -16 -42 -7 -129 19 -155 47 -9 10 -20 18 -23 18 -4 0 -13 6 -21 13 -7 6
-25 21 -41 32 -34 24 -194 181 -194 190 0 6 -13 24 -47 60 -13 13 -23 32 -23
42 0 10 -9 25 -20 33 -11 8 -20 20 -20 26 0 6 -11 32 -25 58 -14 26 -25 56
-25 67 0 10 -4 19 -9 19 -5 0 -11 17 -14 38 -3 20 -11 64 -17 97 -6 33 -13
201 -15 375 -2 173 -9 365 -15 425 -6 61 -13 147 -16 193 -3 45 -9 82 -14 82
-5 0 -11 28 -13 63 -7 87 -24 187 -36 220 -6 16 -11 48 -11 72 0 24 -4 47 -10
50 -5 3 -10 44 -10 91 0 49 -4 84 -10 84 -5 0 -10 26 -10 57 0 31 -4 82 -10
112 -11 64 -30 217 -37 306 l-5 60 34 13 c19 6 44 12 56 12 27 0 112 -39 112
-51 0 -5 5 -9 11 -9 11 0 39 -25 39 -35 0 -4 6 -13 14 -21 8 -8 17 -14 21 -14
8 0 35 -27 35 -35 0 -3 9 -16 20 -28 44 -47 70 -82 70 -94 0 -7 5 -13 10 -13
6 0 10 -7 10 -15 0 -8 4 -15 8 -15 4 0 16 -20 26 -45 11 -25 23 -45 28 -45 4
0 8 -9 8 -20 0 -11 5 -20 10 -20 6 0 10 -16 10 -35 0 -19 5 -35 10 -35 6 0 10
-13 10 -29 0 -16 7 -45 15 -64 8 -20 15 -48 15 -62 0 -14 5 -25 10 -25 6 0 10
-20 10 -45 0 -25 5 -45 10 -45 6 0 10 -25 10 -55 0 -30 4 -55 9 -55 5 0 12
-21 14 -47 3 -27 13 -86 23 -133 9 -47 18 -127 21 -177 2 -51 9 -93 14 -93 5
0 9 -83 9 -200 0 -127 4 -200 10 -200 6 0 10 -11 10 -25 0 -28 14 -32 36 -11
17 17 18 71 3 186 -10 86 -27 341 -35 568 -3 67 -9 122 -15 122 -5 0 -9 36 -9
80 0 47 -4 80 -10 80 -5 0 -10 17 -10 38 0 20 -12 69 -25 107 -14 39 -25 78
-25 88 0 9 -4 17 -10 17 -5 0 -10 13 -10 29 0 16 -3 31 -7 33 -10 4 -63 110
-63 126 0 6 -4 12 -10 12 -5 0 -10 7 -10 15 0 8 -3 15 -8 15 -4 0 -13 12 -19
28 -7 15 -24 39 -38 54 -14 15 -25 30 -25 33 0 8 -137 145 -145 145 -6 0 -20
11 -50 38 -7 6 -18 12 -24 12 -6 0 -11 5 -11 10 0 6 -9 10 -19 10 -11 0 -21 4
-23 8 -4 11 -76 21 -103 14z"/>
<path d="M21385 12193 c-22 -8 -44 -18 -49 -24 -6 -5 -17 -9 -26 -9 -8 0 -22
-9 -30 -20 -8 -11 -21 -20 -30 -20 -8 0 -28 -12 -45 -26 -16 -14 -40 -34 -53
-45 -12 -10 -27 -19 -32 -19 -6 0 -10 -5 -10 -10 0 -10 -8 -20 -67 -85 -13
-13 -23 -29 -23 -35 0 -5 -4 -10 -10 -10 -5 0 -10 -9 -10 -20 0 -11 -3 -20 -7
-20 -11 0 -43 -58 -43 -76 0 -8 -4 -14 -10 -14 -5 0 -10 -11 -10 -25 0 -14 -4
-25 -10 -25 -5 0 -10 -13 -10 -30 0 -16 -4 -30 -8 -30 -8 0 -29 -77 -39 -142
-3 -21 -9 -38 -14 -38 -5 0 -9 -27 -9 -60 0 -33 -4 -60 -10 -60 -6 0 -10 -28
-10 -65 0 -36 -4 -65 -9 -65 -5 0 -11 -35 -14 -77 -3 -43 -10 -148 -16 -233
-15 -206 3 -520 30 -520 5 0 9 47 9 105 0 63 4 105 10 105 6 0 10 62 10 165 0
103 4 165 10 165 6 0 10 52 10 135 0 83 4 135 10 135 6 0 10 21 10 48 0 26 5
65 11 87 6 22 13 59 16 83 3 23 9 42 14 42 5 0 9 18 9 39 0 22 3 41 8 43 6 3
30 59 56 136 6 17 14 32 18 32 5 0 8 11 8 25 0 14 5 25 10 25 6 0 10 9 10 20
0 11 3 20 8 20 4 0 16 16 26 35 11 19 23 35 28 35 4 0 8 5 8 10 0 11 65 80 75
80 3 0 17 10 30 23 40 37 54 47 65 47 5 0 10 5 10 10 0 6 5 10 11 10 5 0 27
11 47 25 20 14 45 25 54 25 10 0 18 5 18 10 0 6 30 10 70 10 40 0 70 -4 70
-10 0 -5 20 -10 45 -10 25 0 45 5 45 10 0 6 -5 10 -11 10 -7 0 -19 8 -28 18
-30 35 -117 72 -161 71 -14 -1 -43 -8 -65 -16z"/>
<path d="M21442 11593 c-14 -33 -33 -254 -39 -445 -3 -76 -9 -138 -14 -138 -5
0 -10 -169 -13 -392 -4 -392 -14 -578 -35 -631 -6 -16 -11 -43 -11 -62 0 -19
-4 -37 -10 -40 -5 -3 -10 -22 -10 -41 0 -19 -4 -34 -10 -34 -5 0 -10 -16 -10
-35 0 -19 -4 -35 -10 -35 -5 0 -10 -9 -10 -19 0 -11 -11 -41 -25 -67 -14 -26
-25 -50 -25 -54 0 -4 -40 -50 -90 -101 -49 -51 -90 -96 -90 -101 0 -12 -26
-38 -37 -38 -4 0 -20 -11 -35 -25 -15 -14 -34 -25 -43 -25 -8 0 -15 -4 -15
-10 0 -5 -16 -10 -35 -10 -19 0 -35 5 -35 10 0 6 -11 10 -24 10 -14 0 -28 5
-31 10 -3 6 -30 10 -60 10 -30 0 -57 -4 -60 -10 -3 -5 -15 -10 -26 -10 -10 0
-19 -4 -19 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -4 -10 -10 -10
-16 0 -90 -78 -90 -95 0 -8 -4 -15 -10 -15 -5 0 -10 -14 -10 -31 0 -25 13 -44
73 -102 63 -62 72 -67 75 -48 2 12 -1 36 -7 53 -13 38 -15 148 -2 148 5 0 12
8 15 18 4 10 23 26 43 36 36 17 36 17 58 -8 12 -14 30 -26 39 -26 9 0 16 -4
16 -10 0 -5 20 -10 45 -10 25 0 45 5 45 10 0 6 9 10 20 10 21 0 31 6 75 48 13
12 27 22 30 22 3 0 17 11 31 25 14 14 28 25 32 25 13 0 100 88 119 120 9 17
21 30 25 30 4 0 8 9 8 20 0 11 5 20 10 20 6 0 10 9 10 21 0 11 16 35 35 53 19
19 35 41 35 50 0 9 4 16 8 16 5 0 15 12 23 28 7 15 24 44 36 64 13 21 23 49
23 63 0 14 5 25 10 25 6 0 10 16 10 35 0 19 4 35 8 35 20 0 49 544 59 1093 2
123 8 207 13 207 6 0 10 34 10 75 0 43 -4 75 -10 75 -6 0 -10 48 -10 123 0
131 -9 168 -28 120z"/>
</g>
</svg>
                    <div class="bread-journey-heading">
                    <h3 class="pre-crou-head pb-20">Progress Stage:</h3>
                        <p class="pro_desc"> <b> Four Months and Beyond</b> At 4 months and beyond, maintaining your regimen will lead to even more significant results. You'll observe those patches starting to fill in, resulting in an overall improved coverage. This is the stage when you finally realise what your face has been longing for – a testament to your persistence and a boost to your dignified persona.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="bread-journey-box">
                <?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
 "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="2871.000000pt" height="2298.000000pt" viewBox="0 0 2871.000000 2298.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,2298.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M11230 22314 c-80 -5 -280 -34 -316 -45 -17 -5 -47 -9 -67 -9 -20 0
-37 -4 -37 -10 0 -5 -25 -10 -55 -10 -30 0 -55 -4 -55 -10 0 -5 -12 -10 -27
-10 -16 0 -59 -12 -98 -25 -38 -14 -78 -25 -87 -25 -10 0 -18 -4 -18 -10 0 -5
-13 -10 -30 -10 -16 0 -30 -4 -30 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4 -25
-9 0 -5 -13 -12 -30 -16 -16 -4 -32 -11 -35 -16 -4 -5 -15 -9 -26 -9 -10 0
-19 -4 -19 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -7 -10 -16 -10
-8 0 -22 -6 -29 -12 -33 -30 -45 -38 -55 -38 -5 0 -10 -4 -10 -10 0 -5 -7 -10
-16 -10 -9 0 -40 -25 -69 -55 -30 -30 -58 -55 -63 -55 -10 0 -52 -43 -52 -54
0 -4 -25 -31 -55 -61 -30 -29 -55 -60 -55 -69 0 -9 -4 -16 -10 -16 -5 0 -10
-5 -10 -11 0 -6 -6 -17 -12 -24 -32 -35 -38 -45 -38 -60 0 -8 -4 -15 -10 -15
-5 0 -10 -7 -10 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -8
-20 -5 0 -17 -16 -28 -35 -10 -19 -22 -35 -26 -35 -5 0 -8 -9 -8 -20 0 -11 -4
-20 -10 -20 -5 0 -10 -7 -10 -15 0 -8 -4 -15 -8 -15 -5 0 -17 -18 -28 -40 -10
-22 -22 -40 -26 -40 -5 0 -8 -7 -8 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -9 -10
-20 0 -11 -4 -20 -8 -20 -5 0 -17 -16 -28 -35 -10 -19 -22 -35 -26 -35 -5 0
-8 -9 -8 -20 0 -12 -11 -32 -25 -46 -14 -14 -25 -31 -25 -39 0 -8 -4 -15 -10
-15 -5 0 -10 -8 -10 -18 0 -10 -9 -24 -20 -32 -11 -8 -20 -22 -20 -30 0 -9 -8
-25 -18 -36 -10 -10 -27 -34 -37 -51 -11 -18 -23 -33 -27 -33 -4 0 -8 -7 -8
-15 0 -9 -11 -28 -25 -43 -14 -15 -25 -30 -25 -35 0 -4 -10 -18 -22 -31 -13
-12 -32 -35 -43 -50 -11 -16 -30 -39 -42 -52 -13 -13 -23 -26 -23 -29 0 -8
-27 -35 -35 -35 -8 0 -55 -47 -55 -55 0 -8 -27 -35 -35 -35 -3 0 -21 -15 -40
-32 -44 -43 -63 -58 -70 -58 -3 0 -17 -11 -31 -25 -14 -14 -29 -25 -33 -25 -4
0 -22 -13 -39 -30 -18 -16 -39 -30 -47 -30 -8 0 -15 -4 -15 -10 0 -5 -5 -10
-11 -10 -6 0 -17 -6 -24 -12 -32 -29 -45 -38 -52 -38 -5 0 -15 -9 -23 -20 -8
-11 -20 -20 -26 -20 -7 0 -33 -20 -57 -45 -25 -25 -49 -45 -54 -45 -11 0 -93
-79 -118 -114 -11 -15 -35 -44 -52 -64 -18 -20 -33 -39 -33 -43 0 -5 -11 -19
-25 -33 -14 -14 -25 -34 -25 -46 0 -11 -4 -20 -10 -20 -5 0 -10 -9 -10 -19 0
-11 -3 -21 -7 -23 -16 -6 -63 -119 -63 -148 0 -17 -4 -30 -10 -30 -5 0 -10
-20 -10 -44 0 -25 -4 -48 -10 -51 -6 -4 -10 -75 -10 -181 0 -109 4 -174 10
-174 6 0 10 -25 10 -55 0 -30 5 -55 10 -55 6 0 10 -20 10 -45 0 -25 5 -45 10
-45 6 0 10 -13 10 -28 0 -16 6 -51 14 -78 21 -73 24 -144 6 -144 -12 0 -60
-45 -60 -55 0 -8 -27 -35 -35 -35 -8 0 -35 -27 -35 -35 0 -3 -36 -42 -80 -86
-44 -44 -80 -87 -80 -95 0 -19 31 -74 42 -74 4 0 8 -5 8 -10 0 -13 45 -60 57
-60 5 0 15 -9 23 -20 8 -11 22 -20 30 -20 9 0 40 -11 68 -25 29 -14 65 -25 82
-25 16 0 30 -4 30 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 11 -10 24
-10 30 0 86 -31 86 -47 0 -7 -34 -47 -75 -88 -41 -42 -75 -80 -75 -85 0 -5
-11 -20 -25 -34 -14 -14 -25 -28 -25 -31 0 -4 -6 -13 -12 -20 -28 -31 -35 -41
-48 -72 -8 -18 -18 -33 -22 -33 -5 0 -8 -9 -8 -20 0 -11 -4 -20 -10 -20 -5 0
-10 -6 -10 -14 0 -7 -7 -19 -15 -26 -8 -7 -15 -21 -15 -31 0 -11 -4 -19 -10
-19 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -9 -10 -20 0 -11 -4
-20 -10 -20 -5 0 -10 -11 -10 -24 0 -13 -6 -37 -14 -53 -20 -41 -36 -96 -36
-126 0 -15 -4 -27 -10 -27 -5 0 -10 -20 -10 -45 0 -25 -4 -45 -9 -45 -5 0 -11
-21 -14 -47 -3 -27 -13 -79 -22 -118 -9 -38 -19 -94 -22 -122 -3 -29 -9 -53
-14 -53 -5 0 -9 -34 -9 -75 0 -43 -4 -75 -10 -75 -6 0 -10 -40 -10 -100 0 -55
-4 -100 -8 -100 -5 0 -12 -71 -16 -157 -3 -87 -11 -219 -16 -293 -12 -180 -12
-898 0 -1080 6 -80 15 -197 21 -260 6 -63 13 -154 16 -202 2 -49 9 -88 14 -88
5 0 9 -36 9 -80 0 -44 4 -80 9 -80 5 0 12 -28 14 -62 8 -89 31 -225 40 -234 4
-4 7 -29 7 -56 0 -26 5 -48 10 -48 6 0 10 -27 10 -60 0 -33 4 -60 10 -60 6 0
10 -12 10 -27 0 -15 4 -40 9 -57 16 -53 41 -170 41 -188 0 -10 -7 -18 -15 -18
-8 0 -15 5 -15 10 0 6 -20 10 -45 10 -25 0 -45 4 -45 9 0 5 -17 11 -37 14 -21
3 -63 11 -93 17 -64 14 -205 9 -222 -8 -7 -7 -20 -12 -30 -12 -10 0 -18 -4
-18 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -8 0 -5 -11 -15 -25 -22 -14 -7
-25 -17 -25 -22 0 -4 -16 -25 -35 -45 -19 -20 -35 -43 -35 -50 0 -7 -4 -13
-10 -13 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -11 -10 -25 0 -14
-3 -25 -8 -25 -9 0 -32 -63 -39 -108 -3 -18 -9 -35 -14 -38 -20 -12 5 -871 27
-906 6 -9 23 -138 31 -230 3 -32 9 -58 14 -58 5 0 9 -23 9 -52 0 -28 4 -65 9
-82 18 -61 41 -242 41 -323 0 -53 4 -83 11 -83 7 0 9 -25 4 -77 -13 -163 -16
-393 -5 -393 6 0 10 -26 10 -65 0 -37 4 -65 10 -65 6 0 10 -16 10 -35 0 -19 4
-43 9 -53 5 -9 17 -45 27 -79 11 -35 22 -63 26 -63 5 0 8 -11 8 -25 0 -14 5
-25 10 -25 6 0 10 -13 10 -29 0 -16 3 -31 8 -33 9 -4 62 -110 62 -126 0 -6 5
-12 10 -12 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -6 10 -14 0 -7 7 -19
15 -26 8 -7 15 -21 15 -31 0 -11 5 -19 10 -19 6 0 10 -9 10 -20 0 -11 5 -20
10 -20 6 0 10 -11 10 -25 0 -14 3 -25 8 -25 4 0 15 -20 25 -45 11 -25 23 -45
28 -45 5 0 9 -11 9 -25 0 -14 5 -25 10 -25 6 0 10 -11 10 -25 0 -14 3 -25 8
-25 4 0 12 -15 18 -32 26 -77 50 -133 57 -136 4 -2 7 -19 7 -38 0 -19 5 -34
10 -34 6 0 10 -13 10 -29 0 -17 4 -32 9 -35 5 -4 12 -24 16 -46 4 -22 11 -42
16 -46 5 -3 9 -21 9 -40 0 -19 5 -34 10 -34 6 0 10 -22 10 -50 0 -27 5 -50 10
-50 6 0 10 -12 10 -27 0 -28 4 -42 45 -164 14 -41 25 -83 25 -92 0 -9 5 -17
10 -17 6 0 10 -9 10 -19 0 -11 16 -50 35 -88 19 -37 35 -71 35 -76 0 -4 14
-21 30 -39 17 -17 30 -35 30 -40 0 -12 91 -98 105 -98 6 0 17 -9 25 -20 8 -11
19 -20 25 -20 5 0 32 -11 60 -24 72 -35 115 -46 173 -46 29 0 52 -4 52 -10 0
-6 28 -10 65 -10 37 0 65 -4 65 -10 0 -5 9 -10 20 -10 17 0 20 -7 20 -40 0
-22 -4 -40 -10 -40 -6 0 -10 -55 -10 -145 0 -90 -4 -145 -10 -145 -5 0 -10 -7
-10 -15 0 -8 5 -15 10 -15 6 0 10 -6 10 -12 0 -7 16 -23 35 -36 29 -18 35 -28
35 -57 0 -19 -4 -35 -9 -35 -5 0 -12 -11 -15 -25 -4 -14 -11 -25 -16 -25 -6 0
-10 -16 -10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -20 -10 -45 0 -25 -4 -45 -10
-45 -6 0 -10 -56 -10 -149 0 -168 -3 -161 81 -161 48 0 49 -1 49 -30 0 -16 -4
-30 -10 -30 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -11 -10 -25
0 -14 -4 -25 -10 -25 -5 0 -10 -8 -10 -17 0 -10 -7 -31 -15 -47 -8 -15 -15
-37 -15 -47 0 -11 -4 -19 -10 -19 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35
-5 0 -10 -9 -10 -20 0 -17 -18 -66 -41 -112 -5 -10 -9 -43 -9 -74 0 -50 3 -58
35 -88 31 -30 35 -39 35 -85 0 -28 -4 -51 -10 -51 -5 0 -10 -13 -10 -29 0 -17
-4 -32 -9 -35 -5 -3 -12 -30 -16 -61 -3 -30 -11 -57 -16 -60 -5 -4 -9 -22 -9
-41 0 -19 -4 -34 -10 -34 -5 0 -10 -20 -10 -45 0 -25 -4 -45 -9 -45 -11 0 -20
-87 -27 -258 l-5 -123 30 -28 c29 -27 31 -34 31 -100 0 -65 21 -140 43 -149 4
-2 7 -12 7 -23 0 -10 5 -19 10 -19 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0
10 -9 10 -19 0 -11 5 -21 11 -23 5 -2 13 -38 16 -81 3 -42 10 -77 14 -77 5 0
9 -9 9 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0 10
-8 10 -18 0 -10 3 -22 7 -26 11 -11 43 -99 43 -118 0 -10 5 -18 10 -18 6 0 10
-16 10 -35 0 -19 5 -35 10 -35 6 0 10 -18 10 -40 0 -22 5 -40 10 -40 6 0 10
-13 10 -29 0 -16 7 -45 15 -64 8 -20 15 -48 15 -62 0 -14 5 -25 10 -25 6 0 10
-16 10 -35 0 -19 5 -35 10 -35 6 0 10 -12 10 -27 0 -16 11 -59 25 -98 13 -38
25 -87 25 -107 0 -21 5 -38 10 -38 6 0 10 -6 10 -14 0 -7 15 -20 33 -27 39
-16 57 -33 57 -53 0 -9 3 -16 8 -16 4 0 13 -15 21 -32 8 -18 17 -35 20 -38 14
-12 41 -60 41 -75 0 -8 4 -15 8 -15 4 0 16 -20 26 -45 11 -25 23 -45 28 -45 4
0 8 -11 8 -24 0 -14 5 -28 10 -31 6 -3 10 -22 10 -41 0 -19 5 -34 10 -34 6 0
10 -11 10 -25 0 -14 5 -25 10 -25 6 0 10 -6 10 -13 0 -7 11 -24 25 -39 14 -15
25 -33 25 -40 0 -8 9 -20 20 -28 11 -8 20 -18 20 -23 0 -8 12 -24 47 -62 13
-13 23 -27 23 -30 0 -7 14 -24 48 -60 12 -13 22 -27 22 -30 0 -10 49 -55 60
-55 5 0 10 -4 10 -8 0 -4 15 -24 33 -44 17 -20 41 -49 52 -64 11 -15 30 -38
43 -50 12 -13 22 -26 22 -28 0 -7 34 -48 68 -82 12 -13 22 -26 22 -29 0 -7 14
-24 48 -60 12 -13 22 -27 22 -30 0 -7 14 -24 48 -60 12 -13 22 -28 22 -32 0
-5 9 -15 20 -23 11 -8 20 -20 20 -27 0 -18 77 -93 95 -93 8 0 15 -4 15 -10 0
-5 5 -10 10 -10 6 0 16 -5 23 -10 56 -47 74 -60 85 -60 6 0 12 -4 12 -10 0 -5
4 -10 10 -10 12 0 110 -98 110 -111 0 -5 20 -29 45 -53 25 -25 45 -48 45 -51
0 -8 47 -55 55 -55 8 0 35 -27 35 -35 0 -8 47 -55 55 -55 8 0 35 -27 35 -35 0
-7 137 -145 145 -145 3 0 16 -10 29 -23 34 -33 75 -67 82 -67 2 0 16 -11 30
-25 14 -14 28 -25 33 -25 4 0 23 -15 43 -33 19 -17 47 -41 62 -52 15 -11 100
-92 188 -179 l159 -159 65 2 c38 1 64 -2 64 -9 0 -5 7 -10 15 -10 7 0 46 -32
85 -70 39 -39 78 -70 85 -70 8 0 15 -4 15 -10 0 -5 9 -10 20 -10 11 0 20 -4
20 -10 0 -5 5 -10 10 -10 10 0 22 -8 55 -37 7 -7 21 -13 29 -13 9 0 16 -4 16
-10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -9 0
-5 11 -12 25 -15 14 -4 25 -11 25 -16 0 -6 7 -10 15 -10 8 0 15 -4 15 -10 0
-5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 9 -10 20 -10 11 0 20 -3 20 -8 0 -4
16 -16 35 -26 19 -11 35 -23 35 -28 0 -4 11 -8 25 -8 14 0 25 -4 25 -10 0 -5
9 -10 20 -10 11 0 20 -4 20 -9 0 -5 20 -17 45 -28 25 -10 45 -21 45 -25 0 -5
14 -8 30 -8 17 0 30 -4 30 -10 0 -5 11 -10 25 -10 14 0 25 -3 25 -7 0 -5 29
-17 65 -28 36 -10 65 -23 65 -27 0 -4 16 -8 35 -8 19 0 35 -4 35 -10 0 -5 12
-10 26 -10 30 0 127 -31 132 -42 2 -5 19 -8 38 -8 19 0 34 -4 34 -10 0 -5 20
-10 45 -10 25 0 45 -4 45 -9 0 -18 266 -39 283 -22 6 6 30 11 54 11 24 0 43 5
43 10 0 6 80 10 220 10 140 0 220 4 220 10 0 6 14 10 30 10 22 0 40 10 64 35
32 33 66 46 66 26 0 -11 62 -18 237 -29 80 -5 138 -13 145 -20 7 -7 31 -12 55
-12 24 0 43 -4 43 -10 0 -6 37 -10 90 -10 53 0 90 -4 90 -10 0 -6 35 -10 84
-10 47 0 88 -4 91 -10 3 -5 18 -10 33 -10 15 0 37 -6 48 -14 48 -34 223 -29
354 10 30 9 70 19 88 21 17 3 32 9 32 14 0 5 16 9 35 9 19 0 35 5 35 10 0 6
13 10 28 10 15 0 32 4 38 8 5 5 37 17 72 28 34 10 62 22 62 26 0 5 16 8 35 8
19 0 35 5 35 10 0 6 12 10 28 10 15 0 36 7 46 15 11 8 30 15 43 15 13 0 23 5
23 10 0 6 9 10 20 10 11 0 20 5 20 10 0 6 14 10 30 10 17 0 30 4 30 8 0 4 23
16 50 27 28 11 50 23 50 27 0 4 14 8 30 8 17 0 30 5 30 10 0 6 23 10 50 10 28
0 50 5 50 10 0 6 14 10 30 10 17 0 30 4 30 10 0 5 11 12 25 16 14 3 25 10 25
15 0 5 9 9 20 9 11 0 20 5 20 10 0 6 7 10 15 10 8 0 15 5 15 10 0 6 7 10 16
10 8 0 22 6 29 13 33 29 45 37 55 37 5 0 10 5 10 10 0 6 9 10 20 10 11 0 20 3
20 8 0 4 15 14 33 21 17 8 37 20 44 25 35 31 44 36 63 36 11 0 20 4 20 8 0 5
16 17 35 28 19 10 35 21 35 25 0 4 14 12 30 19 17 7 30 16 30 21 0 5 5 9 11 9
6 0 17 6 24 13 35 31 45 37 60 37 8 0 15 5 15 10 0 6 7 10 15 10 8 0 15 5 15
10 0 6 9 10 20 10 11 0 20 5 20 10 0 6 4 10 10 10 15 0 125 53 128 62 2 4 10
8 18 8 7 0 79 65 158 145 80 80 149 145 153 145 5 0 26 16 46 35 20 19 39 35
42 35 7 0 27 16 70 58 19 17 37 32 40 32 8 0 35 27 35 35 0 7 47 55 54 55 10
0 166 160 166 170 0 6 5 10 10 10 11 0 60 45 60 55 0 8 47 55 55 55 8 0 35 27
35 35 0 10 69 75 80 75 5 0 10 5 10 11 0 11 25 39 35 39 3 0 16 10 29 23 13
12 36 31 51 42 38 27 85 71 85 80 0 8 27 35 35 35 10 0 35 28 35 39 0 6 5 11
10 11 6 0 10 7 10 15 0 8 5 15 10 15 6 0 10 7 10 15 0 8 7 15 15 15 8 0 15 7
15 15 0 8 5 15 10 15 6 0 10 7 10 15 0 8 5 15 10 15 6 0 10 7 10 15 0 8 3 15
8 15 4 0 16 16 26 35 11 19 23 35 28 35 4 0 8 9 8 20 0 11 5 20 10 20 6 0 10
7 10 15 0 8 3 15 8 15 4 0 16 18 26 40 11 22 23 40 28 40 4 0 8 7 8 15 0 8 5
15 10 15 6 0 10 10 10 23 0 24 37 67 58 67 7 0 12 5 12 10 0 6 9 10 20 10 11
0 20 4 20 8 0 5 11 15 25 22 14 7 25 19 25 27 0 7 5 13 10 13 6 0 10 9 10 20
0 11 4 20 8 20 5 0 17 16 28 35 10 19 22 35 26 35 5 0 8 9 8 20 0 11 5 20 10
20 6 0 10 5 10 10 0 6 10 22 23 35 37 40 47 54 47 65 0 5 5 10 10 10 6 0 10 9
10 20 0 11 5 20 10 20 6 0 10 6 10 14 0 18 32 76 43 76 4 0 7 9 7 20 0 11 5
20 10 20 6 0 10 9 10 20 0 12 9 30 20 42 10 11 22 34 25 49 4 16 11 29 16 29
5 0 9 11 9 25 0 14 5 25 10 25 6 0 10 9 10 20 0 11 5 20 10 20 6 0 10 4 10 10
0 5 16 34 35 64 19 30 35 62 35 71 0 8 5 15 10 15 6 0 10 9 10 19 0 11 3 21 8
23 13 6 62 113 62 136 0 12 5 22 10 22 6 0 10 11 10 25 0 14 5 25 10 25 6 0
10 13 10 29 0 16 4 31 10 33 12 4 30 82 37 156 3 28 9 52 14 52 5 0 9 27 9 59
0 33 5 63 10 66 6 3 10 18 10 33 0 15 7 36 15 46 8 11 15 28 15 38 0 10 5 18
10 18 6 0 10 7 10 15 0 8 5 15 10 15 6 0 10 9 10 20 0 11 3 20 8 20 4 0 16 29
27 65 10 36 23 65 27 65 4 0 8 16 8 35 0 19 5 35 10 35 6 0 10 19 10 43 0 24
4 47 9 52 5 6 11 28 14 50 3 22 12 67 22 100 9 33 19 72 22 87 3 16 9 28 14
28 5 0 9 16 9 35 0 19 5 35 10 35 6 0 10 9 10 19 0 11 3 21 8 23 4 2 14 19 23
38 24 54 23 221 -1 370 -12 69 -23 142 -26 163 -4 20 -10 37 -15 37 -5 0 -9
15 -9 34 0 19 -5 36 -11 38 -17 6 -17 180 -1 186 7 2 12 23 12 53 0 27 5 49
10 49 6 0 10 28 10 65 0 37 -4 65 -10 65 -5 0 -10 20 -10 45 0 25 -4 45 -10
45 -5 0 -10 11 -10 24 0 13 -7 29 -15 36 -8 7 -15 18 -15 25 0 18 -42 95 -52
95 -4 0 -8 5 -8 11 0 5 -11 27 -25 47 -25 37 -34 102 -15 102 10 0 20 8 85 68
13 12 29 22 36 22 14 0 8 46 -21 160 -20 80 -21 104 -18 390 2 168 1 334 -1
370 l-5 65 37 3 c20 2 37 7 37 13 0 5 20 9 45 9 25 0 45 5 45 10 0 6 12 10 28
10 28 0 82 17 119 38 12 7 29 12 37 12 9 0 16 5 16 10 0 6 7 10 15 10 8 0 15
5 15 10 0 6 9 10 20 10 11 0 20 4 20 8 0 4 13 15 28 24 43 26 152 135 152 153
0 8 4 15 8 15 5 0 17 16 28 35 10 19 22 35 26 35 5 0 8 9 8 20 0 11 5 20 10
20 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 14 10 30 0 17 5 30 10 30 6 0 10
10 10 23 0 13 7 32 15 43 8 10 15 31 15 47 0 15 5 27 10 27 6 0 10 16 10 35 0
19 5 35 10 35 6 0 10 20 10 45 0 25 5 45 10 45 6 0 10 10 10 23 0 24 32 122
43 134 4 3 7 19 7 35 0 15 5 28 10 28 6 0 10 9 10 20 0 11 11 45 25 76 14 31
25 63 25 70 0 8 5 14 10 14 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 9 10 20 0
11 5 20 10 20 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 8 10 19 0 10 7 24 15
31 8 7 15 19 15 26 0 8 5 14 10 14 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 9
10 20 0 11 4 20 9 20 5 0 17 20 28 45 10 25 21 45 26 45 4 0 7 9 7 20 0 11 5
20 10 20 6 0 10 7 10 15 0 8 4 15 8 15 5 0 17 18 27 40 10 22 22 40 27 40 4 0
8 9 8 19 0 11 3 21 8 23 9 4 51 76 59 101 3 9 9 17 14 17 5 0 9 11 9 25 0 14
4 25 8 25 4 0 17 29 27 65 11 36 23 65 28 65 4 0 7 14 7 30 0 17 5 30 10 30 6
0 10 18 10 40 0 22 5 40 10 40 6 0 10 20 10 45 0 25 5 45 10 45 6 0 10 20 10
44 0 25 5 57 11 73 9 24 17 166 36 606 2 59 8 107 13 107 5 0 11 37 13 83 6
90 21 193 37 247 5 19 10 49 10 67 0 17 5 35 10 38 6 3 10 28 10 56 0 27 5 49
10 49 6 0 10 28 10 65 0 36 4 65 9 65 5 0 11 21 13 48 3 26 10 81 17 122 7 41
17 104 23 140 15 91 -3 306 -30 373 -7 16 -12 39 -12 53 0 13 -4 24 -10 24 -5
0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 7 -10 17 0 20 -47 103 -72 124
-10 9 -18 19 -18 23 0 8 -47 56 -55 56 -3 0 -22 16 -42 35 -20 19 -43 35 -50
35 -7 0 -13 5 -13 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -52 10 -135
10 -83 0 -135 -4 -135 -10 0 -5 -13 -10 -30 -10 -16 0 -30 -4 -30 -10 0 -5
-16 -10 -35 -10 -19 0 -35 -4 -35 -9 0 -5 -13 -12 -30 -16 -16 -4 -32 -11 -35
-16 -4 -5 -15 -9 -26 -9 -17 0 -19 7 -19 70 0 40 4 70 10 70 6 0 10 25 10 55
0 30 5 55 10 55 6 0 10 15 10 33 0 17 6 61 14 97 30 131 36 189 36 333 0 91 4
147 10 147 7 0 10 218 10 635 0 417 -3 635 -10 635 -6 0 -10 44 -10 112 0 61
-4 137 -10 167 -9 53 -26 209 -37 331 -3 30 -9 59 -14 65 -5 5 -9 42 -9 82 0
40 -4 73 -9 73 -5 0 -12 28 -14 63 -7 88 -26 207 -37 241 -6 16 -10 51 -10 77
0 27 -4 49 -10 49 -5 0 -10 25 -10 55 0 30 -4 55 -9 55 -5 0 -12 28 -14 63 -7
78 -23 182 -37 227 -5 19 -10 52 -10 72 0 20 -4 40 -10 43 -5 3 -10 35 -10 71
0 36 -4 64 -10 64 -6 0 -10 26 -10 59 0 33 -4 63 -10 66 -5 3 -10 21 -10 39 0
18 -7 55 -15 82 -8 27 -15 64 -15 82 0 17 -4 32 -10 32 -5 0 -10 25 -10 55 0
30 -4 55 -9 55 -5 0 -11 17 -14 38 -2 20 -16 80 -31 132 -16 52 -30 112 -33
133 -3 20 -9 37 -14 37 -5 0 -9 16 -9 35 0 19 -4 35 -10 35 -5 0 -10 11 -10
25 0 14 -4 33 -9 43 -23 46 -41 95 -41 112 0 11 -4 20 -10 20 -5 0 -10 15 -10
34 0 19 -3 36 -7 38 -7 3 -31 59 -57 136 -6 17 -14 32 -18 32 -5 0 -8 11 -8
25 0 14 -4 25 -10 25 -5 0 -10 9 -10 19 0 11 -11 41 -25 67 -14 26 -25 53 -25
60 0 8 -4 14 -10 14 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 7 -10 16
0 8 -7 22 -15 30 -8 9 -15 24 -15 35 0 10 -4 19 -10 19 -5 0 -10 11 -10 25 0
14 -4 25 -10 25 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 7 -10 15 0 8
-4 15 -9 15 -5 0 -17 20 -28 45 -10 25 -21 45 -25 45 -5 0 -8 9 -8 20 0 11 -3
20 -8 20 -4 0 -14 15 -21 33 -8 17 -20 37 -25 44 -30 34 -36 43 -36 53 0 5 -4
10 -9 10 -5 0 -12 8 -15 18 -4 10 -20 34 -36 52 -17 19 -30 39 -30 45 0 6 -9
17 -20 25 -11 8 -20 18 -20 23 0 8 -12 24 -47 62 -13 13 -23 27 -23 30 0 7
-14 24 -47 60 -13 13 -23 27 -23 30 0 4 -6 12 -12 20 -7 7 -22 25 -33 41 -11
15 -50 59 -87 98 -38 38 -68 73 -68 76 0 10 -181 191 -226 225 -21 16 -87 78
-146 137 -59 60 -110 108 -113 108 -8 0 -29 18 -106 93 -39 37 -73 67 -75 67
-3 0 -16 10 -29 23 -62 56 -75 67 -80 67 -3 0 -16 10 -29 23 -34 33 -75 67
-82 67 -2 0 -16 11 -30 25 -14 14 -29 25 -33 25 -4 0 -22 14 -39 30 -18 17
-39 30 -47 30 -8 0 -15 5 -15 10 0 6 -5 10 -10 10 -6 0 -22 10 -35 23 -40 37
-54 47 -65 47 -5 0 -10 5 -10 10 0 6 -7 10 -15 10 -9 0 -28 11 -43 25 -15 14
-32 25 -39 25 -7 0 -13 5 -13 10 0 6 -7 10 -15 10 -8 0 -15 3 -15 8 0 4 -18
16 -40 26 -22 11 -40 23 -40 28 0 4 -7 8 -15 8 -8 0 -15 5 -15 10 0 6 -9 10
-20 10 -11 0 -20 5 -20 10 0 6 -5 10 -10 10 -12 0 -94 52 -98 63 -2 4 -15 7
-28 7 -13 0 -24 5 -24 10 0 6 -9 10 -20 10 -11 0 -20 4 -20 10 0 5 -11 12 -25
16 -14 3 -25 10 -25 15 0 5 -9 9 -20 9 -11 0 -20 5 -20 10 0 6 -9 10 -20 10
-11 0 -20 5 -20 10 0 6 -11 10 -25 10 -14 0 -25 3 -25 8 0 4 -20 16 -45 27
-25 11 -45 23 -45 27 0 5 -11 8 -25 8 -14 0 -25 5 -25 10 0 6 -13 10 -30 10
-16 0 -30 5 -30 10 0 6 -5 10 -10 10 -6 0 -33 11 -62 25 -28 14 -60 25 -70 25
-10 0 -18 5 -18 10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -7 10 -15 10 -8
0 -38 11 -67 25 -28 14 -60 25 -70 25 -10 0 -18 5 -18 10 0 6 -8 10 -17 10
-23 0 -110 32 -165 61 -10 5 -29 9 -43 9 -14 0 -25 5 -25 10 0 6 -16 10 -35
10 -19 0 -35 4 -35 8 0 4 -29 17 -65 27 -36 11 -65 23 -65 28 0 4 -16 7 -35 7
-19 0 -35 5 -35 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -13 10 -29 10
-17 0 -32 4 -35 9 -4 5 -24 12 -46 16 -22 4 -42 11 -46 16 -3 5 -21 9 -40 9
-19 0 -34 5 -34 10 0 6 -18 10 -40 10 -22 0 -40 5 -40 10 0 6 -16 10 -35 10
-19 0 -35 5 -35 10 0 6 -11 10 -25 10 -14 0 -42 7 -62 15 -19 8 -48 15 -64 15
-16 0 -29 5 -29 10 0 6 -20 10 -45 10 -25 0 -45 4 -45 9 0 5 -21 11 -47 14
-27 2 -75 12 -108 22 -33 9 -84 19 -112 22 -29 3 -53 9 -53 14 0 5 -25 9 -55
9 -30 0 -55 4 -55 9 0 5 -26 11 -57 14 -32 3 -92 13 -133 22 -41 9 -105 19
-142 22 -38 3 -68 9 -68 14 0 5 -36 9 -80 9 -44 0 -80 4 -80 9 0 5 -35 12 -77
14 -98 6 -268 24 -355 37 -97 15 -328 12 -438 -5 -52 -8 -114 -15 -137 -15
-24 0 -43 -4 -43 -10 0 -5 -25 -10 -55 -10 -30 0 -55 -4 -55 -10 0 -6 -63 -10
-170 -10 -107 0 -170 4 -170 10 0 6 -18 10 -39 10 -22 0 -42 4 -45 9 -3 5 -22
12 -41 15 -19 4 -35 11 -35 16 0 6 -9 10 -20 10 -11 0 -20 5 -20 10 0 6 -16
10 -35 10 -19 0 -35 5 -35 10 0 6 -43 10 -110 10 -67 0 -110 -4 -110 -10 0 -5
-16 -10 -35 -10 -19 0 -35 -4 -35 -8 0 -5 -22 -21 -49 -35 -43 -24 -60 -27
-140 -27 -75 0 -100 4 -147 25 -31 14 -65 25 -75 25 -11 0 -19 5 -19 10 0 6
-20 10 -45 10 -25 0 -45 5 -45 10 0 6 -17 10 -38 10 -21 0 -42 4 -48 9 -5 5
-29 11 -54 14 -25 3 -67 10 -95 16 -51 11 -473 22 -575 15z m1150 -1074 c0
-16 -3 -30 -8 -30 -4 0 -14 -15 -21 -32 -8 -18 -21 -39 -28 -46 -7 -7 -13 -20
-13 -28 0 -8 -4 -14 -10 -14 -5 0 -10 -9 -10 -20 0 -11 -3 -20 -8 -20 -4 0
-16 -20 -27 -45 -11 -25 -23 -45 -27 -45 -5 0 -8 -9 -8 -20 0 -11 -4 -20 -10
-20 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -11 -10 -25 0 -14 -3
-25 -8 -25 -8 0 -30 -59 -39 -102 -3 -16 -9 -28 -14 -28 -5 0 -9 -16 -9 -35 0
-19 -4 -35 -10 -35 -5 0 -10 -16 -10 -35 0 -19 -3 -35 -8 -35 -7 0 -23 -65
-44 -180 -5 -30 -12 -92 -15 -137 -2 -46 -9 -83 -14 -83 -5 0 -9 -55 -9 -125
0 -116 1 -125 19 -125 10 0 24 7 31 15 7 8 18 15 24 15 6 0 18 9 26 20 8 11
19 20 25 20 6 0 28 16 48 35 20 19 44 35 52 35 8 0 15 5 15 10 0 6 5 10 10 10
6 0 22 10 35 23 36 33 53 47 60 47 3 0 11 5 18 10 57 48 74 60 87 60 9 0 22 9
30 20 8 11 25 20 37 20 13 0 23 4 23 8 0 11 66 42 90 42 11 0 20 5 20 10 0 6
28 10 65 10 36 0 65 -3 65 -7 0 -10 -100 -63 -118 -63 -6 0 -12 -4 -12 -10 0
-5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -6 -10 -14 -10 -7 0 -22 -11 -32
-25 -10 -14 -27 -25 -36 -25 -10 0 -18 -4 -18 -10 0 -5 -5 -10 -11 -10 -14 0
-39 -25 -39 -39 0 -6 -4 -11 -9 -11 -10 0 -171 -156 -171 -165 0 -3 -15 -21
-32 -40 -45 -47 -58 -63 -58 -72 0 -5 -9 -15 -20 -23 -11 -8 -20 -22 -20 -31
0 -9 -7 -22 -15 -29 -8 -7 -15 -19 -15 -26 0 -8 -4 -14 -10 -14 -5 0 -10 -16
-10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -6 0
-10 -50 -10 -130 0 -80 4 -130 10 -130 6 0 10 -25 10 -55 0 -30 4 -55 9 -55 5
0 12 -37 14 -82 3 -46 9 -101 14 -123 17 -74 37 -135 45 -135 4 0 8 -16 8 -35
0 -19 5 -35 10 -35 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0
-14 4 -25 9 -25 5 0 12 -13 16 -30 4 -16 11 -32 16 -35 5 -4 9 -15 9 -26 0
-10 5 -19 10 -19 6 0 10 -9 10 -20 0 -11 4 -20 9 -20 5 0 12 -11 15 -25 4 -14
11 -25 16 -25 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -9 10 -20 0 -11 5
-20 10 -20 6 0 10 -9 10 -20 0 -11 4 -20 8 -20 4 0 16 -15 27 -32 10 -18 27
-40 37 -49 10 -9 18 -19 18 -23 0 -7 13 -24 48 -61 12 -13 22 -27 22 -30 0 -6
18 -27 78 -90 17 -19 32 -39 32 -45 0 -5 4 -10 9 -10 5 0 27 -16 48 -35 68
-63 82 -75 88 -75 3 0 17 -10 30 -22 38 -36 54 -48 62 -48 5 0 15 -9 23 -20 8
-11 22 -20 32 -20 10 0 18 -5 18 -10 0 -6 16 -18 35 -27 19 -9 35 -20 35 -25
0 -4 11 -8 25 -8 14 0 25 -4 25 -9 0 -5 20 -17 45 -28 25 -10 45 -21 45 -25 0
-5 9 -8 20 -8 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -3 25 -8 0 -8 59
-30 103 -39 15 -3 27 -9 27 -14 0 -5 16 -9 35 -9 19 0 35 -4 35 -10 0 -5 16
-10 35 -10 19 0 35 -4 35 -9 0 -5 17 -11 38 -14 20 -2 62 -14 92 -26 30 -11
61 -21 68 -21 13 0 42 -23 42 -34 0 -3 -40 -6 -90 -6 -53 0 -90 4 -90 10 0 6
-28 10 -65 10 -37 0 -65 4 -65 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6
-13 10 -30 10 -16 0 -44 6 -62 14 -55 23 -103 36 -131 36 -15 0 -27 5 -27 10
0 6 -17 10 -38 10 -21 0 -42 4 -48 9 -10 10 -48 16 -231 34 -67 7 -125 15
-129 20 -4 4 -20 7 -36 7 -15 0 -28 5 -28 10 0 6 -11 10 -25 10 -14 0 -25 5
-25 10 0 6 -6 10 -12 10 -16 0 -122 53 -126 63 -2 4 -12 7 -22 7 -10 0 -20 3
-22 8 -4 10 -86 62 -98 62 -5 0 -10 4 -10 8 0 4 -15 16 -32 27 -18 10 -45 31
-60 47 -14 15 -29 28 -32 28 -18 0 -166 150 -166 167 0 5 -11 17 -25 27 -14
10 -25 25 -25 32 0 8 -4 14 -10 14 -5 0 -10 7 -10 15 0 8 -4 15 -10 15 -5 0
-10 5 -10 10 0 12 -52 94 -62 98 -5 2 -8 12 -8 23 0 10 -4 19 -10 19 -5 0 -10
7 -10 15 0 8 -3 15 -8 15 -4 0 -12 9 -17 19 -6 11 -18 35 -29 55 -10 20 -22
36 -27 36 -5 0 -9 9 -9 20 0 11 -4 20 -10 20 -5 0 -10 6 -10 13 0 8 -11 27
-25 43 -14 16 -25 37 -25 47 0 9 -4 17 -10 17 -5 0 -10 9 -10 20 0 11 -4 20
-10 20 -5 0 -10 7 -10 15 0 8 -3 15 -7 15 -11 0 -43 58 -43 76 0 8 -4 14 -10
14 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 6 -10 14 0 7 -7 19 -15 26
-8 7 -15 21 -15 31 0 11 -4 19 -10 19 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5
0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 8 -10 18 0 9 -7 26 -15 36 -8 11
-15 28 -15 38 0 10 -4 18 -10 18 -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0
-10 16 -10 35 0 19 -4 35 -9 35 -5 0 -11 17 -14 38 -6 43 -24 123 -38 168 -12
40 -12 488 0 528 10 32 28 124 38 189 3 20 9 37 14 37 5 0 9 16 9 35 0 19 5
35 10 35 6 0 10 14 10 30 0 17 11 53 25 82 14 28 25 60 25 70 0 10 5 18 10 18
6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 14 10 30 0 17 4 30 8 30 4 0 16 23 27
50 11 28 23 50 27 50 4 0 8 12 8 26 0 15 10 35 23 46 31 28 78 51 85 42 4 -4
1 -9 -5 -11 -7 -3 -13 -13 -13 -24 0 -10 -4 -19 -10 -19 -5 0 -10 -8 -10 -18
0 -10 -11 -42 -25 -70 -14 -29 -25 -61 -25 -72 0 -11 -4 -20 -10 -20 -5 0 -10
-11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -13 -10 -29 0 -16 -3 -31 -7 -33
-12 -5 -43 -102 -43 -132 0 -14 -4 -26 -10 -26 -5 0 -10 -25 -10 -55 0 -30 -4
-55 -9 -55 -5 0 -11 -21 -14 -47 -2 -27 -14 -111 -26 -188 -26 -174 -26 -315
0 -470 11 -66 23 -141 26 -167 3 -27 9 -48 14 -48 5 0 9 -16 9 -35 0 -19 5
-35 10 -35 6 0 10 -8 10 -18 0 -10 11 -42 25 -70 14 -29 25 -61 25 -72 0 -11
5 -20 10 -20 6 0 10 -9 10 -20 0 -11 3 -20 8 -20 4 0 15 -20 25 -45 11 -25 23
-45 28 -45 5 0 9 -7 9 -15 0 -8 5 -15 10 -15 6 0 10 -9 10 -20 0 -11 5 -20 10
-20 6 0 10 -9 10 -20 0 -11 4 -20 10 -20 5 0 12 -11 16 -25 3 -14 10 -25 15
-25 5 0 9 -9 9 -20 0 -11 5 -20 10 -20 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6
0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -6 10 -14 0 -18 32 -76 43 -76 4 0 7
-9 7 -19 0 -11 3 -21 8 -23 4 -1 20 -29 36 -60 16 -32 32 -58 37 -58 5 0 9 -9
9 -20 0 -11 5 -20 10 -20 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10
-15 0 -8 4 -15 10 -15 5 0 12 -11 16 -25 3 -14 10 -25 15 -25 5 0 9 -8 9 -18
0 -10 9 -24 20 -32 11 -8 20 -19 20 -26 0 -13 144 -164 156 -164 5 0 30 -20
56 -45 27 -25 55 -45 63 -45 8 0 15 -4 15 -10 0 -5 5 -10 10 -10 10 0 22 -8
55 -37 7 -7 21 -13 29 -13 9 0 16 -4 16 -10 0 -5 7 -10 15 -10 8 0 15 -4 15
-10 0 -5 8 -10 18 -10 9 0 26 -7 36 -15 11 -8 28 -15 38 -15 10 0 18 -4 18
-10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 14 -10 30 -10 17 0 30 -4 30
-10 0 -5 9 -10 20 -10 10 0 34 -6 52 -14 91 -39 160 -45 110 -10 -13 9 -34 27
-47 40 -13 13 -28 24 -32 24 -4 0 -21 16 -38 35 -16 19 -33 35 -38 35 -4 0
-32 25 -62 55 -29 30 -57 55 -60 55 -8 0 -35 27 -35 35 0 8 -47 55 -55 55 -8
0 -35 27 -35 35 0 3 -20 26 -45 51 -25 24 -45 46 -45 49 0 3 -20 25 -45 49
-25 25 -45 47 -45 50 0 3 -30 37 -67 76 -88 90 -113 118 -113 125 0 3 -25 30
-55 60 -30 29 -55 57 -55 62 0 5 -36 46 -80 92 -44 45 -80 89 -80 96 0 7 -4
15 -8 17 -15 6 -62 119 -62 148 0 17 -4 30 -10 30 -6 0 -10 37 -10 90 0 53 -4
90 -10 90 -6 0 -10 48 -10 125 0 77 4 125 10 125 6 0 10 37 10 90 0 53 4 90
10 90 6 0 10 19 10 43 0 43 26 169 41 199 5 10 9 36 9 58 0 22 5 40 10 40 6 0
10 25 10 55 0 30 5 55 10 55 6 0 10 17 10 38 0 20 5 53 11 72 13 44 29 137 36
213 2 31 8 57 13 57 4 0 10 21 13 48 7 62 16 100 33 139 8 17 14 43 14 57 0
14 5 26 10 26 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 14 10 30 0 17 3 30 8
30 4 0 15 20 25 45 11 25 23 45 28 45 5 0 9 11 9 25 0 14 5 25 10 25 6 0 10 9
10 20 0 11 5 20 10 20 6 0 10 6 10 14 0 7 7 19 15 26 8 7 15 21 15 31 0 11 5
19 10 19 6 0 10 7 10 15 0 8 5 15 10 15 6 0 10 9 10 20 0 11 4 20 9 20 5 0 12
8 16 19 8 27 90 111 108 111 9 0 19 5 22 10 12 20 25 9 25 -20z m4200 -873 c0
-8 -9 -24 -20 -37 -11 -12 -22 -31 -25 -41 -4 -11 -11 -19 -16 -19 -5 0 -9 -5
-9 -11 0 -6 -6 -16 -12 -24 -7 -7 -22 -25 -33 -41 -36 -51 -233 -244 -249
-244 -9 0 -16 -4 -16 -8 0 -5 -11 -15 -25 -22 -14 -7 -25 -19 -25 -27 0 -7 -9
-13 -20 -13 -11 0 -20 -4 -20 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0
-5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -6 -10 -14 -10 -7 0 -19 -7 -26
-15 -7 -8 -21 -15 -31 -15 -11 0 -19 -4 -19 -10 0 -5 -9 -10 -20 -10 -11 0
-20 -4 -20 -10 0 -5 -11 -10 -24 -10 -13 0 -26 -3 -28 -7 -4 -11 -75 -43 -93
-43 -8 0 -15 -4 -15 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4 -25 -10 0 -5 -15
-10 -34 -10 -19 0 -36 -3 -38 -7 -4 -11 -101 -43 -127 -43 -11 0 -21 -4 -21
-10 0 -5 -20 -10 -45 -10 -25 0 -45 -4 -45 -9 0 -5 -21 -11 -47 -14 -27 -3
-91 -13 -143 -23 -73 -14 -145 -18 -313 -19 -167 0 -217 -3 -217 -12 0 -7 7
-13 15 -13 8 0 15 -4 15 -10 0 -5 5 -10 11 -10 7 0 26 -16 45 -35 18 -19 36
-35 41 -35 5 0 15 -9 23 -20 8 -11 21 -20 29 -20 7 0 24 -11 37 -25 13 -14 30
-25 39 -25 8 0 15 -4 15 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 13
-10 29 -10 16 0 42 -7 57 -15 16 -8 37 -15 47 -15 9 0 17 -4 17 -10 0 -5 11
-10 25 -10 14 0 25 -4 25 -10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 11
-10 25 -10 14 0 25 -4 25 -9 0 -5 16 -12 35 -15 19 -4 35 -11 35 -16 0 -6 11
-10 25 -10 14 0 25 -4 25 -10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 16
-10 35 -10 19 0 35 -4 35 -9 0 -5 18 -12 40 -16 22 -4 42 -11 46 -16 3 -5 21
-9 40 -9 19 0 34 -4 34 -10 0 -5 18 -10 40 -10 22 0 40 -4 40 -9 0 -5 17 -11
38 -14 58 -8 136 -28 146 -38 6 -5 27 -9 48 -9 21 0 38 -4 38 -10 0 -5 20 -10
45 -10 25 0 45 -4 45 -10 0 -5 20 -10 45 -10 25 0 45 -4 45 -9 0 -5 17 -11 38
-13 46 -6 131 -27 154 -39 10 -5 31 -9 48 -9 16 0 30 -4 30 -10 0 -5 16 -10
35 -10 19 0 35 -5 35 -11 0 -7 -52 -9 -172 -5 -227 8 -328 16 -328 26 0 4 -26
10 -57 13 -74 6 -113 15 -259 58 -17 5 -42 9 -57 9 -15 0 -27 5 -27 10 0 6
-16 10 -35 10 -19 0 -35 5 -35 10 0 6 -13 10 -29 10 -17 0 -32 4 -35 9 -4 5
-24 12 -46 16 -22 4 -40 11 -40 16 0 5 -16 9 -35 9 -19 0 -35 5 -35 10 0 6
-13 10 -30 10 -16 0 -30 5 -30 10 0 6 -11 10 -24 10 -14 0 -28 5 -31 10 -6 10
-45 14 -45 4 0 -7 27 -34 35 -34 3 0 26 -20 49 -45 24 -25 49 -45 56 -45 6 0
31 -20 56 -45 24 -25 48 -45 54 -45 6 0 17 -6 24 -12 7 -7 25 -22 40 -33 16
-11 34 -26 41 -32 8 -7 18 -13 24 -13 6 0 11 -4 11 -10 0 -5 7 -10 15 -10 9 0
28 -11 43 -25 15 -14 32 -25 39 -25 7 0 13 -4 13 -10 0 -5 9 -10 20 -10 11 0
20 -4 20 -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 9 -10 20 -10 11 0 20
-3 20 -7 0 -11 58 -43 76 -43 8 0 14 -4 14 -10 0 -5 9 -10 19 -10 11 0 21 -3
23 -7 6 -14 113 -63 136 -63 12 0 22 -4 22 -10 0 -5 9 -10 19 -10 11 0 23 -4
26 -10 3 -5 15 -10 25 -10 10 0 20 -3 22 -7 4 -10 100 -43 122 -43 9 0 16 -4
16 -10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 16 -10 35 -10 19 0 35 -4
35 -9 0 -6 20 -13 45 -17 25 -3 45 -10 45 -15 0 -5 16 -9 35 -9 19 0 35 -4 35
-10 0 -5 25 -10 55 -10 30 0 55 -4 55 -10 0 -5 20 -10 45 -10 51 0 61 -19 20
-38 -30 -14 -245 -16 -245 -3 0 5 -20 12 -45 15 -25 4 -45 11 -45 17 0 5 -16
9 -35 9 -19 0 -35 5 -35 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -10 10
-22 10 -24 1 -124 33 -135 44 -3 3 -19 6 -35 6 -15 0 -28 5 -28 10 0 6 -16 10
-35 10 -19 0 -35 5 -35 10 0 6 -13 10 -29 10 -17 0 -32 4 -35 9 -4 5 -24 12
-46 16 -22 4 -42 11 -46 16 -3 5 -14 9 -25 9 -10 0 -19 5 -19 10 0 6 -9 10
-20 10 -11 0 -20 5 -20 10 0 6 -5 10 -10 10 -6 0 -22 10 -35 23 -40 37 -54 47
-65 47 -5 0 -10 4 -10 9 0 5 -9 12 -20 16 -11 3 -33 19 -49 36 -16 16 -34 29
-40 29 -6 0 -25 14 -43 30 -17 17 -35 30 -39 30 -4 0 -19 10 -31 23 -13 13
-38 30 -56 38 -17 7 -32 20 -32 26 0 7 -7 13 -15 13 -8 0 -15 5 -15 10 0 6 -7
10 -15 10 -8 0 -32 16 -52 35 -20 19 -42 35 -48 35 -6 0 -17 9 -25 20 -8 11
-20 20 -28 20 -7 0 -19 6 -26 13 -7 6 -25 21 -40 32 -16 11 -34 26 -41 33 -8
6 -16 12 -20 12 -3 0 -17 10 -30 23 -38 35 -54 47 -62 47 -5 0 -15 9 -23 20
-8 11 -21 20 -29 20 -7 0 -24 11 -37 25 -13 14 -29 25 -36 25 -8 0 -20 9 -28
20 -8 11 -18 20 -23 20 -8 0 -24 12 -62 48 -13 12 -27 22 -30 22 -4 0 -12 6
-20 13 -7 6 -25 21 -41 32 -15 11 -33 26 -40 33 -7 6 -17 12 -23 12 -6 0 -28
16 -48 35 -20 19 -41 35 -46 35 -4 0 -18 10 -31 23 -12 12 -35 31 -50 42 -16
11 -39 30 -52 43 -13 12 -26 22 -29 22 -3 0 -17 10 -30 23 -36 33 -53 47 -60
47 -3 0 -26 20 -51 45 -24 25 -48 45 -54 45 -18 0 -220 211 -220 230 0 16 6
17 43 13 23 -4 44 -10 45 -14 2 -5 15 -9 28 -9 13 0 24 -4 24 -10 0 -5 9 -10
20 -10 11 0 20 -4 20 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -9 0 -5 26 -21 58
-37 31 -16 59 -32 60 -36 2 -5 12 -8 23 -8 10 0 19 -3 19 -7 0 -5 20 -17 45
-28 25 -11 45 -23 45 -27 0 -5 11 -8 25 -8 14 0 25 -4 25 -10 0 -5 9 -10 19
-10 11 0 21 -3 23 -7 5 -13 117 -63 138 -63 11 0 20 -4 20 -10 0 -5 14 -10 30
-10 17 0 30 -4 30 -9 0 -15 145 -34 209 -27 34 3 89 9 124 12 34 3 66 10 72
15 5 5 37 9 72 9 35 0 63 4 63 9 0 5 21 11 48 14 83 9 173 32 224 58 10 5 29
9 43 9 14 0 25 5 25 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 8 10 18 10 10 0
27 7 38 15 10 8 27 15 37 15 9 0 17 5 17 10 0 6 11 10 25 10 14 0 25 5 25 10
0 6 7 10 17 10 18 0 146 69 151 82 2 4 12 8 23 8 11 0 25 5 32 10 57 48 74 60
87 60 9 0 22 9 30 20 8 11 18 20 23 20 8 0 24 12 62 48 13 12 27 22 30 22 3 0
17 10 30 23 62 57 75 67 80 67 8 0 35 27 35 35 0 8 47 55 55 55 3 0 21 16 41
35 36 36 64 45 64 22z m-3395 -82 c14 -13 25 -27 25 -30 0 -4 20 -27 45 -52
25 -24 45 -51 45 -59 0 -8 7 -14 15 -14 8 0 15 -4 15 -9 0 -5 65 -75 145 -156
80 -81 145 -150 145 -155 0 -5 29 -38 65 -75 36 -36 65 -71 65 -76 0 -6 6 -16
13 -23 6 -7 21 -25 32 -40 11 -16 26 -34 33 -41 6 -8 12 -18 12 -24 0 -6 5
-11 10 -11 6 0 10 -9 10 -20 0 -11 4 -20 8 -20 5 0 17 -16 28 -35 10 -19 22
-35 26 -35 5 0 8 -11 8 -25 0 -14 4 -25 9 -25 9 0 18 -41 27 -120 10 -89 10
-89 64 -96 28 -4 50 -10 50 -15 0 -5 5 -9 10 -9 11 0 60 -45 60 -55 0 -3 10
-17 23 -30 33 -36 47 -53 47 -60 0 -7 14 -24 48 -60 12 -13 22 -27 22 -30 0
-7 138 -145 146 -145 2 0 16 -10 29 -22 40 -38 54 -48 65 -48 5 0 10 -4 10 -9
0 -5 14 -14 30 -21 17 -7 30 -15 30 -19 0 -4 16 -15 35 -25 19 -11 35 -23 35
-28 0 -4 11 -8 25 -8 14 0 25 -4 25 -10 0 -5 7 -10 16 -10 8 0 22 -7 30 -15 9
-8 24 -15 35 -15 10 0 19 -4 19 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0
-5 16 -10 35 -10 19 0 35 -3 35 -7 0 -5 30 -17 66 -28 36 -11 68 -23 70 -27 3
-5 18 -8 35 -8 16 0 29 -4 29 -10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5
9 -10 20 -10 11 0 45 -11 76 -25 31 -14 65 -25 75 -25 11 0 19 -4 19 -10 0 -6
-45 -10 -115 -10 -70 0 -115 4 -115 10 0 6 -13 10 -29 10 -16 0 -42 7 -57 15
-16 8 -37 15 -46 15 -9 0 -20 5 -23 10 -3 6 -19 10 -36 10 -16 0 -29 5 -29 10
0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -7 10 -15 10 -15 0 -23 3 -83 33
-19 9 -40 17 -48 17 -8 0 -14 5 -14 10 0 6 -9 10 -20 10 -11 0 -20 5 -20 10 0
6 -9 10 -20 10 -12 0 -28 6 -36 13 -8 6 -20 17 -27 22 -7 6 -25 17 -42 25 -16
8 -36 21 -43 28 -7 6 -17 12 -21 12 -7 0 -59 37 -98 70 -7 5 -15 10 -18 10 -3
0 -17 10 -30 23 -62 57 -75 67 -80 67 -8 0 -35 27 -35 35 0 8 -27 35 -35 35
-8 0 -55 47 -55 55 0 9 -48 55 -58 55 -5 0 -15 11 -22 25 -7 14 -17 25 -22 25
-4 0 -8 7 -8 16 0 18 -23 44 -39 44 -6 0 -11 6 -11 13 0 7 -9 19 -20 27 -11 8
-20 20 -20 28 0 7 -16 28 -35 46 -19 19 -35 40 -35 47 0 8 -9 21 -20 29 -11 8
-20 18 -20 23 0 7 -9 20 -37 52 -7 7 -13 16 -13 19 0 6 -31 44 -57 72 -7 7
-13 17 -13 23 0 6 -4 11 -10 11 -5 0 -10 8 -10 18 0 10 -9 24 -20 32 -11 8
-20 19 -20 25 0 6 -16 28 -35 48 -19 20 -35 44 -35 52 0 8 -4 15 -10 15 -5 0
-10 5 -10 11 0 6 -6 17 -12 24 -29 32 -38 45 -38 52 0 5 -9 15 -20 23 -11 8
-20 20 -20 28 0 7 -11 23 -25 36 -14 13 -25 30 -25 37 0 8 -9 21 -20 29 -11 8
-20 19 -20 25 0 6 -11 22 -25 37 -14 15 -25 32 -25 38 0 5 -4 10 -10 10 -5 0
-10 7 -10 15 0 9 -10 27 -22 40 -36 38 -48 54 -48 62 0 5 -9 15 -20 23 -11 8
-20 22 -20 32 0 10 -4 18 -10 18 -5 0 -17 15 -26 33 -9 17 -25 39 -35 48 -11
9 -19 21 -19 28 0 6 -4 11 -10 11 -5 0 -10 5 -10 10 0 6 18 10 40 10 30 0 47
-7 65 -25z m-2625 -165 c0 -22 -4 -40 -10 -40 -5 0 -10 -20 -10 -45 0 -25 -4
-45 -9 -45 -5 0 -11 -21 -14 -47 -3 -27 -13 -79 -22 -118 -9 -38 -19 -91 -22
-117 -3 -27 -9 -48 -14 -48 -5 0 -9 -27 -9 -60 0 -33 -4 -60 -10 -60 -6 0 -10
-43 -10 -110 0 -67 4 -110 10 -110 6 0 10 -25 10 -55 0 -30 5 -55 10 -55 6 0
10 -8 10 -18 0 -10 11 -42 25 -70 14 -29 25 -61 25 -72 0 -11 5 -20 10 -20 6
0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 4 -25 8 -25 5 0
17 -20 28 -45 10 -25 22 -45 26 -45 4 0 8 -9 8 -20 0 -11 5 -20 10 -20 6 0 10
-6 10 -14 0 -18 32 -76 43 -76 4 0 7 -7 7 -15 0 -8 5 -15 10 -15 6 0 10 -9 10
-20 0 -11 4 -20 8 -20 4 0 16 -15 27 -32 10 -18 27 -40 37 -49 10 -9 18 -24
18 -33 0 -9 5 -16 10 -16 6 0 10 -5 10 -11 0 -6 16 -26 35 -45 19 -18 35 -38
35 -44 0 -5 5 -10 10 -10 6 0 10 -5 10 -11 0 -11 25 -39 35 -39 8 0 35 -27 35
-35 0 -8 47 -55 55 -55 8 0 35 -27 35 -35 0 -11 28 -35 40 -35 11 0 90 -74 90
-85 0 -8 -58 -6 -62 3 -1 4 -19 15 -38 24 -49 25 -72 40 -91 61 -9 9 -21 17
-27 17 -15 0 -232 218 -232 233 0 7 -9 19 -20 27 -11 8 -20 18 -20 23 0 5 -6
14 -12 21 -37 38 -58 68 -58 81 0 8 -4 15 -10 15 -5 0 -10 7 -10 15 0 8 -3 15
-8 15 -4 0 -12 9 -17 19 -6 11 -18 35 -29 55 -10 20 -22 36 -27 36 -5 0 -9 11
-9 25 0 14 -4 25 -10 25 -5 0 -10 9 -10 20 0 11 -4 20 -8 20 -5 0 -17 20 -28
45 -10 25 -22 45 -26 45 -4 0 -8 16 -8 35 0 19 -4 35 -10 35 -5 0 -10 7 -10
15 0 8 -4 23 -9 33 -26 52 -41 96 -41 122 0 17 -4 30 -10 30 -6 0 -10 82 -10
225 0 143 4 225 10 225 6 0 10 21 10 48 0 26 11 79 25 117 13 39 25 78 25 88
0 9 5 17 10 17 6 0 10 14 10 30 0 17 5 30 10 30 6 0 10 11 10 25 0 14 4 25 10
25 5 0 12 11 16 25 3 14 10 25 15 25 5 0 9 9 9 20 0 11 5 20 10 20 6 0 10 7
10 15 0 8 5 15 10 15 6 0 10 -18 10 -40z m-536 -630 c3 -80 9 -163 15 -185 6
-22 11 -61 11 -87 0 -27 5 -48 10 -48 6 0 10 -30 10 -70 0 -40 4 -70 10 -70 6
0 10 -25 10 -55 0 -30 5 -55 10 -55 6 0 10 -14 10 -31 0 -17 7 -45 16 -62 31
-60 34 -67 34 -87 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0
10 -7 10 -15 0 -15 6 -25 38 -60 6 -7 12 -18 12 -24 0 -6 5 -11 10 -11 6 0 10
-6 10 -14 0 -8 16 -31 35 -52 19 -20 35 -41 35 -45 0 -5 5 -9 10 -9 6 0 10 -5
10 -11 0 -7 16 -26 35 -45 19 -18 35 -37 35 -43 0 -6 5 -11 10 -11 6 0 10 -5
10 -10 0 -12 113 -120 125 -120 3 0 17 -11 31 -25 14 -14 28 -25 33 -25 11 0
121 -109 121 -120 0 -6 5 -10 11 -10 16 0 39 -26 39 -44 0 -9 5 -16 10 -16 6
0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -9 10 -20 0 -11 -4 -20 -8 -20 -4 0
-14 9 -22 20 -8 11 -20 20 -27 20 -8 0 -29 16 -47 35 -19 19 -37 35 -40 35 -7
0 -49 35 -92 78 -18 17 -36 32 -39 32 -10 0 -35 28 -35 39 0 6 -5 11 -10 11
-11 0 -26 13 -95 78 -19 17 -37 32 -40 32 -8 0 -35 27 -35 35 0 10 -48 55 -60
55 -5 0 -10 4 -10 8 0 5 -8 17 -17 28 -10 10 -24 31 -32 47 -8 15 -20 27 -28
27 -7 0 -13 7 -13 15 0 8 -4 15 -10 15 -5 0 -10 7 -10 16 0 9 -8 24 -19 33
-10 9 -21 26 -25 39 -4 12 -12 22 -17 22 -5 0 -9 9 -9 20 0 11 -4 20 -10 20
-5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5
0 -10 8 -10 18 0 9 -7 26 -15 36 -8 11 -15 28 -15 38 0 10 -4 18 -10 18 -5 0
-10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 20 -10 44 0 24 -3 46 -8 48 -4 2
-15 50 -25 108 -22 135 -24 367 -2 396 8 10 15 27 15 37 0 9 5 17 10 17 6 0
10 5 10 10 0 14 23 40 32 37 4 -1 10 -67 12 -147z m606 95 c0 -19 5 -35 10
-35 6 0 10 -15 10 -34 0 -19 3 -36 8 -38 9 -4 42 -100 42 -122 0 -9 5 -16 10
-16 6 0 10 -13 10 -30 0 -16 5 -30 10 -30 6 0 10 -16 10 -35 0 -19 5 -35 10
-35 6 0 10 -7 10 -16 0 -9 7 -30 16 -47 32 -60 34 -67 34 -92 0 -14 5 -25 10
-25 6 0 10 -9 10 -19 0 -11 5 -23 10 -26 6 -3 10 -13 10 -21 0 -9 7 -22 15
-30 8 -9 15 -24 15 -35 0 -10 5 -19 10 -19 6 0 10 -11 10 -25 0 -14 5 -25 10
-25 6 0 10 -9 10 -20 0 -11 4 -20 9 -20 5 0 12 -11 15 -25 4 -14 11 -25 16
-25 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 5 -15 10 -15
6 0 10 -9 10 -20 0 -11 4 -20 9 -20 5 0 12 -11 15 -25 4 -14 11 -25 16 -25 6
0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10
-7 10 -15 0 -9 11 -28 25 -43 14 -15 25 -31 25 -37 0 -6 9 -17 20 -25 11 -8
20 -20 20 -26 0 -7 16 -29 35 -48 19 -20 35 -43 35 -51 0 -8 5 -15 10 -15 6 0
10 -6 10 -14 0 -8 6 -16 13 -19 6 -2 9 -8 5 -12 -7 -7 -218 199 -218 214 0 4
-10 19 -22 33 -13 13 -29 36 -37 51 -8 15 -18 27 -23 27 -4 0 -8 7 -8 15 0 8
-3 15 -8 15 -4 0 -12 9 -17 19 -6 11 -18 35 -29 55 -10 20 -22 36 -27 36 -5 0
-9 11 -9 25 0 14 -4 25 -9 25 -5 0 -17 20 -28 45 -10 25 -21 45 -25 45 -5 0
-8 9 -8 20 0 11 -4 20 -10 20 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10
7 -10 16 0 8 -7 22 -15 30 -8 9 -15 26 -15 40 0 13 -4 24 -10 24 -5 0 -10 9
-10 20 0 11 -4 20 -10 20 -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 9
-10 20 0 10 -6 34 -14 52 -21 52 -36 102 -36 126 0 12 -4 22 -10 22 -6 0 -10
28 -10 65 0 37 -4 65 -10 65 -6 0 -10 32 -10 75 0 43 4 75 10 75 6 0 10 -16
10 -35z m-1439 -247 c0 -95 5 -213 10 -263 5 -49 12 -129 16 -177 3 -49 9 -88
14 -88 5 0 9 -29 9 -65 0 -37 4 -65 10 -65 6 0 10 -18 10 -40 0 -22 -4 -40
-10 -40 -5 0 -10 16 -10 35 0 19 -3 35 -7 35 -5 0 -16 28 -26 63 -10 34 -23
70 -28 79 -5 10 -9 36 -9 58 0 22 -4 40 -9 40 -14 0 -23 115 -23 300 0 235 9
299 45 300 4 0 7 -78 8 -172z m249 32 c0 -49 4 -90 9 -90 5 0 11 -30 14 -67 5
-84 28 -203 39 -203 4 0 8 -16 8 -35 0 -19 5 -35 10 -35 6 0 10 -13 10 -30 0
-16 5 -30 10 -30 6 0 10 -11 10 -25 0 -14 4 -25 10 -25 5 0 12 -11 16 -25 3
-14 10 -25 15 -25 5 0 9 -9 9 -20 0 -11 5 -20 10 -20 6 0 10 -9 10 -20 0 -11
5 -20 10 -20 6 0 10 -5 10 -10 0 -11 10 -25 48 -65 12 -13 22 -27 22 -30 0 -4
65 -72 145 -152 80 -79 145 -150 145 -157 0 -7 11 -19 25 -26 14 -7 25 -17 25
-21 0 -4 25 -33 55 -64 30 -31 55 -58 55 -60 0 -3 -11 -5 -25 -5 -14 0 -25 5
-25 10 0 6 -6 10 -14 10 -18 0 -76 32 -76 43 0 4 -9 7 -20 7 -11 0 -20 5 -20
10 0 6 -5 10 -10 10 -19 0 -240 216 -240 234 0 3 -20 27 -45 53 -25 25 -45 50
-45 55 0 5 -10 19 -22 32 -13 12 -34 39 -48 59 -14 20 -28 37 -32 37 -5 0 -8
11 -8 25 0 14 -4 25 -10 25 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -12 16
-16 35 -3 19 -10 35 -15 35 -5 0 -9 16 -9 35 0 19 -4 35 -10 35 -5 0 -10 22
-10 49 0 27 -4 51 -10 53 -6 2 -13 94 -17 231 -6 207 -5 227 10 227 15 0 17
-13 17 -90z m-427 -55 c-8 -72 -17 -172 -20 -222 -3 -51 -9 -93 -14 -93 -5 0
-9 -54 -9 -120 0 -73 -4 -120 -10 -120 -6 0 -10 -43 -10 -110 0 -67 4 -110 10
-110 6 0 10 -28 10 -65 0 -37 4 -65 10 -65 6 0 10 -18 10 -40 0 -22 3 -40 8
-40 8 0 30 -59 39 -102 3 -16 9 -28 14 -28 5 0 9 -9 9 -20 0 -11 4 -20 9 -20
5 0 11 -10 15 -23 5 -21 14 -35 56 -84 5 -7 10 -17 10 -23 0 -5 5 -10 10 -10
6 0 10 -4 10 -10 0 -12 28 -45 93 -112 53 -55 60 -78 22 -78 -14 0 -25 5 -25
10 0 6 -7 10 -15 10 -15 0 -74 58 -75 73 0 4 -24 31 -53 60 -28 29 -65 70 -82
92 -16 22 -36 47 -45 55 -8 8 -22 29 -30 45 -8 17 -18 32 -21 35 -17 14 -39
78 -39 111 0 20 -5 39 -11 41 -15 5 -16 691 -1 696 7 2 12 25 12 57 0 30 5 57
10 60 6 3 10 19 10 34 0 15 7 36 15 47 8 10 15 31 15 47 0 15 5 27 10 27 6 0
10 11 10 25 0 14 5 25 10 25 6 0 10 9 10 20 0 11 4 20 9 20 5 0 13 9 16 21 14
42 13 10 -2 -116z m5387 -275 c0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9
-10 20 -10 11 0 20 -3 20 -8 0 -4 16 -16 35 -26 19 -11 35 -23 35 -28 0 -4 9
-8 20 -8 11 0 20 -3 20 -8 0 -4 15 -14 33 -21 17 -8 38 -21 45 -28 7 -7 20
-13 28 -13 8 0 14 -4 14 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 16 -10
35 -10 19 0 35 -4 35 -10 0 -5 8 -10 18 -10 10 0 27 -7 38 -15 10 -8 27 -15
37 -15 9 0 17 -4 17 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 14 -10 30
-10 17 0 30 -4 30 -10 0 -5 8 -10 18 -10 9 0 26 -7 36 -15 11 -8 28 -15 38
-15 10 0 18 -4 18 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 11 -10 25
-10 14 0 25 -4 25 -10 0 -5 7 -10 15 -10 8 0 38 -11 67 -25 28 -14 60 -25 70
-25 10 0 18 -4 18 -10 0 -5 11 -10 25 -10 14 0 25 -3 25 -8 0 -4 15 -12 33
-18 76 -26 132 -50 135 -56 2 -5 15 -8 28 -8 13 0 24 -5 24 -11 0 -11 -20 -10
-192 7 -32 3 -58 10 -58 15 0 5 -18 9 -39 9 -22 0 -43 5 -46 10 -3 6 -19 10
-35 10 -16 0 -31 4 -34 9 -7 10 -97 41 -120 41 -9 0 -16 5 -16 10 0 6 -13 10
-30 10 -16 0 -30 5 -30 10 0 6 -6 10 -14 10 -7 0 -34 11 -60 25 -26 14 -56 25
-67 25 -10 0 -19 5 -19 10 0 6 -9 10 -20 10 -11 0 -20 4 -20 9 0 5 -11 12 -25
15 -14 4 -25 11 -25 16 0 6 -8 10 -18 10 -10 0 -28 9 -40 20 -12 11 -30 20
-42 20 -11 0 -20 3 -20 8 0 4 -18 16 -40 26 -22 11 -40 23 -40 28 0 4 -7 8
-15 8 -8 0 -15 5 -15 10 0 6 -7 10 -15 10 -9 0 -28 11 -43 25 -15 14 -31 25
-37 25 -6 0 -17 9 -25 20 -8 11 -22 20 -32 20 -10 0 -18 4 -18 8 0 5 -11 15
-25 22 -14 7 -25 19 -25 27 0 7 -7 13 -15 13 -8 0 -15 5 -15 10 0 6 -7 10 -15
10 -8 0 -15 5 -15 10 0 6 14 10 30 10 17 0 30 -4 30 -10z m-1390 -450 c0 -5 9
-10 20 -10 11 0 20 -4 20 -10 0 -5 5 -10 11 -10 12 0 39 -25 39 -36 0 -3 8
-14 18 -23 15 -14 24 -29 50 -83 8 -18 -17 -6 -46 22 -18 17 -34 30 -37 30 -3
0 -17 10 -30 23 -62 57 -75 67 -80 67 -8 0 -35 27 -35 34 0 3 16 6 35 6 19 0
35 -4 35 -10z m-300 -380 c0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 11 -10
24 -10 13 0 39 -8 58 -17 60 -30 68 -33 83 -33 8 0 15 -4 15 -10 0 -5 16 -10
35 -10 19 0 35 -4 35 -8 0 -4 20 -16 45 -26 25 -11 45 -23 45 -28 0 -4 9 -8
20 -8 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 13 -10 28
-10 15 0 32 -4 38 -9 12 -11 95 -32 157 -38 26 -3 47 -9 47 -14 0 -5 25 -9 55
-9 30 0 55 -4 55 -10 0 -5 23 -10 50 -10 28 0 59 -6 70 -12 15 -10 22 -10 32
0 6 6 29 12 50 12 21 0 38 5 38 10 0 6 11 10 25 10 31 0 35 35 5 45 -11 3 -20
11 -20 16 0 5 -5 9 -10 9 -16 0 -63 50 -56 58 4 3 16 1 26 -6 11 -7 29 -12 40
-12 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20
-10 11 0 20 -3 20 -7 0 -11 58 -43 76 -43 8 0 14 -9 14 -20 0 -11 -6 -20 -14
-20 -8 0 -34 -11 -57 -25 -24 -14 -54 -25 -66 -25 -13 0 -23 -5 -23 -10 0 -7
-63 -10 -192 -7 -191 4 -262 12 -305 35 -12 7 -31 12 -42 12 -12 0 -21 5 -21
10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -13 10 -30 10 -16 0 -30 5 -30
10 0 6 -9 10 -20 10 -11 0 -43 11 -72 25 -28 14 -60 25 -70 25 -10 0 -18 5
-18 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -9 10 -19 10 -11 0 -22 4
-26 9 -3 5 -19 12 -35 16 -17 4 -30 11 -30 16 0 5 -9 9 -20 9 -11 0 -20 5 -20
10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -9 10 -20 10 -11 0 -20 5 -20 10 0
6 -6 10 -13 10 -8 0 -24 9 -36 19 -19 17 -21 22 -9 35 15 17 48 21 48 6z
m-2620 -526 c47 -9 109 -18 138 -21 28 -3 52 -9 52 -14 0 -5 20 -9 45 -9 25 0
53 -4 63 -9 18 -10 118 -29 195 -38 26 -3 47 -9 47 -14 0 -5 25 -9 55 -9 30 0
55 -4 55 -10 0 -5 24 -10 54 -10 30 0 58 -4 61 -10 3 -5 18 -10 33 -10 26 0
135 -22 198 -41 17 -5 49 -9 72 -9 23 0 42 -4 42 -10 0 -6 28 -10 65 -10 37 0
65 -4 65 -10 0 -5 22 -10 48 -10 27 0 52 -3 56 -7 9 -9 127 -32 204 -40 28 -2
52 -9 52 -14 0 -5 29 -9 65 -9 37 0 65 -4 65 -10 0 -5 20 -10 45 -10 25 0 64
-4 87 -10 111 -24 208 -40 251 -40 26 0 47 -4 47 -10 0 -6 40 -10 100 -10 56
0 100 -4 100 -9 0 -6 55 -12 123 -15 67 -2 201 -9 297 -14 479 -28 668 -30
2120 -27 1313 3 1556 5 1745 20 121 9 259 19 308 22 48 2 87 9 87 14 0 5 36 9
80 9 44 0 80 4 80 9 0 5 28 11 63 14 34 3 94 13 132 22 39 10 91 19 118 22 26
3 47 9 47 14 0 5 25 9 55 9 30 0 55 4 55 9 0 5 17 11 38 14 45 6 121 26 144
38 10 5 29 9 43 9 14 0 25 5 25 10 0 6 20 10 45 10 25 0 45 5 45 10 0 6 16 10
35 10 19 0 35 4 35 9 0 4 19 11 42 14 24 3 44 11 46 16 2 6 19 11 38 11 19 0
34 5 34 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 14 10 30 10 17 0 38 4 48 9
32 16 117 41 140 41 12 0 22 5 22 10 0 6 20 10 45 10 25 0 45 5 45 10 0 6 11
10 25 10 18 0 25 -5 25 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 5 -25
10 -25 6 0 10 -9 10 -19 0 -11 5 -23 10 -26 6 -3 10 -15 10 -25 0 -10 7 -25
15 -34 8 -8 15 -22 15 -30 0 -9 5 -16 10 -16 6 0 10 -11 10 -25 0 -14 5 -25
10 -25 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -9 10 -21 0 -11 6 -27 14
-34 7 -8 20 -34 27 -59 7 -26 17 -46 21 -46 4 0 8 -11 8 -25 0 -14 5 -25 10
-25 6 0 10 -9 10 -20 0 -11 4 -20 10 -20 5 0 12 -16 16 -35 3 -19 10 -35 15
-35 5 0 9 -9 9 -20 0 -11 5 -20 10 -20 6 0 10 -16 10 -35 0 -19 5 -35 10 -35
6 0 10 -10 10 -23 0 -13 4 -27 9 -32 18 -19 34 -121 38 -242 2 -68 8 -123 14
-123 5 0 9 -94 9 -235 0 -150 4 -235 10 -235 6 0 10 -73 10 -197 0 -109 7
-279 15 -378 8 -99 15 -228 15 -287 0 -60 4 -110 10 -113 6 -3 10 -48 10 -101
0 -56 4 -94 10 -94 6 0 10 -30 10 -70 0 -38 4 -70 9 -70 5 0 11 -21 14 -47 2
-27 12 -75 21 -108 10 -33 20 -72 23 -87 3 -16 9 -28 14 -28 5 0 9 -16 9 -35
0 -19 4 -35 8 -35 4 0 14 -20 21 -46 7 -25 20 -51 27 -59 8 -7 14 -21 14 -29
0 -9 5 -16 10 -16 6 0 10 -7 10 -15 0 -8 5 -15 10 -15 6 0 10 -9 10 -20 0 -11
3 -20 8 -20 4 0 18 -16 31 -35 13 -19 34 -47 47 -62 13 -16 27 -36 30 -45 3
-10 10 -18 15 -18 5 0 9 -9 9 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 5
-15 10 -15 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -8 10 -18 0 -10 7 -27
15 -38 8 -10 15 -29 15 -41 0 -13 5 -23 10 -23 6 0 10 -13 10 -30 0 -16 5 -30
10 -30 6 0 10 -20 10 -45 0 -25 5 -45 10 -45 6 0 10 -17 10 -37 1 -21 7 -65
15 -98 8 -33 15 -97 15 -142 0 -49 4 -83 10 -83 6 0 10 -50 10 -130 0 -80 4
-130 10 -130 6 0 10 -34 10 -82 0 -45 4 -107 10 -137 12 -71 30 -249 37 -369
3 -51 10 -95 14 -98 5 -3 9 -52 9 -110 0 -63 4 -104 10 -104 6 0 10 -45 10
-115 0 -63 4 -115 9 -115 5 0 11 -46 15 -102 3 -57 10 -134 15 -173 12 -88 12
-472 0 -585 -5 -47 -12 -127 -15 -177 -4 -51 -10 -93 -15 -93 -5 0 -9 -34 -9
-75 0 -43 -4 -75 -10 -75 -6 0 -10 -33 -10 -80 0 -47 -4 -80 -10 -80 -5 0 -10
-19 -10 -42 0 -24 -7 -78 -15 -121 -8 -43 -15 -96 -15 -117 0 -21 -4 -42 -10
-45 -5 -3 -10 -33 -10 -66 0 -32 -4 -59 -9 -59 -5 0 -12 -26 -14 -57 -9 -92
-35 -236 -58 -309 -5 -17 -9 -47 -9 -67 0 -20 -4 -37 -10 -37 -5 0 -10 -18
-10 -39 0 -22 -4 -43 -10 -46 -5 -3 -10 -18 -10 -33 0 -15 -7 -36 -15 -46 -8
-11 -15 -32 -15 -48 0 -15 -4 -28 -10 -28 -5 0 -10 -16 -10 -35 0 -19 -4 -35
-10 -35 -5 0 -10 -7 -10 -16 0 -23 -31 -113 -41 -120 -5 -3 -9 -18 -9 -35 0
-16 -4 -29 -10 -29 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -11
-10 -25 0 -14 -4 -33 -9 -43 -16 -32 -33 -87 -38 -119 -3 -18 -9 -33 -14 -33
-5 0 -9 -16 -9 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -16 -10 -35 0 -19 -4 -35
-10 -35 -5 0 -10 -13 -10 -30 0 -16 -6 -44 -14 -62 -23 -55 -36 -103 -36 -131
0 -15 -4 -27 -10 -27 -5 0 -10 -20 -10 -45 0 -25 -4 -45 -10 -45 -5 0 -10 -17
-10 -38 0 -21 -5 -43 -11 -49 -11 -11 -9 -70 7 -255 6 -69 -5 -99 -48 -139
-10 -9 -18 -21 -18 -28 0 -6 -4 -11 -10 -11 -5 0 -10 -6 -10 -12 0 -7 -11 -26
-25 -42 -14 -16 -25 -37 -25 -48 0 -10 -4 -18 -10 -18 -5 0 -10 -13 -10 -30 0
-16 -4 -30 -9 -30 -5 0 -11 -15 -15 -32 -3 -18 -12 -71 -21 -118 -8 -47 -18
-172 -22 -277 -3 -106 -10 -193 -14 -193 -5 0 -9 -16 -9 -35 0 -19 -4 -35 -10
-35 -5 0 -10 -7 -10 -15 0 -33 -46 -88 -115 -140 -47 -35 -135 -124 -135 -136
0 -15 -188 -199 -204 -199 -8 0 -16 -3 -18 -7 -5 -12 -76 -43 -98 -43 -11 0
-20 -4 -20 -10 0 -5 -7 -10 -16 -10 -9 0 -44 -28 -78 -63 -65 -64 -79 -76
-133 -104 -19 -9 -37 -29 -42 -46 -9 -25 -14 -28 -33 -22 -13 4 -40 9 -60 12
-21 3 -38 9 -38 14 0 5 -16 9 -35 9 -19 0 -35 5 -35 10 0 6 -16 10 -35 10 -19
0 -35 5 -35 10 0 6 -13 10 -30 10 -16 0 -30 4 -30 10 0 5 -16 12 -35 16 -19 3
-35 10 -35 15 0 5 -9 9 -20 9 -11 0 -20 5 -20 10 0 6 -5 10 -10 10 -12 0 -60
45 -60 55 0 10 -28 35 -39 35 -6 0 -11 4 -11 8 0 7 -32 47 -90 109 -11 12 -20
25 -20 29 0 4 -8 14 -18 23 -10 9 -31 34 -47 56 -17 22 -38 47 -47 56 -10 9
-18 21 -18 26 0 5 -16 26 -35 46 -19 20 -35 44 -35 53 0 9 -8 24 -18 33 -25
23 -52 67 -52 86 0 8 -4 15 -10 15 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0
-10 6 -10 13 0 8 -11 27 -25 43 -14 16 -25 35 -25 42 0 6 -4 12 -10 12 -5 0
-10 5 -10 11 0 11 -295 309 -306 309 -7 0 -54 48 -54 55 0 3 -25 30 -55 60
-30 29 -55 58 -55 65 0 6 -11 23 -25 38 -14 15 -25 31 -25 35 0 5 -13 22 -30
37 -16 15 -30 33 -30 39 0 6 -4 11 -10 11 -5 0 -31 20 -57 45 -25 25 -52 45
-58 45 -6 0 -17 9 -25 20 -8 11 -25 20 -37 20 -13 0 -23 5 -23 10 0 6 -9 10
-19 10 -11 0 -26 7 -35 15 -8 8 -24 15 -35 15 -12 0 -21 5 -21 10 0 6 -13 10
-30 10 -16 0 -30 5 -30 10 0 6 -7 10 -16 10 -22 0 -118 33 -122 43 -2 4 -19 7
-38 7 -19 0 -34 5 -34 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -16 10
-35 10 -19 0 -43 4 -53 9 -25 13 -146 41 -176 41 -13 0 -28 5 -31 10 -3 6 -28
10 -56 10 -27 0 -49 4 -49 9 0 5 -26 12 -57 15 -32 3 -92 9 -133 15 -250 31
-547 38 -572 13 -7 -7 -20 -12 -30 -12 -10 0 -18 -4 -18 -10 0 -5 -9 -10 -20
-10 -11 0 -20 -4 -20 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -7
-10 -15 -10 -8 0 -15 -5 -15 -10 0 -11 -45 -60 -55 -60 -8 0 -55 -47 -55 -55
0 -8 -27 -35 -35 -35 -7 0 -55 -47 -55 -55 0 -6 -169 -175 -175 -175 -3 0 -5
7 -5 15 0 8 -4 15 -10 15 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -12 16
-16 35 -3 19 -10 35 -15 35 -5 0 -9 9 -9 20 0 11 -4 20 -10 20 -5 0 -10 10
-10 21 0 29 -31 55 -110 92 -36 17 -66 35 -68 39 -2 4 -15 8 -28 8 -13 0 -24
5 -24 10 0 6 -7 10 -16 10 -8 0 -22 7 -30 15 -9 8 -24 15 -34 15 -10 0 -22 4
-25 10 -3 5 -15 10 -26 10 -10 0 -19 4 -19 9 0 5 -12 11 -27 14 -16 3 -59 14
-98 26 -85 26 -241 28 -325 6 -30 -8 -72 -15 -92 -15 -21 0 -38 -4 -38 -10 0
-5 -25 -10 -55 -10 -30 0 -55 -4 -55 -10 0 -5 -19 -10 -42 -10 -23 0 -55 -4
-72 -9 -17 -6 -53 -15 -81 -21 -27 -6 -66 -16 -85 -21 -19 -6 -52 -13 -72 -16
-21 -3 -38 -9 -38 -14 0 -5 -13 -9 -29 -9 -17 0 -32 -3 -35 -8 -2 -4 -34 -16
-70 -27 -36 -11 -66 -23 -66 -27 0 -5 -9 -8 -20 -8 -11 0 -20 -4 -20 -10 0 -5
-11 -10 -25 -10 -14 0 -25 -4 -25 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20
-9 0 -5 -11 -12 -25 -15 -14 -4 -25 -11 -25 -16 0 -6 -9 -10 -20 -10 -11 0
-20 -4 -20 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -3 -15 -8 0 -4 -16 -16 -35 -26
-19 -11 -35 -23 -35 -28 0 -4 -8 -8 -18 -8 -10 0 -24 -9 -32 -20 -8 -11 -22
-20 -32 -20 -10 0 -18 -5 -18 -10 0 -6 -16 -18 -35 -27 -19 -9 -35 -20 -35
-25 0 -4 -5 -8 -10 -8 -28 0 -80 -79 -80 -122 0 -20 -124 -148 -143 -148 -4 0
-31 -24 -60 -53 -29 -28 -69 -64 -89 -80 -61 -45 -228 -215 -228 -232 0 -8 -4
-15 -10 -15 -5 0 -10 -13 -10 -30 0 -16 5 -30 10 -30 21 0 9 -42 -20 -73 -16
-18 -30 -35 -30 -39 0 -4 -11 -18 -25 -32 -14 -14 -25 -28 -25 -31 0 -3 -10
-17 -22 -30 -33 -35 -48 -53 -48 -59 0 -3 -20 -27 -45 -53 -25 -25 -45 -50
-45 -55 0 -4 -20 -29 -45 -56 -25 -26 -45 -51 -45 -55 0 -5 -20 -29 -45 -54
-25 -24 -45 -50 -45 -57 0 -6 -10 -18 -21 -26 -12 -8 -27 -21 -35 -28 -7 -6
-16 -12 -21 -12 -5 0 -15 -9 -23 -20 -8 -11 -21 -20 -30 -20 -9 0 -24 -6 -35
-14 -11 -7 -40 -16 -65 -19 -85 -11 -120 -19 -120 -28 0 -5 -11 -9 -25 -9 -14
0 -25 -3 -25 -7 0 -5 -20 -16 -45 -26 -25 -11 -45 -23 -45 -28 0 -5 -20 -9
-45 -9 -38 0 -45 3 -45 19 0 11 -4 23 -10 26 -5 3 -10 15 -10 25 0 11 -7 25
-16 32 -68 57 -86 81 -80 110 8 39 -12 58 -63 58 -22 0 -43 5 -46 10 -3 6 -15
10 -26 10 -10 0 -19 4 -19 10 0 5 -11 12 -25 16 -14 3 -25 10 -25 15 0 5 -7 9
-16 9 -17 0 -164 146 -164 162 0 13 -61 72 -98 93 -18 11 -32 23 -32 27 0 4
-7 8 -15 8 -8 0 -15 5 -15 10 0 6 -5 10 -11 10 -16 0 -119 107 -119 124 0 9
-4 16 -10 16 -5 0 -10 9 -10 20 0 11 -4 20 -9 20 -5 0 -11 12 -14 28 -22 105
-26 141 -26 259 -1 76 -5 134 -11 138 -5 3 -10 31 -10 61 0 30 -4 54 -10 54
-5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 12 -10 28 0 15 -7 36 -15 46
-8 11 -15 28 -15 38 0 10 -4 18 -10 18 -5 0 -10 9 -10 20 0 11 -4 20 -10 20
-5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 5 -10 10 0 6 -5 16 -10 23 -48
57 -60 74 -60 89 0 9 -5 18 -11 20 -6 2 -11 24 -12 50 -2 38 2 50 22 67 20 17
24 30 22 69 -1 26 -6 49 -11 50 -6 2 -10 26 -10 53 0 27 -4 49 -10 49 -5 0
-10 16 -10 35 0 19 -4 43 -9 53 -10 21 -31 95 -38 140 -3 18 -9 35 -14 38 -5
3 -9 23 -9 45 0 21 -4 39 -10 39 -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0
-10 15 -10 33 -1 17 -7 43 -15 57 -8 14 -14 35 -15 48 0 12 -4 22 -10 22 -5 0
-10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 13 -10 29 0 17 -4 33 -10 36 -5 3
-10 19 -10 34 0 15 -7 36 -15 47 -8 10 -15 31 -15 47 0 15 -4 27 -10 27 -5 0
-10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 13 -10 29 0 17 -4 33 -10 36 -5 3
-10 19 -10 34 0 15 -7 36 -15 47 -8 10 -15 31 -15 47 0 15 -4 27 -10 27 -5 0
-10 20 -10 45 0 25 -4 45 -10 45 -5 0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0
-10 8 -10 18 0 11 -10 54 -22 98 -11 43 -23 100 -25 127 -3 26 -9 47 -14 47
-5 0 -9 25 -9 55 0 30 -4 55 -9 55 -5 0 -12 26 -15 58 -7 83 -30 209 -38 218
-5 4 -8 36 -8 71 0 35 -4 63 -10 63 -6 0 -10 35 -10 85 0 50 -4 85 -10 85 -6
0 -10 28 -10 63 0 34 -5 79 -10 99 -17 59 -32 265 -36 501 -3 129 -9 217 -14
217 -6 0 -10 68 -10 170 0 102 4 170 10 170 5 0 11 83 13 203 5 221 21 460 37
546 5 30 10 97 10 148 0 55 4 93 10 93 6 0 10 48 10 125 0 77 4 125 10 125 6
0 10 41 10 102 0 56 4 115 9 132 11 34 31 224 38 354 2 45 9 82 14 82 5 0 9
25 9 55 0 30 5 55 10 55 6 0 10 13 10 30 0 26 15 70 41 122 5 10 9 25 9 33 0
8 5 15 10 15 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 9 10 20 0 11 4 20 8 20
4 0 21 25 37 55 17 30 33 55 38 55 4 0 7 11 7 25 0 14 5 25 10 25 6 0 10 9 10
20 0 11 4 20 8 20 10 0 42 71 42 93 0 10 5 17 10 17 6 0 10 11 10 25 0 14 3
25 8 25 4 0 15 28 25 63 10 34 23 70 28 79 5 10 9 34 9 53 0 19 5 35 10 35 6
0 10 22 10 48 0 26 4 52 9 58 11 10 15 62 30 344 6 113 15 252 21 310 5 58 10
172 10 253 0 91 4 147 10 147 6 0 10 76 10 209 0 129 4 212 10 216 6 4 10 83
10 203 1 108 5 231 10 272 5 41 13 103 16 138 4 34 11 62 15 62 5 0 9 20 9 45
0 25 5 45 10 45 6 0 10 14 10 30 0 17 5 30 10 30 6 0 10 11 10 25 0 14 5 25
10 25 6 0 10 8 10 18 0 10 7 27 15 38 8 10 15 27 15 37 0 9 5 17 10 17 6 0 10
7 10 15 0 8 5 15 10 15 6 0 10 9 10 20 0 11 3 20 8 20 4 0 16 16 26 35 11 19
23 35 28 35 4 0 8 9 8 20 0 11 5 20 10 20 6 0 10 5 10 10 0 11 10 25 48 65 12
13 22 27 22 30 0 3 15 21 33 40 64 69 77 84 77 95 0 5 5 10 10 10 11 0 60 45
60 55 0 13 48 52 90 72 54 26 88 28 200 7z m-2426 -4383 c3 -5 26 -12 51 -15
25 -4 45 -11 45 -17 0 -5 11 -9 25 -9 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11
0 20 -4 20 -10 0 -5 7 -10 15 -10 19 0 63 -27 86 -52 9 -10 21 -18 28 -18 6 0
11 -4 11 -10 0 -5 4 -10 10 -10 13 0 70 -57 70 -69 0 -6 16 -27 35 -47 19 -19
35 -42 35 -50 0 -8 4 -14 8 -14 4 0 16 -20 26 -45 11 -25 23 -45 28 -45 4 0 8
-9 8 -20 0 -11 5 -20 10 -20 6 0 10 -11 10 -25 0 -14 5 -25 10 -25 6 0 10 -11
10 -24 0 -13 3 -26 8 -28 11 -5 62 -161 62 -192 0 -14 5 -26 10 -26 6 0 10
-20 10 -45 0 -25 5 -45 10 -45 6 0 10 -10 10 -22 0 -22 21 -139 40 -226 6 -23
10 -71 10 -107 0 -37 4 -65 10 -65 6 0 10 -40 10 -100 0 -60 4 -100 10 -100 6
0 10 -33 10 -77 0 -43 7 -114 15 -158 8 -44 14 -106 15 -137 0 -31 5 -60 10
-63 6 -3 10 -48 10 -101 0 -56 4 -94 10 -94 6 0 10 -37 10 -90 0 -49 4 -90 9
-90 5 0 12 -37 15 -82 2 -46 12 -130 21 -188 9 -58 19 -142 22 -187 3 -46 9
-83 14 -83 5 0 9 -36 9 -80 0 -44 4 -80 9 -80 5 0 11 -28 14 -62 3 -35 13
-103 22 -153 9 -49 19 -127 22 -172 3 -46 9 -83 14 -83 5 0 9 -70 9 -155 0
-97 4 -155 10 -155 6 0 10 -53 10 -137 0 -76 5 -167 10 -203 6 -41 6 -68 0
-74 -6 -6 -10 -131 -10 -308 0 -192 -4 -298 -10 -298 -5 0 -10 -7 -10 -15 0
-8 -8 -24 -17 -35 -21 -24 -97 -27 -158 -5 -22 8 -48 15 -57 15 -10 0 -18 5
-18 10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -8 10 -17 11 -10 0 -31 9
-48 20 -16 10 -37 22 -45 26 -26 12 -144 137 -160 168 -8 17 -21 36 -27 43 -7
7 -13 22 -13 33 0 10 -4 19 -10 19 -5 0 -10 14 -10 30 0 17 -4 30 -10 30 -5 0
-10 18 -10 40 0 22 -4 40 -10 40 -5 0 -10 12 -10 28 0 15 -7 36 -15 46 -8 11
-15 30 -15 42 0 13 -4 26 -10 29 -5 3 -10 24 -10 46 0 21 -4 39 -10 39 -5 0
-10 18 -10 39 0 22 -4 43 -10 46 -5 3 -10 19 -10 34 0 15 -7 36 -15 47 -8 10
-15 31 -15 46 0 15 -4 30 -10 33 -5 3 -10 19 -10 36 0 16 -4 29 -10 29 -5 0
-10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 13 -10 29 0 16 -3 31 -7 33 -11 4
-43 75 -43 93 0 8 -4 15 -10 15 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0
-10 6 -10 12 0 16 -53 122 -62 126 -5 2 -8 17 -8 33 0 16 -3 29 -7 29 -11 0
-43 58 -43 76 0 8 -4 14 -10 14 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10
7 -10 15 0 8 -4 15 -10 15 -5 0 -10 6 -10 12 0 16 -53 122 -62 126 -5 2 -8 16
-8 32 0 16 -4 30 -8 32 -12 5 -62 116 -62 138 0 11 -4 20 -10 20 -5 0 -10 18
-10 40 0 22 -4 40 -10 40 -5 0 -10 18 -10 39 0 22 -4 43 -10 46 -5 3 -10 21
-10 38 0 18 -8 69 -17 115 -14 69 -15 88 -4 115 19 48 26 313 11 437 -7 58
-15 130 -17 160 -3 30 -9 59 -14 64 -5 6 -9 38 -9 73 0 35 -4 63 -10 63 -6 0
-10 30 -10 69 0 39 -4 72 -9 75 -4 3 -11 39 -14 79 -4 41 -11 87 -17 101 -5
15 -10 54 -10 87 0 33 -4 59 -10 59 -6 0 -10 40 -10 99 0 61 -4 101 -11 103
-16 5 -18 490 -1 495 7 3 12 22 12 49 0 24 4 44 9 44 5 0 11 12 14 28 9 43 31
102 39 102 5 0 8 11 8 25 0 14 5 25 10 25 6 0 10 7 10 16 0 24 119 134 152
141 15 3 28 9 28 14 0 12 147 12 154 0z m13466 -51 c0 -5 16 -10 35 -10 19 0
35 -4 35 -8 0 -4 15 -16 33 -27 42 -25 147 -132 147 -151 0 -8 5 -14 10 -14 6
0 10 -11 10 -25 0 -14 4 -25 8 -25 16 0 42 -137 42 -222 0 -52 4 -88 10 -88 6
0 10 -37 10 -90 0 -53 -4 -90 -10 -90 -6 0 -10 -43 -10 -109 0 -59 -5 -133
-11 -162 -14 -73 -29 -164 -36 -221 -3 -27 -9 -48 -14 -48 -5 0 -9 -20 -9 -45
0 -25 -4 -45 -10 -45 -5 0 -10 -14 -10 -31 0 -17 -5 -39 -10 -50 -12 -22 -29
-123 -37 -216 -2 -35 -9 -63 -14 -63 -5 0 -9 -52 -9 -115 0 -67 -4 -115 -10
-115 -6 0 -11 -98 -13 -247 -4 -236 -17 -377 -38 -397 -5 -6 -9 -23 -9 -38 0
-15 -4 -28 -10 -28 -5 0 -10 -16 -10 -35 0 -19 -4 -35 -10 -35 -5 0 -10 -10
-10 -22 0 -23 -49 -130 -62 -136 -5 -2 -8 -12 -8 -23 0 -10 -4 -19 -10 -19 -5
0 -10 -9 -10 -20 0 -11 -4 -20 -8 -20 -5 0 -17 -16 -28 -35 -10 -19 -22 -35
-26 -35 -5 0 -8 -9 -8 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -7 -10 -15 0 -8 -4
-15 -10 -15 -5 0 -10 -8 -10 -19 0 -10 -7 -24 -15 -31 -8 -7 -15 -19 -15 -26
0 -8 -4 -14 -10 -14 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -11
-10 -25 0 -14 -3 -25 -7 -25 -11 0 -43 -58 -43 -76 0 -8 -4 -14 -10 -14 -5 0
-10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10
-25 -5 0 -10 -8 -10 -17 0 -10 -7 -27 -15 -37 -8 -11 -15 -28 -15 -38 0 -10
-4 -18 -10 -18 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -6 -10
-14 0 -14 -41 -121 -61 -158 -5 -10 -9 -29 -9 -43 0 -14 -4 -25 -10 -25 -5 0
-10 -11 -10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -12 -10 -27 0 -16 -7 -37 -15
-47 -8 -11 -15 -32 -15 -48 0 -15 -4 -28 -10 -28 -5 0 -10 -16 -10 -35 0 -19
-4 -35 -10 -35 -5 0 -10 -12 -10 -27 0 -28 -13 -76 -36 -131 -8 -18 -14 -42
-14 -52 0 -11 -4 -20 -10 -20 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0
-10 -9 -10 -20 0 -12 -6 -28 -12 -36 -7 -8 -17 -20 -23 -27 -5 -7 -17 -25 -25
-42 -19 -38 -126 -145 -145 -145 -8 0 -15 -4 -15 -10 0 -5 -7 -10 -15 -10 -8
0 -15 -4 -15 -8 0 -5 -20 -17 -45 -28 -25 -10 -45 -22 -45 -26 0 -4 -20 -8
-45 -8 -25 0 -45 -4 -45 -10 0 -6 -30 -10 -70 -10 -40 0 -70 4 -70 10 0 6 -13
10 -30 10 -28 0 -30 3 -30 35 0 19 4 35 9 35 21 0 27 351 15 810 -3 133 -1
251 5 290 5 36 15 99 22 140 7 41 14 103 17 138 2 34 8 62 13 62 5 0 9 36 9
80 0 47 4 80 10 80 6 0 10 32 10 75 0 43 4 75 10 75 6 0 10 21 10 48 0 26 7
74 15 107 8 33 14 88 15 123 0 34 4 62 10 62 6 0 10 33 10 80 0 47 4 80 10 80
6 0 10 35 10 84 0 47 4 87 9 90 4 3 11 47 15 98 3 52 11 109 16 128 6 19 10
68 10 107 0 42 4 73 10 73 6 0 10 48 10 125 0 71 4 125 9 125 6 0 12 46 15
103 6 127 22 271 36 317 5 19 10 63 10 97 0 35 4 63 10 63 6 0 10 25 10 55 0
30 5 55 10 55 6 0 10 25 10 55 0 30 5 55 10 55 6 0 10 15 10 33 1 17 7 50 15
72 8 22 15 52 15 68 0 15 5 27 10 27 6 0 10 16 10 35 0 19 5 35 10 35 6 0 10
8 10 18 0 10 11 42 25 70 14 29 25 56 25 62 0 5 5 10 10 10 6 0 10 9 10 20 0
11 4 20 8 20 4 0 16 15 27 33 10 17 31 44 47 59 15 14 28 29 28 33 0 8 26 35
34 35 3 0 26 20 52 45 25 25 52 45 60 45 8 0 14 3 14 8 0 4 15 14 33 21 17 8
38 21 45 28 7 7 22 13 33 13 10 0 19 5 19 10 0 6 11 10 25 10 14 0 25 5 25 10
0 6 18 10 40 10 22 0 40 5 40 10 0 6 45 10 115 10 70 0 115 -4 115 -10z
m-6890 -5962 c1 -50 26 -207 35 -216 4 -4 10 -1 12 6 6 15 113 17 113 2 0 -5
9 -10 21 -10 11 0 26 -6 34 -12 7 -7 25 -22 41 -33 15 -11 33 -26 40 -32 7 -7
17 -13 23 -13 6 0 28 -16 48 -35 20 -19 43 -35 50 -35 7 0 13 -4 13 -10 0 -5
11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -8 0 -5 20
-17 45 -28 25 -10 45 -22 45 -26 0 -4 11 -8 25 -8 14 0 25 -4 25 -10 0 -5 7
-10 15 -10 8 0 38 -11 67 -25 28 -14 60 -25 70 -25 10 0 18 -4 18 -10 0 -5 11
-10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 19 -10 11 0 22 -4 26 -9 3 -5 19 -12
35 -16 17 -4 30 -11 30 -16 0 -14 108 -11 112 3 5 14 81 13 86 -2 2 -5 19 -10
38 -10 19 0 34 -4 34 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 12 -10
26 -10 29 0 124 -28 139 -41 5 -5 24 -9 42 -9 18 0 33 -4 33 -10 0 -5 16 -10
35 -10 19 0 35 -4 35 -10 0 -5 13 -10 29 -10 17 0 32 -4 35 -9 4 -5 24 -12 46
-16 22 -4 42 -11 46 -16 3 -5 16 -9 29 -9 13 0 27 -4 30 -10 12 -20 67 -10
110 21 l43 31 47 -21 c26 -12 56 -21 66 -21 10 0 21 -4 24 -10 3 -5 22 -10 41
-10 19 0 34 -4 34 -10 0 -5 15 -10 34 -10 19 0 38 -4 41 -10 3 -5 18 -10 33
-10 15 -1 38 -7 52 -15 14 -8 35 -14 48 -15 12 0 22 -4 22 -10 0 -5 9 -10 20
-10 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -9 0 -5 8 -12 19 -16
10 -3 33 -19 50 -35 17 -17 35 -30 40 -30 11 0 109 -96 136 -134 11 -16 26
-34 33 -41 6 -8 12 -18 12 -24 0 -6 5 -11 10 -11 6 0 10 -7 10 -16 0 -8 7 -22
15 -30 8 -9 15 -28 15 -44 0 -16 5 -32 10 -35 6 -3 10 -17 10 -31 0 -13 5 -24
10 -24 6 0 10 -9 10 -20 0 -11 3 -20 8 -20 4 0 14 -13 23 -28 14 -26 14 -30 0
-53 -9 -13 -19 -25 -23 -27 -5 -2 -8 -15 -8 -28 0 -13 -4 -24 -10 -24 -5 0
-10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -12 -11 -16 -25 -3 -14 -10 -25 -15
-25 -5 0 -9 -9 -9 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -9 -10 -20 0 -11 -4 -20
-10 -20 -5 0 -10 -7 -10 -15 0 -8 -4 -15 -10 -15 -5 0 -10 -8 -10 -19 0 -10
-7 -24 -15 -31 -8 -7 -15 -19 -15 -26 0 -8 -4 -14 -10 -14 -5 0 -10 -9 -10
-20 0 -11 -4 -20 -10 -20 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -9 -25 -5 0 -17
-20 -28 -45 -10 -25 -21 -45 -25 -45 -5 0 -8 -9 -8 -20 0 -11 -4 -20 -10 -20
-5 0 -10 -9 -10 -20 0 -11 -4 -20 -8 -20 -10 0 -31 -53 -44 -110 -6 -25 -13
-102 -15 -172 -2 -71 -8 -128 -14 -128 -5 0 -9 -16 -9 -35 0 -19 -4 -35 -10
-35 -5 0 -10 -8 -10 -19 0 -10 -7 -24 -15 -31 -8 -7 -15 -17 -15 -22 0 -10
-66 -78 -75 -78 -4 0 -21 -11 -39 -25 -18 -14 -38 -25 -44 -25 -7 0 -12 -4
-12 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -6 -15 -13 0 -7 -9 -19 -20 -27 -11 -8
-20 -22 -20 -32 0 -10 -4 -18 -9 -18 -5 0 -13 -10 -17 -22 -4 -13 -15 -30 -25
-39 -11 -9 -19 -22 -19 -28 0 -18 -256 -271 -274 -271 -9 0 -16 -4 -16 -10 0
-5 -8 -10 -17 -10 -22 -1 -53 -23 -53 -39 0 -6 -4 -11 -9 -11 -5 0 -14 -13
-21 -29 -6 -16 -20 -37 -30 -46 -20 -18 -20 -18 -65 22 -7 7 -17 13 -22 13 -5
0 -15 9 -23 20 -8 11 -19 20 -25 20 -6 0 -28 16 -48 35 -20 19 -44 35 -52 35
-8 0 -15 4 -15 8 0 5 -11 15 -25 22 -14 7 -25 19 -25 27 0 7 -9 13 -20 13 -11
0 -20 5 -20 10 0 6 -5 10 -10 10 -13 0 -51 37 -73 71 -11 18 -13 36 -8 71 11
69 3 102 -34 139 -45 45 -62 59 -75 59 -5 0 -10 5 -10 10 0 6 -7 10 -15 10 -8
0 -34 18 -57 40 -24 22 -51 43 -60 46 -10 3 -18 10 -18 15 0 5 -5 9 -10 9 -10
0 -20 8 -85 68 -13 12 -29 22 -35 22 -5 0 -10 7 -10 15 0 8 -4 15 -10 15 -5 0
-10 7 -10 15 0 8 -4 15 -10 15 -5 0 -10 7 -10 15 0 8 -4 15 -9 15 -18 0 -41
88 -41 157 0 40 -4 75 -10 78 -5 3 -10 22 -10 41 0 19 -4 34 -10 34 -5 0 -10
8 -10 18 0 15 -11 32 -60 89 -5 7 -10 15 -10 19 0 7 -25 30 -65 60 -15 10 -33
25 -40 32 -8 6 -18 12 -24 12 -6 0 -11 5 -11 10 0 6 -7 10 -15 10 -9 0 -27 10
-40 23 -40 37 -54 47 -65 47 -5 0 -10 5 -10 10 0 6 8 10 18 10 9 0 49 11 87
25 39 13 84 25 102 25 17 0 35 5 38 10 3 6 31 10 61 10 30 0 54 5 54 10 0 6
12 10 27 10 29 0 172 46 188 61 5 5 17 9 27 9 10 0 33 14 51 31 l32 32 -35 -8
c-19 -3 -61 -9 -92 -12 -32 -3 -58 -9 -58 -14 0 -5 -31 -9 -70 -9 -40 0 -70
-4 -70 -10 0 -6 -28 -10 -64 -10 -36 0 -68 -4 -71 -10 -3 -5 -23 -10 -43 -10
-20 0 -62 -7 -92 -15 -30 -8 -72 -15 -92 -15 -21 0 -38 -4 -38 -10 0 -6 -28
-10 -64 -10 -41 0 -66 -4 -68 -12 -6 -17 -610 -17 -616 0 -2 8 -28 12 -68 12
-35 0 -64 4 -64 9 0 5 -28 11 -62 14 -35 4 -99 14 -143 23 -44 9 -108 18 -142
21 -35 3 -63 9 -63 14 0 5 -29 9 -65 9 -37 0 -65 4 -65 10 0 6 -25 10 -55 10
-30 0 -55 -3 -55 -6 0 -10 28 -34 39 -34 6 0 11 -4 11 -10 0 -5 7 -10 16 -10
8 0 22 -7 30 -15 9 -8 24 -15 34 -15 10 0 22 -4 25 -10 3 -5 22 -10 41 -10 19
0 34 -4 34 -10 0 -5 25 -10 55 -10 30 0 55 -4 55 -10 0 -6 29 -10 68 -10 78 0
292 -31 292 -42 0 -5 -7 -8 -15 -8 -8 0 -15 -4 -15 -10 0 -5 -9 -10 -20 -10
-11 0 -20 -4 -20 -8 0 -4 -15 -16 -32 -27 -18 -10 -40 -27 -49 -37 -9 -10 -22
-18 -28 -18 -15 0 -141 -126 -141 -140 0 -6 -4 -10 -10 -10 -5 0 -10 -7 -10
-15 0 -8 -4 -15 -10 -15 -5 0 -10 -8 -10 -19 0 -10 -7 -32 -15 -47 -8 -16 -15
-39 -15 -51 0 -12 -4 -25 -10 -28 -5 -3 -10 -44 -10 -91 0 -49 -4 -84 -10 -84
-5 0 -10 -13 -10 -30 0 -16 -4 -30 -8 -30 -4 0 -16 -14 -27 -32 -20 -35 -112
-128 -126 -128 -5 0 -23 -13 -40 -30 -17 -16 -40 -32 -50 -35 -11 -4 -19 -11
-19 -16 0 -5 -9 -9 -20 -9 -11 0 -20 -4 -20 -10 0 -5 -5 -10 -10 -10 -14 0
-60 -46 -60 -60 0 -5 -3 -10 -7 -10 -17 0 -43 -64 -43 -105 0 -24 -4 -47 -10
-50 -5 -3 -10 -19 -10 -36 0 -16 -4 -29 -8 -29 -5 0 -14 -16 -22 -35 -8 -19
-18 -35 -22 -35 -5 0 -20 -10 -33 -22 -44 -42 -54 -48 -75 -48 -11 0 -20 -4
-20 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -6 -10 -13 -10 -7 0
-30 -16 -50 -35 -20 -19 -40 -35 -43 -35 -3 0 -12 -7 -21 -15 -15 -16 -54 -11
-61 6 -2 5 -10 9 -18 9 -8 0 -14 5 -14 10 0 6 -5 10 -11 10 -6 0 -25 16 -43
35 -19 19 -39 35 -46 35 -6 0 -31 20 -56 45 -24 25 -48 45 -53 45 -13 0 -181
168 -181 181 0 5 -18 28 -39 50 -22 21 -43 48 -46 59 -4 11 -11 20 -16 20 -5
0 -9 5 -9 10 0 6 -10 22 -22 35 -34 36 -48 53 -48 60 0 3 -20 26 -45 51 -25
24 -45 46 -45 49 0 3 -9 14 -19 24 -25 25 -38 74 -47 169 -4 40 -11 75 -15 78
-5 3 -9 23 -9 45 0 21 -4 39 -10 39 -5 0 -10 15 -10 34 0 19 -4 38 -10 41 -5
3 -10 17 -10 29 0 13 -11 49 -25 80 -14 31 -25 63 -25 71 0 8 -4 15 -10 15 -5
0 -10 16 -10 35 0 19 -4 35 -10 35 -5 0 -10 6 -10 14 0 8 -11 34 -25 57 -14
24 -25 52 -25 62 0 9 -4 17 -10 17 -5 0 -10 11 -10 25 0 14 -3 25 -7 25 -5 0
-16 20 -26 45 -11 25 -23 45 -28 45 -5 0 -9 9 -9 20 0 11 -4 20 -10 20 -5 0
-10 7 -10 15 0 8 -4 15 -10 15 -5 0 -10 9 -10 20 0 11 -4 20 -10 20 -5 0 -10
6 -10 14 0 8 -7 22 -17 31 -10 10 -12 19 -6 23 5 4 18 22 28 40 11 17 23 32
27 32 4 0 8 7 8 15 0 8 5 15 10 15 15 0 13 107 -2 114 -10 5 -10 7 0 12 6 3
12 12 12 21 0 8 6 20 13 27 25 27 57 66 57 71 0 10 172 175 182 175 6 0 18 8
27 18 9 10 23 22 31 25 8 4 29 16 45 26 17 11 38 20 48 20 9 1 17 6 17 11 0 6
11 10 25 10 14 0 25 5 25 10 0 6 8 10 19 10 10 0 35 7 54 15 20 8 48 15 62 15
14 0 25 5 25 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 15 10 34 10 19 0 38 5
41 10 9 14 195 13 195 -1 0 -12 88 -7 160 10 25 5 69 16 98 23 28 6 52 16 52
20 0 4 16 8 35 8 19 0 35 5 35 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 14 10
30 10 17 0 30 5 30 10 0 6 10 10 23 10 12 1 33 7 47 15 14 8 35 14 48 15 12 0
22 5 22 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 11 10 25 10 14 0 33 4 43 9
46 23 95 41 112 41 11 0 20 5 20 10 0 6 16 10 35 10 19 0 35 5 35 10 0 6 14
10 30 10 17 0 30 4 30 9 0 5 16 12 35 15 19 4 35 11 35 16 0 6 16 10 35 10 19
0 35 5 35 10 0 6 14 10 30 10 17 0 30 5 30 10 0 6 10 10 21 10 24 0 119 49
119 62 0 4 7 8 16 8 9 0 44 29 79 65 35 36 69 65 74 65 6 0 11 4 11 8 0 5 18
17 40 28 22 10 40 22 40 27 0 4 7 7 15 7 8 0 15 5 15 10 0 6 10 22 23 35 41
44 47 54 47 75 0 11 5 20 10 20 6 0 10 20 10 45 0 25 5 45 10 45 6 0 10 -15
10 -32z"/>
<path d="M11820 19245 c0 -177 4 -275 10 -275 6 0 10 -11 10 -25 0 -14 5 -25
10 -25 6 0 10 -7 10 -15 0 -8 11 -25 25 -39 14 -14 25 -30 25 -36 0 -22 75
-76 85 -61 3 5 1 12 -5 16 -5 3 -10 18 -10 33 0 26 -22 135 -41 198 -5 17 -9
47 -9 67 0 20 -4 37 -10 37 -5 0 -10 25 -10 55 0 30 -4 55 -10 55 -5 0 -10 17
-10 38 0 20 -7 59 -15 86 -8 27 -15 62 -15 78 0 15 -4 28 -10 28 -5 0 -10 14
-10 30 0 17 -4 30 -10 30 -6 0 -10 -98 -10 -275z"/>
<path d="M17335 13678 c-27 -5 -79 -15 -115 -23 -36 -9 -77 -15 -92 -15 -15 0
-30 -4 -33 -10 -3 -5 -26 -10 -51 -10 -24 0 -44 -4 -44 -10 0 -5 -25 -10 -55
-10 -30 0 -55 -4 -55 -9 0 -5 -17 -11 -37 -14 -21 -3 -65 -13 -98 -22 -33 -9
-81 -19 -107 -22 -27 -3 -48 -9 -48 -14 0 -5 -20 -9 -45 -9 -25 0 -45 -4 -45
-9 0 -5 -17 -11 -37 -14 -21 -3 -65 -13 -98 -22 -33 -10 -77 -19 -97 -22 -21
-3 -38 -9 -38 -14 0 -5 -25 -9 -55 -9 -30 0 -55 -4 -55 -10 0 -5 -16 -10 -36
-10 -20 0 -59 -7 -88 -16 -96 -30 -112 -34 -149 -34 -20 0 -37 -4 -37 -10 0
-5 -18 -10 -40 -10 -22 0 -40 -4 -40 -10 0 -5 -11 -10 -25 -10 -13 0 -50 -11
-81 -25 -31 -14 -63 -25 -70 -25 -8 0 -14 -4 -14 -10 0 -5 -11 -10 -25 -10
-14 0 -25 -4 -25 -8 0 -4 -15 -16 -32 -27 -18 -10 -40 -27 -49 -37 -9 -10 -23
-18 -30 -18 -8 0 -21 -9 -29 -20 -8 -11 -20 -20 -27 -20 -7 0 -13 -5 -13 -10
0 -6 -10 -22 -22 -35 -38 -40 -48 -54 -48 -65 0 -5 -4 -10 -10 -10 -5 0 -10
-9 -10 -20 0 -11 -4 -20 -8 -20 -12 0 -62 -93 -62 -114 0 -9 -4 -16 -10 -16
-5 0 -10 -15 -10 -34 0 -19 -6 -37 -12 -39 -10 -4 -9 -8 2 -17 17 -12 229 -4
268 11 13 5 37 9 53 9 16 0 29 5 29 10 0 6 20 10 45 10 25 0 45 5 45 10 0 6
17 10 37 10 20 0 50 4 67 9 100 30 146 41 174 41 18 0 32 5 32 10 0 6 20 10
45 10 25 0 45 5 45 10 0 6 20 10 45 10 25 0 45 5 45 10 0 6 15 10 33 10 17 1
50 7 72 15 22 8 52 15 68 15 15 0 27 5 27 10 0 6 20 10 45 10 25 0 45 5 45 10
0 6 20 10 45 10 25 0 45 5 45 10 0 6 12 10 26 10 15 0 49 7 78 16 96 30 112
34 149 34 20 0 37 4 37 9 0 5 17 11 38 14 20 3 64 12 97 22 33 9 77 19 98 22
20 3 37 9 37 14 0 5 20 9 45 9 25 0 45 4 45 9 0 5 17 11 38 15 20 3 62 9 92
13 30 5 60 12 67 16 39 24 526 48 568 28 11 -5 48 -12 83 -15 35 -3 71 -10 82
-16 10 -5 32 -10 49 -10 17 0 31 -4 31 -10 0 -5 16 -10 35 -10 19 0 35 -4 35
-10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -8
0 -5 20 -17 45 -28 25 -10 45 -22 45 -26 0 -4 7 -8 16 -8 9 0 31 -16 50 -35
18 -19 38 -35 44 -35 12 0 83 -72 115 -116 26 -35 92 -104 100 -104 4 0 13 -6
20 -12 33 -30 45 -38 55 -38 5 0 10 -6 10 -12 0 -7 5 -5 11 6 24 40 -5 296
-33 296 -4 0 -8 11 -8 25 0 14 -4 25 -10 25 -5 0 -10 9 -10 20 0 11 -4 20 -8
20 -4 0 -16 15 -27 33 -10 17 -27 39 -37 48 -10 9 -18 19 -18 23 0 11 -48 56
-60 56 -5 0 -10 5 -10 10 0 11 -45 60 -54 60 -3 0 -27 20 -53 45 -25 25 -52
45 -58 45 -6 0 -17 9 -25 20 -8 11 -19 20 -25 20 -6 0 -22 11 -37 25 -15 14
-34 25 -43 25 -8 0 -15 5 -15 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -9
10 -20 10 -11 0 -20 5 -20 10 0 6 -8 10 -17 10 -10 0 -27 7 -37 15 -11 8 -28
15 -38 15 -10 0 -18 5 -18 10 0 6 -11 10 -25 10 -14 0 -25 5 -25 10 0 6 -11
10 -25 10 -14 0 -33 4 -43 9 -9 5 -53 17 -97 26 -44 9 -99 21 -122 26 -52 11
-321 9 -388 -3z"/>
<path d="M10818 13670 c-48 -4 -93 -12 -100 -16 -12 -8 -71 -21 -140 -31 -21
-3 -38 -9 -38 -14 0 -5 -16 -9 -35 -9 -19 0 -35 -4 -35 -10 0 -5 -8 -10 -18
-10 -10 0 -42 -11 -70 -25 -29 -14 -59 -25 -67 -25 -8 0 -15 -4 -15 -10 0 -5
-11 -10 -25 -10 -14 0 -25 -4 -25 -8 0 -5 -16 -17 -35 -28 -19 -10 -35 -22
-35 -26 0 -5 -9 -8 -20 -8 -11 0 -20 -4 -20 -10 0 -5 -5 -10 -11 -10 -6 0 -16
-6 -24 -12 -7 -7 -25 -22 -41 -33 -35 -25 -174 -160 -174 -169 0 -4 -10 -18
-22 -31 -40 -42 -48 -54 -48 -70 0 -8 -4 -15 -10 -15 -5 0 -10 -7 -10 -15 0
-8 -4 -15 -10 -15 -5 0 -10 -11 -10 -25 0 -14 -4 -25 -9 -25 -5 0 -12 -13 -16
-30 -4 -16 -11 -30 -16 -30 -5 0 -9 -11 -9 -25 0 -14 -4 -25 -10 -25 -5 0 -10
-20 -10 -45 0 -25 -4 -45 -10 -45 -5 0 -10 -18 -10 -40 0 -22 5 -40 10 -40 6
0 10 -7 10 -15 0 -45 148 13 170 66 7 16 16 29 21 29 5 0 9 5 9 10 0 11 10 25
48 65 12 13 22 27 22 30 0 8 47 55 55 55 3 0 17 10 30 23 40 37 54 47 65 47 5
0 10 5 10 10 0 6 9 10 20 10 11 0 20 3 20 8 0 10 58 42 76 42 8 0 14 5 14 10
0 6 9 10 20 10 11 0 20 5 20 10 0 6 16 10 35 10 19 0 35 4 35 9 0 5 17 11 38
14 41 6 123 22 190 37 54 13 316 13 356 1 17 -5 69 -15 116 -21 47 -7 110 -16
140 -22 30 -5 76 -12 103 -15 26 -2 47 -9 47 -14 0 -5 20 -9 45 -9 25 0 45 -4
45 -9 0 -5 21 -11 48 -14 61 -7 152 -27 174 -38 10 -5 38 -9 63 -9 25 0 45 -4
45 -10 0 -5 19 -10 42 -10 23 0 55 -4 72 -9 54 -16 180 -41 208 -41 15 0 30
-4 33 -10 3 -5 28 -10 56 -10 27 0 49 -4 49 -10 0 -5 25 -10 55 -10 30 0 55
-4 55 -9 0 -5 21 -11 48 -14 71 -8 179 -31 188 -40 4 -4 31 -7 61 -7 29 0 53
-4 53 -10 0 -6 27 -10 60 -10 33 0 60 -4 60 -10 0 -5 15 -10 33 -10 19 0 56
-7 83 -15 27 -8 63 -15 81 -15 17 0 35 -4 38 -10 3 -5 28 -10 55 -10 l50 0 -7
33 c-3 17 -10 34 -15 35 -4 2 -8 15 -8 28 0 13 -4 24 -10 24 -5 0 -10 14 -10
30 0 17 -3 30 -8 30 -4 0 -14 15 -21 33 -8 17 -20 37 -25 44 -28 31 -36 43
-36 48 0 13 -132 145 -145 145 -3 0 -11 5 -18 10 -34 29 -90 60 -107 60 -11 0
-20 5 -20 10 0 6 -11 10 -25 10 -14 0 -25 4 -25 9 0 5 -15 11 -32 14 -61 10
-133 29 -143 38 -5 5 -28 9 -52 9 -24 0 -43 5 -43 10 0 6 -20 10 -45 10 -25 0
-45 5 -45 10 0 6 -22 10 -48 10 -27 0 -52 3 -56 8 -8 7 -102 29 -168 39 -21 3
-38 9 -38 14 0 5 -25 9 -55 9 -30 0 -55 4 -55 9 0 5 -21 11 -47 14 -27 3 -77
13 -113 22 -36 9 -84 19 -107 22 -24 3 -43 9 -43 14 0 5 -22 9 -50 9 -27 0
-50 5 -50 10 0 6 -17 10 -38 10 -21 0 -42 4 -48 9 -5 5 -29 11 -54 14 -25 3
-65 10 -90 15 -63 15 -348 22 -452 12z"/>
<path d="M11485 12620 c-3 -5 -35 -10 -71 -10 -36 0 -64 -4 -64 -10 0 -5 -20
-10 -45 -10 -25 0 -45 -4 -45 -10 0 -5 -9 -10 -20 -10 -17 0 -66 -18 -112 -41
-10 -5 -25 -9 -33 -9 -8 0 -15 -4 -15 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4
-25 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -3 -20 -7 0 -9 -57 -43 -72 -43 -10 0
-38 -25 -38 -34 0 -3 9 -6 20 -6 11 0 20 5 20 10 0 6 11 10 25 10 14 0 25 5
25 10 0 6 14 10 30 10 17 0 30 4 30 8 0 10 103 42 135 42 14 0 25 5 25 10 0 6
20 10 45 10 25 0 45 4 45 9 0 5 21 11 48 14 26 3 70 10 97 16 65 13 427 13
485 0 25 -6 60 -13 78 -16 17 -3 32 -9 32 -14 0 -5 16 -9 35 -9 19 0 35 -4 35
-10 0 -5 8 -10 18 -10 10 0 42 -11 70 -25 29 -14 56 -25 62 -25 5 0 10 -4 10
-10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -9
0 -5 20 -17 45 -28 25 -10 45 -21 45 -25 0 -5 9 -8 20 -8 11 0 20 -4 20 -10 0
-5 6 -10 14 -10 18 0 76 -32 76 -42 0 -5 9 -8 20 -8 11 0 20 -4 20 -10 0 -5
11 -10 25 -10 14 0 25 -4 25 -10 0 -5 9 -10 20 -10 11 0 20 2 20 5 0 10 -102
105 -112 105 -5 0 -25 16 -44 35 -18 19 -39 35 -47 35 -7 0 -19 9 -27 20 -8
11 -21 20 -30 20 -8 0 -28 11 -44 25 -16 14 -35 25 -43 25 -7 0 -13 5 -13 10
0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -6 10 -14 10 -8 0 -29 8 -48 17 -62
31 -68 33 -93 33 -14 0 -25 5 -25 10 0 6 -20 10 -45 10 -25 0 -45 5 -45 10 0
6 -24 10 -54 10 -30 0 -58 5 -61 10 -4 6 -82 10 -200 10 -118 0 -196 -4 -200
-10z"/>
<path d="M16690 12600 c0 -6 -37 -10 -90 -10 -49 0 -90 -4 -90 -9 0 -5 -21
-11 -47 -14 -27 -2 -75 -12 -108 -21 -33 -10 -72 -20 -87 -23 -16 -3 -28 -9
-28 -14 0 -5 -16 -9 -35 -9 -19 0 -35 -4 -35 -10 0 -5 -7 -10 -17 -10 -22 0
-93 -32 -93 -42 0 -4 -7 -8 -15 -8 -8 0 -15 -4 -15 -10 0 -5 -7 -10 -15 -10
-9 0 -31 -15 -50 -32 -49 -47 -63 -58 -75 -58 -5 0 -10 -9 -10 -20 0 -11 -4
-20 -8 -20 -5 0 -15 -11 -22 -25 -7 -14 -19 -25 -26 -25 -10 0 -23 -29 -24
-52 0 -4 12 -8 28 -10 19 -2 28 -9 30 -25 2 -13 -1 -23 -7 -23 -6 0 -11 -8
-11 -19 0 -10 -7 -24 -15 -31 -8 -7 -15 -19 -15 -26 0 -8 -4 -14 -10 -14 -5 0
-10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -7 -10 -15 0 -8 -4 -15 -10 -15
-5 0 -10 -9 -10 -19 0 -11 -4 -23 -10 -26 -5 -3 -10 -16 -10 -27 0 -18 5 -16
34 16 19 20 37 36 40 36 7 0 47 34 82 68 13 12 26 22 29 22 3 0 21 15 40 33
47 44 63 57 72 57 5 0 15 9 23 20 8 11 20 20 26 20 6 0 17 7 24 15 7 8 21 15
31 15 11 0 19 5 19 10 0 6 9 10 20 10 11 0 20 5 20 10 0 6 16 10 35 10 19 0
35 5 35 10 0 6 11 10 25 10 l25 0 0 -100 c0 -60 4 -100 10 -100 6 0 10 -13 10
-30 0 -16 5 -30 10 -30 6 0 10 -5 10 -10 0 -11 10 -25 48 -65 12 -13 22 -29
22 -35 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 6 -10 13 -10 7 0 20 -9 30
-20 16 -19 16 -20 -5 -20 -37 0 -138 24 -138 32 0 4 -16 8 -35 8 -19 0 -35 5
-35 10 0 6 -13 10 -28 10 -15 0 -32 4 -37 9 -20 17 -158 33 -188 22 -16 -6
-37 -11 -48 -11 -19 0 -49 -21 -49 -34 0 -3 16 -6 35 -6 19 0 35 -4 35 -10 0
-5 11 -10 24 -10 13 0 43 -7 66 -15 23 -8 55 -15 71 -15 15 0 31 -4 34 -10 3
-5 26 -10 51 -10 24 0 44 -4 44 -10 0 -5 25 -10 55 -10 30 0 55 -4 55 -10 0
-5 14 -10 32 -10 32 0 83 -8 228 -36 42 -8 112 -14 158 -14 48 0 82 -4 82 -10
0 -6 65 -10 175 -10 110 0 175 4 175 10 0 6 29 10 68 10 37 0 110 10 162 21
52 12 112 23 133 26 20 3 37 9 37 14 0 5 9 9 20 9 11 0 20 5 20 10 0 6 -11 10
-24 10 -37 0 -56 10 -56 31 0 13 7 19 24 19 14 0 28 5 31 10 3 6 17 10 31 10
13 0 24 5 24 10 0 6 6 10 13 10 20 0 77 54 77 73 0 13 -9 17 -35 17 -19 0 -35
-4 -35 -10 0 -5 -16 -10 -35 -10 -19 0 -43 -4 -53 -9 -21 -10 -95 -31 -140
-38 -18 -3 -35 -9 -38 -14 -3 -5 -23 -9 -45 -9 -21 0 -39 -4 -39 -10 0 -5 -18
-10 -39 -10 -22 0 -42 -4 -45 -9 -3 -5 -26 -12 -51 -15 -24 -4 -47 -11 -50
-17 -4 -5 -21 -9 -39 -9 -17 0 -37 -5 -44 -12 -9 -9 -15 -9 -24 0 -7 7 -8 12
-2 12 5 0 18 23 29 50 11 28 23 50 27 50 4 0 8 9 8 20 0 11 5 20 10 20 6 0 10
6 10 12 0 16 53 122 63 126 4 2 7 12 7 23 0 10 5 19 10 19 6 0 10 6 10 13 0 6
10 31 22 55 17 30 29 42 45 42 13 0 23 -4 23 -10 0 -5 11 -10 25 -10 14 0 25
-4 25 -10 0 -5 8 -10 18 -10 10 0 27 -7 38 -15 10 -8 27 -15 37 -15 9 0 17 -4
17 -10 0 -5 9 -10 20 -10 11 0 20 -4 20 -10 0 -5 6 -10 12 -10 16 0 122 -53
126 -62 2 -5 17 -8 33 -8 16 0 29 -4 29 -10 0 -5 13 -10 29 -10 17 0 32 -4 35
-9 3 -5 23 -11 43 -14 21 -2 66 -10 101 -17 34 -7 74 -9 89 -5 l26 6 -32 20
c-17 10 -38 19 -46 19 -8 0 -15 4 -15 9 0 5 -16 17 -36 27 -20 11 -44 23 -55
29 -10 5 -19 13 -19 17 0 5 -7 8 -15 8 -8 0 -15 5 -15 10 0 6 -9 10 -20 10
-11 0 -20 5 -20 10 0 6 -9 10 -20 10 -11 0 -20 4 -20 10 0 5 -11 12 -25 16
-14 3 -25 10 -25 15 0 5 -9 9 -20 9 -11 0 -20 5 -20 10 0 6 -11 10 -25 10 -14
0 -25 3 -25 8 0 4 -20 16 -45 27 -25 11 -45 23 -45 28 0 4 -11 7 -25 7 -14 0
-25 5 -25 10 0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -9 10 -19 10 -11 0
-23 5 -26 10 -3 6 -14 10 -23 10 -9 0 -30 7 -46 15 -15 8 -41 15 -57 15 -16 0
-29 5 -29 10 0 6 -22 10 -50 10 -27 0 -50 4 -50 9 0 14 -115 22 -382 27 -160
3 -238 1 -238 -6 0 -6 -24 -10 -55 -10 -30 0 -55 -4 -55 -10 0 -5 -16 -10 -35
-10 -19 0 -35 -4 -35 -10 0 -5 -9 -10 -20 -10 -22 0 -133 -50 -138 -62 -2 -4
-15 -8 -28 -8 -13 0 -24 -3 -24 -8 0 -4 -14 -13 -31 -21 -17 -7 -41 -24 -54
-37 -13 -13 -29 -24 -35 -24 -5 0 -10 -4 -10 -9 0 -7 -70 -41 -85 -41 -3 0 -5
11 -5 25 0 14 5 25 10 25 6 0 22 10 35 23 38 35 54 47 62 47 5 0 15 9 23 20 8
11 22 20 32 20 10 0 18 3 18 8 0 4 16 16 35 26 19 11 35 23 35 28 0 4 11 8 25
8 14 0 25 5 25 10 0 6 9 10 20 10 11 0 20 4 20 10 0 5 16 12 35 16 19 3 35 10
35 15 0 5 14 9 30 9 17 0 30 5 30 10 0 6 20 10 45 10 25 0 45 4 45 9 0 5 21
11 48 14 26 3 95 10 153 17 85 10 127 10 210 0 57 -7 130 -15 162 -17 31 -3
57 -9 57 -14 0 -5 20 -9 45 -9 25 0 45 -4 45 -10 0 -5 12 -10 26 -10 30 0 127
-31 132 -42 2 -5 17 -8 33 -8 16 0 29 -4 29 -10 0 -5 11 -10 25 -10 14 0 25
-4 25 -10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 8 -10 19 -10 10 0 24 -7
31 -15 7 -8 23 -15 36 -15 13 0 24 -4 24 -10 0 -5 9 -10 20 -10 11 0 20 -4 20
-10 0 -5 11 -10 25 -10 14 0 25 -4 25 -10 0 -5 10 -10 23 -9 l22 0 -22 11
c-13 6 -23 15 -23 20 0 4 -7 8 -15 8 -8 0 -15 5 -15 10 0 6 -5 10 -12 10 -6 0
-26 11 -44 25 -18 14 -37 25 -43 25 -6 0 -11 5 -11 10 0 6 -9 10 -20 10 -11 0
-20 4 -20 8 0 4 -20 16 -45 26 -25 11 -45 23 -45 28 0 4 -11 8 -25 8 -14 0
-25 5 -25 10 0 6 -13 10 -30 10 -16 0 -30 5 -30 10 0 6 -8 10 -17 10 -10 0
-49 12 -88 25 -38 14 -82 25 -97 25 -16 0 -28 5 -28 10 0 6 -37 10 -90 10 -53
0 -90 4 -90 10 0 6 -43 10 -110 10 -67 0 -110 -4 -110 -10z m385 -308 c6 -4
18 -22 28 -40 18 -32 18 -34 1 -60 -26 -40 -40 -52 -62 -52 -11 0 -22 -6 -24
-12 -6 -17 -38 14 -38 36 0 9 -4 16 -10 16 -5 0 -10 11 -10 25 0 14 -4 25 -10
25 -19 0 -10 39 10 45 11 3 20 11 20 16 0 11 80 12 95 1z"/>
<path d="M11385 12440 c-11 -5 -48 -9 -82 -9 -35 -1 -63 -5 -63 -11 0 -5 -20
-10 -45 -10 -25 0 -45 -4 -45 -10 0 -5 -8 -10 -17 -10 -20 0 -108 -32 -119
-43 -4 -4 -16 -7 -26 -7 -10 0 -18 -4 -18 -10 0 -5 -11 -10 -25 -10 -14 0 -25
-4 -25 -8 0 -4 -25 -21 -55 -37 -30 -17 -55 -33 -55 -37 0 -5 -9 -8 -20 -8
-11 0 -20 -4 -20 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -9 -10
-19 -10 -10 0 -21 -7 -25 -15 -3 -8 -12 -15 -21 -15 -8 0 -15 -4 -15 -10 0 -5
-7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10
0 -5 -6 -10 -14 -10 -8 0 -21 -6 -28 -13 -7 -7 -28 -20 -45 -28 -18 -7 -33
-17 -33 -21 0 -5 -6 -8 -13 -8 -8 0 -28 -7 -46 -16 -54 -27 -23 -37 108 -37
98 0 122 3 136 16 9 10 23 17 31 17 8 0 14 5 14 10 0 6 7 10 16 10 9 0 35 20
60 45 24 25 48 45 54 45 5 0 10 5 10 10 0 6 9 10 20 10 11 0 20 3 20 8 0 12
71 34 114 36 36 1 40 -2 52 -34 7 -19 13 -54 13 -77 1 -24 6 -43 11 -43 6 0
10 -16 10 -35 0 -19 5 -35 10 -35 6 0 10 -7 10 -15 0 -8 25 -39 55 -70 30 -30
55 -64 55 -75 0 -18 -7 -20 -55 -20 -30 0 -55 5 -55 10 0 6 -7 10 -16 10 -8 0
-25 5 -37 12 -32 18 -89 38 -109 38 -10 0 -18 5 -18 10 0 6 -8 10 -18 10 -10
0 -42 11 -70 25 -88 43 -131 34 -212 -43 -29 -27 -32 -34 -20 -42 8 -5 23 -10
33 -10 9 0 17 -4 17 -10 0 -5 16 -10 35 -10 19 0 35 -4 35 -10 0 -5 11 -10 24
-10 14 0 28 -4 31 -10 3 -5 15 -10 26 -10 10 0 27 -4 37 -9 52 -26 96 -41 122
-41 17 0 30 -4 30 -10 0 -6 27 -10 60 -10 33 0 60 -4 60 -10 0 -6 72 -10 195
-10 123 0 195 4 195 10 0 6 43 10 110 10 67 0 110 4 110 10 0 6 33 10 78 10
42 0 93 4 112 10 19 5 87 15 150 21 63 6 149 16 190 21 41 5 112 11 158 14 45
3 82 10 82 15 0 5 29 9 64 9 81 0 96 6 96 37 l0 25 -112 -6 c-62 -3 -183 -8
-268 -11 -85 -3 -197 -8 -247 -11 l-93 -6 0 31 c0 17 4 31 9 31 5 0 12 16 15
35 4 19 11 35 16 35 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 14 10 30 0 17 5
30 10 30 6 0 10 11 10 25 0 14 5 25 10 25 6 0 10 8 10 18 0 10 7 27 15 38 8
10 15 27 15 37 0 9 5 17 10 17 6 0 10 9 10 20 0 16 7 20 35 20 19 0 35 -4 35
-10 0 -5 14 -10 30 -10 17 0 30 -4 30 -10 0 -5 9 -10 19 -10 11 0 23 -4 26
-10 3 -5 15 -10 26 -10 10 0 19 -4 19 -10 0 -5 11 -12 25 -16 14 -3 25 -10 25
-15 0 -5 9 -9 20 -9 11 0 20 -4 20 -10 0 -5 5 -10 11 -10 6 0 16 -6 24 -12 7
-7 25 -22 41 -33 15 -11 33 -26 40 -32 7 -7 17 -13 23 -13 13 0 201 -187 201
-200 0 -7 23 -20 36 -20 2 0 4 14 4 30 0 17 -4 30 -10 30 -5 0 -10 9 -10 20 0
17 -22 46 -78 102 -71 71 -153 148 -157 148 -3 0 -11 5 -18 10 -56 47 -74 60
-84 60 -7 0 -13 5 -13 10 0 6 -7 10 -15 10 -8 0 -15 5 -15 10 0 6 -6 10 -14
10 -18 0 -76 32 -76 43 0 4 -9 7 -20 7 -11 0 -20 5 -20 10 0 6 -11 10 -25 10
-14 0 -25 5 -25 10 0 6 -7 10 -15 10 -8 0 -23 4 -33 9 -46 23 -95 41 -112 41
-11 0 -20 5 -20 10 0 6 -20 10 -45 10 -25 0 -45 4 -45 9 0 5 -28 12 -62 16
-106 11 -462 15 -483 5z m-9 -204 c23 -24 18 -83 -11 -112 -32 -32 -92 -57
-119 -50 -39 10 -76 51 -76 85 0 17 5 31 10 31 6 0 10 9 10 20 0 15 7 20 25
20 14 0 25 5 25 10 0 16 119 12 136 -4z"/>
<path d="M13190 9120 c0 -5 -9 -10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -5 -10
-11 -10 -11 0 -117 -105 -156 -156 -13 -15 -23 -34 -23 -41 0 -7 -4 -13 -10
-13 -5 0 -10 -13 -10 -30 0 -16 -4 -30 -9 -30 -19 0 -39 -226 -22 -243 6 -6
11 -30 11 -54 0 -24 5 -43 10 -43 6 0 10 -13 10 -30 0 -16 5 -30 10 -30 6 0
10 -7 10 -15 0 -8 11 -25 25 -39 14 -14 25 -28 25 -32 0 -11 67 -74 79 -74 6
0 11 -4 11 -8 0 -22 114 -62 178 -62 28 0 52 -4 52 -10 0 -5 7 -10 15 -10 21
0 19 13 -6 30 -12 8 -27 20 -33 26 -6 5 -26 17 -43 25 -18 7 -33 17 -33 20 0
4 -13 12 -29 19 -16 6 -39 22 -52 36 -12 13 -27 24 -33 24 -6 0 -22 14 -36 32
-14 17 -31 37 -37 44 -7 7 -13 17 -13 23 0 6 -4 11 -10 11 -5 0 -10 10 -10 23
0 13 -5 28 -12 35 -16 16 -15 255 1 260 6 2 11 17 11 33 0 16 5 29 10 29 6 0
10 11 10 25 0 14 5 25 10 25 6 0 10 9 10 20 0 11 4 20 9 20 5 0 12 8 15 18 4
10 14 27 24 38 9 10 30 37 46 59 17 22 38 47 48 56 20 18 23 29 8 29 -5 0 -10
-4 -10 -10z"/>
<path d="M15480 9114 c0 -9 8 -24 19 -33 10 -9 21 -26 25 -38 4 -13 11 -23 15
-23 4 0 13 -16 21 -35 8 -19 17 -35 22 -35 4 0 8 -9 8 -20 0 -11 5 -20 10 -20
6 0 10 -10 10 -23 0 -13 3 -27 7 -31 10 -10 42 -137 43 -169 0 -37 -32 -157
-42 -157 -4 0 -8 -10 -8 -23 0 -12 -9 -29 -20 -37 -11 -8 -20 -19 -20 -25 0
-11 -74 -95 -84 -95 -7 0 -24 -13 -61 -47 -13 -13 -29 -23 -35 -23 -12 0 -70
-57 -70 -69 0 -12 88 -2 138 16 23 9 42 20 42 24 0 5 9 9 20 9 11 0 20 5 20
10 0 6 5 10 11 10 11 0 39 24 39 34 0 4 14 20 30 38 34 35 60 83 60 110 0 10
5 18 10 18 6 0 10 15 10 34 0 19 5 36 12 38 17 6 18 280 1 285 -7 3 -13 20
-13 39 0 19 -4 34 -10 34 -5 0 -10 5 -10 12 0 6 -11 26 -25 44 -14 18 -25 36
-25 39 0 4 -15 20 -32 36 -49 44 -56 49 -65 49 -5 0 -15 9 -23 20 -17 24 -30
26 -30 4z"/>
<path d="M15170 8520 c-35 -21 -84 -40 -102 -40 -10 0 -18 -4 -18 -10 0 -5 -9
-10 -20 -10 -11 0 -20 -4 -20 -10 0 -5 -5 -10 -10 -10 -10 0 -22 -8 -55 -37
-7 -7 -18 -13 -24 -13 -6 0 -11 -4 -11 -10 0 -5 -7 -10 -16 -10 -9 0 -24 -8
-33 -18 -9 -10 -34 -31 -56 -48 -22 -16 -53 -41 -69 -56 -16 -16 -33 -28 -37
-28 -4 0 -19 -11 -33 -25 -14 -14 -29 -25 -35 -25 -14 0 -71 -34 -71 -42 0 -5
-9 -8 -20 -8 -11 0 -20 -4 -20 -10 0 -5 -11 -10 -25 -10 -14 0 -25 -4 -25 -9
0 -20 -265 -40 -283 -22 -6 6 -26 11 -44 11 -18 0 -33 5 -33 10 0 6 -10 10
-22 10 -23 0 -130 49 -136 63 -2 4 -15 7 -28 7 -13 0 -24 5 -24 10 0 6 -9 10
-20 10 -11 0 -20 5 -20 10 0 6 -8 10 -17 10 -10 0 -27 7 -37 15 -11 8 -26 15
-34 15 -15 0 -92 79 -92 95 0 8 -47 55 -55 55 -6 0 -20 11 -50 38 -7 6 -21 12
-29 12 -9 0 -16 5 -16 10 0 6 -16 10 -35 10 -19 0 -35 5 -35 10 0 6 -33 10
-80 10 -47 0 -80 -4 -80 -10 0 -5 7 -10 15 -10 8 0 15 -4 15 -10 0 -5 9 -10
20 -10 11 0 20 -4 20 -10 0 -5 8 -10 19 -10 10 0 24 -6 30 -13 6 -8 29 -20 51
-27 22 -7 40 -17 40 -22 0 -4 9 -8 20 -8 11 0 20 -4 20 -10 0 -5 6 -10 12 -10
16 0 122 -53 126 -62 2 -5 12 -8 23 -8 14 0 19 -7 19 -25 0 -14 5 -25 10 -25
6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -16 0 -35 126 -124 176
-124 13 0 24 -4 24 -10 0 -6 27 -10 60 -10 33 0 60 -4 60 -10 0 -6 58 -10 155
-10 97 0 155 4 155 10 0 6 20 10 45 10 25 0 45 5 45 10 0 6 10 10 23 10 12 0
42 11 66 25 23 14 49 25 57 25 8 0 14 5 14 10 0 6 9 10 20 10 11 0 20 4 20 9
0 5 8 12 19 16 10 3 33 19 50 35 17 17 33 30 36 30 7 0 26 16 70 58 19 17 37
32 40 32 3 0 17 10 30 23 40 37 54 47 65 47 5 0 10 5 10 10 0 6 9 10 20 10 11
0 20 4 20 8 0 12 93 62 114 62 9 0 16 5 16 10 0 6 20 10 45 10 25 0 45 5 45
10 0 6 11 10 25 10 29 0 33 17 8 36 -20 15 -110 18 -133 4z"/>
<path d="M7538 12882 c-16 -2 -28 -9 -28 -18 0 -8 -4 -14 -10 -14 -5 0 -10
-14 -10 -31 0 -26 3 -30 18 -23 30 13 112 17 112 5 0 -6 7 -11 15 -11 8 0 15
-4 15 -10 0 -5 7 -10 16 -10 15 0 44 -23 44 -35 0 -8 27 -35 35 -35 8 0 55
-47 55 -55 0 -7 14 -24 48 -60 12 -13 22 -29 22 -35 0 -5 5 -10 10 -10 6 0 10
-9 10 -20 0 -11 3 -20 8 -20 10 0 42 -58 42 -76 0 -8 5 -14 10 -14 6 0 10 -9
10 -20 0 -11 4 -20 9 -20 5 0 11 -12 14 -27 3 -16 13 -55 22 -88 9 -33 19 -77
22 -97 3 -21 9 -38 14 -38 5 0 9 -20 9 -45 0 -25 5 -45 10 -45 6 0 10 -22 10
-49 0 -28 5 -53 10 -56 6 -3 10 -23 10 -44 0 -21 7 -60 15 -87 8 -27 15 -75
15 -106 0 -32 5 -58 10 -58 6 0 10 -55 10 -145 0 -90 4 -145 10 -145 6 0 10
-43 10 -109 0 -134 4 -150 32 -119 19 22 20 32 14 168 -4 80 -11 183 -16 230
-6 47 -10 131 -10 188 0 61 -4 102 -10 102 -6 0 -10 43 -10 110 0 61 -4 110
-9 110 -5 0 -11 28 -14 63 -7 85 -22 156 -35 169 -7 7 -12 25 -12 40 0 15 -4
28 -10 28 -5 0 -10 11 -10 25 0 14 -4 25 -10 25 -5 0 -10 8 -10 18 0 9 -11 37
-25 61 -14 23 -25 49 -25 57 0 8 -4 14 -10 14 -5 0 -10 7 -10 15 0 8 -4 15
-10 15 -5 0 -10 7 -10 15 0 9 -11 27 -25 41 -14 14 -25 29 -25 33 0 13 -136
151 -149 151 -6 0 -11 5 -11 10 0 6 -7 10 -15 10 -9 0 -18 7 -21 15 -3 8 -21
20 -40 27 -19 6 -34 15 -34 19 0 8 -64 15 -102 11z"/>
<path d="M7457 12745 c-16 -22 -18 -43 -14 -183 3 -160 21 -323 38 -354 5 -10
9 -43 9 -73 0 -30 5 -55 10 -55 6 0 10 -30 10 -70 0 -38 4 -70 9 -70 5 0 12
-30 15 -67 2 -38 12 -115 21 -173 9 -58 19 -169 22 -247 2 -79 9 -143 14 -143
5 0 9 -72 9 -170 0 -107 -4 -170 -10 -170 -6 0 -10 -28 -10 -65 0 -37 4 -65
10 -65 6 0 10 -28 10 -65 0 -37 4 -65 10 -65 6 0 10 -18 10 -39 0 -22 5 -43
10 -46 6 -3 10 -16 10 -29 0 -12 7 -31 15 -42 8 -10 15 -31 15 -46 0 -16 5
-28 10 -28 6 0 10 -9 10 -20 0 -11 5 -20 10 -20 6 0 10 -7 10 -15 0 -8 4 -15
8 -15 5 0 17 -18 28 -40 10 -22 22 -40 27 -40 4 0 7 -5 7 -10 0 -6 10 -21 23
-34 28 -29 67 -75 67 -79 0 -8 101 -107 110 -107 4 0 29 -20 53 -45 25 -25 48
-45 52 -45 6 0 24 -14 60 -47 13 -13 29 -23 35 -23 5 0 10 -4 10 -10 0 -5 9
-10 20 -10 11 0 20 -4 20 -8 0 -23 90 -41 116 -24 17 10 67 161 60 179 -6 14
-8 14 -24 -1 -10 -9 -24 -16 -30 -16 -7 0 -12 -4 -12 -10 0 -6 -33 -10 -80
-10 -47 0 -80 4 -80 10 0 6 -7 10 -14 10 -8 0 -27 11 -42 25 -15 14 -31 25
-35 25 -11 0 -239 226 -239 237 0 4 -11 20 -25 35 -14 15 -25 34 -25 43 0 8
-4 15 -10 15 -5 0 -10 11 -10 25 0 14 -4 25 -8 25 -11 0 -62 118 -62 143 0 9
-4 17 -10 17 -6 0 -10 28 -10 65 0 36 -4 65 -10 65 -6 0 -11 141 -13 368 -3
285 -8 391 -21 477 -10 61 -20 138 -23 173 -2 34 -9 62 -14 62 -5 0 -9 29 -9
65 0 36 -4 65 -9 65 -5 0 -12 26 -15 58 -10 113 -31 251 -38 258 -5 4 -8 45
-8 91 0 49 -4 83 -10 83 -6 0 -10 42 -10 105 0 63 -4 105 -10 105 -5 0 -10 20
-10 45 0 51 -7 55 -33 20z"/>
<path d="M20980 12821 c-25 -9 -46 -19 -48 -23 -2 -5 -12 -8 -23 -8 -10 0 -19
-4 -19 -10 0 -5 -5 -10 -10 -10 -11 0 -25 -10 -65 -47 -13 -13 -27 -23 -30
-23 -10 0 -125 -120 -125 -130 0 -6 -4 -10 -10 -10 -5 0 -10 -7 -10 -16 0 -8
-6 -22 -12 -29 -37 -41 -58 -80 -58 -105 0 -11 -4 -20 -10 -20 -5 0 -10 -11
-10 -25 0 -14 -4 -25 -10 -25 -5 0 -10 -11 -10 -25 0 -14 -7 -42 -15 -62 -8
-19 -15 -48 -15 -64 0 -16 -4 -29 -10 -29 -5 0 -10 -25 -10 -55 0 -30 -4 -55
-10 -55 -5 0 -10 -24 -10 -53 0 -29 -4 -57 -9 -62 -5 -6 -11 -41 -14 -80 -3
-38 -11 -126 -17 -195 -13 -141 -5 -457 12 -495 20 -44 28 -15 28 101 0 65 4
114 10 114 5 0 11 69 14 163 6 202 21 391 35 437 6 19 11 49 11 67 0 17 5 35
10 38 6 3 10 22 10 41 0 19 5 34 10 34 6 0 10 16 10 35 0 19 5 35 10 35 6 0
10 9 10 20 0 22 50 133 62 138 4 2 8 15 8 28 0 13 5 24 10 24 6 0 10 7 10 16
0 8 6 22 13 29 26 30 37 44 37 50 0 8 47 55 55 55 3 0 21 15 40 33 49 46 63
57 75 57 5 0 10 5 10 10 0 6 9 10 19 10 11 0 21 3 23 8 2 4 20 15 41 25 43 19
166 24 198 6 11 -5 27 -9 35 -7 19 4 -19 47 -61 68 -16 8 -36 21 -43 28 -18
16 -87 13 -142 -7z"/>
<path d="M21047 12307 c-4 -10 -7 -43 -7 -73 0 -30 -4 -54 -10 -54 -6 0 -10
-52 -10 -135 0 -83 -4 -135 -10 -135 -6 0 -10 -65 -10 -174 0 -106 -4 -177
-10 -181 -6 -4 -10 -117 -11 -303 0 -163 -5 -328 -10 -367 -6 -38 -13 -96 -16
-127 -2 -32 -9 -58 -14 -58 -5 0 -9 -20 -9 -45 0 -25 -4 -45 -10 -45 -5 0 -10
-13 -10 -28 0 -16 -11 -52 -25 -80 -14 -29 -25 -61 -25 -72 0 -11 -4 -20 -10
-20 -5 0 -10 -8 -10 -17 0 -9 -25 -40 -55 -69 -30 -29 -55 -56 -55 -59 0 -6
-28 -38 -77 -88 -44 -44 -60 -57 -73 -57 -5 0 -10 -4 -10 -10 0 -5 -9 -10 -20
-10 -11 0 -20 -4 -20 -10 0 -5 -11 -10 -25 -10 -14 0 -25 5 -25 10 0 6 -9 10
-19 10 -11 0 -21 5 -23 11 -5 14 -131 15 -136 0 -2 -6 -12 -11 -23 -11 -10 0
-19 -4 -19 -10 0 -5 -7 -10 -15 -10 -9 0 -40 -25 -70 -57 -41 -41 -55 -64 -55
-85 0 -40 44 -108 70 -108 7 0 21 -11 32 -25 26 -33 42 -22 34 24 -17 93 -17
113 -5 144 19 46 33 57 73 59 25 1 41 -5 55 -20 14 -17 30 -22 68 -22 48 0
103 17 103 33 0 4 6 7 14 7 8 0 31 16 50 35 20 19 41 35 46 35 6 0 10 5 10 10
0 6 4 10 10 10 14 0 83 71 105 108 11 17 23 32 27 32 4 0 8 9 8 20 0 11 5 20
10 20 6 0 10 9 10 20 0 12 15 36 33 55 46 49 57 63 57 75 0 5 5 10 10 10 6 0
10 9 10 19 0 11 4 22 9 26 5 3 12 19 16 35 4 17 11 30 16 30 5 0 9 16 9 35 0
19 5 35 10 35 6 0 10 25 10 55 0 30 4 55 10 55 6 0 11 101 14 258 2 141 10
365 17 497 21 388 13 868 -14 802z"/>
<path d="M14785 6369 c-38 -5 -96 -11 -127 -15 -32 -3 -58 -10 -58 -15 0 -5
-16 -9 -35 -9 -19 0 -43 -4 -53 -9 -35 -18 -190 -41 -277 -41 -92 0 -286 25
-317 41 -10 5 -38 9 -63 9 -25 0 -45 5 -45 10 0 6 -87 10 -240 10 -153 0 -240
-4 -240 -10 0 -5 -20 -10 -45 -10 -24 0 -54 -4 -67 -9 -80 -30 -217 -52 -360
-58 -65 -2 -118 -8 -118 -14 0 -5 -129 -9 -325 -9 -179 0 -325 -4 -325 -8 0
-17 148 -52 248 -59 39 -2 72 -9 72 -14 0 -5 79 -9 185 -9 117 0 185 4 185 10
0 6 27 10 62 10 34 0 75 4 92 9 63 19 172 41 199 41 15 0 27 5 27 10 0 6 23
10 50 10 28 0 50 5 50 10 0 6 19 10 43 10 24 0 48 5 54 11 16 16 296 23 368 9
33 -6 77 -14 98 -17 20 -3 37 -9 37 -14 0 -5 27 -9 60 -9 33 0 60 -4 60 -10 0
-6 80 -10 220 -10 140 0 220 4 220 10 0 6 33 10 80 10 44 0 80 4 80 9 0 5 21
12 48 15 26 3 83 10 127 15 105 13 324 13 450 0 55 -6 135 -13 178 -16 42 -3
77 -9 77 -14 0 -5 29 -9 65 -9 37 0 65 -4 65 -10 0 -5 17 -10 38 -10 20 0 57
-5 82 -11 183 -44 477 -44 583 -1 16 7 39 12 53 12 13 0 24 5 24 10 0 6 16 10
35 10 19 0 35 5 35 10 0 6 11 10 25 10 14 0 25 4 25 9 0 5 15 12 33 15 25 5
29 9 17 16 -10 5 -45 3 -90 -6 -41 -8 -94 -14 -117 -14 -24 0 -43 -4 -43 -10
0 -6 -52 -10 -135 -10 -83 0 -135 -4 -135 -10 0 -5 -11 -10 -25 -10 -14 0 -25
4 -25 9 0 6 -61 12 -137 14 -142 5 -247 17 -296 36 -16 6 -46 11 -68 11 -21 0
-39 5 -39 10 0 6 -20 10 -45 10 -25 0 -45 5 -45 10 0 6 -28 10 -63 10 -35 0
-67 4 -72 9 -14 13 -336 21 -420 10z"/>
</g>
</svg>
                    <div class="bread-journey-heading">
                    <h3 class="pre-crou-head pb-20">Maintenance Stage:</h3>
                        <p class="pro_desc">  <b> The Long Haul </b>The Long Haul: Consistency is the key to enduring beard growth success. Keeping up with your treatments maintains active hair follicles, accelerating growth cycles. Avoid slacking off following the 4 month mark; maintenance is vital. This ensures ongoing enhancements, allowing you to enjoy a full, strong beard indefinitely. The payoff is significant, as patience and consistency are the cornerstones of a well-groomed appearance.
 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Bread Growth treatment journey html end-->
<!-- FAQ START  -->
<section class="faq pb-100">
    <div class="container-xxl container">
        <div class=" text-center faq-head">
            <h2 class="big-heading">Frequently Asked Questions</h2>
            <p>Have Questions? We’re Here to help.</p>
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
                        How does the Beard Growth Kit work?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Our Beard Growth Kit isn't just a product, it's a comprehensive system designed to promote beard growth. The kit comes with all the accessories you need to start your beard growth journey, including Minoxidil solution, a derma roller, and a cleaner for the derma roller. To ensure continued treatment and optimal results, we also provide a continued monthly supply of Minoxidil beard growth solution.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What are the key components of the Beard Growth Kit?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        The Beard Growth Kit includes Minoxidil solution, a derma roller, and a cleaner for the derma roller. Minoxidil is a tried-and-tested solution known for its hair growth-promoting properties. The derma roller aids in the absorption of Minoxidil and stimulates the skin to encourage hair growth. Finally, the cleaner helps maintain the hygiene of your skin and ensures the optimal performance and longevity of the derma roller.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How does each component of the Beard Growth Kit work?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Minoxidil works by extending the growth phase of hair follicles, allowing them to produce thicker and stronger hair strands. The derma roller creates micro-injuries on the skin, stimulating blood flow and activating the skin's healing response, which promotes the growth of new hair follicles. The cleaner ensures your derma roller remains in top condition for effective performance.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                       What are the benefits of Biotin tablets for beard growth?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Biotin, also known as Vitamin B7, is an essential nutrient that supports hair, skin, and nail health. It plays a significant role in enhancing your body's keratin infrastructure, a protein that forms your hair, skin, and nails. Studies suggest that Biotin can aid in improving hair health and growth, making our Biotin tablets an excellent supplement to your beard growth journey.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Will the Beard Growth Kit help me grow a beard faster and fuller?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Yes, indeed! Our Beard Growth Kit is designed to support faster and fuller beard growth. The Minoxidil solution and derma roller work in synergy to extend the growth phase of your hair follicles and stimulate new hair growth. With consistent use of our kit, you can expect to see your beard become thicker and more robust over time.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        What can I expect on my beard growth journey?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Commitment and consistency are key on this journey. Regular and proper use of our Beard Growth Kit can lead to noticeable improvements in your beard's growth and fullness over time. Patience is necessary, but the reward of a fuller, healthier beard is certainly worth the effort. Results can be seen in as soon as 3-6 months.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Are there any beard grooming tips I can follow to enhance growth?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Yes, a few habits can contribute to better beard growth. Regular skin exfoliation, staying hydrated, and maintaining a balanced diet can aid in enhancing beard health. Moreover, make sure to use our Beard Growth Kit regularly and as per the instructions for optimal results. Also, adequate rest and sleep help in the body's natural repair and growth processes. Combining these grooming habits with your Beard Growth Kit regimen can boost your beard growth significantly.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        How can the Beard Growth Kit help fill in a patchy beard?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        If you struggle with a patchy beard, our Beard Growth Kit might be the solution you're looking for. The combination of Minoxidil solution and derma roller stimulates new hair growth and extends the lifespan of your existing hair follicles. Over time, regular and consistent use of the kit can lead to fuller growth in patchy areas, turning sparse hairs into a full and robust beard.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Should I take Biotin tablets along with using the Beard Growth Kit
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Yes, supplementing your beard growth routine with Biotin tablets can potentially enhance your results. Biotin, also known as vitamin B7, plays a critical role in keratin production, a protein that makes up hair, skin, and nails. In deficiency states, biotin has been observed to lead to hair thinning and loss, and its supplementation can contribute to improved hair health and growth. Combining the systemic support from Biotin tablets with the topical treatment from our Beard Growth Kit can create a comprehensive approach to beard growth. However, as with all supplements, it's important to consult with a healthcare professional before starting a new regimen.
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
            <div class="text-white pb-20">
                <h2 class="footer-h2">Get a free consultation</h2>
                <p>Speak with one of our clinicians and get personalised advice. Monday to Friday 9am - 4:30pm</p>
            </div>
            <a class="pure-white-btn" href="{{ url('/questionnaire/31') }}">Get Started </a>
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
@endsection
