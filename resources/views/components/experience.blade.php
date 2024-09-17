<section>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
        <a class="btn btn-primary px-4 py-3" id="download_link" href="#!">
            <div class="d-inline-block bi bi-download me-2"></div>
            Download Resume
        </a>
    </div>
    <div id="experience-list">

    </div>
    
    

</section>

<script>
    experience_data();
    async function experience_data() {
        let URL = '/experienceData'
        try {
            let results = await axios.get( URL );
    
            results.data.forEach(element => {
                document.getElementById('experience-list').innerHTML +=(`<div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">${element.duration}</div>
                                    <div class="small fw-bolder">${element.title}</div>
                                    <div class="small text-muted">${element.destination}</div>
                                </div>
                            </div>
                            <div class="col-lg-8"><div>${element.details}</div></div>
                        </div>
                    </div>
                </div>`)
            });
                
        }catch (error) {
            alert(error)
        }
        
    }

    resumeLink();
    async function resumeLink() {
        let URL = '/resumeLink'
        try {
            let results = await axios.get( URL );
        
            document.getElementById('download_link').href = results.data.downloadLink
                
        }catch (error) {
            alert(error)
        }
        
    }
</script>