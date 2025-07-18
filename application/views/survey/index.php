<!-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Kepuasan Layanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #4db6ac;
            --light-bg: #f7f9fc;
            --card-bg: #ffffff;
            --text-dark: #2c3e50;
            --text-secondary: #7f8c8d;
            --border-color: #e9ecef;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
        }

        </style>
</head>
<body> -->
    <header class="survey-header">
        <div class="container">
            <h1 class="display-6">Survey Kepuasan Layanan</h1>
            <p>Bantu kami meningkatkan kualitas layanan dengan memberikan masukan Anda</p>
            <div class="progress-container">
                <div class="d-flex justify-content-between small mb-1">
                    <span>Progress</span>
                    <span id="progress-text">0%</span>
                </div>
                <div class="progress">
                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </header>

    <main class="container survey-container">
        <div class="card survey-card">
            <div class="card-header survey-card-header d-flex justify-content-between align-items-center">
                <span id="question-counter"><i class="bi bi-chat-left-text me-2"></i>Pertanyaan 1 dari X</span>
                <span id="step-counter" class="badge bg-light text-dark-emphasis border">Step 1/X</span>
            </div>
            <div class="card-body p-4 p-md-5">
                <p id="question-text" class="survey-question mb-4">Pertanyaan akan dimuat di sini...</p>
                <form id="surveyForm">
                    <div id="options-container" class="survey-options">
                        </div>
                </form>
            </div>
            <div class="card-footer survey-card-footer p-3 d-flex justify-content-between">
                <button type="button" id="prev-btn" class="btn btn-lg btn-prev">Sebelumnya</button>
                <button type="button" id="next-btn" class="btn btn-lg btn-primary">Selanjutnya</button>
            </div>
        </div>
    </main>

    <script>
        // --- DATA SURVEY ---
        const surveyData = [
            {
                question: "Bagaimana tingkat kepuasan Anda secara keseluruhan dengan layanan kami?",
                options: ["Sangat Puas", "Puas", "Cukup", "Kurang Puas", "Tidak Puas"]
            },
            {
                question: "Seberapa mudah Anda mendapatkan informasi yang dibutuhkan?",
                options: ["Sangat Mudah", "Mudah", "Cukup Mudah", "Sulit", "Sangat Sulit"]
            },
            {
                question: "Bagaimana Anda menilai keramahan staf kami?",
                options: ["Sangat Ramah", "Ramah", "Cukup Ramah", "Kurang Ramah", "Tidak Ramah"]
            },
            {
                question: "Apakah Anda akan merekomendasikan layanan kami kepada orang lain?",
                options: ["Pasti", "Mungkin", "Ragu-ragu", "Tidak Akan"]
            }
        ];

        // --- ELEMEN DOM ---
        const questionTextEl = document.getElementById('question-text');
        const optionsContainerEl = document.getElementById('options-container');
        const questionCounterEl = document.getElementById('question-counter');
        const stepCounterEl = document.getElementById('step-counter');
        const progressBarEl = document.getElementById('progress-bar');
        const progressTextEl = document.getElementById('progress-text');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');

        // --- LOGIKA SURVEY ---
        let currentQuestionIndex = 0;
        const totalQuestions = surveyData.length;

        function renderQuestion(index) {
            const currentQuestion = surveyData[index];
            
            // Render teks pertanyaan
            questionTextEl.textContent = currentQuestion.question;
            
            // Render pilihan jawaban
            optionsContainerEl.innerHTML = ''; // Kosongkan pilihan lama
            currentQuestion.options.forEach((option, i) => {
                const optionId = `option${i}`;
                const optionEl = document.createElement('label');
                optionEl.className = 'radio-option';
                optionEl.innerHTML = `
                    <input type="radio" name="answer" id="${optionId}" value="${i}">
                    <span class="radio-custom"></span>
                    <span class="radio-number">${i + 1}</span>
                    <span class="radio-label">${option}</span>
                `;
                optionsContainerEl.appendChild(optionEl);
            });

            // Update progress bar dan counter
            const progressPercentage = ((index) / totalQuestions) * 100;
            progressBarEl.style.width = `${progressPercentage}%`;
            progressTextEl.textContent = `${Math.round(progressPercentage)}%`;
            questionCounterEl.innerHTML = `<i class="bi bi-chat-left-text me-2"></i>Pertanyaan ${index + 1} dari ${totalQuestions}`;
            stepCounterEl.textContent = `Step ${index + 1}/${totalQuestions}`;

            // Atur visibilitas tombol
            prevBtn.disabled = index === 0;
            if (index === totalQuestions - 1) {
                nextBtn.textContent = 'Selesai';
            } else {
                nextBtn.textContent = 'Selanjutnya';
            }
        }

        // --- EVENT LISTENERS ---
        nextBtn.addEventListener('click', () => {
            if (currentQuestionIndex < totalQuestions - 1) {
                currentQuestionIndex++;
                renderQuestion(currentQuestionIndex);
            } else {
                // Aksi saat survei selesai
                alert('Terima kasih telah mengisi survey!');
                // Di sini Anda bisa menambahkan logika untuk mengirim data atau mengarahkan ke halaman lain
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                renderQuestion(currentQuestionIndex);
            }
        });

        // --- INISIALISASI ---
        // Tampilkan pertanyaan pertama saat halaman dimuat
        renderQuestion(currentQuestionIndex);
    </script>
</body>
</html>