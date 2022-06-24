function search(){
  document.getElementById('header').classList.add('hidden')
  document.getElementById('btn-search-active').classList.add('flex')
  document.getElementById('btn-search-active').classList.remove('hidden')
}

function back(){
  document.getElementById('header').classList.remove('hidden')
  document.getElementById('btn-search-active').classList.add('flex')
  document.getElementById('btn-search-active').classList.add('hidden')
}


function searching() {
  document.getElementById('search').addEventListener('keypress', function(event){
    if ( event.key === "Enter" ) {
      window.location = "/search-result";
    }
  })
}

function Dropdown() {
  document.getElementById('submenu').classList.toggle('hidden');
  document.getElementById('arrow').classList.toggle('rotate-0');
}

Dropwdown()

function opensidebar() {
  document.getElementById('open-sidebar').classList.remove('hidden')
  document.getElementById('icon-side').classList.add('lg:hidden')

  document.querySelector('main').classList.add('md:ml-[240px]')
  document.querySelector('main').classList.remove('md:ml-24')

  document.querySelector('#header2').classList.add('md:ml-[230px]')
  document.querySelector('#header2').classList.remove('md:ml-20')

}