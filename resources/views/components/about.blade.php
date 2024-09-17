<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p class="lead fw-light mb-4" id="title"></p>
                    <p class="text-muted" id="details"></p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href=""><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href=""><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    About();
    async function About() {
        let URL = '/aboutData'
        try {
            let results = await axios.get( URL );
            document.getElementById('title').innerText = results.data.title
            document.getElementById('details').innerText = results.data.details
        }catch (error) {
            alert(error)
        }
        
    }
</script>