    function getDepartementByRegion($regions, $departements, $city){
        $departements.empty();
                $departements.append('<option value="0">Tous les départements</option>');
                $departements.prop('disabled', false);

                $city.empty();

                var data = {region: $regions.val(), 
                departement: $departements.val()};

                $.ajax({
                    url: 'liste/getdptbyregion',
                    type:'POST',
                    data: data,
                    dataType: 'json',
                        success:function(json) {
                            $.each(json, function(id) {
                                    $departements.append('<option value="'+ json[id].id +'">'+ json[id].code +' - '+ json[id].labelNormal +'</option>');
                                });
                        },
                        error: function (error) {

                        }
                    });
    }

    function getCityByDepartement($departements){
        var ajaxResult=[];
         
        var data = {departement: $departements.val()};
        
        $.ajax({
            url: 'liste/getcitybydptandregion',
            type:'POST',
            data: data,
            dataType: 'json',
                success:function(json) {
                    $.each(json, function(id) {
                        ajaxResult.push(json[id].labelNormal);                                             
                    });
                },
                error: function (error) {
                    console.log(error);
                }
            });
            
        $('#city_id').autocomplete({
                source : ajaxResult
            });
    }
    
    function getPostalCode($city){

        var ajaxPostalCodeResult=[];

            var dataPostalCode = {city: $city.val()};

            $.ajax({
                url: 'liste/getpostalcodebycity',
                type:'POST',
                data: dataPostalCode,
                dataType: 'json',
                    success:function(json) {
                        $.each(json, function(id) {
                            ajaxPostalCodeResult.push(json[id].value);                                             
                        });
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });

            $('#postalCode_id').autocomplete({
                    source : ajaxPostalCodeResult
                });
    }
    
    $(document).ready(function(){
        var $departements = $('#departement_id');
        var $city = $('#city_id');
        var $cp_id = $('#postalCode_id');
        
        $('[data-toggle="tooltip"]').tooltip();  
        
        if ($departements.val() === '0') {
            $city.prop('disabled', true);
            $cp_id.prop('disabled', true);
        }
        else{
            getCityByDepartement($departements);
            getPostalCode($city, $cp_id);
        }
        
    });
        
    $(document).ready(function(){
        var $regions = $('#region_id');
        var $departements = $('#departement_id');
        var $city = $('#city_id');
        var $cp_id = $('#postalCode_id');
        
        // à la sélection d une région dans la liste
    $regions.on('change', function() {
            $city.val('');
            $cp_id.val('');
        
            getDepartementByRegion($regions, $departements, $city);   
            
                        
        if ($regions.val() === '0') {
            $city.prop('disabled', true);
            $cp_id.prop('disabled', true);
            }
        else{
                $city.prop('disabled', false);
                $cp_id.prop('disabled', false);
            }
        });
        
    $departements.on('change', function() {
            $city.val('');
            $cp_id.val('');
            
        if ($departements.val() === '0') {
            $city.prop('disabled', true);
            $cp_id.prop('disabled', true);
        }
        else{
            $city.prop('disabled', false);
            $cp_id.prop('disabled', false);
            getCityByDepartement($departements);
        }
        
        
        });
        
    $city.on('change', function() {
           $cp_id.val('');
            getPostalCode($city);
        });
        
    });
    