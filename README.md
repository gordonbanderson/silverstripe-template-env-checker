# Template Environment Checker

## Usage
In a template, the following methods are available to check the environment
* `IsDev`
* `IsTest`
* `IsLive`

The use case the drove the creation of this module is one of whether to serve individual or compressed assets.

```SilverStripe
<% if $IsDev %>
<!-- serve individual CSS files -->
<% else %>
<!-- serve compressed concatenated CSS file -->
<% end %>

```

## Issues

Please use the [GitHub issue tracker][issues] for bug reports and feature requests.

## Contribution

Your contributions are gladly welcomed to help make this project better.
Please see [contributing](CONTRIBUTING.md) for more information.

## Maintainers

[Gordon Anderson](https://github.com/gordonbanderson)

## License

[BSD-3-Clause](LICENSE.md) &copy; Gordon Anderson

[silverstripe]: https://github.com/silverstripe/silverstripe-framework
