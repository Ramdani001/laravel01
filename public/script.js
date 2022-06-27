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

function opensidebar() {
  
  document.getElementById('header2').classList.toggle('md:ml-[230px]')
  document.getElementById('header2').classList.toggle('md:ml-[65px]')

  document.querySelector('main').classList.toggle('md:ml-[250px]')
  document.querySelector('main').classList.toggle('md:ml-[65px]')


  document.getElementById('main-side').classList.toggle('w-[240px]')
  document.getElementById('main-side').classList.toggle('w-[100px]')

  document.getElementById('text-sides').classList.toggle('hidden')
  document.getElementById('text-sides1').classList.toggle('hidden')
  
  document.getElementById('text-sides2').classList.toggle('hidden')

  document.getElementById('text-sides3').classList.toggle('hidden')
  
  
  document.getElementById('text-sides4').classList.toggle('hidden')

  document.getElementById('text-sides5').classList.toggle('hidden')
  document.getElementById('text-sides6').classList.toggle('hidden')
  

}