<section>
    <!-- Skillset Card-->
    <div class="card shadow border-0 rounded-4 mb-5">
        <div class="card-body p-5">
            <!-- Professional skills list-->
            <div class="mb-5">
                <div class="d-flex align-items-center mb-4">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                </div>
                <div id="professional-list" class="row row-cols-1 row-cols-md-3 mb-4">
                    
                </div>
            </div>
            <!-- Languages list-->
            <div class="mb-0">
                <div class="d-flex align-items-center mb-4">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                </div>
                <div class="row row-cols-1 row-cols-md-3 mb-4" id="language-list">
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    professional_data();
    async function professional_data() {
        let URL = '/skillsData'
        try {
            let results = await axios.get( URL );
    
            results.data.forEach(element => {
                document.getElementById('professional-list').innerHTML +=(`<div class="col p-2 mb-4 mb-md-0""><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">${element.name}</div></div>`)
            });
                
        }catch (error) {
            alert(error)
        }
        
    }

    language_data();
    async function language_data() {
        let URL = '/languageData'
        try {
            let results = await axios.get( URL );
    
            results.data.forEach(element => {
                document.getElementById('language-list').innerHTML +=(`<div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>`)
            });
                
        }catch (error) {
            alert(error)
        }
        
    }
</script>