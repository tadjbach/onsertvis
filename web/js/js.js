
    //getDepartementByRegion
    function getDepartementByRegion($regions, $departements, $city){

                $departements.empty();
                $departements.append('<option value="0">Tous les départements</option>');
                $departements.prop('disabled', false);

                $city.empty();

                var data = {region: $regions.val(),
                departement: $departements.val()};

                $.ajax({
                    url: 'annonces-en-cours/getDepartementByRegion',
                    type:'POST',
                    data: data,
                    dataType: 'json',
                        success:function(json) {
                            $.each(json, function(id) {
                                    $departements.append('<option value="'+ json[id].id +'">'+ json[id].code +' - '+ json[id].labelNormal +'</option>');
                                });
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
    }

    //getCityByDepartement
    function getCityByDepartement($departements){
        var ajaxResult=[];

        var data = {departement: $departements.val()};

        $.ajax({
            url: 'annonces-en-cours/getCityByDepartement',
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
                url: 'annonces-en-cours/getPostalCodeByCityAndDepartement',
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
        var $postalCode_Advert_Edit = $('#advert_edit_cpCity');
        var $postalCode_Advert_Add = $('#se_platformbundle_advert_cpCity');
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

        $postalCode_Advert_Edit.on('blur', function() {

            var dataPostalCode = {codepostal: $postalCode_Advert_Edit.val()};

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

            $postalCode_Advert_Add.on('blur', function() {

                var dataPostalCode = {codepostal: $postalCode_Advert_Add.val()};

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
        search:function() {$('#loader-container').show();},
        open: function() {$('#loader-container').hide();},
        close: function() {$('#loader-container').hide();},
        focus: function(event,ui) {},
        select: function(event, ui) {}
    });

    $postalCode_Advert_Edit.autocomplete({

        source : function (request, response) {
            var dataPostalCode = {codepostal: $postalCode_Advert_Edit.val()};
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
        search:function() {$('#loader-container').show();},
        open: function() {$('#loader-container').hide();},
        close: function() {$('#loader-container').hide();},
        focus: function(event,ui) {},
        select: function(event, ui) {}
    });

    $postalCode_Advert_Add.autocomplete({

        source : function (request, response) {
            var dataPostalCode = {codepostal: $postalCode_Advert_Add.val()};
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
        search:function() {$('#loader-container').show();},
        open: function() {$('#loader-container').hide();},
        close: function() {$('#loader-container').hide();},
        focus: function(event,ui) {},
        select: function(event, ui) {}
    });

  });

  $(document).ready(function() {
      $('.navbar a.dropdown-toggle').on('click', function(e) {
          var $el = $(this);
          var $parent = $(this).offsetParent(".dropdown-menu");
          $(this).parent("li").toggleClass('open');

          if(!$parent.parent().hasClass('nav')) {
              $el.next().css({"top": $el[0].offsetTop + 20, "left": $parent.outerWidth() - 104});
          }

          $('.nav li.open').not($(this).parents("li")).removeClass("open");

          return false;
      });
  });
