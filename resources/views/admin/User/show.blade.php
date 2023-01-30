<link rel="stylesheet" href="{{asset('dashboard/dropify/dist/css/dropify.min.css')}}">

                        <div class="form-group">
                            <label>{{__('lang.name')}} </label>
                            <input type="text" class="form-control form-control-solid" name="name" value="{{$User->name}}" readonly placeholder="{{__('lang.Users_Name')}}" >
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.phone')}} </label>
                            <input type="text" class="form-control form-control-solid" name="phone" value="{{$User->phone}}"   readonly placeholder="{{__('lang.phone')}}" >
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.email')}} </label>
                            <input type="email" class="form-control hijri-date-input" name="email" value="{{$User->email}}"   readonly value="">
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.address')}}  </label>
                            <input type="text" class="form-control form-control-solid" name="address" value="{{$User->address}}"  readonly placeholder="{{__('lang.address')}}" >
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.Project_location')}}  </label>
                            {{-- https://maps.google.com/?q=<lat>,<lng> --}}
                            <a target="_blank" href="https://maps.google.com/?q={{$project->lat}},{{$project->lng}}" >https://maps.google.com/?q={{$project->lat}},{{$project->lng}}</a>
                         </div>





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

