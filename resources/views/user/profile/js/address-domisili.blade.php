<script>

    $("#agree").click(function(){
        if($(this).prop("checked") == true){
            $('#dom_province').prop("disabled", true).prop("reqired", false);
            $('#dom_city').prop("disabled", true).prop("reqired", false);
            $('#dom_district').prop("disabled", true).prop("reqired", false);
            $('#dom_village').prop("disabled", true).prop("reqired", false);
            $('#dom_address').prop("disabled", true).prop("reqired", false);


        }
        else if($(this).prop("checked") == false){
            $('#dom_province').prop("disabled", false).prop("required", true);
            $('#dom_city').prop("disabled", false).prop("required", true);
            $('#dom_district').prop("disabled", false).prop("required", true);
            $('#dom_village').prop("disabled", false).prop("required", true);
            $('#dom_address').prop("disabled", false).prop("required", true);




        }
    });



    $('#dom_province').on('change', function () {
        $.get("{{url('api/city')}}/" + this.value, function (data) {
            ClearDomCity()
            ClearDomDistrict()
            ClearDomVillage()
            data.map(function (v) {
                $('#dom_city').append('<option value="' + v.id + '">' + v.city_name + '</option>');
            });

            @if(isset($contract));
            fillSelect($city, {{$contract->city_id}})
            @endif
        })
    })

    $('#dom_city').on('change', function () {
        $.get("{{url('api/district')}}/" + this.value, function (data) {
            ClearDomDistrict()
            ClearDomVillage()
            data.map(function (v) {
                $('#dom_district').append('<option value="' + v.id + '">' + v.district_name + '</option>');
            });

            @if(isset($contract));
            fillSelect($district, {{$contract->district_id}})
            @endif
        })
    })

    $('#dom_district').on('change', function () {
        $.get("{{url('api/village')}}/" + this.value, function (data) {
            ClearDomVillage()
            data.map(function (v) {
                $('#dom_village').append('<option value="' + v.id + '">' + v.village_name + '</option>');
            });

        })
    })

    function ClearDomCity() {
        return $('#dom_village').empty() + $('#dom_city').html('<option value="">Pilih Kota</option>')
    }

    function ClearDomDistrict() {
        return $('#dom_district').empty() + $('#dom_district').append('<option value="">Pilih Kecamatan</option>');

    }

    function ClearDomVillage() {
        return $('#dom_village').empty() + $('#dom_village').append('<option value="">Pilih Kelurahan / Desa</option>');

    }



</script>
