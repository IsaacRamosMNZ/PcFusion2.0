// menu.js - responsável por controlar o menu hambúrguer de forma consistente e acessível
(function(){
  function initMenu(){
    const SELECTORS = {
      nav:'#nav-menu',
      btn:'.hamburger',
      links:'#nav-menu a'
    };

    const nav = document.querySelector(SELECTORS.nav);
    const btn = document.querySelector(SELECTORS.btn);
    const links = Array.from(document.querySelectorAll(SELECTORS.links));

    if(!nav || !btn) return;

    let lastFocused = null;

    function setButtonIcon(icon){
      btn.innerHTML = `<i class="fas ${icon}" aria-hidden="true"></i>`;
    }

    function openMenu(){
      nav.classList.add('active');
      btn.setAttribute('aria-expanded','true');
      btn.setAttribute('aria-label','Fechar menu');
      document.body.classList.add('menu-open');
      lastFocused = document.activeElement;
      const first = nav.querySelector('a');
      if(first) first.focus();
      setButtonIcon('fa-xmark');
    }

    function closeMenu(){
      nav.classList.remove('active');
      btn.setAttribute('aria-expanded','false');
      btn.setAttribute('aria-label','Abrir menu');
      document.body.classList.remove('menu-open');
      try{ if(lastFocused) lastFocused.focus(); }catch(e){}
      setButtonIcon('fa-bars');
    }

  function toggleMenu(){
    if(nav.classList.contains('active')) closeMenu(); else openMenu();
  }

  // Expose global for existing onclick attributes
  window.toggleMenu = toggleMenu;

  // button click
  btn.addEventListener('click', (e)=>{
    e.stopPropagation();
    toggleMenu();
  });

  // click links -> close
  links.forEach(a=> a.addEventListener('click', ()=> closeMenu()));

  // close on Esc
  document.addEventListener('keydown', (e)=>{
    if(e.key === 'Escape' && nav.classList.contains('active')) closeMenu();
  });

  // click outside to close (via overlay or body click)
  document.addEventListener('click', (e)=>{
    if(!nav.classList.contains('active')) return;
    if(nav.contains(e.target) || btn.contains(e.target)) return;
    closeMenu();
  }, {capture:true});

    // prevent body scroll when open (simple)
    const observer = new MutationObserver(()=>{
      if(document.body.classList.contains('menu-open')){
        document.documentElement.style.overflow = 'hidden';
      } else {
        document.documentElement.style.overflow = '';
      }
    });
    observer.observe(document.body, { attributes:true, attributeFilter:['class'] });
  }

  if(document.readyState === 'loading'){
    document.addEventListener('DOMContentLoaded', initMenu);
  } else {
    initMenu();
  }
})();
