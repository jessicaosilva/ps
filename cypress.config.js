const { defineConfig } = require("cypress");

module.exports = defineConfig({
  projectId: 'zvi5nt',
  e2e: {
    setupNodeEvents(on, config) {
      // implement node event listeners here
    },
  },
});
