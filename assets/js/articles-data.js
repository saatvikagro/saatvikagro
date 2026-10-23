/**
 * ARTICLES DATA REPOSITORY
 * Saatvik Agro Processors Private Limited
 * News & Articles / Ingredient Insights
 */

const articlesData = {
  "choosing-a-maize-ingredient": {
    id: "choosing-a-maize-ingredient",
    breadcrumb: "Choosing an ingredient",
    kicker: "INGREDIENT INSIGHTS",
    title: "Choosing a Maize Ingredient for Your Application",
    lead: "Start with the function your process needs. Texture, sweetness, body, binding and feed formulation are different requirements.",
    image: "assets/images/content/farm1.jpg",
    imageAlt: "Choosing a Maize Ingredient for Industrial Applications",
    date: "October 2026",
    readTime: "3 min read",
    sections: [
      {
        heading: "Match the ingredient to the function",
        content: "Food grade maize starch supports thickening and binding. Liquid glucose contributes sweetness and body. Maltodex variants provide options for premixes and dry ingredient systems. Industrial starch serves a separate set of process requirements."
      },
      {
        heading: "Review the grade and specification",
        content: "Share your application, required parameters and processing conditions. For feed ingredients, review the approved analysis within the complete ration. Tell us your estimated quantity and delivery location so the next discussion can be specific."
      },
      {
        heading: "Optimizing plant trials and formulation testing",
        content: "Before full-scale batch commercialization, we recommend validating functional parameters in bench-scale trials. Our technical applications team assists in evaluating viscosity stability, retrogradation resistance, and thermal tolerance across varying shear and temperature profiles."
      }
    ],
    keyPoints: [
      "Evaluate core functionality: texture, sweetness, viscosity, or binding",
      "Request specific mesh size and moisture parameters suited for your equipment",
      "Verify analytical parameters on sample Certificate of Analysis (COA) before bulk run"
    ]
  },

  "consistency-in-manufacturing": {
    id: "consistency-in-manufacturing",
    breadcrumb: "Ingredient consistency",
    kicker: "INGREDIENT INSIGHTS",
    title: "What Consistency Means in Ingredient Manufacturing",
    lead: "Consistency connects the raw material, the manufacturing process and the information used to assess the ingredient.",
    image: "assets/images/content/food.jpg",
    imageAlt: "Quality consistency in ingredient manufacturing facility",
    date: "October 2026",
    readTime: "4 min read",
    sections: [
      {
        heading: "Control the stages that matter",
        content: "Maize intake assessment considers moisture, grain quality and purity. Controlled processing and relevant product checks help prepare the ingredient around its intended function."
      },
      {
        heading: "Keep the information clear",
        content: "Review the current product specification for your application. Check certificates for the entity, site, scope and validity they cover. Clear product, pack and quantity details help connect a technical discussion with a useful supply enquiry."
      },
      {
        heading: "Standardized quality protocols at Morena facility",
        content: "Operating under accredited FSSAI, ISO 9001:2015, and HACCP benchmarks, our 500 TPD processing plant deploys automated PLC-controlled milling and continuous in-line monitoring to ensure batch-to-batch repeatability and predictable processing behavior for commercial clients."
      }
    ],
    keyPoints: [
      "Continuous raw grain intake screening for moisture, test weight, and purity",
      "Automated refining stages maintaining uniform Dextrose Equivalent (DE) & pH values",
      "Complete regulatory documentation with every shipment"
    ]
  },

  "the-shakti-product-catalogue": {
    id: "the-shakti-product-catalogue",
    breadcrumb: "Shakti product catalogue",
    kicker: "INGREDIENT INSIGHTS",
    title: "Navigating the Shakti Product Catalogue",
    lead: "Explore our comprehensive portfolio of high-purity maize ingredients formulated for demanding food, industrial, and animal nutrition requirements.",
    image: "assets/images/content/paper.jpg",
    imageAlt: "Shakti product catalogue and packaging formats",
    date: "October 2026",
    readTime: "4 min read",
    sections: [
      {
        heading: "Formulation solutions across food and industrial sectors",
        content: "From high-clarity Liquid Glucose and versatile Maltodextrin grades (HD, SD, LD) to Food Grade Maize Starch and Industrial wet-milling derivatives, each Shakti product is engineered for consistent texture, sweetness, viscosity, and binding in high-throughput production lines."
      },
      {
        heading: "Reliable packaging, verified certifications and bulk logistics",
        content: "Available in moisture-proof 25 kg, 50 kg HDPE bags, bulk liquid tankers, and custom packaging formats with complete FSSAI, ISO, and Halal certifications. Backed by dedicated dispatch hubs from Morena, we guarantee timely supply chain fulfillment across domestic and international manufacturing corridors."
      },
      {
        heading: "Collaborative technical support for customized needs",
        content: "Our technical team works alongside corporate procurement and formulation specialists to recommend the optimal DE value, grain mesh, or viscosity profile. Request dedicated product samples and Certificates of Analysis (COA) directly tailored to your target application."
      }
    ],
    keyPoints: [
      "Broad spectrum: Food Grade Starch, Liquid Glucose, Maltodextrins, Industrial Starch, and Animal Feeds",
      "Accredited quality: FSSAI, ISO 9001:2015, ISO 22000:2018, Intertek HACCP, Halal",
      "High-capacity 500 TPD processing facility with reliable nationwide dispatch"
    ]
  }
};

if (typeof module !== "undefined" && module.exports) {
  module.exports = articlesData;
}
