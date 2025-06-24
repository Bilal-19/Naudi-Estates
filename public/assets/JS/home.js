const reasonEl = document.getElementById("whyUs")
const reasons = [
    {
        id: 1,
        iconPath: "Income.png",
        iconText: "Income",
        desc: "Consistent rental income"
    },
    {
        id: 2,
        iconPath: "Tenant.png",
        iconText: "Tenant",
        desc: "Lower tenant turnover"
    },
    {
        id: 3,
        iconPath: "Cost.png",
        iconText: "Cost",
        desc: "Reduced Maintenance Costs"
    },
    {
        id: 4,
        iconPath: "Asset.png",
        iconText: "Asset",
        desc: "Asset Protection and Appreciation"
    },
    {
        id: 5,
        iconPath: "Landlord.png",
        iconText: "Landlord",
        desc: "Peace of Mind for Property Owners"
    }
]
reasons.map((val, key)=>{
    reasonEl.innerHTML +=
    `
    <div class="text-center w-80 md:w-1/6">
        <img src="assets/Home/Icons/${val.iconPath}" class="mx-auto md:mb-3 h-15 md:h-20" alt="">
        <p class="font-light text-md md:text-xl">${val.desc}</p>
    </div>
    `
})

const userBenefitsEl = document.getElementById("userBenefits")
const userBenefits = [
    {
        id: 1,
        imagePath: "SecurityGuard.png",
        imageDesc: "Security Guard",
        description: "Management of tenants (including greeting and checking-in)"
    },
    {
        id: 2,
        imagePath: "Janitor.png",
        imageDesc: "Janitor",
        description: "Engagement of cleaning, laundry and maintenance services"
    },
    {
        id: 3,
        imagePath: "CardPayment.png",
        imageDesc: "Card Payment",
        description: "Collection of payments of rent, utility and/or service"
    },
    {
        id: 4,
        imagePath: "SignDocument.png",
        imageDesc: "Signing a Document",
        description: "Assistance in registration of contract"
    },
    {
        id: 5,
        imagePath: "Property.png",
        imageDesc: "Property",
        description: "Free property valuation"
    },
    {
        id: 6,
        imagePath: "Home.png",
        imageDesc: "Home",
        description: "Property marketing management services/updating agencies of property availabilities"
    },
    {
        id: 7,
        imagePath: "People.png",
        imageDesc: "People",
        description: "I will be the direct line of contact with tenants, agencies and maintenance teams"
    },
    {
        id: 8,
        imagePath: "GraphReport.png",
        imageDesc: "Graph Report",
        description: "Reporting and corresponding with the Landlord when necessary, including monthly reports"
    },
    {
        id: 9,
        imagePath: "Cash.png",
        imageDesc: "Cash in Hand",
        description: "Collection of deposits and rental payments from tenants on a monthly basis"
    },
    {
        id: 10,
        imagePath: "Checklist.png",
        imageDesc: "Check List",
        description: "Monthly inspections to make sure the property is being maintained up to standard"
    },
    {
        id: 11,
        imagePath: "Documents.png",
        imageDesc: "Documents",
        description: "Maintaining necessary records for moveables and other inventory for reference purposes"
    },
    {
        id: 12,
        imagePath: "Certificate.png",
        imageDesc: "Certificate",
        description: "Assistance in setting up of MTA license certificate ( if applicable )"
    },
    {
        id: 13,
        imagePath: "Assistance.png",
        imageDesc: "Assistance",
        description: "Assistance in setting up account on Housing Authority website ( if not already done )"
    },
    {
        id: 14,
        imagePath: "InteriorDesign.png",
        imageDesc: "Interior Design",
        description: "Interior design as per request ( at a flat fee of 10% commission on each item of purchase )"
    },
    {
        id: 15,
        imagePath: "Profile.png",
        imageDesc: "Profile",
        description: "Detailed tenant due diligence screening"
    },
    {
        id: 16,
        imagePath: "BankStatement.png",
        imageDesc: "Bank Statement",
        description: "Detailed financial tracking and data entry system with a Personalized Property Performance Portfolio"
    }
]


userBenefits.map((val, key) => {
    userBenefitsEl.innerHTML +=
        `
        <div class="bg-white rounded-xl border-b-5 border-[#C9A578] py-3 px-8 text-center m-5">
            <img src="assets/Home/Icons/${val.imagePath}" alt="${val.imageDesc}" class="mx-auto h-15 mb-2">
            <p class="font-light text-base md:text-xl">${val.description}</p>
        </div>
    `
})
