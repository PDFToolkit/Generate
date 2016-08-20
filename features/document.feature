Feature: PDF document
  In order to represent a PDF document
  I need to be able to open or create a Document

  Scenario: Generate a blank PDF
    Given a blank document
    When I save the document named test.pdf
    Then I should have a PDF document
