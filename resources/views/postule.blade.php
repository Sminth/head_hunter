@extends('layouts.app')

@section('content')
<style>
     input,select{

        border:none;
        border-bottom:1px solid #eee;
        text-align:center;
    }
    input:focus {
        outline: none;
        border: none;
        border-bottom: 1px solid #eee;
       }

</style>

        <!-- Page Title Start -->
        <section class="page-title title-bg8">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>{{$offre->libelle}}</h2>
                    <h3 style="color: white">Entrez ci dessous vos informations pour candidater à cette offre</h3>
                    {{-- <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Candidates Details</li>
                    </ul> --}}
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </section>
        <!-- Page Title End -->

        <!-- Candidate Details Start -->
        <section class="candidate-details pt-100 pb-100">
            <form class="container" method="post" action={{route("addcandidat",$offre->id)}}>
                @csrf
                <div class="row">



                    <div class="col-lg-4">
                        <div class="candidate-profile">
                            <div class="" >
                                <img class="co2" src="{{asset("assets/img/client-1.png")}}" alt="candidate image">
                                <i class='co3 bx bxs-edit'></i>
                            </div>

                            <h3>
                                <input name="noms" placeholder="votre nom complet" required type="text" style="font-weight:bold">
                            </h3>

                            <p>
                                <input name="profession" placeholder="profession" type="text" style="color:">

                            </p>

                            <ul>
                                <li>
                                        <i class='bx bxs-phone'></i>
                                        <input name="contact" placeholder="contact" type="number" style="color:">
                                </li>
                                <li>
                                    {{-- <a href="mailto:john@gmail.com"> --}}
                                        <i class='bx bxs-location-plus'></i>
                                        <input name="email" placeholder="email" type="email" style="color:">
                                    {{-- </a> --}}
                                </li>
                            </ul>

                            {{-- <div class="candidate-social">
                                <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                                <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-8">
                        {{-- <div class="candidate-info-text">
                            <h3>About Me</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div> --}}

                        <div class="candidate-info-text candidate-education">
                                <h3>Information personnel</h3>

                            <div id="education-section">
                                <!-- Dynamic Education Fields -->
                                <div class="row align-items-end mb-3">
                                    <div class="col-6">
                                        <label for="date">date de naissance</label>
                                        <input type="date" max="2006-12-31" name="date_naissance" placeholder="Date de naissance" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="lieu_naissance" placeholder="Lieu de naissance" required>
                                    </div>

                                </div>

                                <div class="row align-items-end">


                                    <div class="col-6 row flex items-center justify-center">
                                        {{-- <label class="col-2" for="date">Genre</label> --}}
                                        <select class="col-3" name="genre" required>
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select name="sm" required>
                                            <option value="">Situation matrimoniale</option>
                                            <option value="Marié">Marié</option>
                                            <option value="Celibataire">Celibataire</option>
                                            <option value="Celibataire">Divorcé(e)</option>
                                        </select>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="candidate-info-text candidate-education">
                            <div class="" style="display: flex;justify-content:space-between">
                                <h3>Education</h3>
                                <span style="cursor: pointer;color:blue" class="add-more" onclick="addEducation()">+ Ajouter</span>
                               </div>

                            <div id="education-section">
                                <!-- Dynamic Education Fields -->
                                <div class="row align-items-end">
                                    <div class="col">
                                        <select name="education[0][degree]" required>
                                            <option value="">Diplome</option>
                                            <option value="baccalaureat">Baccalauréat</option>
                                            <option value="bpec">BPEC</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="education[0][year]" placeholder="Année" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="education[0][institution]" placeholder="Etablissement" required>
                                    </div>

                                </div>
                            </div>

                            {{-- <div class="education-info">
                                <h4>University</h4>
                                <p>Princeton University, USA</p>
                                <span>2012-2016</span>
                            </div> --}}
                        </div>

                        <div class="candidate-info-text candidate-experience">
                           <div class="" style="display: flex;justify-content:space-between">
                            <h3>Experience</h3>
                            <span style="cursor: pointer;color:blue" class="add-more" onclick="addExperience()">+ Ajouter</span>
                           </div>

                            <div id="experience-section">
                                <!-- Dynamic Experience Fields -->

                                <div class="row align-items-end mt-2">
                                    <div class="col-3">
                                        <input type="text" name="experience[0][title]" placeholder="Intitulé" required>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="experience[0][duration]" placeholder="Durée" required>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="experience[0][company]" placeholder="Entreprise" required>
                                    </div>
                                    <div class="col-3">
                                        <select name="experience[0][contract_type]" required>
                                            <option value="">Type de Contrat</option>
                                            <option value="CDD">CDD</option>
                                            <option value="CDI">CDI</option>
                                            <option value="Stage">Stage</option>
                                            <!-- Add other options here -->
                                        </select>
                                    </div>

                                </div>
                            </div>
                            {{-- <ul>
                                <li>Proficient in HTML, CSS, Server-Scripting, C/C++, and Oracle</li>
                                <li>Experience with SEO</li>
                                <li>Experience Teaching Web Development</li>
                                <li>Knowledgeable in Online Advertising</li>
                                <li>Expert in LAMP Web Service Stacks</li>
                            </ul> --}}
                        </div>

                        {{-- <div class="candidate-info-text candidate-skill">
                            <h3>Skills</h3>

                            <ul>
                                <li>HTMl</li>
                                <li>CSS</li>
                                <li>JS</li>
                                <li>PHP</li>
                                <li>Oracle</li>
                                <li>C/C++</li>
                                <li>SQL</li>
                                <li>Ruby</li>
                            </ul>
                        </div> --}}

                        <div class="candidate-info-text text-center">
                            <div class="theme-btn">
                                <button href="#" class="default-btn">Valider</button>
                                {{-- <a href="#" class="default-btn">Download CV</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>


        <script>
            let educationCounter = 1;
            let experienceCounter = 1;

            function addEducation() {
                const educationSection = document.getElementById('education-section');
                let newRow = document.createElement('div');
                newRow.classList.add('row', 'align-items-end', 'mt-3');
                newRow.innerHTML = `
                    <div class="col">
                        <select name="education[${educationCounter}][degree]" required>
                            <option value="">Diplome</option>
                            <option value="baccalaureat">Baccalauréat</option>
                            <option value="
                            bpec">BPEC</option>
                    <!-- Add other options here -->
                </select>
            </div>
            <div class="col">
                <input type="text" name="education[${educationCounter}][year]" placeholder="Année" required>
            </div>
            <div class="col">
                <input type="text" name="education[${educationCounter}][institution]" placeholder="Etablissement" required>
            </div>
        `;
        educationSection.appendChild(newRow);
        educationCounter++;
    }

    function addExperience() {
        const experienceSection = document.getElementById('experience-section');
        let newRow = document.createElement('div');
        newRow.classList.add('row', 'align-items-end', 'mt-4');
        newRow.innerHTML = `
            <div class="col-3">
                <input type="text" name="experience[${experienceCounter}][title]" placeholder="Intitulé" required>
            </div>
            <div class="col-3">
                <input type="text" name="experience[${experienceCounter}][duration]" placeholder="Durée" required>
            </div>
            <div class="col-3">
                <input type="text" name="experience[${experienceCounter}][company]" placeholder="Entreprise" required>
            </div>
            <div class="col-3">
                <select name="experience[${experienceCounter}][contract_type]" required>
                    <option value="">Type de Contrat</option>
                                            <option value="CDD">CDD</option>
                                            <option value="CDI">CDI</option>
                                            <option value="Stage">Stage</option>
                </select>
            </div>
        `;
        experienceSection.appendChild(newRow);
        experienceCounter++;
    }
</script>
@endsection
