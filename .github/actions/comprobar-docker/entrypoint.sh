#!/bin/sh
faltan=0

for f in README.md LICENSE CONTRIBUTING.md; do
  if [ -f "$f" ]; then
    echo "OK: $f existe"
  else
    echo "::error::Falta $f"
    faltan=1
  fi
done

exit $faltan

