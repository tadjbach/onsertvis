    
    //getDepartementByRegion
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

    //getCityByDepartement
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
    
    //getPostalCode
    function getPostalCode($city, $departements){

        var ajaxPostalCodeResult=[];

            var dataPostalCode = {city: $city.val(), departement: $departements.val()};

            $.ajax({
                url: 'liste/getpostalcodebycity',
                type:'POST',
                data: dataPostalCode,
                dataType: 'json',
                    success:function(json) {
                        if (json.length === 1) {
                            $('#postalCode_id').val(json[0].value);
                        }
                        else{
                             $.each(json, function(id) {
                            ajaxPostalCodeResult.push(json[id].value);                                             
                        });
                        }
                       
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
        
        $('[data-toggle="tooltip"]').tooltip();  
        
        var $regions = $('#region_id');
        var $departements = $('#departement_id');
        var $city = $('#city_id');
        var $cp_id = $('#postalCode_id');
        
        if ($regions.length > 0) {
                           
        if ($departements.val() === '0') {
            $city.prop('disabled', true);
            $cp_id.prop('disabled', true);
        }
        else{
            getCityByDepartement($departements);
            getPostalCode($city, $departements);
        }
        
        // à la sélection d une région dans la liste
    $regions.on('change', function() {
            $city.val('');
            $cp_id.val('');
        
            getDepartementByRegion($regions, $departements, $city);   
                        
        if ($regions.val() === '0') {
            $city.prop('disabled', true);
            $cp_id.prop('disabled', true);
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
            getPostalCode($city, $departements);
        });
          
     }

        
        var $socityType = $('#fos_user_profile_form_accountType');
        var $postalCode = $('#fos_user_profile_form_cpCity');
        var $siret = $('#fos_user_profile_form_siret');
        
        if ($siret.length > 0) {
            $siret.prop('disabled', true);

            if ($socityType.val() === 'Society') {
               $siret.prop('disabled', false);
            }
        } 
        
        $socityType.on('change', function() {
            $siret.prop('disabled', true);
            
            if ($socityType.val() === 'Society') {
                 $siret.prop('disabled', false);
            }
            else{
                $siret.val('');
            }
        });
        
        var pathPostalCode = $("#pathCpCity").attr("data-path");
        var postalCodeResult=[];

    $postalCode.on('blur', function() {
            
        var dataPostalCode = {codepostal: $postalCode.val()};
             
           $.ajax({
                url: pathPostalCode,
                type:'POST',
                data: dataPostalCode,
                dataType: 'json',
                    success:function(json) {
                         $.each(json, function(id) {
                            postalCodeResult.push(json[id].value +' '+ json[id].city.labelNormal);
                        });
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
        });
        
    $postalCode.autocomplete({
        
        source : function (request, response) {
            var dataPostalCode = {codepostal: $postalCode.val()};
            $.ajax({
                url: pathPostalCode,
                type:'POST',
                data: dataPostalCode,
                dataType: 'json',
                    success:function(json) {
                        postalCodeResult=[];
                        $.each(json, function(id) {
                            postalCodeResult.push(json[id].value + ' ' + json[id].city.labelNormal);
                        });
                         response(postalCodeResult);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
        },
        minLength: 2,
        open: function() {},
        close: function() {},
        focus: function(event,ui) {},
        select: function(event, ui) {}
    });
    
  });
    