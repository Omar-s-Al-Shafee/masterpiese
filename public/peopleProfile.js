let profileMenu= document.getElementById("profileMenu");

    function toggleMenu1(){
        profileMenu.classList.toggle("open-menu");
    }
    function showResults() {
        document.getElementById("search-image").style.display = "none";
        document.getElementById("search-results").style.display = "block";
        document.getElementById("search-pragraph").style.display = "none";
        var searchResultsContainer = document.getElementById('search-results');
    searchResultsContainer.classList.add('grid-layout');
    
      }
      function toggleMenu() {
        var menu = document.getElementById('menu');
        menu.classList.toggle('active');
      }