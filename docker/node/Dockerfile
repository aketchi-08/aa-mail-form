# ベースイメージ
FROM node:22-bullseye

# 作業ディレクトリ
WORKDIR /usr/src/app

# npm キャッシュを安全な場所に設定
RUN npm config set cache /tmp/npm-cache --global

# Git と curl をインストール
# RUN apt-get update && apt-get install -y git curl \
#     && rm -rf /var/lib/apt/lists/*

# package.json と package-lock.json をコピー
COPY ./package*.json ./

# 依存関係インストール
# RUN npm install

# アプリのソースをコピー
COPY ./ ./

# 開発用ポート
EXPOSE 3000

# デフォルトコマンドはシェル
# CMD ["npm run dev"]
