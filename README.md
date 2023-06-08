# Objective
Small project to test a generic form handling for controller and templates in Symfony.

# Structure
Check in src/FormHandling

## FormData
The FormData part defines FormDataHandlerInterface which is the final Handler for the FormType. It is triggered via the FormDataHandlerManager which (via compilerPass) gets all the FormDataHandlers existing, checks for each one if the FormType is supported and if yes request top handle the FormType

## FormDisplay
The same as FormData but for the Display of the form

This FormDisplayHandlers are used in a specific Twig extension registering a `displayForm` function.
