document.addEventListener("DOMContentLoaded", function() {
    // Get the follower element
    const follower = document.getElementById("follower");

    // Define the path as an array of points (x, y)
    const path = [
        { x: 100, y: 100 },
        { x: 200, y: 200 },
        { x: 300, y: 100 },
        { x: 400, y: 200 },
    ];

    // Variable to track the current index in the path
    let currentIndex = 0;

    // Function to move the follower to the next point in the path
    function moveFollower() {
        if (currentIndex < path.length) {
            const point = path[currentIndex];
            const transformValue = `translate(${point.x}px, ${point.y}px)`;
            follower.style.transform = transformValue;
            currentIndex++;
        }
    }
    window.moveFollower = moveFollower;
});
