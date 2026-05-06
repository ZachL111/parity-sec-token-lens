# Field Notes

The fixture is small on purpose, which makes each domain case carry real weight.

The domain cases cover `trust boundary`, `claim drift`, `replay exposure`, and `policy width`. They sit beside the smaller starter fixture so the project has both a compact scoring check and a domain-flavored review check.

`recovery` is the strongest case at 221 on `policy width`. `edge` is the cautious anchor at 162 on `replay exposure`.

The extra check gives the repository a behavior path that can fail for a domain reason, not only a syntax reason.
