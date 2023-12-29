document.addEventListener("DOMContentLoaded", function() {
    // Get the follower element
    const myFeaturesBtn = document.getElementById("scroll-button-myFeatures");

    // Define the featuresPath as an array of points (x, y)
    const featuresPath = [
        { x: '20%', y: '80%' },
        { x: '20%', y: '20%' },
    ];

    // Variable to track the current index in the featuresPath
    let currentIndex = 0;

    // Function to move the follower to the next point in the featuresPath
    function myFeatures() {
        if (currentIndex < featuresPath.length) {
            const point = featuresPath[currentIndex];
            const transformValue = `translate(${point.x}px, ${point.y}px)`;
            myFeaturesBtn.style.transform = transformValue;
            currentIndex++;
        }
    }
    window.myFeatures = myFeatures;
});
