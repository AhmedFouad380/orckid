<link rel="stylesheet" href="{{asset('dashboard/dropify/dist/css/dropify.min.css')}}">
                    <form class="px-10" novalidate="novalidate" id="kt_form"  method="post" action="{{url('Update_Users')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{__('lang.name')}} </label>
                            <input type="text" class="form-control form-control-solid" name="name" value="{{$User->name}}" required placeholder="{{__('lang.Users_Name')}}" >
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.phone')}} </label>
                            <input type="text" class="form-control form-control-solid" name="phone" value="{{$User->phone}}"   required placeholder="{{__('lang.phone')}}" >
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.email')}} </label>
                            <input type="email" class="form-control hijri-date-input" name="email" value="{{$User->email}}"   required value="">
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.address')}}  </label>
                            <input type="text" class="form-control form-control-solid" name="address" value="{{$User->address}}"  required placeholder="{{__('lang.address')}}" >
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.password')}}  </label>
                            <input  type="text"   style="-webkit-text-security: square;"    class="form-control form-control-solid" name="password" required placeholder="{{__('lang.password')}}" >
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('lang.save')}}</button>
                        </div>
                        <!--begin: Wizard Step 1-->
                        <!--end: Wizard Step 1-->
                        <!--begin: Wizard Step 2-->
                        <!--end: Wizard Step 2-->
                        <!--begin: Wizard Step 3-->
                        <!--end: Wizard Step 3-->
                        <!--begin: Wizard Actions-->
                        <!--end: Wizard Actions-->
                    </form>




<script src="{{asset('dashboard/dropify/dist/js/dropify.min.js')}}"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>

