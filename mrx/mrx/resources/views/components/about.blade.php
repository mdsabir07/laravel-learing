<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p id="aboutTitle" class="lead fw-light mb-4"></p>
                    <p id="aboutDesc" class="text-muted"></p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target="_blank" id="facebook" class="text-gradient" href=""><i class="bi bi-facebook"></i></a>
                        <a target="_blank" id="twitter" class="text-gradient" href=""><i class="bi bi-twitter"></i></a>
                        <a target="_blank" id="linkedin" class="text-gradient" href=""><i class="bi bi-linkedin"></i></a>
                        <a target="_blank" id="git" class="text-gradient" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    getAbout();
    async function getAbout(){
        try {
            let URL = "/aboutData";
            let response = await axios.get(URL);
            document.getElementById("aboutTitle").innerHTML=response.data['title'];
            document.getElementById("aboutDesc").innerHTML=response.data['details'];
        } catch (e) {
            alert(e);
        }
    }


    getSocial();
    async function getSocial(){
        try{
            let URL = "/socialData";
            let response = await axios.get(URL);
            document.getElementById("loading-div").classList.add("d-none");
            document.getElementById("content-div").classList.remove("d-none");

            document.getElementById("facebook").href=response.data['facebookLink'];
            document.getElementById("twitter").href=response.data['twitterLink'];
            document.getElementById("linkedin").href=response.data['linkedinLink'];
            document.getElementById("git").href=response.data['gitLink'];
        }catch (e){
            alert(e);
        }
    }
</script>
