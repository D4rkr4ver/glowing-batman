Feature: Outputting via command-line
  In order to see output via the command-line
  As a user
  I need to call Command/Console.php via the command line

  Scenario: Running command via the command-line
    Given I am in this project's root dir on the command-line
    When I type "php Command/Console.php"
    Then I should see "De gemiddelde laadtijd van items die meer dan 1000 geheugen gebruiken is 0.5"
    And I should see "2 requests hebben meer dan 0.5 laadtijd nodig"
    And I should see "Het request met de hoogste memory heeft 0.5 laadtijd, 3500 geheugen, en route 'routeB'"
    And I should see "routeA wordt met 5x het vaakst aangeroepen"
    And I should see "routeA heeft met 2.6 seconden de meeste tijd nodig, en gebruikt 2800 geheugen"
