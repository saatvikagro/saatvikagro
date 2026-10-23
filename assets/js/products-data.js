// =========================================================
// SAATVIK AGRO - PRODUCTS DATA STORE (9 PRODUCTS)
// =========================================================
const SAATVIK_PRODUCTS = [
  // 1. Food Grade Maize Starch
  {
    id: "starch-food-grade",
    category: "FOOD GRADE",
    title: "FOOD GRADE MAIZE STARCH",
    name: "Food Grade Maize Starch",
    subtitle: "A maize starch ingredient for manufacturers seeking texture, body and binding in suitable food formulations.",
    description: "A maize starch ingredient for manufacturers seeking texture, body and binding in suitable food formulations.",
    image: "assets/images/products/Shakti-Maize-Starch-Powder-For-Industrial-Use-2.webp",
    grade: "Food Grade",
    packFormat: "50 kg and 1,000 kg",
    packSize: "50 kg and 1,000 kg",
    form: "Powder",
    function: "Thickening and binding",
    features: [
      "High purity maize starch",
      "Texture and body support",
      "Reliable thickening",
      "Binding support",
      "Batch consistency",
      "Neutral base ingredient"
    ],
    applications: [
      "Bakery",
      "Instant foods",
      "Dairy",
      "Snacks",
      "Sauces",
      "Natural colour systems"
    ]
  },

  // 2. Liquid Glucose
  {
    id: "liquid-glucose",
    category: "FOOD GRADE",
    title: "LIQUID GLUCOSE",
    name: "Liquid Glucose",
    subtitle: "A functional glucose syrup for sweetness, body and texture in confectionery, ice cream, bakery and beverage formulations.",
    description: "A functional glucose syrup for sweetness, body and texture in confectionery, ice cream, bakery and beverage formulations.",
    image: "assets/images/products/Shakti-Maize-Starch-Powder-Food-Grade.webp",
    grade: "Food Grade",
    packFormat: "300 kg",
    packSize: "300 kg",
    form: "Syrup",
    function: "Sweetness and body",
    features: [
      "Consistent syrup quality",
      "Sweetness and body",
      "Texture and mouthfeel",
      "Crystallisation control",
      "Barrel handling",
      "Manufacturing consistency"
    ],
    applications: [
      "Confectionery",
      "Ice cream",
      "Bakery",
      "Beverages"
    ]
  },

  // 3. Maltodex SD
  {
    id: "maltodex-sd",
    category: "FOOD GRADE",
    title: "MALTODEX SD",
    name: "Maltodex SD",
    subtitle: "A versatile maltodextrin variant for food processing, premixes, instant mixes and suitable ingredient systems.",
    description: "A versatile maltodextrin variant for food processing, premixes, instant mixes and suitable ingredient systems.",
    image: "assets/images/products/Shakti-Maltodex-SD.png",
    grade: "Food Grade",
    packFormat: "25 kg",
    packSize: "25 kg",
    form: "Powder",
    function: "Formulation support",
    features: [
      "Formulation support",
      "Smooth dispersion",
      "Dry blend integration",
      "Powder consistency",
      "Scalable processing",
      "Procurement support"
    ],
    applications: [
      "Food processing",
      "Premixes",
      "Instant mixes",
      "Ingredient systems"
    ]
  },

  // 4. Maltodex HD
  {
    id: "maltodex-hd",
    category: "FOOD GRADE",
    title: "MALTODEX HD",
    name: "Maltodex HD",
    subtitle: "A maltodextrin variant for food processing, beverage premixes and dry blends. Discuss the specification around your formulation.",
    description: "A maltodextrin variant for food processing, beverage premixes and dry blends. Discuss the specification around your formulation.",
    image: "assets/images/products/Shakti-Maltodex-HD.png",
    grade: "Food Grade",
    packFormat: "25 kg",
    packSize: "25 kg",
    form: "Powder",
    function: "Formulation support",
    features: [
      "Controlled powder format",
      "Dispersion support",
      "Dry mix compatibility",
      "Process consistency",
      "Neutral taste support",
      "Business pack format"
    ],
    applications: [
      "Food processing",
      "Beverage premixes",
      "Dry blends"
    ]
  },

  // 5. Maltodex LD
  {
    id: "maltodex-ld",
    category: "FOOD GRADE",
    title: "MALTODEX LD",
    name: "Maltodex LD",
    subtitle: "A maltodextrin variant for blending, carrier and bulking requirements in suitable dry ingredient systems.",
    description: "A maltodextrin variant for blending, carrier and bulking requirements in suitable dry ingredient systems.",
    image: "assets/images/products/Shakti-Maltodex-LD.png",
    grade: "Food Grade",
    packFormat: "25 kg",
    packSize: "25 kg",
    form: "Powder",
    function: "Carrier and dry mix use",
    features: [
      "Blending performance",
      "Carrier and bulking support",
      "Dry mix stability",
      "Powder flow support",
      "Formulation flexibility",
      "Batch consistency"
    ],
    applications: [
      "Nutrition mixes",
      "Seasonings",
      "Beverage premixes",
      "Bakery blends",
      "Coffee ingredient systems"
    ]
  },

  // 6. Industrial Maize Starch
  {
    id: "starch-industrial",
    category: "INDUSTRIAL GRADE",
    title: "INDUSTRIAL MAIZE STARCH",
    name: "Industrial Maize Starch",
    subtitle: "Industrial maize starch for binding, adhesion and process requirements in paper, textiles, adhesives and corrugation.",
    description: "Industrial maize starch for binding, adhesion and process requirements in paper, textiles, adhesives and corrugation.",
    image: "assets/images/products/Shakti-Maize-Starch-Powder-For-Industrial-Use.webp",
    grade: "Industrial Grade",
    packFormat: "50 kg and 1,000 kg",
    packSize: "50 kg and 1,000 kg",
    form: "Powder",
    function: "Binding and adhesion",
    features: [
      "Industrial starch grade",
      "Binding support",
      "Adhesion performance",
      "Process stability",
      "Formulation compatibility",
      "Consistent supply quality"
    ],
    applications: [
      "Paper",
      "Textiles",
      "Adhesives",
      "Corrugation"
    ]
  },

  // 7. Maize Dry Fibre
  {
    id: "dry-fibre",
    category: "ANIMAL NUTRITION",
    title: "MAIZE DRY FIBRE",
    name: "Maize Dry Fibre",
    subtitle: "A fibre rich maize fraction for cattle feed, poultry feed, feed premixes and animal nutrition applications.",
    description: "A fibre rich maize fraction for cattle feed, poultry feed, feed premixes and animal nutrition applications.",
    image: "assets/images/products/ShaktiMaizeDryFibre.webp",
    grade: "Animal Nutrition",
    packFormat: "50 kg",
    packSize: "50 kg",
    form: "Dry fibre",
    function: "Feed formulation support",
    features: [
      "Maize fibre fraction",
      "Feed formulation support",
      "Bulk handling",
      "Useful maize co product",
      "Volume supply",
      "Business pack format"
    ],
    applications: [
      "Cattle feed",
      "Poultry feed",
      "Feed premixes",
      "Animal nutrition"
    ]
  },

  // 8. Maize Gluten Meal
  {
    id: "gluten-meal",
    category: "ANIMAL NUTRITION",
    title: "MAIZE GLUTEN MEAL",
    name: "Maize Gluten Meal",
    subtitle: "A protein rich maize derivative for poultry, cattle, aquaculture and compound feed formulations.",
    description: "A protein rich maize derivative for poultry, cattle, aquaculture and compound feed formulations.",
    image: "assets/images/products/Shakti-Gluten-Meal.webp",
    grade: "Animal Nutrition",
    packFormat: "50 kg",
    packSize: "50 kg",
    form: "Meal",
    function: "Protein contribution",
    features: [
      "Protein rich maize fraction",
      "Feed nutrition support",
      "Consistent quality",
      "Bulk handling",
      "Corn milling co product",
      "Business sourcing"
    ],
    applications: [
      "Poultry feed",
      "Cattle feed",
      "Aquaculture feed",
      "Compound feed"
    ]
  },

  // 9. Maize Germ
  {
    id: "maize-germ",
    category: "ANIMAL NUTRITION",
    title: "MAIZE GERM",
    name: "Maize Germ",
    subtitle: "A maize kernel fraction for downstream oil extraction, feed processing and the wider maize value chain.",
    description: "A maize kernel fraction for downstream oil extraction, feed processing and the wider maize value chain.",
    image: "assets/images/products/Shakti-Maize-Germ.webp",
    grade: "Animal Nutrition",
    packFormat: "50 kg",
    packSize: "50 kg",
    form: "Germ",
    function: "Oil extraction and feed use",
    features: [
      "Valuable kernel fraction",
      "Oil extraction use",
      "Feed ingredient potential",
      "Maize processing co product",
      "Bulk storage format",
      "50 kg pack"
    ],
    applications: [
      "Oil extraction",
      "Cattle feed",
      "Feed processing",
      "The maize value chain"
    ]
  }
];

// Helper to get product by ID (with aliases for backward compatibility)
function getProductById(id) {
  if (!id) return SAATVIK_PRODUCTS[0];
  const aliases = {
    "maltodex": "maltodex-sd",
    "dextrose-food-grade": "starch-food-grade",
    "modified-starch-industrial": "starch-industrial"
  };
  const targetId = aliases[id] || id;
  const found = SAATVIK_PRODUCTS.find(p => p.id === targetId);
  return found || SAATVIK_PRODUCTS[0];
}
