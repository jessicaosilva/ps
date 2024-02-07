// cypress/integration/sample_spec.js
describe('My First Test', function() {
    it('Visits the Laravel Welcome Page', function() {
      cy.visit('http://localhost:8000') // Modifique conforme necessário
      cy.contains('Welcome to Laravel')
    })
  })
  