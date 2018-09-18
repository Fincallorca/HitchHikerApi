## Contribute

### New API Version

### Clone Repository [WsdlToPhp PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator)

Get source from [https://github.com/WsdlToPhp/PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator), i.e. by using `git clone`

```bash
git clone git@github.com:WsdlToPhp/PackageGenerator.git
```

### Generate Soap Classes

Get into the PackageGenerator directory and create all new classes

```bash
./console generate:package \
  --urlorpath="http://flightapi.temyra.net:7717/FlightAPI?wsdl" \
  --destination="./v3-1-388-1" \
  --composer-name="fincallorca-hitchhiker" \
  --namespace="Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1" \
  --force
```

### Copy Classes to Project

Copy all generated files to this project.