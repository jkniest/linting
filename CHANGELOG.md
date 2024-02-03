# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

**Order for categories:**
- Security
- Added
- Changed
- Fixed
- Removed
- Packages

## [1.18.0] - 2024-02-03
### Added
- Added `string_implicit_backslashes` rule

### Removed
- Removed `escape_implicit_backslashes` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.48.0 -> v3.49.0

## [1.17.0] - 2024-01-20
### Added
- Added helper script `php.sh` which just starts a simple PHP8.2 docker container with composer
- Added `multiline_string_to_heredoc` rule
- Added `numeric_literal_separator` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.34.1 -> v3.48.0

## [1.16.0] - 2023-10-08
### Added
- Added `compact_nullable_type_declaration` rule
- Added `braces_position` rule
- Added `new_with_parentheses` rule
- Added `no_unneeded_braces` rule
- Added `native_type_declaration_casing` rule

### Removed
- Removed `compact_nullable_typehint` rule
- Removed `curly_braces_position` rule
- Removed `new_with_braces` rule
- Removed `no_unneeded_curly_braces` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.30.0 -> v3.34.1

## [1.15.0] - 2023-09-28
### Added
- Added `long_to_shorthand_operator` rule
- Added `attribute_empty_parentheses` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.26.0 -> v3.30.0

## [1.14.0] - 2023-09-08
### Added
- Added `spaces_inside_parentheses` rule

### Removed
- Removed `no_spaces_inside_parenthesis` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.21.1 -> v3.26.0

## [1.13.0] - 2023-07-22
### Added
- Added `yield_from_array_to_yields` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.21.1 -> v3.22.0

## [1.12.0] - 2023-07-07
### Added
- Added `nullable_type_declaration` rule
- Added `type_declaration_spaces` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.18.0 -> v3.21.1

## [1.11.0] - 2023-06-19
### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.17.0 -> v3.18.0

## [1.10.0] - 2023-06-07
### Added
- Added `single_line_empty_body` rule
- Added `ordered_types` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.16.0 -> v3.17.0

## [1.9.0] - 2023-04-22
### Added
- Added `single_space_around_construct` rule
- Added `control_structure_braces` rule
- Added `control_structure_continuation_position` rule
- Added `curly_braces_position` rule
- Added `no_multiple_statements_per_line` rule

### Removed
- Removed `single_space_after_construct` rule
- Removed `braces` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.13.1 -> v3.16.0

## [1.8.1] - 2022-12-24
### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.13.0 -> v3.13.1

## [1.8.0] - 2022-12-09
### Added
- Added `no_trailing_comma_in_singleline` rule
- Added `no_useless_concat_operator` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.9.1 -> v3.13.0

## [1.7.0] - 2022-07-11
### Added
- Added `statement_indentation` rule
- Added `no_useless_nullsafe_operator` rule

### Changed
- Updated `no_useless_nullsafe_operator` rule to include match

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.8.0 -> v3.9.1

## [1.6.0] - 2022-03-29
### Added
- Added `new_with_braces` rule
- Added `single_line_comment_spacing` rule
- Added `no_trailing_comma_in_singleline_function_call` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.6.0 -> v3.8.0 

## [1.5.0] - 2022-02-20
### Added
- Added `class_reference_name_casing` rule
- Added `no_unneeded_import_alias` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.5.0 -> v3.6.0

## [1.4.0] - 2022-01-20
### Added
- Added `get_class_to_class_keyword` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.4.0 -> v3.5.0

## [1.3.0] - 2021-12-25
### Added
- Added `assign_null_coalescing_to_coalesce_equal` rule
- Added `modernize_strpos` rule
- Added `no_space_around_double_colon` rule
- Added `string_length_to_empty` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.1.0 -> v3.4.0

## [1.2.0] - 2021-09-10
### Added
- Added `types_spaces` rule
- Added `declare_parentheses` rule

### Packages
- Updated `friendsofphp/php-cs-fixer`: v3.0.0 -> v3.1.0 

## [1.1.1] - 2021-06-27
### Removed
- Removed `phpdoc_to_property_type` rule

## [1.1.0] - 2021-05-17
### Added
- Added `phpdoc_to_property_type` rule

### Changed
- Changed `trailing_comma_in_multiline_array` rule to `trailing_comma_in_multiline`

### Packages
- Updated `friendsofphp/php-cs-fixer`: v2.18.6 -> v3.0.0

## [1.0.5] - 2021-04-29
### Added
- Added license

### Packages
- Updated `friendsofphp/php-cs-fixer`: v2.18.5 -> v2.18.6

## [1.0.4] - 2021-04-10
### Packages
- Updated `friendsofphp/php-cs-fixer`: v2.18.4 -> v2.18.5

## [1.0.3] - 2021-03-21
### Packages
- Updated `friendsofphp/php-cs-fixer`: v2.18.3 -> v2.18.4

## [1.0.2] - 2021-03-15
### Removed
- Removed `phpdoc_summary` rule

## [1.0.1] - 2021-03-15
### Packages
- Updated `friendsofphp/php-cs-fixer`: v2.18.2 -> v2.18.3 

## 1.0.0 - 2021-02-22
### Added
- Added php-cs-fixer as a main dependency (v2.18.2)
- Added configuration file for php cs fixer
- Added installation script

[1.18.0]: https://github.com/jkniest/linting/compare/1.17.0...1.18.0
[1.17.0]: https://github.com/jkniest/linting/compare/1.16.0...1.17.0
[1.16.0]: https://github.com/jkniest/linting/compare/1.15.0...1.16.0
[1.15.0]: https://github.com/jkniest/linting/compare/1.14.0...1.15.0
[1.14.0]: https://github.com/jkniest/linting/compare/1.13.0...1.14.0
[1.13.0]: https://github.com/jkniest/linting/compare/1.12.0...1.13.0
[1.12.0]: https://github.com/jkniest/linting/compare/1.11.0...1.12.0
[1.11.0]: https://github.com/jkniest/linting/compare/1.10.0...1.11.0
[1.10.0]: https://github.com/jkniest/linting/compare/1.9.0...1.10.0
[1.9.0]: https://github.com/jkniest/linting/compare/1.8.1...1.9.0
[1.8.1]: https://github.com/jkniest/linting/compare/1.8.0...1.8.1
[1.8.0]: https://github.com/jkniest/linting/compare/1.7.0...1.8.0
[1.7.0]: https://github.com/jkniest/linting/compare/1.6.0...1.7.0
[1.6.0]: https://github.com/jkniest/linting/compare/1.5.0...1.6.0
[1.5.0]: https://github.com/jkniest/linting/compare/1.4.0...1.5.0
[1.4.0]: https://github.com/jkniest/linting/compare/1.3.0...1.4.0
[1.3.0]: https://github.com/jkniest/linting/compare/1.2.0...1.3.0
[1.2.0]: https://github.com/jkniest/linting/compare/1.1.1...1.2.0
[1.1.1]: https://github.com/jkniest/linting/compare/1.1.0...1.1.1
[1.1.0]: https://github.com/jkniest/linting/compare/1.0.5...1.1.0
[1.0.5]: https://github.com/jkniest/linting/compare/1.0.4...1.0.5
[1.0.4]: https://github.com/jkniest/linting/compare/1.0.3...1.0.4
[1.0.3]: https://github.com/jkniest/linting/compare/1.0.2...1.0.3
[1.0.2]: https://github.com/jkniest/linting/compare/1.0.1...1.0.2
[1.0.1]: https://github.com/jkniest/linting/compare/1.0.0...1.0.1
