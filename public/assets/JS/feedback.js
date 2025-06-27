const feedbackEl = document.getElementById("clientFeedback")

const userReviews = [
    {
        id: 1,
        rating: 5,
        userName: "Mrs. Marchese",
        userCategory: "Italian Investor",
        userMessage: "Thanks to Robert, my properties in St. Julian’s have been fully occupied for more than 2 years. I don’t need to worry about anything, I can relax in retirement!"
    },
    {
        id: 2,
        rating: 5,
        userName: "Mr. C. Phillips",
        userCategory: "Local Investor",
        userMessage: "I’m glad Robert reached out to me about his management services. I now have more time to focus on my work, but moreover, I have more time to dedicate to my family too!"
    },
    {
        id: 3,
        rating: 5,
        userName: "Dr. P. Andrews",
        userCategory: "American-based Investor",
        userMessage: "Honest. Straight-forward and prompt. His service honestly is like a breath of fresh air."
    }
]


userReviews.map((val, key) => {
    feedbackEl.innerHTML +=
        `
    <div class="bg-white border-b-5 border-[#C9A578] h-fit md:h-80 rounded-xl p-5 m-5 md:m-0">
        <h5 class="font-semibold text-lg md:text-[25px] mb-0">${val.userName}</h5>
        <p class="font-light text-base md:text-[25px] mb-0">${val.userCategory}</p>
        <div class="text-[#ffc200] text-lg mb-5">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>
        <p class="font-light text-base md:text-[20px] mb-0">“${val.userMessage}”</p>
    <div>
    `
})
