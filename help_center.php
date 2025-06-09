<?php
require_once 'includes/db_connect.php';
include 'includes/header.php';
?>

<style>
    .icon {
        color: rgb(133, 55, 167);
    }
</style>

<div id="about-us">
    <div id="contactCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/another/contact_us.jpg" alt="Contact Us Image" class="d-block w-100">
                <div class="carousel-content">
                    <h1 class="">Contact</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="justify-items-center mx-auto w-75 mt-3">
        <p class="fs-2 fw-semibold text-center">Learn more about us</p>
        <p class="fs-5 fw-normal">Fanimation strives hard to be environmentally friendly. We encourage you to browse our products online, which includes all the latest information on our great products and styles. If you are in need of additional information not found on our web site or would just like to learn more about the company in general, please contact us by any of the following methods or simply fill out our request information form below. For product and shipping issues please fill out our product support form.</p>
    </div>

    <div class="container my-5 mx-auto w-75">
        <div class="row g-4">
            <!-- Location Section -->
            <div class="col-md-4 text-start">
                <i class="icon bi bi-geo-alt fs-2 mb-2"></i>
                <div class="text-start">
                    <h5 class="fw-bold text-uppercase">Location</h5>
                    <p class="mb-0">10983 Bennett Parkway</p>
                    <p class="mb-0">Zionsville, IN 46077</p>
                    <p class="mb-0">Phone: 888.567.2055</p>
                    <p>Fax: 866.482.5215</p>
                </div>
            </div>

            <!-- Product Support Section -->
            <div class="col-md-4 text-start">
                <i class="icon bi bi-card-list fs-2 mb-2"></i>
                <div class="text-start">
                    <h5 class="fw-bold text-uppercase">Product Support</h5>
                    <p>Every Fanimation fan is backed by our firm commitment to quality materials and manufacturing.</p>
                    <p class="fw-bold">Get product support</p>
                </div>
            </div>

            <!-- Marketing Section -->
            <div class="col-md-4 text-start">
                <i class="icon bi bi-file-earmark-text fs-2 mb-2"></i>
                <div class="text-start">
                    <h5 class="fw-bold text-uppercase">Marketing</h5>
                    <p>If you need additional marketing materials that aren't presented in our press room or have other marketing and public relations related questions, please contact:</p>
                    <p class="fw-bold">press@fanimation.com</p>
                </div>
            </div>

            <!-- Suggestions Section -->
            <div class="col-md-4 text-start">
                <i class="icon bi bi-chat-dots fs-2 mb-2"></i>
                <div class="text-start">
                    <h5 class="fw-bold text-uppercase">Suggestions</h5>
                    <p>Fanimation wants to enhance your experience. If you have suggestions on how we can better serve you, please contact:</p>
                    <p class="fw-bold">suggestions@fanimation.com</p>
                </div>
            </div>

            <!-- Find a Sales Agent Section -->
            <div class="col-md-4 text-start">
                <i class="icon bi bi-send-fill fs-2 mb-2"></i>
                <div class="text-start">
                    <h5 class="fw-bold text-uppercase">Find a Sales Agent</h5>
                    <p>Fanimation works with sales agents throughout the United States and worldwide to assist you with selling our product.</p>
                    <p class="fw-bold">Find your agent</p>
                </div>
            </div>

            <!-- Careers Section -->
            <div class="col-md-4 text-start">
                <i class="icon bi bi-person-circle fs-2 mb-2"></i>
                <div class="text-start">
                    <h5 class="fw-bold text-uppercase">Careers</h5>
                    <p>Find something on our website that is not working the way it should? Contact us so that we can improve your experience on our website:</p>
                    <p class="fw-bold">careers@fanimation.com</p>
                </div>
            </div>
            <div class="col-md-4 text-start">
                <i class="icon bi bi-pc-display-horizontal fs-2 mb-2"></i>
                <div class="text-start">
                    <h5 class="fw-bold text-uppercase">WEBMASTER</h5>
                    <p>Interested in working at Fanimation? Email your resume to:</p>
                    <p class="fw-bold">webmaster@fanimation.com</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
     .required::after {
        content: " *";
        color: #a94442;
    }

    .search-container {
        position: relative;
    }

    #searchInput {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    #suggestions {
        display: none;
        position: absolute;
        width: 100%;
        border: 1px solid #ccc;
        background-color: #fff;
        max-height: 150px;
        overflow-y: auto;
        z-index: 1;
    }

    #suggestions div {
        padding: 8px;
        cursor: pointer;
    }

    #suggestions div:hover {
        background-color: #f0f0f0;
    }

    /* upload file or images */
    .drag-area {
        border: 2px dashed #ccc;
        height: auto;
        width: 100%;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 20px;
        background-color: #f9f9f9;
        color: #666;
    }

    .drag-area.active {
        border: 2px solid #007bff;
        background-color: #e9f0f8;
    }

    .drag-area header {
        font-size: 18px;
        font-weight: 500;
        color: #333;
    }

    .drag-area span {
        font-size: 14px;
        font-weight: 400;
        color: #666;
        margin: 10px 0;
    }

    .drag-area img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 4px;
    }

    .bttsubmit {
        background-color: #922492; /* Màu nền đậm hơn */
        border: none;
        padding: 0.7rem;
        width: 6rem;
        border-radius: 3px;
        font-weight: bold;
        color: #fff;
        opacity: 1; /* Đảm bảo opacity không bị mờ */
        cursor: pointer; /* Thêm con trỏ tay khi hover */
    }

    .bttsubmit:hover {
        background-color: #520a52; /* Màu khi hover */
    }
</style>

<div id="contact-tech" class="bg-light">
    <div class="justify-items-center mx-auto w-75 mt-3">
        <p class="fs-2 fw-semibold text-center">Questions? Contact tech support</p>
    </div>
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <label class="required">Name</label>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last">
                    </div>
                </div>
            </div>
            <div class="col">
                <label class="required">Phone number</label>
                <input type="tel" class="form-control">
            </div>
            <div class="col">
                <label class="required">Email address</label>
                <input type="email" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="required">Address</label>
                <input type="text" class="form-control" placeholder="Street address">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label>Country</label>
                <div class="search-container">
                    <input type="text" class="form-control" id="searchInput" placeholder="Tìm kiếm thành phố..." onfocus="showSuggestions()">
                    <div id="suggestions"></div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="required">Product name</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="required">Upload photo/video of fan</label>
                <div class="drag-area">
                    <span>Drop files here or</span>
                    <button class="btn btn-primary">Select files</button>
                    <input type="file" class="form-control-file" accept="image/jpeg,image/gif,image/png,application/pdf,video/mp4,video/heic,video/hevc" multiple style="display: none;">
                </div>
                <small class="text-muted">Accepted file types: jpg, gif, png, pdf, mp4, heif, hevc, Max. file size: 39 MB, Max. files: 4.</small>
            </div>
        </div>

        <div class="row mb-3 problem-description">
            <div class="col">
                <label class="required">Description of problem</label>
                <textarea class="form-control" maxlength="280" placeholder="Accident! Full description of problem"></textarea>
                <small class="char-count">0 of 280 max characters</small>
            </div>
        </div>
        <button type="submit" class="bttsubmit">Submit</button>
    </div>
</div>

<script>


    const cities = ["Hà Nội", "Hồ Chí Minh", "Đà Nẵng", "Cần Thơ", "Huế", "Nha Trang"];
    const searchInput = document.getElementById("searchInput");
    const suggestions = document.getElementById("suggestions");

    function showSuggestions() {
        suggestions.innerHTML = "";
        const value = searchInput.value.toLowerCase();
        const filteredCities = value ? cities.filter(city => city.toLowerCase().includes(value)) : cities;
        filteredCities.forEach(city => {
            const div = document.createElement("div");
            div.textContent = city;
            div.addEventListener("click", function() {
                searchInput.value = city;
                suggestions.style.display = "none";
            });
            suggestions.appendChild(div);
        });
        suggestions.style.display = "block";
    }

    searchInput.addEventListener("input", showSuggestions);

    document.addEventListener("click", function(e) {
        if (!searchInput.contains(e.target)) {
            suggestions.style.display = "none";
        }
    });

    // check định dạng sđt
    const phoneInput = document.querySelector("input[type='tel']");
    const phoneError = document.createElement("div");
    phoneError.style.color = "red";
    phoneError.style.display = "none";
    phoneInput.parentElement.appendChild(phoneError);
    phoneInput.addEventListener("input", function() {
        const phonePattern = /^[0-9]{10,11}$/;
        if (!phonePattern.test(phoneInput.value)) {
            phoneError.textContent = "Số điện thoại phải từ 10-11 chữ số.";
            phoneError.style.display = "block";
        } else {
            phoneError.style.display = "none";
        }
    });

    // check định dạng email
    const emailInput = document.querySelector("input[type='email']");
    const emailError = document.createElement("div");
    emailError.style.color = "red";
    emailError.style.display = "none";
    emailInput.parentElement.appendChild(emailError);
    emailInput.addEventListener("input", function() {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value)) {
            emailError.textContent = "Email không hợp lệ.";
            emailError.style.display = "block";
        } else {
            emailError.style.display = "none";
        }
    });

    // upload file or images
    const dropArea = document.querySelector(".drag-area");
    const input = dropArea.querySelector("input");
    let file;

    dropArea.querySelector("button").onclick = () => {
        input.click();
    };

    input.addEventListener("change", function() {
        file = this.files[0];
        dropArea.classList.add("active");
        showFile();
    });

    dropArea.addEventListener("dragover", (event) => {
        event.preventDefault();
        dropArea.classList.add("active");
    });

    dropArea.addEventListener("dragleave", () => {
        dropArea.classList.remove("active");
    });

    dropArea.addEventListener("drop", (event) => {
        event.preventDefault();
        file = event.dataTransfer.files[0];
        dropArea.classList.add("active");
        showFile();
    });

    function showFile() {
        let fileType = file.type;
        let validExtensions = ["image/jpeg", "image/gif", "image/png", "application/pdf", "video/mp4", "video/heic", "video/hevc"];
        if (validExtensions.includes(fileType)) {
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                let imgTag = `<img src="${fileURL}" alt="uploaded file">`;
                dropArea.innerHTML = imgTag;
            };
            fileReader.readAsDataURL(file);
        } else {
            alert("This file type is not supported!");
            dropArea.classList.remove("active");
        }
    }

    // giới hạn ký tự ở decription

    const textarea = document.querySelector(".problem-description textarea");
    const charCount = document.querySelector(".problem-description .char-count");
    textarea.addEventListener("input", function() {
        const maxLength = this.maxLength;
        const currentLength = this.value.length;
        charCount.textContent = `${currentLength} of ${maxLength} max characters`;
    });
</script>
<?php
mysqli_close($conn);
include 'includes/footer.php';
?>
