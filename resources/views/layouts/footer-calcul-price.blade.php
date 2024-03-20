<!-- Website Cost Calculation Section Starts Here -->
<section class="cost-calculation wow slideInUp overflow-hidden">
    <div class="container">
        {{-- <div class="cost-calculation-wrapper">
            <h3 class="titleh">Calculez le Coût de Votre Site Internet</h3>
            <form class="cost-form" id="costForm">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <select id="type" class="form-control">
                                <option value="0">Type de Site</option>
                                <option value="50000">Site Vitrine</option>
                                <option value="150000">Site E-commerce</option>
                                <option value="200000">Blog Professionnel</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <select id="design" class="form-control">
                                <option value="0">Design</option>
                                <option value="20000">Basique</option>
                                <option value="50000">Personnalisé</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <select id="pages" class="form-control">
                                <option value="0">Nombre de Pages</option>
                                <option value="10000">1-5 pages</option>
                                <option value="20000">6-10 pages</option>
                                <option value="30000">Plus de 10 pages</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <div class="cost-title-wrapper d-flex justify-content-center my-5 mb-3">
                <h5 class="total-cost theme-four">Coût Total - <span id="totalCost"> </span></h5>
            </div>
            <div class="submit-area d-flex justify-content-center">
                <button type="button" class="custom-button px-0" onclick="calculateCost()">Calculer</button>
            </div>
        </div> --}}
    </div>
</section>
<!-- Website Cost Calculation Section Ends Here -->

<!-- CSS -->
<style>
    .cost-calculation {
        background-color: #f8f9fa;
        padding: 30px 0;
    }
    .titleh {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }
    .total-cost {
        color: #007bff;
        font-size: 18px;
    }
    .custom-button {
        background-color: #007bff;
        color: #fff;
        padding: 0px 0px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<!-- JS -->
<script>
    function calculateCost() {
        var type = parseInt(document.getElementById("type").value);
        var design = parseInt(document.getElementById("design").value);
        var pages = parseInt(document.getElementById("pages").value);
        var totalCost = type + design + pages;

        document.getElementById("totalCost").innerHTML = totalCost.toLocaleString() + " XOF";
    }
</script>
