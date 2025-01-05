<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Bat Pictures</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="p-6 bg-blue-500 text-white text-center">
        <h1 class="text-3xl font-bold">Cricket Bat Images</h1>
    </header>

    <!-- Image Gallery -->
    <div id="imageGallery" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-6">
        <!-- Images will be dynamically inserted here -->
    </div>

    <script>
        const gallery = document.getElementById("imageGallery");

        // Function to fetch cricket bat images
        function fetchCricketBats() {
            gallery.innerHTML = ""; // Clear existing images

            fetch("https://api.pexels.com/v1/search?query=cricket+bat&per_page=15", {
                headers: {
                    Authorization: "EebwmJte7DMKCFOYKqL6TBZom3wp63wgQgmKMnIzQW98Pqv5J2usUxet", // Replace with your API key
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.photos && data.photos.length > 0) {
                        data.photos.forEach((photo) => {
                            // Create a container for each image
                            const imgContainer = document.createElement("div");
                            imgContainer.className = "bg-white rounded-md shadow-md overflow-hidden";

                            // Create the image element
                            const img = document.createElement("img");
                            img.src = photo.src.medium;
                            img.alt = photo.alt;
                            img.className = "w-full h-60 object-cover";

                            // Add photographer info
                            const caption = document.createElement("div");
                            caption.className = "p-4 text-sm text-gray-600";
                            caption.innerHTML = `Photo by <a href="${photo.photographer_url}" target="_blank" class="text-blue-500 underline">${photo.photographer}</a>`;

                            // Append elements
                            imgContainer.appendChild(img);
                            imgContainer.appendChild(caption);
                            gallery.appendChild(imgContainer);
                        });
                    } else {
                        gallery.innerHTML = "<p class='text-center text-gray-500'>No cricket bat images found.</p>";
                    }
                })
                .catch((error) => {
                    console.error("Error fetching images:", error);
                    gallery.innerHTML = "<p class='text-center text-red-500'>Error loading images.</p>";
                });
        }

        // Fetch images on page load
        fetchCricketBats();
    </script>
</body>
</html>
