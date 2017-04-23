
//Tool Tip
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
    
//Get Departement list by region
    $(document).ready(function() {
        var $regions = $('#region_id');
        var $departements = $('#departement_id');
        var $city = $('#city_id');
        var ajaxResult=[];

        // à la sélection d une région dans la liste
    $regions.on('change', function() {
            $departements.empty();
            $departements.append('<option value="0">Tous les départements</option>');
            $departements.prop('disabled', false);
            
            $city.empty();
            ajaxResult=[];
            
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
        });
        
    $departements.on('change', function() {
        
        $city.empty();
        ajaxResult=[];
        
        var data = {region: $regions.val(), 
            departement: $departements.val()};
        
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
        });
        
         $('#city_id').autocomplete({
            source : ajaxResult
        });
        
    });
    