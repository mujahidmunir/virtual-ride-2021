<script>
    $('#province').on('change', function () {
        $.get("{{url('api/city')}}/" + this.value, function (data) {
            ClearCity()
            ClearDistrict()
            ClearVillage()
            data.map(function (v) {
                $('#city').append('<option value="' + v.id + '">' + v.city_name + '</option>');
            });

            @if(isset($contract));
            fillSelect($city, {{$contract->city_id}})
            @endif
        })
    })

    $('#city').on('change', function () {
        $.get("{{url('api/district')}}/" + this.value, function (data) {
            ClearDistrict()
            ClearVillage()
            data.map(function (v) {
                $('#district').append('<option value="' + v.id + '">' + v.district_name + '</option>');
            });

            @if(isset($contract));
            fillSelect($district, {{$contract->district_id}})
            @endif
        })
    })

    $('#district').on('change', function () {
        $.get("{{url('api/village')}}/" + this.value, function (data) {
            ClearVillage()
            data.map(function (v) {
                $('#village').append('<option value="' + v.id + '">' + v.village_name + '</option>');
            });

            @if(isset($contract));
            fillSelect($village, {{$contract->village_id}})
            @endif
        })
    })

    function ClearCity() {
        return $('#village').empty() + $('#city').html('<option value="">Pilih Kota</option>')
    }

    function ClearDistrict() {
        return $('#district').empty() + $('#district').append('<option value="">Pilih Kecamatan</option>');

    }

    function ClearVillage() {
        return $('#village').empty() + $('#village').append('<option value="">Pilih Kelurahan / Desa</option>');

    }
</script>
