docker run --rm \
  -v ${PWD}:/local openapitools/openapi-generator-cli:latest-release author template \
  -g php \
  -o /local/templates/tmp

mv templates/tmp/model_generic.mustache templates/
rm -rf templates/tmp
