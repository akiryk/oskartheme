(function ($) {
  var $expand = $('#expand-languages'),
    $selectedLanguage = $('#selected-language'),
    $mainSelectLanguage = $('#main-select-language'),
    $currActive,
    $currText,
    $languages,
    origHeight = "58px",
    TIME_LAG = 2800;


  $expand.click(function(){
    if ( $(window).width() > 768){
      var $this = $(this);
      $this.toggleClass('expanded');
      if ($this.hasClass('expanded')){
        $this.animate({ height: "17rem"}, 250, function(){
          // anim complete
          $mainSelectLanguage.fadeIn(200);
        }).css('overflow', 'visible');

      } else {
        $(this).animate({ height: origHeight}, 250).css('overflow', 'visible');
        $mainSelectLanguage.slideUp(200);
      }
    }
  });

  function sendToPage(page){
    window.location.href = page;
  };

  function sendToFrenchPage(){
    sendToPage('http://language-up.com/?page_id=2');
  };

  function sendToOtherPage(){
    sendToPage('http://language-up.com/?page_id=20');
  };

  $('#go-phrase').on('click', function(){
    $('#load-view').css('display', 'block');
    language = language != 'Other' ? language: "whatever you'd like";
    $('#load-language').text(language);
    var fn = sendToOtherPage;
    if (language == 'French'){
      fn = sendToFrenchPage;
    }
    setTimeout( fn, TIME_LAG);
  });

  $reasonText = $('#reason-text');

  $('.demo-only').on('click', function(){
    var reason = $(this).attr('data-reason');
    $reasonText.text(reason);
    $('#demo-only').fadeIn('fast');
  });

  $('.close-demo-only').click(function(){
    $('#demo-only').fadeOut('fast');
  });

  var heros = [

    {
      place: 'paris1',
      language: 'French',
      phrase: 'Allez-y!'
    },
    {
      place: 'mexico1',
      language: 'Spanish',
      phrase: '&iexcl;Vamos!'
    },
    {
      place: 'china1',
      language: 'Mandarin',
      phrase: 'Qu ba!'
    },
    {
      place: 'germany1',
      language: 'German',
      phrase: 'Gehen wir!'
    },
    {
      place: 'israel1',
      language: 'Hebrew',
      phrase: 'Yalla!'
    },
    {
      place: 'other1',
      language: 'Other',
      phrase: 'Get Started!'
    }
  ];

  var language;
  var hero;

  function showHero(i){
    var id = undefined ? 1: i;
    hero = '#' + heros[id].place;
    $(hero).fadeIn();
  };

  function setText(i){
    var id = undefined ? 1: i;
    language = heros[id].language;
    $('#selected-language').html(language);
    var langId = '#' + language.toLocaleLowerCase();
    $(langId).addClass('active plus');
    $currActive = $mainSelectLanguage.find('.active');
    $languages = $('#main-select-language').find('li');
    $currText = $currActive.text();
    $('#go-phrase').html(heros[id].phrase)
  };

  function getHero(){
    var i = 0; //Math.floor(Math.random() * heros.length);
    showHero(i);
    setText(i);
  };

  getHero();

  $mainSelectLanguage.on('click', 'li', function(e){
    $currText = $(this).text();
    var id = $(this).attr('data-id');
    if (id !== undefined){
      console.log(id);
      // fade out old hero image then fade in the new one:
      $(hero).fadeOut( function () {
        showHero(id);
        setText(id);
      });
    } else {
      showHero(1);
      setText(1);
    }
    setText(id);
    $currActive.removeClass('plus');
    $(this).addClass('plus');
    language = $currText;
    $selectedLanguage.text(language);
    $currActive = $(this);
  });

  $mainSelectLanguage.on('mouseover', 'li', function(e){
    event.preventDefault();
    $languages.removeClass('active');
    $( this ).addClass('active');
    $selectedLanguage.text($(this).text());
  });

  $mainSelectLanguage.on('mouseout', 'li', function(e){
    event.preventDefault();
    $(this).removeClass('active');
    $currActive.addClass('active');
    $selectedLanguage.text(language);
  });

  $('.revealer a').click(function(){
    $(this).parent().parent().find('.hidden').slideToggle(100);
  });
})(jQuery);