<select name="" id="country">
    <option value="">Select Country</option>
    @foreach($countries as $country)
        <option value="{{$country->id}}">{{$country->country_name}}</option>
    @endforeach
</select>

<select name="" id="state">
    <option value="">Select State</option>
</select>

<select name="" id="city">
    <option value="">Select City</option>
</select>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#country').change(function() {
            let country_id = $(this).val();
            $('#city').html('<option value="">Select City</option>');
            $.ajax({
                url:'/getState',
                type:'post',
                data:'country_id=' + country_id + '&_token={{csrf_token()}}',
                success:function(result) {
                    $('#state').html(result)
                } 
            });
        });

        $('#state').change(function() {
            let state_id = $(this).val();
            $.ajax({
                url:'/getCity',
                type:'post',
                data:'state_id=' + state_id + '&_token={{csrf_token()}}',
                success:function(result) {
                    $('#city').html(result)
                } 
            });
        });
    });
</script>