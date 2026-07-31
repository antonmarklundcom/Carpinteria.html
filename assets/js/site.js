// Constructora Vera — JS compartido: nav, fade-up, FAQ, consent, form-alert
(function(){
  // Mobile nav toggle
  var toggle = document.querySelector('.mobile-nav-toggle');
  var mobileNav = document.querySelector('.mobile-nav');
  if(toggle && mobileNav){
    toggle.addEventListener('click', function(){
      mobileNav.classList.toggle('open');
      var expanded = mobileNav.classList.contains('open');
      toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    });
  }

  // Fade-up on scroll
  var items = document.querySelectorAll('.fade-up');
  if(!('IntersectionObserver' in window)){
    items.forEach(function(el){ el.classList.add('in'); });
  } else {
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(entry, i){
        if(entry.isIntersecting){
          setTimeout(function(){ entry.target.classList.add('in'); }, i * 80);
          io.unobserve(entry.target);
        }
      });
    }, {threshold:0.15});
    items.forEach(function(el){ io.observe(el); });
  }

  // FAQ accordion
  document.querySelectorAll('.faq-item').forEach(function(item){
    var q = item.querySelector('.faq-q');
    if(!q) return;
    q.addEventListener('click', function(){
      var wasOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(function(o){ o.classList.remove('open'); });
      if(!wasOpen) item.classList.add('open');
    });
  });

  // Consent banner
  var consent = document.getElementById('consent');
  if(consent){
    if(!localStorage.getItem('consent-py')){
      consent.classList.add('show');
    }
    var acceptBtn = document.getElementById('consent-accept');
    var rejectBtn = document.getElementById('consent-reject');
    if(acceptBtn){
      acceptBtn.addEventListener('click', function(){
        localStorage.setItem('consent-py', 'accepted');
        consent.classList.remove('show');
      });
    }
    if(rejectBtn){
      rejectBtn.addEventListener('click', function(){
        localStorage.setItem('consent-py', 'rejected');
        consent.classList.remove('show');
      });
    }
  }

  // Resultado del envío del formulario (enviar.php redirige con ?ok=1 / ?error=1)
  var params = new URLSearchParams(window.location.search);
  var id = params.has('ok') ? 'form-ok' : (params.has('error') ? 'form-error' : null);
  if(id){
    var box = document.getElementById(id);
    if(box){
      box.hidden = false;
      box.scrollIntoView({behavior:'smooth', block:'center'});
      history.replaceState(null, '', window.location.pathname + window.location.hash);
    }
  }
})();
