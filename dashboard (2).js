document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        
        const targetSection = this.getAttribute('data-section');
        
        document.querySelectorAll('.section').forEach(section => {
            section.style.display = 'none';
        });
        
        document.getElementById(targetSection).style.display = 'block';
    });
});



// Show the dashboard section by default
document.getElementById('dashie').style.display = 'block';

document.getElementById('amount').addEventListener('input', calculateProfit);
document.getElementById('duration').addEventListener('change', calculateProfit);

function calculateProfit() {
    const amount = document.getElementById('amount').value;
    const duration = document.getElementById('duration').value;
    let profit;

    switch (duration) {
        case '1-day':
            profit = amount * 1.3;
            break;
        case '2-days':
            profit = amount * 1.5;
            break;
        case '3-days':
            profit = amount * 1.6;
            break;
        case '5-days':
            profit = amount * 1.85;
            break;
        case '10-days':
            profit = amount * 2.0;
            break;
    }

    document.getElementById('profit').textContent = profit.toFixed(2) + ' KES';
}



// Variable to store the uploaded product file.
let currentProductFile = null;

// Listen for file selection on the product image input.
document.getElementById('productImage').addEventListener('change', function(event) {
  const file = event.target.files[0];

  if (file && file.type.startsWith('image/')) {
    // Save the file for later downloading.
    currentProductFile = file;
    
    // Generate a temporary URL for the image preview.
    const imageURL = URL.createObjectURL(file);
    const uploadedImage = document.getElementById('uploadedImage');
    uploadedImage.src = imageURL;
    uploadedImage.style.display = 'block';
    
    // Reveal the download button once the image is loaded.
    document.getElementById('downloadButton').style.display = 'inline-block';
  } else {
    alert("Please select a valid image file");
  }
});

// Download the uploaded image when the download button is clicked.
document.getElementById('downloadButton').addEventListener('click', function() {
  if (currentProductFile) {
    // Create an anchor element to trigger the download.
    const downloadLink = document.createElement('a');
    const fileURL = URL.createObjectURL(currentProductFile);
    downloadLink.href = fileURL;
    downloadLink.download = currentProductFile.name || 'product_image.png';
    
    // Append the link, trigger the download, and then remove the link.
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
    
    // Revoke the object URL to free up resources.
    URL.revokeObjectURL(fileURL);
  }
});


// Calculate "You'll Receive" amount based on no. views multiplied by 150.
document.getElementById('viewsInput').addEventListener('input', function() {
    const noOfViews = parseInt(this.value, 10) || 0;
    const amount = 120 * noOfViews;
    document.getElementById('receive').textContent = amount;
});


// Handle file upload for the "Submit To Earn" section.
document.getElementById('uploadNowButton').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default form submission
    const fileInput = document.getElementById('earnFileInput');
    
    if (fileInput.files && fileInput.files[0]) {
      const file = fileInput.files[0];
      // Generate a temporary URL for the selected file.
      const fileURL = URL.createObjectURL(file);
      
      // Get the container in "My Uploads" Section.
      const uploadsList = document.getElementById('uploadsList');
      
      // If the placeholder is present, remove it.
      const placeholder = document.getElementById('uploadPlaceholder');
      if (placeholder) {
        placeholder.remove();
      }
      
      // Create a new anchor element for the file link.
      const link = document.createElement('a');
      link.href = fileURL;
      link.download = file.name; // This will enable file download.
      link.textContent = file.name;
      link.target = "_blank"; // Opens the file in a new tab if clicked.
      
      // Append the link to the uploads list.
      uploadsList.appendChild(link);
      
      // Clear the file input after upload.
      fileInput.value = "";
    } else {
      alert("Please select a file to upload.");
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const readMoreButtons = document.querySelectorAll('.read-more-btn');

    readMoreButtons.forEach(button => {
        button.addEventListener('click', function () {
            const target = this.getAttribute('data-target');
            const moreText = document.getElementById('more-text-' + target);

            moreText.classList.toggle('show');

            if (moreText.classList.contains('show')) {
                this.textContent = 'Read Less';
            } else {
                this.textContent = 'Read More';
            }
        });
    });
});



new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 30,
  
    // Pagination  bullets
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    //Responsive breakpoints

    breakpoints: {
        0: {
            slidesPerView: 1
        },

        768: {
            slidesPerView: 2
        },

        1024: {
            slidesPerView: 3
        },
    }
  });