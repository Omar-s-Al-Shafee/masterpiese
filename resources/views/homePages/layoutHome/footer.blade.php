<div class="sidebar-useful-links">
    <a href="#">About</a>
    <a href="#">Accessiblity</a>
    <a href="#">Help Center</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Advertising</a>
    <a href="#">Get the App</a>
    <a href="#">More</a>

    <div class="copyright-msg">
        <img src="{{ asset('images/logo-black.png') }}" alt="" >
        <p> &#169; 2022.All right reserved</p>

    </div>
</div>

</div>
</div>
<script>
let profileMenu= document.getElementById("profileMenu");

function toggleMenu(){
profileMenu.classList.toggle("open-menu");
}



</script>

<script>
let sidebarActivity = document.getElementById("sidebarActivity");
let moreLink = document.getElementById("ShowMoreLink");
function toggleActivity(){
sidebarActivity.classList.toggle("open-activity");
if(sidebarActivity.classList.contains("open-activity"))
{
moreLink.innerHTML ="Show less <b>-</b>";
}else{
moreLink.innerHTML ="Show less <b>+</b>";
}
}
</script>
</body>
</html>