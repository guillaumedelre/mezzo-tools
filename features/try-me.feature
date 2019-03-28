Feature:
  In order to prove that the Behat Symfony extension is correctly installed
  As a user
  I want to have a try-me scenario

  Scenario: It receives a response from Symfony's kernel
    When I am on "/default"
    Then the response should be in JSON
    And print last JSON response
