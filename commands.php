<?php
$pageTitle = "Commands Reference - Nexi Bot Documentation";
$pageDescription = "Complete reference guide for all Nexi Bot commands with usage examples, parameters, and permission requirements.";
include 'includes/header.php';
?>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="sidebar">
                <h3>Commands</h3>
                <ul>
                    <li><a href="#overview" class="active">Overview</a></li>
                    <li><a href="#admin">Administration</a></li>
                    <li><a href="#moderation">Moderation</a></li>
                    <li><a href="#music">Music System</a></li>
                    <li><a href="#community">Community</a></li>
                    <li><a href="#utility">Utility</a></li>
                    <li><a href="#premium">Premium Commands</a></li>
                </ul>
            </div>
            
            <div class="content-main">
                <h1>Commands Reference</h1>
                <p>Complete guide to all Nexi Bot commands. Use this reference to discover powerful features and learn how to use them effectively in your Discord server.</p>

                <div class="alert alert-info">
                    <strong>How to Read This Guide:</strong> Commands are clearly marked with colored badges:
                    <span class="badge badge-free" style="margin-left: 8px;">FREE</span> commands are available to everyone, 
                    <span class="badge badge-premium" style="margin-left: 8px;">PREMIUM</span> commands require a premium subscription, and 
                    <span class="badge badge-partial" style="margin-left: 8px;">PARTIAL</span> commands have both free and premium features. 
                    All commands use Discord's slash command system.
                </div>

                <h2 id="overview">Command Overview</h2>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">65</div>
                        <div class="stat-label">Total Commands</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">48</div>
                        <div class="stat-label">Free Commands</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">17</div>
                        <div class="stat-label">Premium Commands</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Slash Commands</div>
                    </div>
                </div>

                <h2 id="admin">Administration Commands</h2>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/admin</code> - Server Administration</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Server administration and management tools.</p>
                        <p><strong>Usage:</strong> <code>/admin</code> - Opens admin configuration panel</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/config</code> - Bot Configuration Panel</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-partial">Partial Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Main configuration interface for all bot features.</p>
                        <p><strong>Usage:</strong> <code>/config</code> - Opens comprehensive configuration panel with:</p>
                        <ul>
                            <li>Feature toggles (Free & Premium)</li>
                            <li>Channel configuration</li>
                            <li>API key management (Premium)</li>
                            <li>Advanced settings (Premium)</li>
                            <li>Configuration export/import (Premium)</li>
                        </ul>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/setup</code> - Initial Bot Setup</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Quick setup wizard for new servers.</p>
                        <p><strong>Usage:</strong> <code>/setup</code> - Launch interactive setup wizard</p>
                    </div>
                </div>

                <h2 id="moderation">Moderation Commands</h2>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/moderation</code> - Basic Moderation</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Moderate Members</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Essential moderation commands and tools.</p>
                        <p><strong>Subcommands:</strong></p>
                        <ul>
                            <li><code>/moderation kick &lt;user&gt; [reason]</code> - Kick a user from the server</li>
                            <li><code>/moderation ban &lt;user&gt; [reason]</code> - Ban a user from the server</li>
                            <li><code>/moderation unban &lt;user&gt;</code> - Unban a previously banned user</li>
                            <li><code>/moderation mute &lt;user&gt; [duration] [reason]</code> - Temporarily mute a user</li>
                            <li><code>/moderation unmute &lt;user&gt;</code> - Remove mute from a user</li>
                            <li><code>/moderation warn &lt;user&gt; [reason]</code> - Issue a warning to a user</li>
                            <li><code>/moderation clear &lt;amount&gt; [user]</code> - Delete multiple messages</li>
                        </ul>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/slowmode</code> - Channel Slowmode</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Manage Channels</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Control message rate limits in channels.</p>
                        <p><strong>Usage:</strong> <code>/slowmode</code> - Set slowmode for current or specified channel</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/logging</code> - Server Activity Logging</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-partial">Basic Free / Advanced Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Configure server activity logging.</p>
                        <p><strong>Usage:</strong> <code>/logging</code> - Set up logging channels and events</p>
                    </div>
                </div>

                <h2 id="music">Music System Commands</h2>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/music</code> - Music Playback System</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-partial">Basic Free / Advanced Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Core music playback and queue management.</p>
                        <p><strong>Subcommands:</strong></p>
                        <ul>
                            <li><code>/music play &lt;song&gt;</code> <span class="free-badge">FREE</span> - Play music from YouTube, Spotify, or URL</li>
                            <li><code>/music search &lt;query&gt;</code> <span class="free-badge">FREE</span> - Search for music tracks</li>
                            <li><code>/music skip</code> <span class="free-badge">FREE</span> - Skip the current song</li>
                            <li><code>/music stop</code> <span class="free-badge">FREE</span> - Stop music and clear queue</li>
                            <li><code>/music pause</code> <span class="free-badge">FREE</span> - Pause the current song</li>
                            <li><code>/music resume</code> <span class="free-badge">FREE</span> - Resume paused music</li>
                            <li><code>/music queue</code> <span class="free-badge">FREE</span> - View the current music queue</li>
                            <li><code>/music volume &lt;level&gt;</code> <span class="free-badge">FREE</span> - Adjust playback volume (0-100)</li>
                            <li><code>/music shuffle</code> <span class="free-badge">FREE</span> - Shuffle the music queue</li>
                            <li><code>/music nowplaying</code> <span class="free-badge">FREE</span> - Show currently playing song</li>
                            <li><code>/music clear</code> <span class="free-badge">FREE</span> - Clear the entire music queue</li>
                            <li><code>/music lyrics</code> <span class="free-badge">FREE</span> - Display lyrics for current song</li>
                            <li><code>/music skipto &lt;position&gt;</code> <span class="free-badge">FREE</span> - Skip to specific queue position</li>
                            <li><code>/music songinfo</code> <span class="free-badge">FREE</span> - Get detailed song information</li>
                            <li><code>/music radio &lt;station&gt;</code> <span class="premium-badge">PREMIUM</span> - Play radio stations</li>
                        </ul>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/music-fx</code> - Music Effects and Filters</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Advanced audio effects and filters for music.</p>
                        <p><strong>Usage:</strong> <code>/music-fx</code> - Access music effects control panel</p>
                    </div>
                </div>

                <h2 id="community">Community Commands</h2>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/afk</code> - Away From Keyboard System</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Manage your away status and notifications.</p>
                        <p><strong>Usage:</strong> <code>/afk</code> - Set or remove AFK status with optional reason</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/birthdays</code> - Birthday Tracking System</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Track and celebrate member birthdays.</p>
                        <p><strong>Usage:</strong> <code>/birthdays</code> - Set your birthday or view upcoming birthdays</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/community</code> - Community Management</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Manage Server</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Community engagement and management tools.</p>
                        <p><strong>Usage:</strong> <code>/community</code> - Access community management panel</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/customcommand</code> - Custom Commands</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-partial">Basic Free / Advanced Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Create and manage custom server commands.</p>
                        <p><strong>Usage:</strong> <code>/customcommand</code> - Manage custom commands through interactive interface</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/leveling</code> - XP and Leveling System</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Server XP and member leveling system.</p>
                        <p><strong>Usage:</strong> <code>/leveling</code> - Configure leveling system settings</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/polls</code> - Polling System</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Manage Messages</span>
                            <span class="badge badge-partial">Basic Free / Advanced Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Create polls for community voting.</p>
                        <p><strong>Usage:</strong> <code>/polls</code> - Create and manage polls</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/reactionroles</code> - Reaction Role System</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Manage Roles</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Self-assignable roles through message reactions.</p>
                        <p><strong>Usage:</strong> <code>/reactionroles</code> - Configure reaction role messages</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/starboard</code> - Message Starboard</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Highlight popular messages with stars.</p>
                        <p><strong>Usage:</strong> <code>/starboard</code> - Configure starboard settings</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/bumpreminders</code> - Server Bump Reminders</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Set up automated server bump reminders.</p>
                        <p><strong>Usage:</strong> <code>/bumpreminders</code> - Configure bump reminder settings</p>
                    </div>
                </div>

                <h2 id="utility">Utility Commands</h2>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/utility</code> - Utility Commands</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Useful utility commands and information.</p>
                        <p><strong>Subcommands:</strong></p>
                        <ul>
                            <li><code>/utility userinfo [user]</code> <span class="free-badge">FREE</span> - Display user information and statistics</li>
                            <li><code>/utility serverinfo</code> <span class="free-badge">FREE</span> - Show detailed server information</li>
                            <li><code>/utility avatar [user]</code> <span class="free-badge">FREE</span> - Display user's avatar in full size</li>
                            <li><code>/utility invite</code> <span class="free-badge">FREE</span> - Get bot invite link</li>
                            <li><code>/utility ping</code> <span class="free-badge">FREE</span> - Check bot latency and response time</li>
                        </ul>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/serverstats</code> - Server Statistics</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Display detailed server statistics.</p>
                        <p><strong>Usage:</strong> <code>/serverstats</code> - View comprehensive server statistics</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/globalstats</code> - Global Bot Statistics</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-free">Free</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>View Nexi Bot usage statistics across all servers.</p>
                        <p><strong>Usage:</strong> <code>/globalstats</code> - Display global bot statistics</p>
                    </div>
                </div>

                <div class="command-card">
                    <div class="command-header">
                        <h3><code>/voice</code> - Voice Channel Management</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Manage Channels</span>
                            <span class="badge badge-partial">Basic Free / Advanced Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Voice channel management and controls.</p>
                        <p><strong>Usage:</strong> <code>/voice</code> - Access voice channel management panel</p>
                    </div>
                </div>

                <h2 id="premium">Premium Commands</h2>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/aimoderation</code> - AI-Powered Content Moderation</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Moderate Members</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Advanced AI-based content filtering and moderation.</p>
                        <p><strong>Usage:</strong> <code>/aimoderation</code> - Configure AI moderation settings through interactive panel</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/analytics</code> - Server Analytics Dashboard</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>View detailed server analytics and insights.</p>
                        <p><strong>Usage:</strong> <code>/analytics</code> - Access analytics dashboard with growth and engagement metrics</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/banappeals</code> - Ban Appeals Management</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Manage ban appeals and review process.</p>
                        <p><strong>Usage:</strong> <code>/banappeals</code> - Open ban appeals management interface</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/economy</code> - Virtual Economy System</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Server economy with virtual currency and rewards.</p>
                        <p><strong>Usage:</strong> <code>/economy</code> - Access personal economy dashboard</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/erlc</code> - Emergency Response: Liberty County</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>ERLC game integration and player management.</p>
                        <p><strong>Usage:</strong> <code>/erlc</code> - ERLC player lookup and server management</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/giveaways</code> - Giveaway Management</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Manage Server</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Create and manage server giveaways.</p>
                        <p><strong>Usage:</strong> <code>/giveaways</code> - Access giveaway management interface</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/googlecalendar</code> - Google Calendar Integration</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Integrate Google Calendar with Discord events.</p>
                        <p><strong>Usage:</strong> <code>/googlecalendar</code> - Configure Google Calendar integration</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/googleforms</code> - Google Forms Integration</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Integrate Google Forms with Discord automation.</p>
                        <p><strong>Usage:</strong> <code>/googleforms</code> - Configure Google Forms integration</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/imagemoderation</code> - Image Content Moderation</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Moderate Members</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Automatically moderate inappropriate images.</p>
                        <p><strong>Usage:</strong> <code>/imagemoderation</code> - Configure image moderation settings</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/jotform</code> - Jotform Integration</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Advanced form integration and automation.</p>
                        <p><strong>Usage:</strong> <code>/jotform</code> - Configure Jotform integration</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/mod-advanced</code> - Advanced Moderation</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Moderate Members</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Advanced moderation tools and automation.</p>
                        <p><strong>Usage:</strong> <code>/mod-advanced</code> - Access advanced moderation controls</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/order</code> - Order System (User)</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Create and manage personal orders.</p>
                        <p><strong>Usage:</strong> <code>/order</code> - Access personal order management</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/orders</code> - Order System (Admin)</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Administrative order management system.</p>
                        <p><strong>Usage:</strong> <code>/orders</code> - Manage all server orders</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/roblox</code> - Roblox Integration</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Roblox account verification and management.</p>
                        <p><strong>Usage:</strong> <code>/roblox</code> - Roblox account linking and verification</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/robloxappcentre</code> - Roblox Application Centre</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Roblox game submission and review system.</p>
                        <p><strong>Usage:</strong> <code>/robloxappcentre</code> - Submit and review Roblox games</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/shop</code> - Virtual Shop System</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">None</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Virtual marketplace for server items.</p>
                        <p><strong>Usage:</strong> <code>/shop</code> - Browse and purchase virtual items</p>
                    </div>
                </div>

                <div class="command-card premium">
                    <div class="command-header">
                        <h3><code>/socialmedia</code> - Social Media Integration</h3>
                        <div class="command-badges">
                            <span class="badge badge-permission">Administrator</span>
                            <span class="badge badge-premium">Premium</span>
                        </div>
                    </div>
                    <div class="command-description">
                        <p>Integrate social media platforms with Discord.</p>
                        <p><strong>Usage:</strong> <code>/socialmedia</code> - Configure social media integrations</p>
                    </div>
                </div>

                <div class="alert alert-success">
                    <strong>Want to unlock premium commands?</strong> <a href="https://nexibot.uk/features">Upgrade to Premium</a> to access all advanced features and commands.
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
