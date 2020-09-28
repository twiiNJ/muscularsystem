/*****************************/
/*****************************/
/****** SHOW/HIDE STLYE ******/
$(document).ready(function () {
  $(".person").click(function () { /** WHEN USER CLICKS (THIS) DO **/
    $('#personSHOW').css({'display': 'block'}); /** (THIS) DISPLAY: BLOCK **/
    $('#muscleListSHOW').css({'display': 'none'}); /** (THIS) DISPLAY: NONE **/
  });
});

$(document).ready(function () {
  $(".list").click(function () { /** WHEN USER CLICKS (THIS) DO **/
    $('#muscleListSHOW').css({'display': 'block'}); /** (THIS) DISPLAY: BLOCK **/
    $('#personSHOW').css({'display': 'none'}); /** (THIS) DISPLAY: NONE **/
  });
});

$(document).ready(function () {
  $("#changeView div").click(function () { /** WHEN USER CLICK (THIS) DO **/
      $('#changeView div').removeClass('styleActive'); /** REMOVE CLASS FROM (THIS) **/
      $(this).addClass('styleActive'); /** ADD CLASS ON (THIS) **/
  });
});
/******************************/
/******************************/
/****** SHOW MUSCLE INFO ******/

/** find_BICEPS **/
$(document).ready(function () {
  $(".Biceps__Main").click(function () { /** WHEN USER CLICKS (THIS) DO **/

    $('#muscleContent').load('muscle-info/biceps.php') /** LOAD (THIS) MUSCLE INTO #muscleContent **/
    $('#muscleContent section').not('#biceps__info').hide() /** HIDE EVERY MUSCLE BUT .not (THIS) **/

    $('.biceps_list').addClass('theListActive'); /** ADD ACTIVE CLASS TO WHAT MUSCLE USER CLICKS ON IN THE LIST **/
    $('#Biceps__Main').children().addClass('muscleActive'); /** ADD ACTIVE CLASS TO WHAT MUSCLE USER CLICKS ON THE BODY **/
    $('#muscleName').text('Biceps'); /** CHANGE muscle name to (THIS) **/

    $('.theList a p').not('.biceps_list').removeClass('theListActive'); /** REMOVE ACTIVE CLASS FROM LIST WHEN USER CLICKS ON ANOTHER MUSCLE **/
    $('#muscularSystem g').not('#Biceps__Main').children().removeClass('muscleActive'); /** REMOVE ACTIVE CLASS FROM BODY WHEN USER CLICKS ON ANOTHER MUSCLE **/
  });

  $('.Biceps__Main').hover( /** WHEN USER HOVER (THIS) DO **/
    function () {
      $('#muscleName').text("Biceps"); /** muslce name ON HOVER, HOVER ON **/
    },
    function () {
      $('#muscleName').text('Biceps'); /** muslce name ON HOVER, HOVER OFF **/
    });
});

/** find_EXTENSOR_CARPI_ULNARIS **/
$(document).ready(function () {
  $(".Extensor_Carpi_Ulnaris__Main").click(function () {

    $('#muscleContent').load('muscle-info/Extensor_Carpi_Ulnaris.php')
    $('#muscleContent section').not('#Extensor_Carpi_Ulnaris__info').hide()

    $('.Extensor_Carpi_Ulnaris_list').addClass('theListActive');
    $('#Extensor_Carpi_Ulnaris__Main').children().addClass('muscleActive');
    $('#muscleName').text('Extensor Carpi Ulnaris');

    $('.theList a p').not('.Extensor_Carpi_Ulnaris_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Extensor_Carpi_Ulnaris__Main').children().removeClass('muscleActive');
  });

  $('.Extensor_Carpi_Ulnaris__Main').hover(
    function () {
      $('#muscleName').text("Extensor Carpi Ulnaris");
    },
    function () {
      $('#muscleName').text('Extensor Carpi Ulnaris');
    });
});

/** find_BRACHIORADIALIS **/
$(document).ready(function () {
  $(".Brachioradialis__Main").click(function () {

    $('#muscleContent').load('muscle-info/Brachioradialis.php')
    $('#muscleContent section').not('#Brachioradialis__info').hide()

    $('.Brachioradialis_list').addClass('theListActive');
    $('#Brachioradialis__Main').children().addClass('muscleActive');
    $('#muscleName').text('Brachioradialis');

    $('.theList a p').not('.Brachioradialis_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Brachioradialis__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Brachioradialis__info').hide()
  });

  $('.Brachioradialis__Main').hover(
    function () {
      $('#muscleName').text("Brachioradialis");
    },
    function () {
      $('#muscleName').text('Brachioradialis');
    });
});

/** find_FLEXOR_CARPI_RADIALIS **/
$(document).ready(function () {
  $(".Flexor_Carpi_Radialis__Main").click(function () {

    $('#muscleContent').load('muscle-info/Flexor_Carpi_Radialis.php')
    $('#muscleContent section').not('#Flexor_Carpi_Radialis__info').hide()

    $('.Flexor_Carpi_Radialis_list').addClass('theListActive');
    $('#Flexor_Carpi_Radialis__Main').children().addClass('muscleActive');
    $('#muscleName').text('Flexor Carpi Radialis');

    $('.theList a p').not('.Flexor_Carpi_Radialis_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Flexor_Carpi_Radialis__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Flexor_Carpi_Radialis__info').hide()
  });

  $('.Flexor_Carpi_Radialis__Main').hover(
    function () {
      $('#muscleName').text("Flexor Carpi Radialis");
    },
    function () {
      $('#muscleName').text('Flexor Carpi Radialis');
    });
});

/** find_BRACHIALIS **/
$(document).ready(function () {
  $(".Brachialis__Main").click(function () {

    $('#muscleContent').load('muscle-info/Brachialis.php')
    $('#muscleContent section').not('#Brachialis__info').hide()

    $('.Brachialis_list').addClass('theListActive');
    $('#Brachialis__Main').children().addClass('muscleActive');
    $('#muscleName').text('Brachialis');

    $('.theList a p').not('.Brachialis_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Brachialis__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Brachialis__info').hide()
  });

  $('.Brachialis__Main').hover(
    function () {
      $('#muscleName').text("Brachialis");
    },
    function () {
      $('#muscleName').text('Brachialis');
    });
});

/** find_SARTORIUS **/
$(document).ready(function () {
  $(".Sartorius__Main").click(function () {

    $('#muscleContent').load('muscle-info/Sartorius.php')
    $('#muscleContent section').not('#Sartorius__info').hide()

    $('.Sartorius_list').addClass('theListActive');
    $('#Sartorius__Main').children().addClass('muscleActive');
    $('#muscleName').text('Sartorius');

    $('.theList a p').not('.Sartorius_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Sartorius__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Sartorius__info').hide()
  });

  $('.Sartorius__Main').hover(
    function () {
      $('#muscleName').text("Sartorius");
    },
    function () {
      $('#muscleName').text('Sartorius');
    });
});

/** find_DELTOID **/
$(document).ready(function () {
  $(".Deltoid__Main").click(function () {

    $('#muscleContent').load('muscle-info/Deltoid.php')
    $('#muscleContent section').not('#Deltoid__info').hide()

    $('.Deltoid_list').addClass('theListActive');
    $('#Deltoid__Main').children().addClass('muscleActive');
    $('#muscleName').text('Deltoid');

    $('.theList a p').not('.Deltoid_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Deltoid__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Deltoid__info').hide()
  });

  $('.Deltoid__Main').hover(
    function () {
      $('#muscleName').text("Deltoid");
    },
    function () {
      $('#muscleName').text('Deltoid');
    });
});

/** find_STERNOCLEIDOMASTOID **/
$(document).ready(function () {
  $(".Sternocleidomastoid__Main").click(function () {

    $('#muscleContent').load('muscle-info/Sternocleidomastoid.php')
    $('#muscleContent section').not('#Sternocleidomastoid__info').hide()

    $('.Sternocleidomastoid_list').addClass('theListActive');
    $('#Sternocleidomastoid__Main').children().addClass('muscleActive');
    $('#muscleName').text('Sternocleidomastoid');

    $('.theList a p').not('.Sternocleidomastoid_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Sternocleidomastoid__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Sternocleidomastoid__info').hide()
  });

  $('.Sternocleidomastoid__Main').hover(
    function () {
      $('#muscleName').text("Sternocleidomastoid");
    },
    function () {
      $('#muscleName').text('Sternocleidomastoid');
    });
});

/** find_TRAPEZIUS **/
$(document).ready(function () {
  $(".Trapezius__Main").click(function () {

    $('#muscleContent').load('muscle-info/Trapezius.php')
    $('#muscleContent section').not('#Trapezius__info').hide()

    $('.Trapezius_list').addClass('theListActive');
    $('#Trapezius__Main').children().addClass('muscleActive');
    $('#muscleName').text('Trapezius');

    $('.theList a p').not('.Trapezius_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Trapezius__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Trapezius__info').hide()
  });

  $('.Trapezius__Main').hover(
    function () {
      $('#muscleName').text("Trapezius");
    },
    function () {
      $('#muscleName').text('Trapezius');
    });
});

/** find_PEXTORALIS_MAJOR **/
$(document).ready(function () {
  $(".Pectoralis_Major__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/Pectoralis_Major.php')
    $('#muscleContent section').not('#Pectoralis_Major__info').hide()

    $('.Pectoralis_Major_list').addClass('theListActive');
    $('#Pectoralis_Major__Main').children().addClass('muscleActive');
    $('#muscleName').text('Pectoralis Major');

    $('.theList a p').not('.Pectoralis_Major_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Pectoralis_Major__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Pectoralis_Major__info').hide()
  });

  $('.Pectoralis_Major__Main').hover(
    function () {
      $('#muscleName').text("Pectoralis Major");
    },
    function () {
      $('#muscleName').text('Pectoralis Major');
    });
});

/** find_EXTERNAL_OBLIQUE **/
$(document).ready(function () {
  $(".External_Oblique__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/External_Oblique.php')
    $('#muscleContent section').not('#External_Oblique__info').hide()

    $('.External_Oblique_list').addClass('theListActive');
    $('#External_Oblique__Main').children().addClass('muscleActive');
    $('#muscleName').text('External Oblique');

    $('.theList a p').not('.External_Oblique_list').removeClass('theListActive')
    $('#muscularSystem g').not('#External_Oblique__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#External_Oblique__info').hide()
  });

  $('.External_Oblique__Main').hover(
    function () {
      $('#muscleName').text("External Oblique");
    },
    function () {
      $('#muscleName').text('External Oblique');
    });
});

/** find_RECTUS_ABDOMINUS **/
$(document).ready(function () {
  $(".Rectus_Abdominus__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/Rectus_Abdominus.php')
    $('#muscleContent section').not('#Rectus_Abdominus__info').hide()

    $('.Rectus_Abdominus_list').addClass('theListActive');
    $('#Rectus_Abdominus__Main').children().addClass('muscleActive');
    $('#muscleName').text('Rectus Abdominus');

    $('.theList a p').not('.Rectus_Abdominus_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Rectus_Abdominus__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Rectus_Abdominus__info').hide()
  });

  $('.Rectus_Abdominus__Main').hover(
    function () {
      $('#muscleName').text("Rectus Abdominus");
    },
    function () {
      $('#muscleName').text('Rectus Abdominus');
    });
});

/** find_GLUTEUS_MEDIUS **/
$(document).ready(function () {
  $(".Gluteus_Medius__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/Gluteus_Medius.php')
    $('#muscleContent section').not('#Gluteus_Medius__info').hide()

    $('.Gluteus_Medius_list').addClass('theListActive');
    $('#Gluteus_Medius__Main').children().addClass('muscleActive');
    $('#muscleName').text('Gluteus Medius');

    $('.theList a p').not('.Gluteus_Medius_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Gluteus_Medius__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Gluteus_Medius__info').hide()
  });

  $('.Gluteus_Medius__Main').hover(
    function () {
      $('#muscleName').text("Gluteus Medius");
    },
    function () {
      $('#muscleName').text('Gluteus Medius');
    });
});

/** find_RECTUS_ABDOMINUS **/
$(document).ready(function () {
  $(".Rectus_Abdominus__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/Rectus_Abdominus.php')
    $('#muscleContent section').not('#Rectus_Abdominus__info').hide()

    $('.Rectus_Abdominus_list').addClass('theListActive');
    $('#Rectus_Abdominus__Main').children().addClass('muscleActive');
    $('#muscleName').text('Rectus Abdominus');

    $('.theList a p').not('.Rectus_Abdominus_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Rectus_Abdominus__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Rectus_Abdominus__info').hide()
  });

  $('.Rectus_Abdominus__Main').hover(
    function () {
      $('#muscleName').text("Rectus Abdominus");
    },
    function () {
      $('#muscleName').text('Rectus Abdominus');
    });
});

/** find_RECTUS_FEMORALIST **/
$(document).ready(function () {
  $(".Rectus_Femoralist__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/Rectus_Femoralist.php')
    $('#muscleContent section').not('#Rectus_Femoralist__info').hide()

    $('.Rectus_Femoralist_list').addClass('theListActive');
    $('#Rectus_Femoralist__Main').children().addClass('muscleActive');
    $('#muscleName').text('Rectus Femoralist');

    $('.theList a p').not('.Rectus_Femoralist_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Rectus_Femoralist__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Rectus_Femoralist__info').hide()
  });

  $('.Rectus_Femoralist__Main').hover(
    function () {
      $('#muscleName').text("Rectus Femoralist");
    },
    function () {
      $('#muscleName').text('Rectus Femoralist');
    });
});

/** find_VASTUS_MEDIALIS **/
$(document).ready(function () {
  $(".Vastus_medialis__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/Vastus_medialis.php')
    $('#muscleContent section').not('#Vastus_medialis__info').hide()

    $('.Vastus_medialis_list').addClass('theListActive');
    $('#Vastus_medialis__Main').children().addClass('muscleActive');
    $('#muscleName').text('Vastus Medialis');

    $('.theList a p').not('.Vastus_medialis_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Vastus_medialis__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Vastus_Medialis__info').hide()
  });

  $('.Vastus_medialis__Main').hover(
    function () {
      $('#muscleName').text("Vastus Medialis");
    },
    function () {
      $('#muscleName').text('Vastus Medialis');
    });
});

/** find_RECTUS_LATERALIS **/
$(document).ready(function () {
  $(".Vastus_Lateralis__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/Vastus_Lateralis.php')
    $('#muscleContent section').not('#Vastus_Lateralis__info').hide()

    $('.Vastus_Lateralis_list').addClass('theListActive');
    $('#Vastus_Lateralis__Main').children().addClass('muscleActive');
    $('#muscleName').text('Vastus Lateralis');

    $('.theList a p').not('.Vastus_Lateralis_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Vastus_Lateralis__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Vastus_Lateralis__info').hide()
  });

  $('.Vastus_Lateralis__Main').hover(
    function () {
      $('#muscleName').text("Vastus Lateralis");
    },
    function () {
      $('#muscleName').text('Vastus Lateralis');
    });
});

/** find_GASTROCNEMIUS **/
$(document).ready(function () {
  $(".Gastrocnemius__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/Gastrocnemius.php')
    $('#muscleContent section').not('#Gastrocnemius__info').hide()

    $('.Gastrocnemius_list').addClass('theListActive');
    $('#Gastrocnemius__Main').children().addClass('muscleActive');
    $('#muscleName').text('Gastrocnemius');

    $('.theList a p').not('.Gastrocnemius_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Gastrocnemius__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Gastrocnemius__info').hide()
  });

  $('.Gastrocnemius__Main').hover(
    function () {
      $('#muscleName').text("Gastrocnemius");
    },
    function () {
      $('#muscleName').text('Gastrocnemius');
    });
});

/** find_SOLEUS **/
$(document).ready(function () {
  $(".Soleus__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/Soleus.php')
    $('#muscleContent section').not('#Soleus__info').hide()

    $('.Soleus_list').addClass('theListActive');
    $('#Soleus__Main').children().addClass('muscleActive');
    $('#muscleName').text('Soleus');

    $('.theList a p').not('.Soleus_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Soleus__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Soleus__info').hide()
  });

  $('.Soleus__Main').hover(
    function () {
      $('#muscleName').text("Soleus");
    },
    function () {
      $('#muscleName').text('Soleus');
    });
});

/** find_TABIALIS_ANTERIOR **/
$(document).ready(function () {
  $(".Tabialis_Anterior__Main").click(function () {
    
    $('#muscleContent').load('muscle-info/Tabialis_Anterior.php')
    $('#muscleContent section').not('#Tabialis_Anterior__info').hide()

    $('.Tabialis_Anterior_list').addClass('theListActive');
    $('#Tabialis_Anterior__Main').children().addClass('muscleActive');
    $('#muscleName').text('Tabialis Anterior');

    $('.theList a p').not('.Tabialis_Anterior_list').removeClass('theListActive')
    $('#muscularSystem g').not('#Tabialis_Anterior__Main').children().removeClass('muscleActive');
    $('#muscleContent section').not('#Tabialis_Anterior__info').hide()
  });

  $('.Tabialis_Anterior__Main').hover(
    function () {
      $('#muscleName').text("Tabialis Anterior");
    },
    function () {
      $('#muscleName').text('Tabialis Anterior');
    });
});