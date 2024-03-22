@extends('layouts.app')

@section('content')
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'poppins' , sans-serif;
    box-sizing: border-box;
}

.App{
    background: #fff;
    width: 90%;
    max-width: 600px;
    margin: 100px auto 0;
    border-radius: 10px;
    padding: 30px;
}
.App h1{
    font-weight: 25px;
    color: #001e4d;
    font-weight: 600;
    border-bottom: 1px solid #333;
    padding-bottom: 30px;
}
.quiz{
    padding: 20px 0;
}
.quiz h2{
    font-size: 18px;
    color: #001e4d;
    font-weight: 600;
}
.btn{
    background: #fff;
    color: #222;
    font-weight: 500;
    width: 100%;
    border: 1px solid #222;
    padding: 10px;
    margin: 10px 0;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.3s;
}
.btn:hover:not([disabled]){
    background: #001e4d;
    color: #fff;
}
.btn:disabled{
    cursor: no-drop;
}
#next-button{
    background: #001e4d;
    color: #fff;
    font-weight: 500;
    width: 150px;
    border: 0;
    padding: 10px;
    margin: 20px auto 0;
    border-radius: 4px;
    cursor: pointer;
    display: none;
}
.correct{
    /* background: #9aeabc; */
    /* background: #001e4d; */

}
.incorrect{
    /* background: #001e4d; */
    /* background: #ff9393; */

}

.hhh{
    /* background: #001e4d; */
    background: #001e4d;
    color: white

}
</style>

<!-- Account Area Start -->
       <section class="account-section ptb-100">

            <div class="container">
                <div class="row">
                   @include("layouts.sidebar")

                    <div class="col-md-8">
                        <div class="account-details">
                            <center>
                                <h3>{{$offre->libelle}}</h3>
                                <h3>TEST PSYCOTECHNIQUE</h3>
                                <div id="timer"></div>
                            </center>
                      <div>
                        <div class="quiz">

                            <form id="scoreForm" action="enregistrer.php" method="POST">

                                <!-- Champ caché pour stocker le score -->
                                <input type="hidden" id="scoreInput" name="score" value="">
                                <input type="hidden" id="idcandidature" name="score" value={{$candidature->id}}>
                                {{-- <button type="submit" id="submitBtn">Enregistrer mon resultat</button> --}}
                            </form>
                                <div id="question-image-container"><img src="images/image_2.jpg" alt=""></div>
                                <div id="answer-buttons">
                                    <button class="btn">reponse 1</button>
                                    <button class="btn">reponse 2</button>
                                    <button class="btn">reponse 3</button>
                                    <button class="btn">reponse 4</button>
                                </div>
                                <button id="next-button" type="submit ">Next</button>


                            </div>
                      </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Account Area End -->

        <script >
            const questions = [
        //Questions en image
        {
            image:"/images/image_12.jpg",
            answers:[
                {text:"A",correct:false},
                {text:"B",correct:true},
                {text:"C",correct:false},
                {text:"D",correct:false},
                {text:"E",correct:false}
            ]
        },
        {
            image:"/images/image_4.jpg",
            answers:[
                {text:"A",correct:false},
                {text:"B",correct:false},
                {text:"C",correct:false},
                {text:"D",correct:true},
                {text:"E",correct:false}
            ]
        },
        {
            image:"/images/image_5.jpg",
            answers:[
                {text:"A",correct:false},
                {text:"B",correct:false},
                {text:"C",correct:false},
                {text:"D",correct:false},
                {text:"E",correct:true}
            ]
        },
        {
            image:"/images/image_6.jpg",
            answers:[
                {text:"A",correct:false},
                {text:"B",correct:true},
                {text:"C",correct:false},
                {text:"D",correct:false},
                {text:"E",correct:false}
            ]
        },
        {
            image:"/images/image_9.jpg",
            answers:[
                {text:"24",correct:true},
                {text:"33",correct:false},
                {text:"9",correct:false},
                {text:"20",correct:false}
            ]
        },
        // {
        //     image:"images/image_10.jpg",
        //     answers:[
        //         {text:"X=27",correct:false},
        //         {text:"X=78",correct:false},
        //         {text:"X=37",correct:true},
        //         {text:"X=50",correct:false}
        //     ]
        // },
        // {
        //     image:"images/image_13.jpg",
        //     answers:[
        //         {text:"DBAC",correct:true},
        //         {text:"ABBC",correct:false},
        //         {text:"CADB",correct:false},
        //         {text:"CABD",correct:false}
        //     ]
        // },
        // {
        //     image:"images/image_14.jpg",
        //     answers:[
        //         {text:"A",correct:false},
        //         {text:"B",correct:true},
        //         {text:"C",correct:false},
        //         {text:"D",correct:false},
        //         {text:"E",correct:false}
        //     ]
        // },
        // {
        //     image:"images/image_16.jpg",
        //     answers:[
        //         {text:"Q",correct:false},
        //         {text:"M",correct:false},
        //         {text:"R",correct:true},
        //         {text:"P",correct:false}
        //     ]
        // },
        // {
        //     image:"images/image_17.jpg",
        //     answers:[
        //         {text:"O-N",correct:true},
        //         {text:"N-O",correct:false},
        //         {text:"L-K",correct:false},
        //         {text:"P-Q",correct:false},
        //         {text:"O-P",correct:false}
        //     ]
        // }
    ];
    const questionImageContainer = document.getElementById("question-image-container");
    const answerButtons = document.getElementById("answer-buttons");
    const nextButton = document.getElementById("next-button");
    const timerDisplay = document.getElementById("timer");


    let currentQuestionIndex = 0;
    let score = 0;
    let timeLeft = 300;
    let timerInterval; //Pour stocker l'intervalle du minuteur

    function startQuiz() {
        currentQuestionIndex = 0;
        score = 0;
        timeLeft = 1200;
        nextButton.innerHTML = "Next";
        showQuestion();
        startTimer();
    }
    function startTimer() {
        timerInterval = setInterval(() => {
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                // Affichez "Temps écoulé !" ou faites autre chose lorsque le temps est écoulé
                showScore();
            } else {
                timeLeft--;
                timerDisplay.innerText = `Temps restant : ${timeLeft} secondes`;
            }
        }, 1000); // Réduit le temps toutes les secondes
    }

    function showQuestion() {
        resetState();
        const currentQuestion = questions[currentQuestionIndex];
        questionImageContainer.innerHTML = `<img src="${currentQuestion.image}" alt="Question Image">`;

        currentQuestion.answers.forEach(answer => {
            const button = document.createElement("button");
            button.innerHTML = answer.text;
            button.classList.add("btn");
            answerButtons.appendChild(button);
            if (answer.correct) {
                button.dataset.correct = answer.correct;
            }
            button.addEventListener("click", selectAnswer);
        });
        nextButton.style.display = "none"; // Masque le bouton "Next"
    }

    function resetState() {
        while (answerButtons.firstChild) {
            answerButtons.removeChild(answerButtons.firstChild);
        }
    }
    let answerSelected = false; // Variable pour suivre si une réponse a été sélectionnée

    function selectAnswer(e) {
        const selectedBtn = e.target;
        const isCorrect = selectedBtn.dataset.correct === "true";
        selectedBtn.classList.add("hhh");

        if (isCorrect) {
            selectedBtn.classList.add("correct");
            score++;
        } else {
            selectedBtn.classList.add("incorrect");
        }
        Array.from(answerButtons.children).forEach(button => {
            if (button.dataset.correct === "true") {
                button.classList.add("correct");
            }
            // button.disabled = true;
        });
        answerSelected = true; // Marque que la réponse a été sélectionnée
        nextButton.style.display = "block";
    }

    function showScore() {
        resetState();
        // questionImageContainer.innerHTML = `<center>${score} questions trouvées sur ${questions.length} </center>`;
        questionImageContainer.innerHTML = `<center>Merci pour vos réponses </center>`;
        var idcandidature=document.getElementById("idcandidature").value
        nextButton.innerHTML = `<a href='/test/${idcandidature}/${score}' id="retourBtn" class="btn">Soumettre le test</a>`;
        // nextButton.style.display = "none";


    }

    function handleNextButton() {
        if (!answerSelected) {
            // Si aucune réponse n'a été sélectionnée, ne pas passer à la prochaine question
            return;
        }
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            showQuestion();
        } else {
            showScore();
        }
    }

    nextButton.addEventListener("click", () => {
        if (currentQuestionIndex < questions.length) {
            handleNextButton();
        } else {
            startQuiz();
        }
    });

    startQuiz();
        </script>
@endsection
