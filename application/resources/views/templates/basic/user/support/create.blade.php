@extends($activeTemplate.'layouts.master')
@section('content')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66de8486ea492f34bc0fb92d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<div class="dashboard py-80 section-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 pe-xl-4">
                @include($activeTemplate.'partials.sidebar')
            </div>
            <div class="col-xl-9 col-lg-12">
                <div class="dashboard-body">
                    <!-- <div class="dashboard-body__bar">
                        <span class="dashboard-body__bar-icon"><i class="las la-bars"></i></span>
                    </div> -->
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-12">
                            <div class="user-profile">
                                <form action="{{route('ticket.store')}}" method="post" enctype="multipart/form-data"
                                onsubmit="return submitUserForm();">
                                @csrf
                                    <div class="row gy-3">
                                        <div class="col-lg-12">
                                            <h4 class="mb-1">@lang('Open New Ticket')</h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name" class="form--label required">@lang(' Full Name')</label>
                                                <input type="text" name="name" value="{{@$user->firstname . ' '.@$user->lastname}}"
                                                class="form-control form--control" required readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email" class="form--label required">@lang('Your Email') </label>
                                                <input type="email" name="email" value="{{@$user->email}}"
                                    class="form-control form--control" required readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="country" class="form--label required">@lang('Subject') </label>
                                                <input type="text" name="subject" value="{{old('subject')}}"
                                                class="form-control form--control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label required" for="gateway">@lang('Importance')</label>
                                                <select name="priority"  class="select form--control" id="gateway">
                                                    <option value="3">@lang('Top')</option>
                                                    <option value="2">@lang('Middle')</option>
                                                    <option value="1">@lang('Base')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="email" class="form--label required">@lang('Message')</label>
                                                <textarea name="message" id="inputMessage" rows="6" class="form-control form--control"
                                    required>{{old('message')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <button type="submit" class="btn btn--base btn--sm addFile">@lang('Add File') <i class="las la-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="attachment_wrapper mb-4">
                                            <div class="form-group profile mb-15">
                                                <label class="form-label">@lang('Attachments')</label> <small
                                                class="text-danger">@lang('Max 5 files can be uploaded'). @lang('Maximum upload size
                                                is') {{ ini_get('upload_max_filesize') }}</small>
                                                
                                            <input type="file" name="attachments[]" id="inputAttachments"
                                                class="form-control form--control mb-2" />
                                            <div id="fileUploadsContainer"></div>
                                            <p class="ticket-attachments-message text-muted">
                                                @lang('Allowed File Extensions'): .@lang('jpg'), .@lang('jpeg'), .@lang('png'),
                                                .@lang('pdf'), .@lang('doc'), .@lang('docx')
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class= "btn btn--base w-100">@lang('Submit')</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('style')
<style>
    .input-group-text:focus {
        box-shadow: none !important;
    }
</style>
@endpush

@push('script')
<script>
    (function ($) {
        "use strict";
        var fileAdded = 0;
        $('.addFile').on('click', function () {
            if (fileAdded >= 4) {
                notify('error', 'You\'ve added maximum number of file');
                return false;
            }
            fileAdded++;
            $("#fileUploadsContainer").append(`
                    <div class="input-group my-3">
                        <input type="file" name="attachments[]" class="form-control form--control" required />
                        <button class="input-group-text btn-danger remove-btn"><i class="las la-times"></i></button>
                    </div>
                `)
        });
        $(document).on('click', '.remove-btn', function () {
            fileAdded--;
            $(this).closest('.input-group').remove();
        });
    })(jQuery);
</script>
@endpush
