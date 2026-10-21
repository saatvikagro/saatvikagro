// =========================================================
// SAATVIK AGRO - PRODUCTS DATA STORE (9 PRODUCTS)
// =========================================================
const SAATVIK_PRODUCTS = [
  // 1. Maize Starch Powder - Food Grade
  {
    id: "starch-food-grade",
    category: "FOOD GRADE",
    title: "MAIZE STARCH POWDER | FOOD GRADE",
    name: "Shakti Maize Starch Powder Food Grade",
    subtitle: "Food-grade starch for texture, stability, and process performance.",
    description: "Shakti Maize Starch Powder is a premium food-grade starch engineered for consistency, stability, and superior functional performance across diverse food and industrial applications. Derived from carefully selected maize and refined through precision processing, it delivers reliable texture, clarity, and structure batch after batch.",
    image: "assets/images/products/Shakti-Maize-Starch-Powder-For-Industrial-Use-2.webp",
    grade: "Food Grade",
    packSize: "50 KG & 1000 KG",
    function: "Thickening & Binding",
    features: [
      "High-purity maize starch",
      "Texture and body support",
      "Reliable Thickening",
      "Binding support",
      "Batch consistency",
      "Neutral base ingredient"
    ],
    applications: ["Bakery", "Instant Foods", "Dairy", "Snacks & Sauces", "Natural colors"]
  },

  // 2. Liquid Glucose
  {
    id: "liquid-glucose",
    category: "FOOD GRADE",
    title: "LIQUID GLUCOSE | FOOD GRADE",
    name: "Shakti Liquid Glucose",
    subtitle: "High-purity glucose syrup engineered for sweetness balance and moisture retention.",
    description: "Shakti Liquid Glucose is an aqueous solution of nutritive saccharides obtained by the controlled enzymatic hydrolysis of high-purity maize starch. Produced through stringently monitored refining and vacuum concentration, it delivers consistent clarity, viscosity, anti-crystallization properties, and moisture balance batch after batch.",
    image: "assets/images/products/Shakti-Maize-Starch-Powder-Food-Grade.webp",
    grade: "Food Grade",
    packSize: "50 KG & 300 KG Drums",
    function: "Sweetening & Anti-Crystallization",
    features: [
      "Clear & transparent viscosity",
      "Controlled DE specification",
      "Prevents sugar crystallization",
      "Superior moisture retention",
      "Enhances food gloss & sheen",
      "Neutral sweetness profile"
    ],
    applications: ["Confectionery & Candies", "Bakery Glazes", "Jams & Jellies", "Ice Creams & Dairy", "Pharmaceutical Syrups"]
  },

  // 3. Maltodex (LD, SD, HD)
  {
    id: "maltodex",
    category: "FOOD GRADE",
    title: "MALTODEXTRIN POWDER | LD, SD, HD",
    name: "Shakti Maltodex LD, SD, HD",
    subtitle: "Versatile spray-dried carbohydrate family for body, bulking, and energy release.",
    description: "Shakti Maltodex is an easily digestible, spray-dried carbohydrate powder manufactured from refined maize starch. Available in Low Density (LD), Standard Density (SD), and High Density (HD) profiles, it allows formulators to balance body, solubility, and sweetness control with predictable batch-to-batch behaviour.",
    image: "assets/images/products/ShaktiMaizeDryFibre.webp",
    grade: "Food Grade",
    packSize: "25 KG & 50 KG",
    function: "Bulking & Carrier Agent",
    features: [
      "Easily soluble powder",
      "Low sweetness profile",
      "Superior carrier for spray drying",
      "Smooth mouthfeel & body",
      "High digestive tolerance",
      "Non-hygroscopic stability"
    ],
    applications: ["Infant Nutrition", "Dairy Whitener", "Flavors & Seasonings", "Energy Drinks", "Specialised Nutrition"]
  },

  // 4. Dextrose Monohydrate (Food Grade)
  {
    id: "dextrose-food-grade",
    category: "FOOD GRADE",
    title: "DEXTROSE MONOHYDRATE | FOOD GRADE",
    name: "Shakti Dextrose Monohydrate",
    subtitle: "High-purity crystalline dextrose for instant energy, clean sweetness, and fermentation.",
    description: "Shakti Dextrose Monohydrate is a purified, crystallized D-glucose containing one molecule of water of crystallization. Refined through precision enzymatic conversion, it provides clean, natural sweetness, instant solubility, and optimal fermentation yields.",
    image: "assets/images/products/Shakti-Maize-Starch-Powder-For-Industrial-Use-2.webp",
    grade: "Food Grade",
    packSize: "25 KG & 50 KG",
    function: "Direct Sweetening & Energy",
    features: [
      "High purity crystalline sugar (>99.5%)",
      "Instant water solubility",
      "Pleasant cooling sensation",
      "Rapid energy bioavailability",
      "Optimal fermentation substrate",
      "Controlled color development"
    ],
    applications: ["Sports & Energy Drinks", "Bakery Fermentation", "Confectionery", "Canned Foods", "Oral Rehydration"]
  },

  // 5. Maize Starch Powder - Industrial Use
  {
    id: "starch-industrial",
    category: "INDUSTRIAL GRADE",
    title: "MAIZE STARCH POWDER | INDUSTRIAL USE",
    name: "Shakti Maize Starch Powder For Industrial Use",
    subtitle: "Industrial starch solution for binding, adhesion, and process use.",
    description: "Shakti Maize Starch Powder – Industrial Use is a high-performance starch engineered to deliver consistent binding, viscosity, and stability across demanding industrial applications. Manufactured under controlled processes, it ensures dependable performance, process efficiency, and uniform results in paper, packaging, adhesives, and textiles.",
    image: "assets/images/products/Shakti-Maize-Starch-Powder-For-Industrial-Use.webp",
    grade: "Industrial Use",
    packSize: "50 KG & 1000 KG",
    function: "Binding & Adhesion",
    features: [
      "Industrial-grade starch",
      "Binding strength support",
      "Adhesion performance",
      "Process stability",
      "Formulation compatibility",
      "Repeatable supply quality"
    ],
    applications: ["Paper", "Textile", "Adhesives", "Corrugation"]
  },

  // 6. Modified Industrial Starch
  {
    id: "modified-starch-industrial",
    category: "INDUSTRIAL GRADE",
    title: "MODIFIED INDUSTRIAL STARCH | HIGH TENSILE",
    name: "Shakti Modified Industrial Starch",
    subtitle: "Engineered modified starches for high-speed corrugation, paper sizing, and textile sizing.",
    description: "Shakti Modified Industrial Starch is chemically and physically treated to meet demanding industrial speeds and shear conditions. Delivers high paste stability, low retrogradation, and exceptional surface adhesion in paper mills, corrugated box production, and textile sizing.",
    image: "assets/images/products/Shakti-Maize-Starch-Powder-For-Industrial-Use.webp",
    grade: "Industrial Use",
    packSize: "50 KG & 1000 KG",
    function: "High-Strength Sizing & Binding",
    features: [
      "Superior paste stability",
      "Fast drying adhesion",
      "High tensile surface sizing",
      "Low viscosity at high solids",
      "Eco-friendly & biodegradable",
      "High machine speed tolerance"
    ],
    applications: ["Corrugated Packaging", "Paper Surface Sizing", "Textile Warp Sizing", "Gypsum Board Core", "Foundry Core Binder"]
  },

  // 7. Shakti Gluten Meal
  {
    id: "gluten-meal",
    category: "ANIMAL NUTRITION",
    title: "CORN GLUTEN MEAL 60% | FEED GRADE",
    name: "Shakti Gluten Meal",
    subtitle: "High-protein concentrate (60% min protein) for livestock, poultry, and aquaculture diets.",
    description: "Shakti Gluten Meal is a high-protein, low-fat maize-based feed ingredient developed to deliver balanced nutrition, digestibility, and consistent performance in poultry, cattle, and aquaculture feed formulations. Produced through a refined separation process, it offers a clean, golden appearance, stable nutrient profile, and reliable amino acid and fibre content.",
    image: "assets/images/products/Shakti-Gluten-Meal.webp",
    grade: "Feed Grade",
    packSize: "50 KG Bags",
    function: "High-Protein Feed Nutrition",
    features: [
      "Min 60% crude protein",
      "Rich in natural xanthophylls",
      "High methionine content",
      "Excellent digestibility",
      "Low ash content",
      "Premium golden appearance"
    ],
    applications: ["Poultry Feed", "Aqua Feed", "Cattle Feed", "Pet Food"]
  },

  // 8. Shakti Maize Dry Fibre
  {
    id: "dry-fibre",
    category: "ANIMAL NUTRITION",
    title: "MAIZE DRY FIBRE | NUTRITIONAL FEED",
    name: "Shakti Maize Dry Fibre",
    subtitle: "Clean, fibre-rich maize ingredient delivering steady energy and rumen function support.",
    description: "Shakti Maize Dry Fibre is a clean, fibre-rich maize ingredient developed to deliver steady energy, digestive support, and consistent nutritional performance in cattle and poultry feed formulations. Produced through a careful separation process that preserves natural digestibility, it supports gut health, milk production, and overall livestock resilience.",
    image: "assets/images/products/Shakti-Maize-Germ.webp",
    grade: "Feed Grade",
    packSize: "40 KG & 50 KG Bags",
    function: "Rumen Health & Fiber Source",
    features: [
      "High neutral detergent fiber",
      "Balanced energy & protein",
      "Enhanced feed palatability",
      "Excellent natural pellet binder",
      "Cost-effective ruminant ration",
      "Dust-free processing"
    ],
    applications: ["Dairy Cattle Feed", "Ruminant Nutrition", "Pellet Formulations", "Bulk Feed Mixes"]
  },

  // 9. Shakti Maize Germ
  {
    id: "maize-germ",
    category: "ANIMAL NUTRITION",
    title: "PURE MAIZE GERM | HIGH OIL CONTENT",
    name: "Shakti Maize Germ",
    subtitle: "Nutrient-dense, oil-rich maize germ for edible oil extraction and high-calorie feed.",
    description: "Shakti Maize Germ is a nutrient-dense, oil-rich maize ingredient developed to deliver sustained energy, essential fatty acids, and dependable performance across animal nutrition and industrial applications. Naturally high in oil (45-50%), amino acids, and vital nutrients, it supports healthy growth, improved immunity, and feed efficiency in livestock.",
    image: "assets/images/products/Shakti-Maltodex-LD-SD-HD.webp",
    grade: "Feed / Oil Grade",
    packSize: "50 KG Bags & Bulk",
    function: "Oil Extraction & Caloric Density",
    features: [
      "High oil content (45-50%)",
      "Rich in polyunsaturated fats",
      "Natural Vitamin E content",
      "Clean separation from grain",
      "Low free fatty acid (FFA)",
      "Excellent storage stability"
    ],
    applications: ["Corn Oil Milling", "High-Energy Dairy Rations", "Broiler Feeds", "Feed Compounders"]
  }
];

// Helper to get product by ID
function getProductById(id) {
  if (!id) return SAATVIK_PRODUCTS[0];
  const found = SAATVIK_PRODUCTS.find(p => p.id === id);
  return found || SAATVIK_PRODUCTS[0];
}
