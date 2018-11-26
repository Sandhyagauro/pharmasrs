@foreach($pharmacist_lists as $pharmacist)
<section class="section section-height-1 bg-light-5 mt-2 mb-2" required>
    <div class="row pharmacist-list">
        <div class="pharmacist-radio">
            <input type="radio" class="radio"
                   name="pharmacist_id"
                   value="{{$pharmacist->id}}"></div>
        <div class="col-md-1" style="margin: 3px"><img src="{{$pharmacist->image}}"></div>
        <div class="col-md-5"><h4 class="font-weight-semibold mb-0">

                <label>{{$pharmacist->name}}</label>
            </h4>
            <p class="font-weight-light mb-0">{{$pharmacist->speciality}}</p>
        </div>
    </div>
</section>
@endforeach