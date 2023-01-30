<form method="post" action="/update_User_shifts">
    @csrf
    <div class="col-xl-12">
        <div class="kt-section__body">

            <input class="form-control" type="hidden" name="id" value="{{$emp->id}}">


            @foreach($shifts as $shifts)

                <div class="form-group">
                    <strong>{{$shifts->name}}</strong>
                    <div style="padding-right: 50px">
                        <label class="switch">
                            <input type="hidden" name="shift_id" id='shift_id'>


                            {{ Form::checkbox('shifts[]',$shifts->id , in_array($shifts->id, $old_shifts)?true:false)  }}

                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.Bonuses_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.Bonuses_Save')}}</button>
    </div>
</form>



